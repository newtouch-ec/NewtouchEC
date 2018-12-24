<?php
function theme_widget_ma_index_auction_list(&$setting,&$smarty) {
    //标签
    $show_nums=intval($setting['show_nums']?$setting['show_nums']:'10');
    $imageDefault = app::get('image')->getConf('image.set');
	$result['defaultImage'] = $imageDefault['S']['default_image'];
    $result['defaultImageL'] = $imageDefault['L']['default_image'];
    //置顶商品
    $goods_id=explode(',',$setting['linkid']);
    $goods=json_decode($setting['goods'],1);
    $goods=utils::array_change_key($goods,'id');

    $mdl_goods=app::get('b2c')->model('goods');
    $filter=$smarty->pagedata['filter'];
    $orderTop=' 0 as gtop ';
    if(!empty($goods_id)){
          $orderTop=' case when goods_id in ('.$setting['linkid'].') then 1 else 0 end as gtop ';
    }
    $filter['str_where'] = $mdl_goods->_filter($filter);
    if(method_exists($smarty,'_filterStore')){
        $filter['str_where']=$filter['str_where'].' and '.$smarty->_filterStore();
    }
    //$sql='select  '.$orderTop.',goods_id ,goods_id as id,name as nice,image_default_id  as pic,mktprice,price,udfimg ,thumbnail_pic from sdb_b2c_goods where '.$filter['str_where'].' order by gtop desc,buy_count desc limit 0,'.$show_nums;
 	$sql = "select 
                      IFNULL( apply.delayed_time,unix_timestamp(now()))-  unix_timestamp(now()) as auctiontime,
                      IF(IFNULL( apply.delayed_time,unix_timestamp(now()))-  unix_timestamp(now()) >0,1,0) as enabled,
                      IFNULL(act.start_time,	unix_timestamp(now())) - unix_timestamp(now()) AS startauctiontime,
                      IF (IFNULL(act.start_time,unix_timestamp(now())) - unix_timestamp(now()) > 0,0,1) AS startenabled,
                      act.name,act.description,act.act_id,act.start_time,act.end_time,act.act_pic,
					 apply.last_price,apply.start_price,if(ifnull(apply.log_count,0)=0,apply.start_price,apply.last_price) as show_price,apply.status,apply.log_count,apply.gid,apply.auction_end_time,apply.delayed_time,apply.image_codeid,apply.status, 
					 goods.price as goods_price,apply.id as id,  
					 goods.name as g_name,goods.image_default_id as g_image,apply.aid,apply.nums,apply.remainnums,apply.personlimit,goods.price as g_price
					  from sdb_auction_activity as act 
					 inner join sdb_auction_groupapply as apply on act.act_id=apply.aid 
					 left join sdb_business_storemanger as store on apply.member_id=store.account_id 
					 inner join sdb_b2c_goods as goods on apply.gid=goods.goods_id 
					 where act.act_open='true' ";
    
	$goodsList=app::get('groupbuy')->model('activity')->db->selectLimit($sql,$show_nums,0);

	$ngoods=array();
	if($goodsList && !empty($goodsList)){
        foreach($goodsList as $k=>$v){
            $ngoods[$k]['g_name']=$v['g_name'];
            $ngoods[$k]['start_time']=$v['start_time'];
            $ngoods[$k]['end_time']=$v['end_time'];
            $ngoods[$k]['id']=$v['id'];
            $ngoods[$k]['gid']=$v['gid'];
            $ngoods[$k]['aid']=$v['aid'];
            $ngoods[$k]['show_price']=$v['show_price'];
            $ngoods[$k]['nums']=$v['nums'];
            $ngoods[$k]['remainnums']=$v['remainnums'];
            $imageDefault = app::get('image')->getConf('image.set');
            $oImage = app::get('image')->model('image');
            $img = $oImage->getList("image_id",array('image_id'=>$v['g_image']));
            $ngoods[$k]['image']=$img[0]['image_id'];
            $cimg = $oImage->getList("image_id",array('image_id'=>$v['image_codeid']));
            $ngoods[$k]['image_codeid']=$cimg[0]['image_id'];
            $ngoods[$k]['args'] = array($v['gid'],'','',$v['id']);
            $ngoods[$k]['log_count']=$v['log_count'];
            $ngoods[$k]['start_price']=$v['start_price'];
            $ngoods[$k]['delayed_time']=$v['delayed_time'];
            
           
        }
    }
    //echo("<pre>");
    //var_dump($ngoods);exit();
   
    
    /*
    $goodsList=$mdl_goods->db ->select($sql);
    $goodsList=utils::array_change_key($goodsList,'goods_id');
      
    $ngoods=array_slice($goodsList,0,$show_nums,true);
    //echo("<pre>");
    //var_dump($goods);
    foreach($ngoods as $k=>&$v){
        if(!empty($goods[$k]['pic'])){
            $v['pic']=$goods[$k]['pic'];
        }
        if(!empty($goods[$k]['nice'])){
            $v['nice']=$goods[$k]['nice'];
        }
        if(!empty($goods[$k]['new_tag'])){
            $v['new_tag']=$goods[$k]['new_tag'];
        }
    }
    */
    
    
    
    $result['goods']=$ngoods;
	$result['now']=time();
    return $result;
}