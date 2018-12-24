<?php
function theme_widget_ma_index_brand_list(&$setting,&$render){
    $limit = ($setting['limit'])?$setting['limit']:25;
    $brand_list = app::get('b2c')->model('brand')->getList('*',array(),0,$limit,'ordernum desc');
    
    //echo("<pre>");
    //var_dump($brand_list);
    return $brand_list;
}
?>