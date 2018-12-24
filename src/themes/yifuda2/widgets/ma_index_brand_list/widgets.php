<?php
$setting['author']='Fuxuefa';
$setting['version']='v1.0';
$setting['name']='首页挂件-热卖品牌';
$setting['order']=0;
$setting['stime']='2013-07';
$setting['catalog']='马来西亚自定义挂件';
$setting['description'] = '在首页显示热卖品牌，一屏显示25个品牌，可滚动显示';
$setting['userinfo'] = '';
$setting['usual']    = '1';
$setting['tag']    = 'auto';
$setting['template'] = array(
                            'default.html'=>app::get('b2c')->_('默认')
                        );
$setting['limit'] = 5;
?>
