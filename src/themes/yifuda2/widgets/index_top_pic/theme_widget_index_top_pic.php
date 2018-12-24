<?php
function theme_widget_index_top_pic(&$setting,&$smarty){
    if($system->theme){
        $theme_dir = kernel::base_url().'/themes/'.$smarty->theme;
    }else{
        $theme_dir = kernel::base_url().'/themes/'.app::get('site')->getConf('current_theme');
    }

    $setting['ad_pic'] = str_replace('%THEME%',$theme_dir,$setting['ad_pic']);

    if($setting['link_type'] == 'map' && isset($setting['hot_points']) && is_array($setting['hot_points'])){
        foreach($setting['hot_points'] as $key => $value){
            if(empty($value['link_target'])){
                unset($setting['hot_points'][$key]);
            }
        }

        $setting['area'] = $setting['hot_points'];
    }

    return $setting;
}