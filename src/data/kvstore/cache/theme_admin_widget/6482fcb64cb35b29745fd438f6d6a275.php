<?php exit(); ?>a:3:{s:5:"value";s:4756:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><style id='thridpartystyle'>
.trustlogin { background:url(<?php echo $this->_vars['data']['res_url']; ?>/icons/thridparty1.gif) no-repeat left; padding-left:18px; height:20px; line-height:20px; }
#accountlogin{display:none;cursor:pointer;padding:5px;width:170px;z-index:100; position:absolute; border:2px solid #BADBF2; background:#fff; }
#accountlogin span{display:block;width:80px;height:27px;float:left;margin:2px;_display:inline;_margin:2px 1px 2px 2px;}
#memberBar_<?php echo $this->_vars['widgets_id']; ?> em, #loginBar_<?php echo $this->_vars['widgets_id']; ?> em{vertical-align: top;}
</style>


<span id="loginBar_<?php echo $this->_vars['widgets_id']; ?>" style="" class="ie-bug">
	<?php if($this->_vars['data']['login_content'])foreach ((array)$this->_vars['data']['login_content'] as $this->_vars['login']){  echo $this->_vars['login'];  } ?>
	<span><?php echo $this->_vars['setting']['welcome']; ?></span>&nbsp;&nbsp;<a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_passport,'act' => signup)); ?>" style="color:rgb(234,85,4);"><!--<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>-->免费注册<!--<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>--></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_passport,'act' => login)); ?>"><!--<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>-->登录<!--<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>--></a>&nbsp;&nbsp;|&nbsp;&nbsp;
</span>
<span id="memberBar_<?php echo $this->_vars['widgets_id']; ?>" style="display:none;">
  <span id="uname_<?php echo $this->_vars['widgets_id']; ?>"></span><em class="line"></em>
  &nbsp;&nbsp;<a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_member,'act' => index)); ?>"><!--<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>-->会员中心<!--<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>--></a><em class="line"></em>&nbsp;&nbsp;|&nbsp;&nbsp;
  <a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_passport,'act' => logout)); ?>"><!--<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>-->退出<!--<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>--></a>&nbsp;&nbsp;|&nbsp;&nbsp;
</span>
<script>
var e = Cookie.read('UNAME')?'您好，'+Cookie.read('UNAME')+'!':'';
/*
	new Request({
		url:'<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_passport,'act' => getuname)); ?>',
		method:'post',
		onComplete:function(e){
			$("memberBar_<?php echo $this->_vars['widgets_id']; ?>").getParent().setStyle('width','200px');
		*/
			if(e){
				$("uname_<?php echo $this->_vars['widgets_id']; ?>").innerHTML = e;
				$("memberBar_<?php echo $this->_vars['widgets_id']; ?>").setStyle('display','inline-block');
				if($("loginBar_<?php echo $this->_vars['widgets_id']; ?>"))
				$("loginBar_<?php echo $this->_vars['widgets_id']; ?>").setStyle('display','none');
			}
			else{
				$("loginBar_<?php echo $this->_vars['widgets_id']; ?>").setStyle('display','inline-block');
				if($("memberBar_<?php echo $this->_vars['widgets_id']; ?>"))
				$("memberBar_<?php echo $this->_vars['widgets_id']; ?>").setStyle('display','none');
			}
		/*
		},
		data:''
		}).send();
		*/
</script>


";s:8:"dateline";s:10:"1440483649";s:3:"ttl";s:1:"0";}