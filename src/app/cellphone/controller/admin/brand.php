<?php

 class cellphone_ctl_admin_brand extends desktop_controller{
     
	 
	 function __construct($app){
        parent::__construct($app);
        $this->router = app::get('desktop')->router();
        $this->_request = kernel::single('base_component_request');
    }


     function index(){
	 
	 $this->finder('cellphone_mdl_brand',
		    array('actions' =>array(
                  array(
                    'label' => app::get('cellphone')->_('添加品牌'),
                    'icon' => 'add.gif',
                    'href' => 'index.php?app=cellphone&ctl=admin_brand&act=add',
                   // 'target' => "_blank",
                    ),
                  ),
		    	'title'=>'热门品牌列表',    
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
	 $this->pagedata['reUrl'] = $this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_brand','act'=>'index'));
	 $this->page('admin/brand/add.html');
	  }

     function edit(){
	 
	    $this->begin($this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_brand','act'=>'index')));
        $id = $this->_request->get_get('id');
        $brand = $this->app->model('brand');
	
        $data = $brand->getList('*',array('id'=>$id));

        $this->pagedata['brand'] = $data[0];
		$this->pagedata['reUrl'] = $this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_brand','act'=>'index'));
        $this->page('admin/brand/add.html');
         
	 }



	 function toAdd(){
		 
     $this->begin($this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_brand','act'=>'index'))); 
	 $data = $this->get_data();
	 $brand = $this->app->model('brand');
	 if($data['id']){
	 $re = $brand->update($data,array('id'=>$data['id']));
	 }
	 else{
		
	  $re = $brand->save($data);
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
	  if(!$data['brand_id']){
	     $this->end(false,'请选择品牌');
	  }
	  if(!$data['d_order']){
	     $this->end(false,'请填写排序');
	  }
       return $data; 
    }

     public function openActivity(){
		$this->begin($this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_channel','act'=>'index')));
		$id = $this->_request->get_get('id');
		$channel = $this->app->model('channel');
		$re = $channel->update(array('is_active'=>'true'),array('id'=>$id));
		if($re){
			$this->end(true,'保存成功');
		}else{
			$this->end(false,'保存失败');
		}
	}
	 public function closeActivity(){
		$this->begin($this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_channel','act'=>'index')));
		$id = $this->_request->get_get('id');
		$channel = $this->app->model('channel');
	    $re=
	    $channel->update(array('is_active'=>'false'),array('id'=>$id));
		if($re){
			$this->end(true,'保存成功');
		}else{
			$this->end(false,'保存失败');
		}
	}

   
	

}