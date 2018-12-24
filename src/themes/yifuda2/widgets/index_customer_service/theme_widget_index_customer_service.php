<?php

 
function theme_widget_index_customer_service($setting,&$smarty){
    $qq=app::get('b2c')->getConf('member.ServiceQQ');

    return $qq;
}

?>
