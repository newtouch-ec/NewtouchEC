<?php exit(); ?>a:3:{s:5:"value";s:3026:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="sj_info mb_10">
	<div class="info_title"><?php echo kernel::single('base_view_helper')->modifier_t(((isset($this->_vars['setting']['title']) && ''!==$this->_vars['setting']['title'])?$this->_vars['setting']['title']:$this->_vars['___b2c']="搜索店内商品"),'b2c'); ?></div>
  <form action='<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => gallery,'arg0' => $this->_vars['data']['store_id'])); ?>' enctype="multipart/form-data" encoding="multipart/form-data" method="get" name="return_search">
	<div class="info_details">
	<div class="seach_line">
  <input type="hidden" value="all" name="searchRange">
	<span class="keys"><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>商品名<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>：</span><input name="keyword" type="text" class="width_110" maxlength="8"/>
	</div>
	<div class="seach_line">
	<span class="keys"><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>价格<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>：</span><input name="price1" type="text" class="width_42" maxlength="8"/><span><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>到<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></span><input name="price2" type="text" class="width_42" maxlength="8"/>
	</div>
	<div class="seach_line"><input type="submit" value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>搜索<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="search_anniu"></div>
	</div>
  </form>
</div>";s:8:"dateline";s:10:"1438939406";s:3:"ttl";s:1:"0";}