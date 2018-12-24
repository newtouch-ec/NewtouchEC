<?php

class cellphone_finder_channelbrand{
 
 	var $column_edit = '操作';
    var $column_picture = '缩略图';
    function __construct($app){
        $this->app = $app;
        $this->router = app::get('desktop')->router();
        $this->channelbrand = $this->app->model('channelbrand');
        $this->column_edit = app::get('b2c')->_('操作'); 
    	$this->column_picture = app::get('b2c')->_('缩略图');
    }//End
    
     function column_edit($row){
        return '<a href="index.php?app=cellphone&ctl=admin_channelbrand&act=edit&id='.$row['id'].'">编辑</a>';
    }

    function column_picture($row){
        $channelbrand =  app::get('cellphone')->model('channelbrand');
		$g = $channelbrand->db_dump(array('id'=>$row['id']),'image_id');
		$img_id= base_storager::image_path($g['image_id'],'s' );
		if(!$img_id)return '';
		return "<a href='$img_id' class='img-tip pointer' target='_blank'
		        onmouseover='bindFinderColTip(event);'>
		<span>&nbsp;pic</span></a>";
      }

 
 }
