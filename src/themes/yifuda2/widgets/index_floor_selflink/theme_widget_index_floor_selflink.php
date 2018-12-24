<?php
function theme_widget_index_floor_selflink(&$setting,&$render){

    if($system->theme){
        $theme_dir = kernel::base_url().'/themes/'.$smarty->theme;
    }else{
        $theme_dir = kernel::base_url().'/themes/'.app::get('site')->getConf('current_theme');
    }
    //echo '<pre>';print_r($setting);exit;
    $data['title']=$setting['title'];
    $data['title_link']=$setting['title_link'];
    $data['bg_color']=$setting['bg_color'];
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
        $brandlist[]=$brand[0];
    }

    foreach($brandlist as $key=>$value){
        $arr[]=$value;
        if(count($arr)==3){
            $data['brand'][]=$arr;
            unset($arr);
        }
//        if(count($brandlist)%3!=0&&count($brandlist)==$key+1){          
//            $data['brand'][]=$arr;
//            unset($arr);
//            continue;
//        }
    }


    foreach($setting['pic'] as $k=>$v){
        $data['pic'][$k]=str_replace('%THEME%',$theme_dir,$v);
    }
    $data['piclink']=$setting['piclink'];

    $imageDefault = app::get('image')->getConf('image.set');
    $data['defaultImage'] = $imageDefault['S']['default_image'];
//echo '<pre>';print_r($data);exit;
    return $data;
}
?>
