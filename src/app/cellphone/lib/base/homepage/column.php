<?php


/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
class cellphone_base_homepage_column extends cellphone_cellphone{
	var $pageLimit = 6;
	var $page=1;
	var $picSize = 'cs';

    public function __construct($app){
        parent::__construct();
        $this->app = $app;
    }



     //  获取专栏类型列表
    function gettypelist(){

	 $params = $this->params;
	  if($params['pagelimit']){
            $pagelimit=$params['pagelimit'];
        }else{
            $pagelimit = $this->pageLimit;
        }

        if($params['nPage']){
            $nPage=$params['nPage'];
        }else{
            $nPage = $this->page;
        }
	 $columntype= app::get('cellphone')->model('columntype');
	 $typedata = $columntype->getList('columntype_id,columntype_name,columntype_description,css_type,d_order',array(), $pagelimit*($nPage-1),$pagelimit,'d_order asc');
     if(!$typedata){

	 $this->send(true,null,app::get('cellphone')->_('没有数据'));

	 }
	 else{

	$this->send(true,$typedata,app::get('cellphone')->_('栏目类型'));

	}


	}
	//传入类目类型获得其相应的列表数据
    function getlist(){

	   $params = $this->params;
	   $must_params = array(
            'columntype_id'=>'栏目类型',
		    'css_type'=>'样式标识',
        );
       $this->check_params($must_params);
	   $columntype_id = intval($params['columntype_id']);
	   $css_type = $params['css_type'];

	  if(!isset($params['pagelimit']) || empty($params['pagelimit'])){
   	   	  $params['pagelimit'] = $this->pageLimit;
   	   }
   	   if(!isset($params['nPage']) || empty($params['nPage'])){
   	   	  $params['nPage'] = $this->page;
   	   }
   	   if(!isset($params['picSize']) || empty($params['picSize'])){
   	   	  $params['picSize'] = $this->picSize;
   	   }
   	   if($params['picSize'] != 'cs' && $params['picSize'] != 'cl'){
   	   	  $params['picSize'] = $this->picSize;
   	   }

	  $data = array();

	// 返回样式1下的数据结构
	  if($css_type=='1'){
       $data = $this->getfirstlist($columntype_id,$params['nPage'],$params['pagelimit'], $params['picSize']);
       if($data){

	    $this->send(true,$data,app::get('cellphone')->_('商品列表'));
	    }
		else{
		$this->send(true,null,app::get('cellphone')->_('没有数据'));
		}



	  }
	//返回样式2 下的数据结构
	  if($css_type=='2'){
	   $data = $this->getsecondlist($columntype_id,$params['nPage'],$params['pagelimit'], $params['picSize']);
       if($data){
	    $this->send(true,$data,app::get('cellphone')->_('店铺商品列表'));
	    }
		else{
		$this->send(true,null,app::get('cellphone')->_('没有数据'));
		}

	  }
	  else{
	  $this->send(false,null,app::get('cellphone')->_('参数错误'));

	  }


	}


	// 样式1下的数据结构
    private function getfirstlist ($type_id,$page,$pageLimit,$picSize){

	  $mdl_column = app::get('cellphone')->model('column');
	  $curtime=time();
	  $data = $mdl_column->getList('image_id,goods_id',array('columntype_id'=>$type_id,'is_active'=>'true','start_time|lthan'=>$curtime,'end_time|than'=>$curtime),($page-1)*$pageLimit,$pageLimit,'d_order ASC');
	  if($data){
		$mdl_goods = app::get('b2c')->model('goods');

		 foreach($data as $key=>&$val){

		 $val['image_id'] = $this->get_img_url($val['image_id'],$picSize);
		 $arr = $mdl_goods->getList('name,price,mktprice',array('goods_id'=>intval($val['goods_id'])));
		 $val['name'] = $arr[0]['name'];
		 $val['price'] = $arr[0]['price'];
		 $val['mktprice'] =$arr[0]['mktprice'];


		 }

	    return $data;
	  }
      return $data;
	}


