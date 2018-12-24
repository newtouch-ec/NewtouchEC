<?php
class business_mdl_storeviolation extends dbeav_model{
	/**
	 * 构造方法
	 * @param object model相应app的对象
	 * @return null
	 */
    public function __construct($app){
        parent::__construct($app);
        $this->use_meta();
    }

  

	public function count_finder($filter = null) {
        $filter = array_merge(array('processed|noequal' => '9'), $filter);
        $row = $this -> db -> select('SELECT count( DISTINCT id) as _count FROM ' . $this -> table_name(1) . ' WHERE ' . $this -> _filter($filter));
        return intval($row[0]['_count']);
    }

    public function get_List($cols = '*', $filter = array(), $offset = 0, $limit = -1, $orderType = null) {
        $filter = array_merge(array('processed|noequal' => '9'), $filter);
        $tmp = parent::getList('*', $filter, $offset, $limit, $orderType);

       
        return $tmp;
    }

    public function count_finder_total($filter = null) {
        $filter = array_merge(array('processed|in' => array('9','10')), $filter);
        $row = $this -> db -> select('SELECT count( DISTINCT id) as _count FROM ' . $this -> table_name(1) . ' WHERE ' . $this -> _filter($filter));
        return intval($row[0]['_count']);
    }

    public function get_List_total($cols = '*', $filter = array(), $offset = 0, $limit = -1, $orderType = null) {
        $filter = array_merge(array('processed|in' => array('9','10')), $filter);
        $tmp = parent::getList('*', $filter, $offset, $limit, $orderType);

       
        return $tmp;
    }

   function getparentcat($cat_id){
            $sql ="SELECT cat_name,cat_id FROM  sdb_business_violationcat WHERE  sdb_business_violationcat.cat_id in
                    (SELECT replace(LEFT(sdb_business_violationcat.cat_path,LOCATE(',',sdb_business_violationcat.cat_path,2)),',','') AS root_id
                    FROM sdb_business_violationcat WHERE  sdb_business_violationcat.cat_id='{$cat_id}')";
           return $this -> db -> select($sql);
   }


 

    function   getprocessitem($store_id){
         $sql ="SELECT SUM(sdb_business_storeviolation.score) as total,
                       replace(LEFT(sdb_business_violationcat.cat_path,LOCATE(',',sdb_business_violationcat.cat_path,2)),',','') AS root_id
                       FROM  sdb_business_storeviolation 
                       LEFT JOIN sdb_business_violationcat ON  sdb_business_storeviolation.cat_id = sdb_business_violationcat.cat_id
                WHERE  sdb_business_storeviolation.processed='0' AND sdb_business_storeviolation.store_id ='{$store_id}'
                GROUP BY root_id";

        // $sql= "SELECT SUM(score) as total,cat_id FROM " . $this -> table_name(1) ."  WHERE  processed='0' AND store_id ='{$store_id}'
         //       GROUP BY store_id,cat_id";
         $row = $this -> db -> select($sql);

         foreach($row as $key => $value) {
               $items[$value['root_id']] =$value;
         }
         return $items;
    }


    function   updateprocessed($store_id,$root_id){
        $sql="UPDATE sdb_business_storeviolation JOIN sdb_business_violationcat
                        ON  sdb_business_violationcat.cat_id=sdb_business_storeviolation.cat_id
                        SET processed = '1'
                WHERE   sdb_business_storeviolation.processed <>'9' AND
                        sdb_business_storeviolation.store_id ='{$store_id}' AND
                        replace(LEFT(sdb_business_violationcat.cat_path,LOCATE(',',sdb_business_violationcat.cat_path,2)),',','')='{$root_id}'";

        return  $this -> db ->exec($sql);
    }

     function   getscore($store_id,$type){
         if($type=='1'){
             $typestr='严重违规';
         }else {
             $typestr='一般违规';
         }

         $sql= "SELECT sum(sdb_business_storeviolation.score) AS totalscore from sdb_business_storeviolation LEFT JOIN sdb_business_violationcat ON  sdb_business_storeviolation.cat_id= sdb_business_violationcat.cat_id
                WHERE  sdb_business_storeviolation.processed <>'9' AND store_id='{$store_id}' AND
                ( LOCATE(CONCAT(',',(SELECT cat_id FROM sdb_business_violationcat WHERE cat_name='{$typestr}' LIMIT 1),','),sdb_business_violationcat.cat_path) > 0
                OR  sdb_business_storeviolation.cat_id=  (SELECT cat_id FROM sdb_business_violationcat WHERE cat_name='{$typestr}' LIMIT 1))";

         $row = $this -> db -> selectrow($sql);

       

         if($row['totalscore']){
            return $row['totalscore'];
         }else{
             return 0;

         }

     }

  
    function report_complain($store_id){
        //投诉
        $sql = "SELECT count(sdb_complain_complain.complain_id) as com_count,CONCAT(YEAR(FROM_UNIXTIME(sdb_complain_complain.createtime)),'-',LPAD( month(FROM_UNIXTIME(sdb_complain_complain.createtime)),2,'0')) AS total_date 
                       FROM sdb_complain_complain  WHERE sdb_complain_complain.`status`='success'
                       AND sdb_complain_complain.store_id = '{$store_id}'
                       GROUP BY total_date ORDER BY   total_date DESC";
        $row = $this->db->select($sql);

       return $row;

    }

