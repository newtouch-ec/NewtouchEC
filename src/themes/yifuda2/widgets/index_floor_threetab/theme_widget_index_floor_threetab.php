<?php
function theme_widget_index_floor_threetab(&$setting,&$render){

    if($system->theme){
        $theme_dir = kernel::base_url().'/themes/'.$smarty->theme;
    }else{
        $theme_dir = kernel::base_url().'/themes/'.app::get('site')->getConf('current_theme');
    }

    $setting['floor_icon']=str_replace('%THEME%',$theme_dir,$setting['floor_icon']);
    $setting['floor_pic']=str_replace('%THEME%',$theme_dir,$setting['floor_pic']);
    $setting['tab_icon']=str_replace('%THEME%',$theme_dir,$setting['tab_icon']);

	$mdl_goods = app::get('b2c')->model('goods');
	foreach($setting['tab'] as $k=>&$v){
		$tmp = explode(',',$v['goods_id']);

		foreach($tmp as $tk=>$tv){
			if($tk<5){
				$grow = $mdl_goods->getRow('goods_id,name,price,image_default_id',array('goods_id'=>$tv));
                $grow['goodslink'] = app::get('site')->router()->gen_url(array('app'=>'b2c','ctl'=>'site_product','act'=>'index','args'=>array($tv)));
				$v['goodsinfo'][] = $grow;
			}
		}
	}

    //默认图片
    $imageDefault = app::get('image')->getConf('image.set');
    $setting['defaultImage'] = $imageDefault['S']['default_image'];

    return $setting;
}
?>
