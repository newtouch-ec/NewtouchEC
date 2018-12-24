<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */

function theme_widget_index_tab_ranking(&$setting,&$render){
    //$data = array();
	if($system->theme){
		$theme_dir = kernel::base_url().'/themes/'.$smarty->theme;
	}else{
		$theme_dir = kernel::base_url().'/themes/'.app::get('site')->getConf('current_theme');
	}
	
	/*$setting['ad_pic_left']=str_replace('%THEME%',$theme_dir,$setting['ad_pic_left']);
	$setting['ad_pic_right']=str_replace('%THEME%',$theme_dir,$setting['ad_pic_right']);*/

	$mdl_goods = app::get('b2c')->model('goods');
	foreach($setting['tab'] as $key=>&$value){
		$tmp = explode(',',$value['goods_id']);
        $goods=json_decode($value['goods'],1);
        $goods=utils::array_change_key($goods,'id');
        $value['goodsinfo'] = $mdl_goods->getList('goods_id,name,price,udfimg,thumbnail_pic,image_default_id',array('goods_id'=>$tmp),0,6);

        $value['goodsinfo'] = utils::array_change_key($value['goodsinfo'],'goods_id');
        foreach((array)$tmp as $items){
            if(isset($goods[$items])){
                if($goods[$items] && !empty($goods[$items]['pic'])){
                    unset($value['goodsinfo'][$items]['udfimg'],$value['goodsinfo'][$items]['image_default_id'],$value['goodsinfo'][$items]['thumbnail_pic']);
                    $value['goodsinfo'][$items]['udfimg']= true;
                    $value['goodsinfo'][$items]['thumbnail_pic'] = $goods[$items]['pic'];
                    $value['goodsinfo'][$items]['image'] = $goods[$items]['pic'];
                }elseif($value['goodsinfo'][$items]['udfimg'] == 'true' && !empty($value['goodsinfo'][$items]['thumbnail_pic'])){
                    $value['goodsinfo'][$items]['image'] = kernel::single('base_storager')->image_path($value['goodsinfo'][$items]['thumbnail_pic'],'m');
                }elseif(!empty($value['goodsinfo'][$items]['image_default_id'])){
                    $value['goodsinfo'][$items]['image'] = kernel::single('base_storager')->image_path($value['goodsinfo'][$items]['image_default_id'],'m');
                }else{
                    $value['goodsinfo'][$items]['image'] = kernel::single('base_storager')->image_path($setting['defaultImage'],'m');
                }
                if($goods[$items] && !empty($goods[$items]['nice'])){
                    $value['goodsinfo'][$items]['name'] = $goods[$items]['nice'];
                }

            }
        }
        foreach($value['goodsinfo'] as $k=>$val){
            $value['goods_info'][] = $value['goodsinfo'][$k];
        }

        unset($value['goodsinfo']);
    }

	
	/*$imageDefault = app::get('image') -> getConf('image.set');
	$defaultImage = $imageDefault['M']['default_image'];
	$setting['defaultImage'] = $defaultImage;*/

	return $setting;
}

function array_change_key($array,$key){
    if(is_array($array)){
        $result = array();
        if(!empty($key) && is_string($key)){
            foreach($array as $k=>$val){
                $result[$val[$key]] = $array[$k];
            }
            return $result;
        }

    }
    return false;
}

?>
