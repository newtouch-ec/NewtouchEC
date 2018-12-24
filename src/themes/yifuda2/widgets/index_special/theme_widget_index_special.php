<?php

 
function theme_widget_index_special($setting,&$smarty){
    if($system->theme){
        $theme_dir = kernel::base_url().'/themes/'.$smarty->theme;
    }else{
        $theme_dir = kernel::base_url().'/themes/'.app::get('site')->getConf('current_theme');
    }
    $setting['logo']=str_replace('%THEME%',$theme_dir,$setting['logo']);
    foreach($setting['list'] as $k=>$v){
        $setting['list'][$k]['icon']=str_replace('%THEME%',$theme_dir,$v['icon']);
    }
    return $setting;
}
?>
