<?php
class business_mdl_storeviolationpro extends business_mdl_storeviolation{
	/**
	 * 构造方法
	 * @param object model相应app的对象
	 * @return null
	 */
    public function __construct($app){
		$this->app = app::get('business');
		$this->table_name = app::get('business')->model('storeviolation')->tableName;
        parent::__construct($app);
		
        $this->use_meta();
    }

	public function get_schema(){
        $columns = $this->app->model('storeviolation')->get_schema();
		
		$columns['in_list'] = array('store_id','score','processed','cat_id','last_modify','remark');
		$columns['default_in_list'] = array('store_id','score','processed','cat_id','remark');
        return $columns;
    }

	function table_name($real=false){
         $object = $this->app->model('storeviolation');
        $table_name = substr(get_class($object),strlen($this->app->app_id)+5);
        if($real){
            return kernel::database()->prefix.$this->app->app_id.'_'.$table_name;
        }else{
            return $table_name;
        }
    }

  

	public function count($filter = null) {
        $filter = array_merge(array('processed|in' => array('1','0')), $filter);
        return  parent::count($filter);
    }

    public function getList($cols = '*', $filter = array(), $offset = 0, $limit = -1, $orderType = null) {
		$filter = array_merge(array('processed|in' => array('1','0')), $filter);
        if(!$cols){
            $cols = $this->defaultCols;
        }
        if(!empty($this->appendCols)){
            $cols.=','.$this->appendCols;
        }
        if($this->use_meta){
             $meta_info = $this->prepare_select($cols);
        }
		$orderType = $orderType?$orderType:$this->defaultOrder;
		$sql = 'SELECT '.$cols.' FROM `'.$this->table_name(true).'` WHERE '.$this->_filter($filter);
        if($orderType)$sql.=' ORDER BY '.(is_array($orderType)?implode($orderType,' '):$orderType);
        $data = $this->db->selectLimit($sql,$limit,$offset);
        $this->tidy_data($data, $cols);
        if($this->use_meta && count($meta_info['metacols']) && $data){
            foreach($meta_info['metacols'] as $col){
                $obj_meta = new dbeav_meta($this->table_name(true),$col,$meta_info['has_pk']);
                $obj_meta->select($data);
            }
        }
        return $data;
    }

}
