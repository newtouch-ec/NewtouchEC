<?php
class b2c_widgetinfo{

    function auto(){
		$obj = app::get('site')->model('widgets_instance');
		$info= $obj->getList('*');
		$arrInfo = array();
		foreach($info as $key=>$val){
			$params = $val['params'];
			$arrInfo[$val['widgets_id']] = $params;
			
		}
		error_log(var_export("<?php",true),3,__FILE__.'widgets.php');
		error_log(var_export($arrInfo,true),3,__FILE__.'widgets.php');
    }

	function auto_back(){
		$obj = app::get('site')->model('widgets_instance');
		$info= $obj->getList('*');
		foreach($info as $key=>$val){
			$params = json_decode($val['copy'],1);
			/*if(is_array($params)){
				$this->base64_cleaner_multi($params);
			}*/
			//echo "<pre>";print_r($params);
			$serialized_string = serialize($params);
		
			$sql = "update sdb_site_widgets_instance set params = '".$serialized_string."' where widgets_id=".$val['widgets_id'];
			$obj->db->exec($sql);
		}
    }

	function base64_cleaner_multi(&$params){
		foreach($params as $key=>&$val){
			if(is_array($val)){
				$this->base64_cleaner_multi($val);
				$params[$key] = $val;
			}else{
				$params[$key] = base64_decode($val);
			}
		}		
	}

	function base64_encoder_multi(&$params){
		foreach($params as $key=>&$val){
			if(is_array($val)){
				$this->base64_encoder_multi($val);
				$params[$key] = $val;
			}else{
				$params[$key] = base64_encode($val);
			}
		}		
	}
	

}

