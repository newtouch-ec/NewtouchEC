<?php

 class cellphone_ctl_admin_channelgoods extends desktop_controller{
     
	 
	 function __construct($app){
        parent::__construct($app);
        $this->router = app::get('desktop')->router();
        $this->_request = kernel::single('base_component_request');
    }


     function index(){
	 
	 $this->finder('cellphone_mdl_channelgoods',
		    array('actions' =>array(
                  array(
                    'label' => app::get('cellphone')->_('添加商品'),
                    'icon' => 'add.gif',
                    'href' => 'index.php?app=cellphone&ctl=admin_channelgoods&act=add',
                   // 'target' => "_blank",
                    ),
                  ),
		    	'title'=>'频道商品列表',    
                'use_buildin_set_tag'=>false,
                'use_buildin_filter'=>false,
                'use_buildin_tagedit'=>false,
                'use_buildin_export'=>false,
                'use_buildin_import'=>false,
                'allow_detail_popup'=>true,
                'use_view_tab'=>false,));

	 }

	 function add(){
     $channeltype = $this->app->model('channeltype');
	 $type = $channeltype->getList('type_id,type_name');
     $this->pagedata['channeltype'] = $type;
     $this->pagedata['goods_filter'] = array('marketable'=>'true','goods_type'=>'normal','act_type'=>'normal','goods_kind'=>'virtual');
	 $this->pagedata['reUrl'] = $this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_channelgoods','act'=>'index'));
	 $this->page('admin/channelgoods/add.html');
	  }

     function edit(){
	 
	    $this->begin($this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_channelgoods','act'=>'index')));
        $channeltype = $this->app->model('channeltype');
	    $type = $channeltype->getList('type_id,type_name');
        $this->pagedata['channeltype'] = $type;
        $id = $this->_request->get_get('id');
        $channelgoods = $this->app->model('channelgoods');
	
        $data = $channelgoods->getList('*',array('id'=>$id));

        $this->pagedata['channelgoods'] = $data[0];
		$this->pagedata['reUrl'] = $this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_channelgoods','act'=>'index'));
        $this->page('admin/channelgoods/add.html');
         
	 }


	 function toAdd(){
		 
     $this->begin($this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_channelgoods','act'=>'index'))); 
	 $data = $this->get_data();
	 $channelgoods = $this->app->model('channelgoods');
	 if($data['id']){
	 	$re = $channelgoods->update($data,array('id'=>$data['id']));
	 }
	 else{
		
	 	$re = $channelgoods->save($data);
	 }
	 if($re){
	 $this->end(true,'保存成功');
	 }
	 else{
	 $this->end(false,'保存失败');
	 }
	  
	 }


	 public function get_data(){

      $data = $this->_request->get_post();;
      if(!$data['type_id']){
	     $this->end(false,'请选择频道');
	  }
	  if(!$data['goods_id']){
	     $this->end(false,'请选择商品');
	  }
	  if(!$data['d_order']){
	     $this->end(false,'请填写排序');
	  }
	 /* if(!$data['image_id']){
	       $this->end(false,'请上传图片');   
	  }*/


       return $data; 
    }


   
	

}