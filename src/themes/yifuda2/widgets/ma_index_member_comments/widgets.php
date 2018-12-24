<?php
$setting['author']='Fuxuefa';
$setting['name']='首页挂件-首页用户评论';
$setting['order']=80;
$setting['version']='v1.0';
$setting['description'] = '在首页展示最新用户评论，只能设置显示2条评论';
$setting['userinfo']='';
$setting['catalog']='马来西亚自定义挂件';
$setting['usual']= '1';
$setting['stime']='2012-08';
$setting['template'] = array(
                            'default.html'=>app::get('b2c')->_('默认'),
                        );
$setting['limit'] = 5;
?>
