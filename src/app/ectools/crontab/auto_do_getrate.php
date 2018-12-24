<?php
class sync {
    public function init(){
        $this->_do_sync();
    }

    private function _do_sync(){
        echo "自动获取汇率...\n";
        echo kernel::single('ectools_rate')->getrate();
        echo "汇率获取完毕...";
    }
}
require_once(dirname(__FILE__) . '/../lib/config/config.php');
$sync = new sync();
$sync->init();