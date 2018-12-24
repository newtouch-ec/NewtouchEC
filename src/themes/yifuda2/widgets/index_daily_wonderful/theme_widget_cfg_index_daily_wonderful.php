<?php
function theme_widget_cfg_index_daily_wonderful($system, &$smarty){
    return array('activity_filter'=>array('start_time|sthan'=>time(),'end_time|than'=>time(),'act_open'=>'true','act_status'=>'1'));
}