<?php exit(); ?>a:3:{s:5:"value";s:810:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="tableform widgetconfig">
<h5><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>用户自定义版块内容:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></h5>
<?php $this->_vars["userhtml"]=$this->_vars['setting']['usercustom'];  echo $this->ui()->input(array('type' => "html",'name' => "usercustom",'value' => $this->_vars['userhtml']));?>
</div>";s:8:"dateline";s:10:"1408608897";s:3:"ttl";s:1:"0";}