<?php
function theme_widget_store_goods_recommend(&$setting,&$render){
    $mdl_goods = app::get('b2c')->model('goods');
    //sql
    $sql = "SELECT sdb_b2c_goods.goods_id,name,price,image_default_id,buy_m_count,mktprice FROM sdb_b2c_goods ";
    //店铺ID
    $where = " WHERE store_id=".intval($render->pagedata['store_id']);
    //是否上架
    $where .= " AND marketable ='true' AND disabled='false'";
    //价格区间
    if($pricefrom = floatval($setting['pricefrom'])){
        $where .= " AND price>=$pricefrom";
    }
    
    if($priceto = floatval($setting['priceto'])){
        $where .= " AND price<=$priceto";
    }
    $cat_ids = implode(',',(array)$setting['cat_id']);
    $cat_ids=trim($cat_ids,',');
    //分类
    if($cat_ids){
        $sql .= " left join sdb_business_goods_cat_conn gc on sdb_b2c_goods.goods_id=gc.goods_id ";
        $where .= " AND gc.cat_id in($cat_ids)";
    }
    //
    $brand_ids = implode(',',(array)$setting['brand_id']);
    $brand_ids=trim($brand_ids,',');
    if($brand_ids){
        $where .= " AND brand_id in($brand_ids)";
    }
    //关键字
    if($keyword = $setting['searchname']){
        $where .= " AND ".$mdl_goods->wFilter($setting['searchname']);
    }
    //排序
    $order = " ORDER BY";
    if($ranking = $setting['ranking']){
        $order .= " $ranking,";
    }
    $order .= " uptime";
    //显示数量
    $set_limit = intval($setting['limit']);
    $set_limit = $set_limit ? $set_limit:10;
    $limit  = " LIMIT 0,$set_limit";

    $sql .= $where.$order.$limit;
    
    $data['goods'] = $mdl_goods->db->select($sql);
    $data['title'] = $setting['title'];

    $imageDefault = app::get('image')->getConf('image.set');
    $data['defaultImage'] = $imageDefault['M']['default_image'];
    $data['store'] = $render->pagedata['store'];
    $data['setting']=$setting;
    return $data;
}
?>
