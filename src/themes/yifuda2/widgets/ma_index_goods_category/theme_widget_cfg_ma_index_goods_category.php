<?php
  
function theme_widget_cfg_ma_index_goods_category( $system, $cat_id){
    $result = array();
    $goodsCatObj = app::get('b2c')->model('goods_cat');
    $goods_cats = $goodsCatObj->get_cat_list();
    
    $brands = app::get('b2c')->model('brand')->getBrandsAll();
    //一级商品分类
    $topCats = array();
    foreach($goods_cats as $k=>$cat){
        if($cat['pid'] == '0'){
            $topCats[$cat['cat_id']] = $cat['cat_name'];
        }
    }
    //返回一级分类
    $result["topCats"] = $topCats;
    
    $subCats = array();
    //准备二级分类数据
    foreach($topCats as $k=>$top){
        foreach($goods_cats as $index=>$cat){
            if($cat['pid'] == $k){
                $subCats[] = $cat;
            }
        }
    }
    
    $subBrands = array();
    //准备品牌数据
    //foreach($topCats as $k=>$top){
        foreach($brands as $index=>$brand){
            //if($brand['cat_id'] == $k){
                $subBrands[] = $brand;
            //}
        }
    //}
    
    //返回二级分类JSON字符串
    $result["jsonCats"] = json_encode($subCats);
    $result["jsonBrands"] = json_encode($subBrands);
    //echo("<pre>");
    //var_dump($subCats);
    return $result;
}

?>