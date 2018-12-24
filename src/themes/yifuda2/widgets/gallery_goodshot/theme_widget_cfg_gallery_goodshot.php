<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
 
function theme_widget_cfg_gallery_goodshot($app){
	$modTag = app::get('desktop')->model('tag');
    $return['tags'] = $modTag->getList('*',array('tag_type'=>'goods'),0,-1);
    
    return $return;
}