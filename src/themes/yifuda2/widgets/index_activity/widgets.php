<?php

 

$setting['author']='Jxwinter';
$setting['version']='v1.0.0';
$setting['order']=18;
$setting['name']='首页【您可能感兴趣的活动】挂件';
$setting['catalog'] = '首页挂件';
$setting['description'] = '1-4个图片广告位';
$setting['usual'] = '0';
$setting['stime'] ='2012-04-10';
$setting['vary'] = '*';
$setting['userinfo'] = '图片地址可使用上传图片，也可使用远程图片，更可使用%THEME%/images/***.jpg写法调用模板内部图片。';
$setting['template'] = array(
                            'default.html'=>app::get('b2c')->_('默认')
                        );

?>
