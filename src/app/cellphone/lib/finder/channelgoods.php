<?php

class cellphone_finder_channelgoods{
 
 	var $column_edit = '操作';
    function __construct($app){
        $this->app = $app;
        $this->router = app::get('desktop')->router();
        $this->channelgoods = $this->app->model('channelgoods');
    	//$this->column_picture = app::get('b2c')->_('缩略图');
    }//End
    

	public $column_edit_width = 110;

    function column_edit($row){
		return '<a href="index.php?app=cellphone&ctl=admin_channelgoods&act=edit&id='.$row['id'].'">编辑</a>';

    }
    
    /*var $detail_edit = '详细列表';
    function detail_edit($id){
		//echo 'heh';
        $render = app::get('mybook')->render();
        $oItem = kernel::single("mybook_mdl_bookinfo");
        $items = $oItem->getList('bn, bookinfo_name, price,bookinfo_createtime,imagesrc',
                     array('bookinfo_id' => $id), 0, 1);
        $render->pagedata['item'] = $items[0];
        $render->display('admin/bookinfo/itemdetail.html');
        //return 'detail';    
    }*/
    /*
	var $column_picture = '缩略图';
    function column_picture($row){
        $channelgoods =  app::get('cellphone')->model('channelgoods');
		$g =$channelgoods->db_dump(array('id'=>$row['id']),'image_id');
		$img_id= base_storager::image_path($g['image_id'],'s' );
		if(!$img_id)return '';
		return "<a href='$img_id' class='img-tip pointer' target='_blank'
		        onmouseover='bindFinderColTip(event);'>
		<span>&nbsp;pic</span></a>";
      }
      */

 

 
 
 
 
 }
