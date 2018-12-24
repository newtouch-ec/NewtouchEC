<?php
class setpoint {
    public function init(){
        $this->_do_exec();
    }

    private function _do_exec(){
        echo "订单付款后WMS 通知发货...\n";
        kernel::single('b2c_orderinfosend')->order_information_send();
        echo '订单付款后WMS 通知发货完毕...';
    }
}
require_once(dirname(__FILE__) . '/../lib/config/config.php');
set_time_limit(0);
$point = new setpoint();
$point->init();

