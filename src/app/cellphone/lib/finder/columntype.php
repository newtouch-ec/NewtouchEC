<?php

class cellphone_finder_columntype{
 
 	var $column_edit = '编辑';
    function __construct($app){
        $this->app = $app;
        $this->router = app::get('desktop')->router();
        //$this->banner = $this->app->model('banner');
        $this->column_edit = app::get('b2c')->_('编辑'); 
    }//End
    

	//public $column_edit_width = 110;

     function column_edit($row){
        return '<a href="index.php?app=cellphone&ctl=admin_columntype&act=edit&columntype_id='.$row['columntype_id'].'">'.app::get('b2c')->_('编辑').'</a>';
    }
 
 
 
 
 }

