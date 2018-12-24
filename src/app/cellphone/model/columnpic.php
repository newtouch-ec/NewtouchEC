<?php


class cellphone_mdl_columnpic extends dbeav_model{

     //var $has_tag = true;
     var $has_many = array('columns'=>'column');

    function __construct($app){
        parent::__construct($app);
        //使用meta系统进行存储
       // $this->use_meta();
    }
     
     
    
}