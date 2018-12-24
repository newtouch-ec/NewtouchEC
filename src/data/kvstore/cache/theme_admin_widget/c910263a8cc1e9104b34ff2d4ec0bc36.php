<?php exit(); ?>a:3:{s:5:"value";s:2207:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="tableform widgetconfig">
<div class="division">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>当导航数超过:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><input name="max_leng" value="<?php echo $this->_vars['setting']['max_leng']; ?>" size=15/></td>
  </tr>
  <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>显示文字：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><input name="showinfo" value="<?php echo $this->_vars['setting']['showinfo']; ?>" size=15/></td>
  </tr>
  <!-- <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>当前className：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td> -->
    <input name="className" type="hidden" value="<?php echo ((isset($this->_vars['setting']['className']) && ''!==$this->_vars['setting']['className'])?$this->_vars['setting']['className']:'menu_index'); ?>" size=15/>
    <!-- </td>
  </tr>	 -->
</table>

</div>
</div>";s:8:"dateline";s:10:"1407742064";s:3:"ttl";s:1:"0";}