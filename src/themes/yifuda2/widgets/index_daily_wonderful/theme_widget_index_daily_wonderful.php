<?php
function theme_widget_index_daily_wonderful(&$setting,&$smarty){
    if($system->theme){
        $theme_dir = kernel::base_url().'/themes/'.$smarty->theme;
    }else{
        $theme_dir = kernel::base_url().'/themes/'.app::get('site')->getConf('current_theme');
    }

    //处理图片路径
    $setting['jp_show']['pic'] = str_replace('%THEME%',$theme_dir,$setting['jp_show']['pic']);
    $setting['group_show']['pic'] = str_replace('%THEME%',$theme_dir,$setting['group_show']['pic']);
    $return['jp_show'] = $setting['jp_show'];
    $return['group_show'] = $setting['group_show'];
    $return['floor_icon']=str_replace('%THEME%',$theme_dir,$setting['floor_icon']);

    //去除空链接
    if(isset($setting['tj_link']) && is_array($setting['tj_link'])){
        foreach($setting['tj_link'] as $tj_key => $tj_value){
            if(empty($tj_value['linktitle'])){
                unset($setting['tj_link'][$tj_key]);
            }
        }
    }
    $return['tj_link'] = (array)$setting['tj_link'];

    //去除空品牌
    if(isset($setting['brands']) && is_array($setting['brands'])){
        foreach($setting['brands'] as $brand_key => $brand_value){
            if(empty($brand_value['link'])){
                unset($setting['brands'][$brand_key]);
            }else{
                $setting['brands'][$brand_key]['link'] = str_replace('%THEME%',$theme_dir,$brand_value['link']);
            }
        }
    }
    $return['brands'] = (array)$setting['brands'];

    //去除空图片
    if(isset($setting['wonderful']) && is_array($setting['wonderful'])){
        foreach($setting['wonderful'] as $wf_key => $wf_value){
            if(empty($wf_value['link'])){
                unset($setting['wonderful'][$wf_key]);
            }else{
                $setting['wonderful'][$wf_key]['link'] = str_replace('%THEME%',$theme_dir,$wf_value['link']);
            }
        }
    }
    $return['wonderful'] = (array)$setting['wonderful'];

    //新闻公告数据整理
    $setting['order'] or $setting['order'] = 'desc';
    $setting['order_type'] or $setting['order_type'] = 'uptime';

    $orderby = $setting['order_type'].' '.$setting['order'];
    $limit = $setting['limit'];
    $return['news']['show_more'] = $setting['show_more'];

    $mdl_nodes = app::get('content')->model('article_nodes');
    $mdl_article = app::get('content')->model('article_indexs');

    $node_info = $mdl_nodes->dump(array('node_id'=>$setting['node_id']),'node_id,node_name,homepage');
    $return['news']['node_name'] = $node_info['node_name'];

    if(is_array($node_info) && !empty($node_info) && $setting['show_more'] == '1'){
        if($node_info['homepage']=='true')
            $return['news']['node_url'] = app::get('site')->router()->gen_url(array('app'=>'content', 'ctl'=>'site_article', 'act'=>'i', 'arg0'=>$setting['node_id']));
        else
            $return['news']['node_url'] = app::get('site')->router()->gen_url(array('app'=>'content', 'ctl'=>'site_article', 'act'=>'l', 'arg0'=>$setting['node_id']));
    }

    $article_list = $mdl_article->getList_1('article_id,title,node_id,uptime,ifpub',array('node_id'=>$setting['node_id']),0,$limit,$orderby);

    if(is_array($article_list) && !empty($article_list)){
        foreach($article_list as $art_key => $art_value){
            $article_list[$art_key]['article_url'] = app::get('site')->router()->gen_url(array('app'=>'content', 'ctl'=>'site_article', 'act'=>'index', 'arg0'=>$art_value['article_id']));
        }
    }

    $return['news']['article_list'] = (array)$article_list;

    //团购活动数据整理
    $mdl_group = app::get('groupbuy')->model('activity');
    $group_info = $mdl_group->dump(array('act_id'=>$setting['group_act_id']),'act_id,name,description,start_time,end_time,act_open,act_status');
    $return['group_activity'] = (array)$group_info;

    if(!empty($return['group_activity'])){
        $return['group_activity']['now_time'] = time();
    }

    return $return;
}