    function report_violation($store_id){
        //违规
        $sql = "SELECT count(sdb_business_storeviolation.id) as vio_count,CONCAT(YEAR(FROM_UNIXTIME(sdb_business_storeviolation.last_modify)),'-',LPAD( month(FROM_UNIXTIME(sdb_business_storeviolation.last_modify)),2,'0')) AS total_date 
                       FROM sdb_business_storeviolation   WHERE sdb_business_storeviolation.processed<>'9' 
                       AND sdb_business_storeviolation.store_id = '{$store_id}'
                GROUP BY total_date ORDER BY   total_date DESC ";

               
        $row = $this->db->select($sql);

       return $row;

    }


    //自动执行所有违规店铺处理
    public function  exec_violation(){

       $storeviolation = $this->getList("*",array('processed'=>'9'));

       $objStoremanger=&app::get('business')->model('storemanger');

       if($storeviolation){

           $checktime=time();
		   $aData = array();
           foreach($storeviolation as $key => $value) {
			   $sign = true;
			   $aData[$value['store_id']]['store_id'] = $value['store_id'];
               //限制发布商品 goods
               if( $value['goods_starttime'] < $checktime &&  $checktime < $value['goods_endtime']){
                   $aData[$value['store_id']]['limit_goods'] ='1';
				   $sign = false;
               }
               //下架所有商品 goodsdown
               if( $value['goodsdown_starttime'] < $checktime &&  $checktime < $value['goodsdown_endtime']){
                   $aData[$value['store_id']]['limit_goodsdown'] ='1';
				   $sign = false;
                   //$aryStore= $objStoremanger-> marketabledAllgoods($value['store_id']);
               }
               //商品降权 news
               if( $value['news_starttime'] < $checktime &&  $checktime < $value['news_endtime']){
                   $aData[$value['store_id']]['limit_news'] ='1';
                   $aData[$value['store_id']]['limit_news_value'] =$value['news_value'];
				   $sign = false;
               }
               //店铺屏蔽 store
               if( $value['store_starttime'] < $checktime &&  $checktime < $value['store_endtime']){
                   $aData[$value['store_id']]['limit_store'] ='1';
				   $sign = false;
               }
               //关闭店铺 storedown
               if( $value['storedown_starttime'] < $checktime &&  $checktime < $value['storedown_endtime']){
                   $aData[$value['store_id']]['limit_storedown'] ='1';
                   $aData[$value['store_id']]['status'] ='0';
				   $sign = false;
               }

               //限制参加营销活动 sales
               if( $value['sales_starttime'] < $checktime &&  $checktime < $value['sales_endtime']){
                   $aData[$value['store_id']]['limit_sales'] ='1';
				   $sign = false;
               }

               //扣除违约金 earnest
               if( $value['earnest']&&$value['earnest_payed']!='1'){
                   $aData[$value['store_id']]['limit_earnest'] ='1';                  
                   //从保证金中扣除违约金： floatval
                  $aryStore= $objStoremanger->getList('*',array('store_id'=>$value['store_id']));
                  if($aryStore){
                      $storeData['earnest'] =floatval($aryStore[0]['earnest']) - floatval($value['earnest']);
					  $storeData['store_id']=$value['store_id'];
					  if($objStoremanger->save($storeData)){	   
						    //扣除违约金：写日志
                            //记录日志：
						    $obj_log = app :: get('business') ->model('earnest_log');
							$logdata = array();
                            $logdata['store_id'] = $value['store_id'];
                            $logdata['earnest_value']= $value['earnest'];
                            $logdata['last_modify']=time();
                            $logdata['reason'] = app :: get('b2c') -> _('店铺违规扣除违约金');
                            $logdata['remark'] = '违规处理ID：'.$value['id'].' 扣除前店铺保证金：'.$aryStore[0]['earnest'];
                            $logdata['orders']= '' ;
                            $logdata['type']='earnest' ;
                            $logdata['source']='2' ;
                            $logdata['operator']='auto';               
                            $re = $obj_log->save($logdata);

						    $this->update(array('earnest_payed'=>'1'),array('id'=>$value['id']));
					  }
                  }
				  $sign = false;
               }

			   if($sign){
				   $reData = array();
					$reData['id'] = $value['id'];
                    $reData['processed'] = '10';
					$this->save($reData);
			   }

           }
		   //echo "<pre>";print_r($aData);exit;
		   foreach($aData as $key=>$val){
			   $arrData = array();
			   if($val['limit_goods']){
				  $arrData['limit_goods']='1';
			   }else{
				  $arrData['limit_goods']='0';
			   }
			   if($val['limit_goodsdown']){
				  $arrData['limit_goodsdown']='1';
			   }else{
				  $arrData['limit_goodsdown']='0';
			   }
			   if($val['limit_news']){
				  $arrData['limit_news']='1';
				  $arrData['limit_news_value']=$val['limit_news_value'];
			   }else{
				  $arrData['limit_news']='0';
				  $arrData['limit_news_value']='100';
			   }

			   if($val['limit_store']){
				  $arrData['limit_store']='1';
			   }else{
				  $arrData['limit_store']='0';
			   }

			   if($val['limit_storedown']){
				  $arrData['limit_storedown']='1';
				  $arrData['status'] ='0';
			   }else{
				  $arrData['limit_storedown']='0';
				  $arrData['status'] ='1';
			   }

			   if($val['limit_sales']){
				  $arrData['limit_sales']='1';
			   }else{
				  $arrData['limit_sales']='0';
			   }
			   if($val['limit_earnest']){
				  $arrData['limit_earnest']='1';
			   }else{
				  $arrData['limit_earnest']='0';
			   }
			   $arrData['store_id']=$key;
			  // echo "<pre>";print_r($arrData);
			   $objStoremanger->save($arrData);
			}
       }

    }

}
