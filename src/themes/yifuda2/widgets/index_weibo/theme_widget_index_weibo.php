<?php

 
function theme_widget_index_weibo($setting,&$smarty){
    if($system->theme){
        $theme_dir = kernel::base_url().'/themes/'.$smarty->theme;
    }else{
        $theme_dir = kernel::base_url().'/themes/'.app::get('site')->getConf('current_theme');
    }
    $setting['weibo']=str_replace('%THEME%',$theme_dir,$setting['weibo']);

    return $setting;
}
?>
