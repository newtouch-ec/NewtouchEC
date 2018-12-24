<?php
function theme_widget_ma_index_goods_category(&$setting, &$system) {
    $goodsCatObj = app::get('b2c')->model('goods_cat');
    
    $result = array();
    $result["goods_cat"] = $gCats;
    $result["ad_slide"] = $setting;
    
    //echo("<pre>");
    //var_dump($setting[main_cat]);
    
    //取得大分类详细
    $main_cat_detail = $goodsCatObj->getRow('*', array("cat_id"=>$setting[main_cat]));
    $result["main_cat_detail"] = $main_cat_detail;
    
    //准备二级分类列表数据
    $sub_cat = array();    
    foreach($setting['sub_cat'] as $key=>$value){
        $sub_cat[] = explode("|", $value);
    }
    $result["sub_cat"] = $sub_cat;
    
    //准备品牌列表数据
    $brand_list = array();
    foreach($setting['sub_brand'] as $key=>$value){
        $brand_list[] = explode("|", $value);
    }
    $result["brand_list"] = $brand_list;
    
    $args = array( '','',1,0,1,'','grid','g');
    $result["args"] = $args;
    $result["url"] = kernel::base_url().'/index.php';
    //echo("<pre>");
    //var_dump($brand_list);
    //$result["url"] = str_replace('themes/simple','',kernel::base_url());
    //echo('<pre>');print_r($result["sub_brand"]);exit();
    
    return $result;
}
?>
