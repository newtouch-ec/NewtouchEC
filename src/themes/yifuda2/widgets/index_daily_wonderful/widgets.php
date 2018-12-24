<?php
$setting['author']      = 'zlj';
$setting['name']        = '首页【每日精彩汇】挂件';
$setting['version']     = 'v1.0.0';
$setting['order']       = 20;
$setting['stime']       = '2014-08-06';
$setting['catalog']     = '首页挂件';
$setting['description'] = '楼层1：新闻公告+4个品牌广告位+6个自定义图片广告位+团购活动';
$setting['userinfo']    = '平台首页【每日精彩汇】挂件，可根据不同需求添加自定义链接、品牌、图片、限时抢购活动以及新闻公告和精品展示图片，更方便快捷的展示每日热点关键词、推荐品牌、热销产品、团购活动、新闻公告和精品展示等内容。';
$setting['usual']       = '0';
$setting['template']    = array('default.html'=>app::get('b2c')->_('默认'));

$setting['limit']       = 5;          //节点下显文章数
//$setting['lv']          = 2;             //深度
$setting['styleart']    = 0;       //文章样式统一
$setting['shownode']    = 1;       //是否显示节点名称
$setting['node_id']     = 1;       //默认节点

$selectmaps = kernel::single('content_article_node')->get_selectmaps();
//array_unshift($selectmaps, array('node_id'=>0, 'step'=>1, 'node_name'=>app::get('content')->_('---无---')));

$setting['selectmaps']                  = $selectmaps;
$setting['select_order']['order_type']  = array('uptime'=>'更新时间');
$setting['select_order']['order']       = array('asc'=>'升序', 'desc'=>'降序');
