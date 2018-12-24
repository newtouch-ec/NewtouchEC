<?php

class cellphone_finder_channeltype{
 
 	var $column_edit = '编辑';
    function __construct($app){
        $this->app = $app;
        $this->router = app::get('desktop')->router();
        $this->column_edit = app::get('b2c')->_('编辑'); 
        //$this->banner = $this->app->model('banner');
    }//End
    

	//public $column_edit_width = 110;

     function column_edit($row){
        return '<a href="index.php?app=cellphone&ctl=admin_channeltype&act=edit&type_id='.$row['type_id'].'">编辑</a>';
    }
 
 
 
 }

