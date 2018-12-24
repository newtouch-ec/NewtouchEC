<?php

 
function theme_widget_other_menu($setting,&$smarty){
  
  foreach($setting['top_link_title'] as $tk=>$tv){
        $res['href'][$tk]['top_link_title'] = $tv;
        $res['href'][$tk]['top_link_url'] = $setting['top_link_url'][$tk];
  }
  $res['title'] = $setting['title'];
  $res['title_link']= $setting['title_link'];
  if($setting['more'] == '1'){
    $res['more'] = true;
    $res['more_link'] = $setting['more_link'];
  }
  return $res;
}
?>
