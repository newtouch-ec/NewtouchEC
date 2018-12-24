<?php exit(); ?>a:3:{s:5:"value";s:979:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="tableform widgetconfig">
<div class="division">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'business')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'business'), null, $this); ob_start(); ?>Title:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><?php echo $this->ui()->input(array('type' => "text",'name' => "title",'value' => ((isset($this->_vars['setting']['title']) && ''!==$this->_vars['setting']['title'])?$this->_vars['setting']['title']:'GoodsSearch')));?></td>
  </tr>
</table>
</div>
</div>";s:8:"dateline";s:10:"1439263088";s:3:"ttl";s:1:"0";}