<?php

/**
 * 获取购物车信息 处理活动商品
 * $ 2010-04-28 20:29 $
 */
class spike_cart_process_goods implements b2c_interface_cart_process {

     private $app;

    public function __construct(&$app){
        $this->app = $app;
    }

    
    public function get_order() {
        return 95;
    }

    public function process($aData,&$aResult=array(),$aConfig=array()){
        $this->filter($aData,$aResult,$aConfig);
        app::get('b2c')->model('cart')->count_objects($aResult);

    }

    public function filter($aData,&$aResult=array(),$aConfig=array()){
        $oGoods = app::get('b2c')->model('goods');
        foreach($aResult['object']['goods'] as $k=>$v){
            $gid = $v['params']['goods_id'];
            $act_type = $oGoods->getList('act_type',array('goods_id'=>$gid));
            if($act_type[0]['act_type']=='spike'){
                $re = $this->checkgoods($gid);
                if($re){
                    if(!$re['nums']||$re['remainnums']!=0){
                        foreach($v['obj_items']['products'] as $key=>$value){
                            $aResult['object']['goods'][$k]['obj_items']['products'][$key]['price']['price'] = $re['last_price'];
                            $aResult['object']['goods'][$k]['obj_items']['products'][$key]['price']['buy_price'] = $re['last_price'];
                            $aResult['object']['goods'][$k]['obj_items']['products'][$key]['price']['member_lv_price'] = $re['last_price'];
                        }
                    }
                }
            }
        }
    }

    public function checkgoods($gid){
        $businessactivity = app::get('spike')->model('spikeapply');
        $activity  = app::get('spike')->model('activity');
        $businessInfo = $businessactivity->getList('*',array('gid'=>$gid));
        $flag = false;
        $result = array();
        if(!empty($businessInfo)){
            foreach($businessInfo as $k=>$v){
                if($v&&$v['status']==2){
                    $activityInfo = $activity->getList('*',array('act_id'=>$v['aid']));
                    $activityInfo = $activityInfo[0];
                    if($activityInfo['act_open']=='true'){
                        $now = time();
                        if($activityInfo['start_time']<$now&&$now<$activityInfo['end_time']){
                            $flag = true;
                            $result = $v;
                        }
                    }
                }
            }
        }
        if($flag){
            return $result;
        }else{
            return false;
        }

    }
}