<?php exit(); ?>a:3:{s:5:"value";s:10364:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div  class="tableform">
    <div class="division widgetconfig" style="margin:-5px 0 0 0">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>选择节点:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> </th>
        <td>
            <?php echo $this->ui()->input(array('type' => 'select','name' => 'node_id','value' => $this->_vars['setting']['node_id'],'vtype' => 'required','caution' => kernel::single('base_view_helper')->modifier_t($this->_vars['___content']='请选择上级节点','gift'),'rows' => $this->_vars['setting']['selectmaps'],'valueColumn' => "node_id",'labelColumn' => "node_name")); $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>顶级节点请选'无'<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
        </td>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>节点下显示文章数:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> </th>
        <td ><?php echo $this->ui()->input(array('type' => 'text','name' => 'limit','value' => $this->_vars['setting']['limit'],'size' => 4));?></td>
      </tr>
      <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>深度:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> </th>
        <td ><?php echo $this->ui()->input(array('type' => 'text','name' => 'lv','value' => $this->_vars['setting']['lv'],'size' => 4));?></td>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>是否显示子节点名称:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> </th>
        <td >
            <input type="radio" name="shownode" value="1" <?php if( $this->_vars['setting']['shownode']!=0 ){ ?> checked <?php } ?> > <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>是<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
            <input type="radio" name="shownode" value="0" <?php if( $this->_vars['setting']['shownode']==0 ){ ?> checked <?php } ?>> <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>否<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
        </td>
      </tr>
      <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>显示其节点下文章:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> </th>
        <td >
            <input type="radio" name="showallart" value="1" <?php if( $this->_vars['setting']['showallart']==1 ){ ?> checked <?php } ?> > <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>是<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
            <input type="radio" name="showallart" value="0" <?php if( $this->_vars['setting']['showallart']!=1 ){ ?> checked <?php } ?> > <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>否<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
        </td>
        <th>排序方式:</th>
        <td>
        	按
            <select name="order_type">
              <?php if($this->_vars['setting']['select_order']['order_type'])foreach ((array)$this->_vars['setting']['select_order']['order_type'] as $this->_vars['key'] => $this->_vars['item']){ ?>
            	<option value="<?php echo $this->_vars['key']; ?>" <?php if( $this->_vars['key']==$this->_vars['setting']['order_type'] ){ ?>selected="selected"<?php } ?> ><?php echo $this->_vars['item']; ?></option>
              <?php } ?>
            </select>
            <select name="order">
              <?php if($this->_vars['setting']['select_order']['order'])foreach ((array)$this->_vars['setting']['select_order']['order'] as $this->_vars['key'] => $this->_vars['item']){ ?>
            	<option value="<?php echo $this->_vars['key']; ?>" <?php if( $this->_vars['key']==$this->_vars['setting']['order'] ){ ?>selected="selected"<?php } ?> ><?php echo $this->_vars['item']; ?></option>
              <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>去除父节点链接:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> </th>
        <td >
            <input type="radio" name="stripparenturl" value="1" <?php if( $this->_vars['setting']['stripparenturl'] ==1 ){ ?> checked <?php } ?> > <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>是<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
            <input type="radio" name="stripparenturl" value="0" <?php if( $this->_vars['setting']['stripparenturl'] !=1 ){ ?> checked <?php } ?> > <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>否<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
        </td>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>节点下显示子节点数:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> </th>
        <td ><?php echo $this->ui()->input(array('type' => 'text','name' => 'limit_node','value' => ((isset($this->_vars['setting']['limit_node']) && ''!==$this->_vars['setting']['limit_node'])?$this->_vars['setting']['limit_node']:4),'size' => 4));?></td>
    </tr>
        <!--
        <th>文章样式统一</th>
        <td><input type="checkbox" name="styleart" value="1" <?php if( $this->_vars['setting']['styleart']==='1' ){ ?> checked="checked" <?php } ?> ></td>
        -->
    </table>
    </div>
</div>

";s:8:"dateline";s:10:"1431311003";s:3:"ttl";s:1:"0";}