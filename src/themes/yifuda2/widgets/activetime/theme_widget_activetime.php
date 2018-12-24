<?php
function theme_widget_activetime(&$setting,&$render){
	$data['end_time'] = strtotime($setting['end_time'].' '.$setting['_DTIME_']['H']['end_time'].':'.$setting['_DTIME_']['M']['end_time']);
	$data['now'] = time();
    return $data;
}
?>
