<?php
function theme_widget_index_floor_shop(&$setting,&$render){

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
    //店铺轮播部分
    $mdl_storemanger=app::get('business')->model('storemanger');
    foreach($setting['store_id'] as $k=>$v){
        $store=$mdl_storemanger->getList('store_id,store_name,image',array('store_id'=>$v));
        $data['store'][$k]['store_id']=$store[0]['store_id'];
        $data['store'][$k]['store_name']=$store[0]['store_name'];
        $data['store'][$k]['store_logo']=$store[0]['image'];
    }

    $data['leftpic'][0]=str_replace('%THEME%',$theme_dir,$setting['leftpic'][0]);
    $data['leftpic'][1]=str_replace('%THEME%',$theme_dir,$setting['leftpic'][1]);
    $data['leftlink']=$setting['leftlink'];
    $data['belowpic'][0]=str_replace('%THEME%',$theme_dir,$setting['belowpic'][0]);
    $data['belowpic'][1]=str_replace('%THEME%',$theme_dir,$setting['belowpic'][1]);
    $data['belowlink']=$setting['belowlink'];
    foreach($setting['rightpic'] as $k=>$v){
        $data['rightpic'][$k]=str_replace('%THEME%',$theme_dir,$v);
    }
    $data['rightlink']=$setting['rightlink'];

    $imageDefault = app::get('image')->getConf('image.set');
    $data['defaultImage'] = $imageDefault['S']['default_image'];

    return $data;
}
?>
