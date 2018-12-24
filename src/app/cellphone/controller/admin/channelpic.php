<?php

 class cellphone_ctl_admin_channelpic extends desktop_controller{
     
	 
	 function __construct($app){
        parent::__construct($app);
        $this->router = app::get('desktop')->router();
        $this->_request = kernel::single('base_component_request');
    }


     function index(){
	 
	 $this->finder('cellphone_mdl_channelpic',
		    array('actions' =>array(
                  array(
                    'label' => app::get('cellphone')->_('添加频道轮播图'),
                    'icon' => 'add.gif',
                    'href' => 'index.php?app=cellphone&ctl=admin_channelpic&act=add',
                   // 'target' => "_blank",
                    ),
                  ),
		    	'title'=>'频道轮播图列表',    
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
     $this->pagedata['reUrl'] = $this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_channelpic','act'=>'index'));
	 $this->page('admin/channelpic/add.html');
	  }

     function edit(){
	 
	    $this->begin($this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_channelpic','act'=>'index')));
        $channeltype = $this->app->model('channeltype');
	    $type = $channeltype->getList('type_id,type_name');
        $this->pagedata['channeltype'] = $type;
        $id = $this->_request->get_get('id');
        $channelpic = $this->app->model('channelpic');
	
        $data = $channelpic->getList('*',array('id'=>$id));

        $this->pagedata['channelpic'] = $data[0];
		$this->pagedata['reUrl'] = $this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_channelpic','act'=>'index'));
        $this->page('admin/channelpic/add.html');
         
	 }


	 function toAdd(){
		 
     $this->begin($this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_channelpic','act'=>'index'))); 
	 $data = $this->get_data();
	 $channelpic = $this->app->model('channelpic');
	 if($data['id']){
	 $re = $channelpic->update($data,array('id'=>$data['id']));
	 }
	 else{
		
	  $re = $channelpic->save($data);
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
	  if(!$data['image_id']){
	     $this->end(false,'请上传图片');
	  }
	  if(!$data['d_order']){
	     $this->end(false,'请填写排序');
	  }

       return $data; 
    }
   
	

}