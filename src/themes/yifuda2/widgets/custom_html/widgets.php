<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
 

$setting['author']='zinkwind@gmail.com';
$setting['name'] ='自定义代码挂件';
$setting['version'] ='v1.0.0';
$setting['stime'] ='2012-04-10';
$setting['catalog'] ='基础';
$setting['usual'] = '1';
$setting['tag']='auto';
$setting['description'] = '支持所有HTML定义.';
$setting['userinfo'] = '在源码编辑中，直接输入html格式的代码.';
$setting['template'] = array(
                            'default.html'=>app::get('b2c')->_('默认')
                        );
?>
