<?php
function theme_widget_store_head(&$setting,&$smarty) {
    if($system->theme){
        $theme_dir = kernel::base_url().'/themes/'.$smarty->theme;
    }else{
        $theme_dir = kernel::base_url().'/themes/'.app::get('site')->getConf('current_theme');
    }
    $setting['store']=$smarty->pagedata['store'];

    $setting['isLogin']=isset($smarty->pagedata['member_info']['member_id']);
    $setting['logo']=str_replace('%THEME%',$theme_dir,$setting['logo']);
    $setting['bg_pic']=str_replace('%THEME%',$theme_dir,$setting['bg_pic']);

    return $setting;
}