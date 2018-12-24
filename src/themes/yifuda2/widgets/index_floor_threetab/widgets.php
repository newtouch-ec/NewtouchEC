<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
$setting['author']      = 'yds';
$setting['name']        = '首页【楼层】挂件';
$setting['version']     = 'v1.0.1';
$setting['stime']       = '2014-4-14';
$setting['catalog']     = '首页挂件';
$setting['description'] = '楼层3：7个tab项+商品广告位+1个图片广告位';
$setting['order']       = '10';
$setting['userinfo']    = '该楼层挂件可自定义添加Tab链接，实现了Tab的切换效果，每个Tab下可选择相应的展示商品和广告轮播图片。';
$setting['usual']       = '1';
$setting['template']    = array('default.html' => app::get('b2c')->_('默认')
                            );
?>
