<?php

$setting['author']='ql';
$setting['name']='首页【购物车】挂件';
$setting['version']='v1.0.0';
$setting['catalog']='首页挂件';
$setting['description']= '本挂件包含两种类型的购物车挂件：head.html是顶部的购物车挂件，default.html是导航上的购物车挂件';
$setting['usual'] = '0';
$setting['userinfo']='购物车挂件，可显示商品数量';
$setting['stime']='2012-04-10';
$setting['template'] = array(
                            'default.html'=>app::get('b2c')->_('默认'),
                            'head.html'=>app::get('b2c')->_('顶部购物车'),
                        );
$setting['cart_show_type'] = 1;
$setting['cart_show_total'] = '2';