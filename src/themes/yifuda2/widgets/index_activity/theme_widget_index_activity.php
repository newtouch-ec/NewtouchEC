<?php
function theme_widget_index_activity(&$setting,&$smarty) {
    if($system->theme){
        $theme_dir = kernel::base_url().'/themes/'.$smarty->theme;
    }else{
        $theme_dir = kernel::base_url().'/themes/'.app::get('site')->getConf('current_theme');
    }

    $setting['floor_icon']=str_replace('%THEME%',$theme_dir,$setting['floor_icon']);

    if(isset($setting['ad']['pic']) && is_array($setting['ad']['pic'])){
        foreach($setting['ad']['pic'] as $pk => &$pv){
            if(!empty($pv['link'])){
                $pv['link'] = str_replace('%THEME%',$theme_dir,$pv['link']);
            }
        }
    }

    return $setting;
}