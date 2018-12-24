<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
 
/*基础配置项*/
$setting['author']='kj';
$setting['version']='v1.0';
$setting['name']='首页tab排行挂件';
$setting['order']=0;
$setting['stime']='2014-08';
$setting['catalog']='首页挂件';
$setting['description'] = 'TAB切换+分类+5个商品位';
$setting['userinfo'] = '';
$setting['usual']    = '1';
$setting['tag']    = 'auto';
$setting['template'] = array(
                            'default.html'=>app::get('b2c')->_('默认')
                        );
/*初始化配置项*/
$setting['selector'] = 'filter';
$setting['limit'] = 8;
?>
