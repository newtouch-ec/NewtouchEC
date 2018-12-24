<?php

 class cellphone_ctl_admin_channelbrand extends desktop_controller{
     
	 
	 function __construct($app){
        parent::__construct($app);
        $this->router = app::get('desktop')->router();
        $this->_request = kernel::single('base_component_request');
    }


     function index(){
	 
	 $this->finder('cellphone_mdl_channelbrand',
		    array('actions' =>array(
                  array(
                    'label' => app::get('cellphone')->_('添加品牌'),
                    'icon' => 'add.gif',
                    'href' => 'index.php?app=cellphone&ctl=admin_channelbrand&act=add',
                   // 'target' => "_blank",
                    ),
                  ),
		    	'title'=>'频道品牌列表',    
                'use_buildin_set_tag'=>false,
                'use_buildin_filter'=>false,
                'use_buildin_tagedit'=>false,
                'use_buildin_export'=>false,
                'use_buildin_import'=>false,
                'allow_detail_popup'=>true,
                'use_view_tab'=>false,));

	 }

	 function add(){
     $filter = array();
     $this->pagedata['filter'] = $filter;
     $channeltype = $this->app->model('channeltype');
	 $type = $channeltype->getList('type_id,type_name');
     $this->pagedata['channeltype'] = $type;
     $this->pagedata['brand_filter'] = array('marketable'=>'true','goods_type'=>'normal','act_type'=>'normal','goods_kind'=>'virtual');
	 $this->pagedata['reUrl'] = $this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_channelbrand','act'=>'index'));
	 $this->page('admin/channelbrand/add.html');
	  }

     function edit(){
	 
	    $this->begin($this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_channelbrand','act'=>'index')));
        $channeltype = $this->app->model('channeltype');
	    $type = $channeltype->getList('type_id,type_name');
        $this->pagedata['channeltype'] = $type;
        $id = $this->_request->get_get('id');
        $channelbrand = $this->app->model('channelbrand');
	
        $data = $channelbrand->getList('*',array('id'=>$id));

        $this->pagedata['channelbrand'] = $data[0];
		$this->pagedata['reUrl'] = $this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_channelbrand','act'=>'index'));
        $this->page('admin/channelbrand/add.html');
         
	 }


	 function toAdd(){
		 
     $this->begin($this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_channelbrand','act'=>'index'))); 
	 $data = $this->get_data();
	 $channelbrand = $this->app->model('channelbrand');
	 if($data['id']){
	 $re = $channelbrand->update($data,array('id'=>$data['id']));
	 }
	 else{
		
	  $re = $channelbrand->save($data);
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
	     $this->end(false,'请选择频道页');
	  }
	  if(!$data['brand_id']){
	     $this->end(false,'请选择品牌');
	  }
	  if(!$data['d_order']){
	     $this->end(false,'请填写排序');
	  }

       return $data; 
    }

   
	

}