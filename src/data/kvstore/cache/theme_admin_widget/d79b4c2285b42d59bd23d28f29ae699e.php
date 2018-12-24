<?php exit(); ?>a:3:{s:5:"value";s:2766:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="tableform widgetconfig">
<div class="division" style='border:1px solid #d8d8d8;'>
<table width="100%" border="0" cellspacing="0" cellpadding="0">  
  <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>标题：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><?php echo $this->ui()->input(array('type' => "text",'name' => "title",'value' => ((isset($this->_vars['setting']['title']) && ''!==$this->_vars['setting']['title'])?$this->_vars['setting']['title']:'请填写标题')));?></td>
  </tr>
  <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>显示商品数：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><?php echo $this->ui()->input(array('name' => "limit",'value' => ((isset($this->_vars['setting']['limit']) && ''!==$this->_vars['setting']['limit'])?$this->_vars['setting']['limit']:'3'),'size' => 8,'required' => "true",'type' => "digits",'id' => 'show_limit'));?></td>
  </tr>
  <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'business')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'business'), null, $this); ob_start(); ?>推荐依据：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td>
            <select name="ranking"> 
    <?php if($this->_vars['data']['orderby'])foreach ((array)$this->_vars['data']['orderby'] as $this->_vars['key'] => $this->_vars['orderby']){ ?>
    <option value="<?php echo $this->_vars['orderby']['sql']; ?>" <?php if( $this->_vars['setting']['ranking']==$this->_vars['orderby']['sql'] ){ ?>selected<?php } ?>><?php echo $this->_vars['orderby']['label']; ?></option>
    <?php } ?>
    </select></td>
  </tr>
</table>
</div>
</div>
";s:8:"dateline";s:10:"1407566599";s:3:"ttl";s:1:"0";}