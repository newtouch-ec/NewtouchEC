<?php



 class cellphone_ctl_admin_perauction extends desktop_controller{
     
	 
	 function __construct($app){
        parent::__construct($app);
        $this->router = app::get('desktop')->router();
        $this->_request = kernel::single('base_component_request');
    }


     function index(){
	 
	 $this->finder('cellphone_mdl_perauction',
		    array('actions' =>array(
                  array(
                    'label' => app::get('cellphone')->_('添加商家拍卖'),
                    'icon' => 'add.gif',
                    'href' => 'index.php?app=cellphone&ctl=admin_perauction&act=add',
                   // 'target' => "_blank",
                    ),

                  array('label' => "批量操作",
                        'icon' => 'batch.gif',
                        'group' => array(
                        
                            array('label' => app :: get('b2c') -> _('排序'), 'icon' => 'download.gif', 'submit' => 'index.php?app=cellphone&ctl=admin_perauction&act=singleBatchEdit&p[0]=dorder', 'target' => 'dialog'),
					                    ),
                        ),

                  ),
		    	'title'=>'商家拍卖列表',    
                'use_buildin_set_tag'=>false,
                'use_buildin_filter'=>false,
                'use_buildin_tagedit'=>false,
                'use_buildin_export'=>false,
                'use_buildin_import'=>false,
                'allow_detail_popup'=>true,
                'use_view_tab'=>false,));

	 }

	 function add(){
     $filter = array('act_open'=>'true','act_type|noequal'=>0);
     $this->pagedata['filter'] = $filter;
	 $this->pagedata['reUrl'] = $this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_perauction','act'=>'index'));
	 $this->page('admin/perauction/add.html');
	  }

   


	 function toAdd(){
		 
     $this->begin($this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_perauction','act'=>'index'))); 
	 $data = $this->get_data();
	
	 $perauction = $this->app->model('perauction');
     foreach( $data['act_id'] as $value){
      $ndata = array('id'=>$data['id'],'act_id'=>$value,'is_active'=>$data['is_active']);
	  $re = $perauction->save($ndata);
	  if(!$re){
	  $this->end(false,'保存失败');
	  }
	 }
     $this->end(true,'保存成功');
	  
	  
	 }


	 public function get_data(){

      $data = $this->_request->get_post();
     
	  if(!$data['act_id']){
	     $this->end(false,'请选择商家活动');
	  }

       return $data; 
    }

     public function openActivity(){
	   $this->begin($this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_perauction','act'=>'index')));
	   $id = $this->_request->get_get('id');
	   $perauction = $this->app->model('perauction');
	   $re = $perauction->update(array('is_active'=>'true'),array('id'=>$id));
		if($re){
			$this->end(true,'保存成功');
		}else{
			$this->end(false,'保存失败');
		}
	}
	public function closeActivity(){
		$this->begin($this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_perauction','act'=>'index')));
		$id = $this->_request->get_get('id');
		$perauction = $this->app->model('perauction');
	    $re=
	  $perauction->update(array('is_active'=>'false'),array('id'=>$id));
		if($re){
			$this->end(true,'保存成功');
		}else{
			$this->end(false,'保存失败');
		}
	}

   
	function singleBatchEdit($editType = '') {
        $newFilter = $_POST;
        unset($newFilter['app']);
        unset($newFilter['ctl']);
        unset($newFilter['act']);
        unset($newFilter['_finder']);
        unset($newFilter['marketable']);
        unset($newFilter['_DTYPE_BOOL']);

        if ($_POST['isSelectedAll'] == '_ALL_')
            $_POST['id'][0] = '_ALL_';
        if (count($_POST['id']) == 0 && $_POST['_finder']['select'] != 'multi' && !$_POST['_finder']['id'] && !$_POST['filter']) {
            echo __('请选择记录');
            exit;
        } 
        if ($_POST['filter']) {
            $_POST['_finder'] = unserialize($_POST['filter']);
            $editType = $_POST['updateAct'];
        } 
        // 选中记录的ID经序列化后保存于页面
        $this -> pagedata['filter'] = serialize($_POST['id']);
        $this -> pagedata['catfilter'] = array('parent_id|noequal'=>0);
        $this -> pagedata['editInfo'] = array('count' => count($_POST['id']));

        $this -> display('admin/perauction/batch/batchEdit' . $editType . '.html');
    } 


    function saveBatchEdit() { 

        $filter = unserialize($_POST['filter']); 
     
        switch($_POST['updateAct']){
		
		 case 'dorder':
		$this->begin($this->router->gen_url(array('app'=>'cellphone','ctl'=>'admin_perauction','act'=>'index')));
        $perauction = $this->app->model('perauction');
		$result = true;
		foreach($filter as $val){
		if(!$perauction->update(array('d_order'=>$_POST['orderval']),array('id'=>$val))){
        $result=false;
        $this->end(false,'操作失败');
		
		   }
		
       }
	   if($result){
	     $this->end(true,'批量操作成功');
		
	   }
       else{
	    echo $GLOBALS['php_errormsg'];
	   }
		
		break;
		
		default:
		break;

		}

       
      } 

}