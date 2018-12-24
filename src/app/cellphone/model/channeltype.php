<?php

class cellphone_mdl_channeltype extends dbeav_model{

	var $defaultOrder = array('d_order','ASC');
	
    function __construct($app){
        parent::__construct($app);
        //使用meta系统进行存储
       $this->use_meta();
    }

   
}