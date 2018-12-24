<?php

$setting['author']='hyf';
$setting['name']='首页【顶部客服】挂件';
$setting['version']='1.0.0';
$setting['order']=1;
$setting['stime']='2014-8-15';
$setting['catalog']='首页挂件';
$setting['usual'] = '0';
$setting['vary'] = '*';
$setting['description']='可以通过该挂件联系客服';
$setting['userinfo']='您只需配置欢迎词即可。';
$setting['template'] = array(
                            'default.html'=>app::get('b2c')->_('默认')
                        );
?>
