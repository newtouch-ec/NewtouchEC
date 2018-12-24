<?php
function theme_widget_ma_index_login(&$setting,&$render){
	$auth = pam_auth::instance(pam_account::get_account_type('member'));
	$auth->set_appid('b2c');
	//$auth->set_redirect_url(base64_encode(kernel::base_url(1)));
	$auth->set_redirect_url(base64_encode(app::get('site')->router()->gen_url(array('app'=>'b2c','ctl'=>'site_passport','act'=>'post_login','arg'=>base64_encode(kernel::base_url(1))))));
	$setting['callback'] = $auth->get_callback_url_homepage('pam_passport_basic');
	
    if(app::get('b2c')->getConf('system.admin_verycode') || (app::get('b2c')->getConf('system.admin_error_login_times')>'3' && intval(app::get('b2c')->getConf('system.admin_error_login_time')+3600)>time())){
        $setting['show_varycode']=true;
    }else{
        $setting['show_varycode']=false;
    }
    
    $obj_member = app :: get('b2c') -> model('members');
    $omember = $obj_member -> get_current_member();
    $oMsg = kernel::single('b2c_message_msg');
    $no_read = $oMsg->getList('*',array('to_id' => $omember['member_id'],'has_sent' => 'true','for_comment_id' => 'all','inbox' => 'true','mem_read_status' => 'false'));
    $setting['no_read']=count($no_read);
    return $setting;
}
?>