    //样式2 下的数据结构
	private function getsecondlist($type_id,$page,$pageLimit,$picSize){

	 $mdl_column = app::get('cellphone')->model('column');
	 $curtime=time();
	 $filter = ' where c.is_active="true" and  c.start_time<='.$curtime.'  and c.end_time >='.$curtime.'  and c.columntype_id='.$type_id;

	 $sql = ' select  c.goods_id ,c.image_id, g.name,g.price,g.mktprice,g.store_id,s.store_name,s.remark  from sdb_cellphone_column as c  left join sdb_b2c_goods  as g  on c.goods_id =g.goods_id
left join sdb_business_storemanger   as s on   g.store_id= s.store_id '.$filter.' order by c.d_order ASC';
	 $data = $mdl_column->db->select($sql);

     if($data){
	 foreach($data as &$val){
	 $val['image_id'] = $this->get_img_url($val['image_id'],$picSize);

	 }

     $list = array();

	 foreach($data as $key=>$v){
		 if(count($list[$v['store_id']])>=3){
		continue;
		}
		$list[$v['store_id']][]=$v;

	 }

	 foreach( $list as $value ){
	    $datalist[] =$value;
	 }
	 //$datalist 中存放所有的店铺及商品信息 并对                         其进行分页

     $limitdatalist = array_slice($datalist,($page-1)*$pageLimit,$pageLimit);
	 unset($data);
	 unset($list);

	   return $limitdatalist;
	 }
    return $data;
  }



  /*返回推荐店铺**/
   function getrecstores(){

      $params = $this->params;
	  if($params['pagelimit']){
            $pagelimit=$params['pagelimit'];
        }else{
            $pagelimit = $this->pageLimit;
        }
      if($params['nPage']){
            $nPage = $params['nPage'];
        }else{
            $nPage = $this->page;
        }
      if($params['picSize']){
            $picSize = $params['picSize'];
        }else{
            $picSize = $this->picSize;
        }
     $mdl_recstore= app::get('cellphone')->model('recstore');
	 $sql= 'select a.id,a.store_id,a.d_order,a.is_active,b.store_name,b.image as bimage,b.store_region,c.grade_name,c.image as grade_image  from sdb_cellphone_recstore as a left join sdb_business_storemanger as b on a.store_id=b.store_id left join sdb_business_storegrade as c on b.store_grade=c.grade_id where a.is_active="true" order by a.d_order asc limit '.($nPage-1)*$pagelimit.','.$pagelimit;
	 $data = $mdl_recstore->db->select($sql);
     if($data){
	 foreach($data as &$val){
	 $val['image'] = $this->get_img_url($val['bimage'],$picSize);
	 $val['grade_image'] = $this->get_img_url($val['grade_image']);
	 $region_ids_str = substr($val['store_region'],1,strrpos(trim($val['store_region']),',')-1);
	 $region_data = $mdl_recstore->db->select('select a.cat_id,a.cat_name from sdb_b2c_goods_cat as a where a.cat_id in('.$region_ids_str.') and a.disabled="false" ');
	 $str ='';
	 foreach($region_data as $v){
	 $str = $str.$v['cat_name'].'/';
	 }
	  $val['store_region'] =rtrim($str, "/") ;
	    }
	 }
     if($data){
	 $this->send(true,$data,app::get('cellphone')->_('推荐店铺'));
	 }
	 else{
	 $this->send(true,null,app::get('cellphone')->_('没有数据'));
	}

   }



   /* 返回推荐商品 **/
   function getrecgoods(){
      $params = $this->params;
      if($params['pagelimit']){
            $pagelimit=$params['pagelimit'];
        }else{
            $pagelimit = $this->pageLimit;
        }

      if($params['nPage']){
            $nPage=$params['nPage'];
        }else{
            $nPage = $this->page;
        }
      if($params['picSize']){
            $picSize = $params['picSize'];
        }else{
            $picSize = $this->picSize;
        }
     $mdl_recgoods = app::get('cellphone')->model('recgoods');
	 $sql=' select a.id,a.goods_id,a.d_order,a.is_active,b.name,b.image_default_id from sdb_cellphone_recgoods as a left join sdb_b2c_goods as b on a.goods_id=b.goods_id where a.is_active="true" order by a.d_order asc  limit '.($nPage-1)*$pagelimit.','.$pagelimit;
	 $data = $mdl_recgoods->db->select($sql);
	 if($data){
	 foreach($data as &$val){
	 $val['image_default_id'] = $this->get_img_url($val['image_default_id'],$picSize);
	    }
	 }
     if($data){
	 $this->send(true,$data,app::get('cellphone')->_('推荐商品'));
	 }
	 else{
	 $this->send(true,null,app::get('cellphone')->_('没有数据'));
	}

   }


