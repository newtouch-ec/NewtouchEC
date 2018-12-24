<?php
function theme_widget_ad_pic(&$setting,&$smarty) {
    if($system->theme){
        $theme_dir = kernel::base_url().'/themes/'.$smarty->theme;
    }else{
        $theme_dir = kernel::base_url().'/themes/'.app::get('site')->getConf('current_theme');
    }
    $setting['ad_pic'] = str_replace('%THEME%',$theme_dir,$setting['ad_pic']);

    return $setting;
}

?>
