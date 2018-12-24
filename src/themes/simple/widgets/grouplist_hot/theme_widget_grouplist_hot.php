<?php
function theme_widget_grouplist_hot($setting,&$smarty){
    $mdl_groupbuy_apply = app::get('groupbuy')->model('groupapply');
    $mdl_groupbuy_active = app::get('groupbuy')->model('activity');
    $now = time();
    if($setting['group_goods_id']){
        $data = $mdl_groupbuy_apply->getList('*',array('id'=>$setting['group_goods_id']));
        $mdl_b2c_goods = app::get('b2c')->model('goods');

        $imageDefault = app::get('image')->getConf('image.set');
        $defaultImage = $imageDefault['M']['default_image'];

        $oImage = app::get('image')->model('image');
        foreach($data as $k=>&$v){
            $grow = $mdl_b2c_goods->getRow('name,price,mktprice,image_default_id',array('goods_id'=>$v['gid'],'marketable'=>'true'));
			if(!$grow){
				unset($data[$k]);
				continue;
			}
            $actrow = $mdl_groupbuy_active->getRow('start_time,end_time',array('act_id'=>$v['aid']));
            $v['goods_name'] = $grow['name'];
            $v['mktprice'] = $grow['price'];
            $img = $oImage->getList("image_id",array('image_id'=>$grow['image_default_id']));
            $v['image'] = $img[0]['image_id'];
            $cimg = $oImage->getList("image_id",array('image_id'=>$v['image_codeid']));
            $v['image_codeid'] = $cimg[0]['image_id'];
            $v['start_time'] = $actrow['start_time'];
            $v['end_time'] = $actrow['end_time'];
            $v['now'] = $now;
            $v['args'] = array($v['gid'],'','',$v['id']);
            $v['defaultImage'] = $defaultImage;
        }

        return $data;
    }else{
        return array();
    }

}
?>
