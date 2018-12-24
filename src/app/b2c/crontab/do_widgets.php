<?php
class sync {

    public function init(){
        $this->_do_sync();
    }

    private function _do_sync(){
        echo "begin";
        echo kernel::single('b2c_widgetinfo')->auto();
        echo "end";
    }
}
require_once(dirname(__FILE__) . '/../lib/config/config.php');
$sync = new sync();
$sync->init();