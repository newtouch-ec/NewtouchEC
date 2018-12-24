<?php
function theme_widget_ma_index_member_comments($setting,&$smarty){

    $data = b2c_widgets::load('Comment')->getTopComment($setting['limit']);    //通过数据接口取数据

    $imageDefault = app::get('image')->getConf('image.set');
    foreach($data as $k=>$v){
      if(!$v['goodsPic']){
       $data[$k]['goodsPic'] = $imageDefault['S']['default_image'];
      }
    }
    return $data;
}
?>
