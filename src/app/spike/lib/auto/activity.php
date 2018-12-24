<?php
class spike_auto_activity {
    function exec_auto(){
        $nowTime = time();
        $activityObj = app::get('spike')->model('activity');
        $applyObj = app::get('spike')->model('spikeapply');
        $gObj = app::get('b2c')->model('goods');
        $promotion=kernel::single('business_goods_promotion');

        $sql = "select a.* from sdb_spike_spikeapply as a".
        " join sdb_spike_activity as s on s.act_id=a.aid".
        " where a.status='2' and s.act_open='true' and {$nowTime} > s.end_time and s.act_status != '2'"; 
        $applys = $applyObj->db->select($sql);
        if($applys){
            foreach($applys as $k=>$v){
                $act_arr = array('act_status'=>'2','act_open'=>'false');
                $activityObj->update($act_arr,array('act_id'=>$v['aid']));
                $garr = array('store_freeze'=>0,'act_type'=>'normal');
                $gObj->update($garr,array('goods_id'=>$v['gid']));
                $promotion->deletePrice('spike',0,$v['gid']);
            }
        }

        echo 'succ';

    }
}