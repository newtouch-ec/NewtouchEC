<?php
function theme_widget_store_server(&$setting,&$render){
    $store_id = $render->pagedata['store_id'];
    $number = app::get('business')->model('customer_service')->getList('number,type',array('store_id'=>$store_id,'is_defult'=>'1'));
    $data['number']=$number['0']['number'];
    $data['type']=$number['0']['type'];
    return $data;
}
?>
