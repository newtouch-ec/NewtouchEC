<?php

function theme_widget_ad_slide(&$setting,&$system){
  
  $setting['allimg']="";
  $setting['allurl']="";
  $index=1;
  if($system->theme){
    $theme_dir = kernel::base_url().'/themes/'.$smarty->theme;
  }else{
    $theme_dir = kernel::base_url().'/themes/'.app::get('site')->getConf('current_theme');
  }
  if(!$setting['pic']){
    foreach($setting['img'] as $value){
      $setting['allimg'].=$rvalue."|";
      $setting['allurl'].=urlencode($value["url"])."|";
    }
  }else{
    foreach($setting['pic'] as $key=>$value){
      if($value['link']){
        if($value["url"]){
          $value["linktarget"]=$value["url"];
        }
		$setting['pic'][$key]['imageIndex']=$index++;
        $setting['allimg'].=$rvalue."|";
        $setting['allurl'].=urlencode($value["linktarget"])."|";
        $setting['pic'][$key]['link'] = str_replace('%THEME%',$theme_dir,$value['link']);
      }
    }
  }
 
  return $setting;
}
?>


