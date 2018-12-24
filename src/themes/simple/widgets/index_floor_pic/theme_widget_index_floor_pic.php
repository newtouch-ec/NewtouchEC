<?php
function theme_widget_index_floor_pic(&$setting,&$render){

    if($system->theme){
        $theme_dir = kernel::base_url().'/themes/'.$smarty->theme;
    }else{
        $theme_dir = kernel::base_url().'/themes/'.app::get('site')->getConf('current_theme');
    }
    //echo '<pre>';print_r($setting);exit;
    $data['title']=$setting['title'];
    $data['title_link']=$setting['title_link'];
    $data['bg_color']=$setting['bg_color'];
    $data['fbg_color']=$setting['fbg_color'];
    $data['floor_num']=$setting['floor_num'];
    
    $data['floor_icon']=str_replace('%THEME%',$theme_dir,$setting['floor_icon']);

    if($setting['top_link_title']){
        foreach($setting['top_link_title'] as $tk=>$tv){
            $data['f_link'][$tk]['top_link_title'] = $tv;
            $data['f_link'][$tk]['top_link_url'] = $setting['top_link_url'][$tk];
        }
    }


    //广告轮播部分
    $data['ad']=$setting['ad'];

    if(!$setting['ad']['pic']){
        foreach($setting['ad']['img'] as $value){
            $data['ad']['allimg'].=$rvalue."|";
            $data['ad']['allurl'].=urlencode($value["url"])."|";
        }
    }else{
        foreach($setting['ad']['pic'] as $key=>$value){
            if($value['link']){
                if($value["url"]){
                    $value["linktarget"]=$value["url"];
                }
                $data['ad']['allimg'].=$rvalue."|";
                $data['ad']['allurl'].=urlencode($value["linktarget"])."|";
                $data['ad']['pic'][$key]['link'] = str_replace('%THEME%',$theme_dir,$value['link']);
            }
        }
    }
    //品牌轮播部分
    $mdl_brand=app::get('b2c')->model('brand');
    foreach($setting['brand_id'] as $k=>$v){
        $brand=$mdl_brand->getList('brand_id,brand_name,brand_url,brand_logo',array('brand_id'=>$v));
        if(count($brandlist) >= 2){
            break;
        }
        $brandlist[]=$brand[0];
    }

    $data['brand'] = $brandlist;
//echo "<pre>";
//print_r($brandlist);exit;
//    foreach($brandlist as $key=>$value){
//        $data['brand'][]=$value;
//        $arr[]=$value;
//        if(count($arr)==3){
//            $data['brand'][]=$arr;
//            unset($arr);
//        }
//        //if(count($brandlist)%3!=0&&count($brandlist)==$key+1){          
//            //$data['brand'][]=$arr;
//            //unset($arr);
//        //}
//    }


    $data['fl_pic'] = str_replace('%THEME%',$theme_dir,$setting['fl_pic']);
    $data['fl_link'] = $setting['fl_link'];

    foreach($setting['pic'] as $k=>$v){
        $data['pic'][$k]=str_replace('%THEME%',$theme_dir,$v);
    }
    $data['piclink']=$setting['piclink'];
//echo '<pre>';
//print_r($data['ad']);exit;
    $imageDefault = app::get('image')->getConf('image.set');
    $data['defaultImage'] = $imageDefault['S']['default_image'];
//echo '<pre>';print_r($data);exit;



    $goods=json_decode($setting['goods'],1);
    $goods=utils::array_change_key($goods,'id');

    $mdl_goods=app::get('b2c')->model('goods');
    $gnum = 0;
    foreach($goods as $gk=>&$gv){
        $gnum += 1;
        if($gnum > 6){
            break;
        }
        $grow = $mdl_goods->getRow('name,image_default_id,price ,thumbnail_pic',array('goods_id'=>$gk));
        if(empty($gv['nice'])){
            $gv['nice'] = $grow['name'];
        }
        $gv['image_default_id'] = $grow['image_default_id'];
        $gv['price'] = $grow['price'];
        $gv['thumbnail_pic'] = $grow['thumbnail_pic'];
        
    }
//    echo "<pre>";
//print_r($goods);exit;
    $data['goods'] = $goods;

    return $data;
}
?>
