<?php
function theme_widget_cfg_index_goodscat( $system ){
    $mdl_goodsCat = app::get('b2c')->model('goods_cat');
    $mdl_goodsVirtualCat = app::get('b2c')->model('goods_virtual_cat');
    $data['cat'] = $mdl_goodsCat->get_subcat_list(0);

    return $data;
}

?>
