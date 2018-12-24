<?php
/**
 *
 * @auther   ShopEx UED Jxwinter
 * @date   2011-11-18
 * @copyright  Copyright (c) 2005-2012 ShopEx Technologies Inc. (http://www.shopex.cn)
 *
 */


function theme_widget_index_hot_brand(&$setting,&$system){

    if($smarty->theme){
        $theme_dir = kernel::base_url().'/themes/'.$smarty->theme;
    }else{
        $theme_dir = kernel::base_url().'/themes/'.app::get('site')->getConf('current_theme');
    }
    //echo '<pre>';print_r($setting);exit;
    $mdl_brand=app::get('b2c')->model('brand');
    $setting['left_pic']=str_replace('%THEME%',$theme_dir,$setting['left_pic']);
    
    $setting['right_pic']=str_replace('%THEME%',$theme_dir,$setting['right_pic']);

    foreach($setting['tab_info'] as $k => $v){
        if(empty($setting['tab_info'][$k]['title'])){
            unset($setting['tab_info'][$k]);
            unset($setting['list'][$k]);
        }else{
            $setting['list'][$k]['data_id'] = $setting['tab_info'][$k]['title_id'];
        }
    }

    if($setting['list'][0]){
        foreach($setting['list'][0]['id'] as $k=>$v){
            $brand=$mdl_brand->getList('brand_id,brand_name,brand_logo,brand_url',array('brand_id'=>$v),0,24);
            $setting['list'][0]['branddata'][$v]=$brand[0];
        }
    }
//echo "<pre>";
//print_r($setting['list'][0]);exit;
    foreach($setting['list'] as $k=>$v){
        $setting['list'][$k]['id']=implode(',',$v['id']);
    }

    $imageDefault = app::get('image')->getConf('image.set');
    $setting['defaultImage'] = $imageDefault['S']['default_image'];
    //echo '<pre>';print_r($setting);exit;
    return $setting;
}
?>


