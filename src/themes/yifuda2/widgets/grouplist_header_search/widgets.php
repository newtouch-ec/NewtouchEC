<?php
$setting['author']='jxwinter';
$setting['name']='团购页【团购商品搜索】挂件';
$setting['version']='v1.0.0';
$setting['order']=1;
$setting['catalog']='团购页挂件';
$setting['usual'] = '0';
$setting['description']= '团购商品搜索挂件,根据关键字搜索当前正在进行的团购商品，本挂件只可用于团购页';
$setting['stime']='2012-04-10';
$setting['userinfo']='';
$setting['vary'] = '*';
$setting['template'] = array(
                            'default.html'=>app::get('b2c')->_('默认')
                        );
?>