   /*  返回拍卖活动(平台拍卖和商家拍卖)及活动下的拍品**/
   function getauctionlist(){
     $params = $this->params;
     $must_params = array(
            'type'=>'拍卖活动类型',
        );
     $this->check_params($must_params);
     $type = $params['type'];
	 if($params['pagelimit']){
            $pagelimit = $params['pagelimit'];
        }else{
            $pagelimit = $this->pageLimit;
        }
     if($params['nPage']){
            $nPage=$params['nPage'];
        }else{
            $nPage = $this->page;
        }
     if($params['picSize']){
            $picSize = $params['picSize'];
        }else{
            $picSize = $this->picSize;
        }
	                     //返回平台活动及活动下的拍品
     if($type=='ba'){
	  $data = $this->getbuslist($nPage,$pagelimit,$picSize);
	  if($data){
	  $this->send(true,$data,app::get('cellphone')->_('平台活动'));
	  }else{
	  $this->send(true,null,app::get('cellphone')->_('没有数据'));
	   }
	 }                    //返回商家活动及活动下的拍品
     if($type=='pa'){
	  $data = $this->getperlist($nPage,$pagelimit,$picSize);
	  if($data){
	  $this->send(true,$data,app::get('cellphone')->_('商家活动'));
	  }else{
	  $this->send(true,null,app::get('cellphone')->_('没有数据'));
	    }
	 }
     else{
	  $this->send(false,null,app::get('cellphone')->_('参数值错误'));
	  }

   }

   private function getbuslist($page,$pageLimit,$picSize){
      $mdl_busauction = app::get('cellphone')->model('busauction');
	  $sql = ' select  a.id ,a.act_id,a.is_active,a.d_order,b.name,b.description,b.act_pic  from sdb_cellphone_busauction as a  left join sdb_auction_activity as b on a.act_id =b.act_id  where a.is_active="true"  order by a.d_order limit '.($page-1)*$pageLimit.','.$pageLimit;
	  $data = $mdl_busauction->db->select($sql);
      if($data){
	   foreach($data as &$val){
	   $val['act_pic'] = $this->get_img_url($val['act_pic'],$picSize);
	   $goods = $mdl_busauction->db->select('
	   select a.aid, a.gid,a.price,a.last_price,a.log_count,a.fixed_price,a.start_price,a.auction_end_time,b.name,b.image_default_id,c.start_time,c.end_time from sdb_auction_groupapply as a left join sdb_b2c_goods as b on a.gid=b.goods_id  left join sdb_auction_activity as c on a.aid=c.act_id  where a.aid='.intval($val['act_id']).' and a.status=2 limit 0,6 ');
	    if($goods){
	     foreach($goods as &$v){
	      $v['image_default_id'] = $this->get_img_url($v['image_default_id'],$picSize);
	       }
	     }
	   $val['goods'] = $goods;
	   }
	 }
	     return $data;

   }

   private function getperlist($page,$pageLimit,$picSize){

      $mdl_perauction = app::get('cellphone')->model('perauction');
      $sql = ' select  a.id ,a.act_id,a.is_active,a.d_order,b.name,b.description,b.act_pic  from sdb_cellphone_perauction as a  left join sdb_auction_activity as b on a.act_id =b.act_id  where a.is_active="true"  order by a.d_order limit '.($page-1)*$pageLimit.','.$pageLimit;
	  $data = $mdl_perauction->db->select($sql);
      if($data){
	   foreach($data as &$val){
	   $val['act_pic'] = $this->get_img_url($val['act_pic'],$picSize);
	   $goods = $mdl_perauction->db->select('
	   select a.aid, a.gid,a.price,a.last_price,a.log_count,a.fixed_price,a.start_price,a.auction_end_time,b.name,b.image_default_id,c.start_time,c.end_time from sdb_auction_groupapply as a left join sdb_b2c_goods as b on a.gid=b.goods_id  left join sdb_auction_activity as c on a.aid=c.act_id  where a.aid='.intval($val['act_id']).' and a.status=2 limit 0,6 ');
	    if($goods){
	     foreach($goods as &$v){
	      $v['image_default_id'] = $this->get_img_url($v['image_default_id'],$picSize);
	       }
	     }
	   $val['goods'] = $goods;
	    }
	 }
         return $data;
   }




}