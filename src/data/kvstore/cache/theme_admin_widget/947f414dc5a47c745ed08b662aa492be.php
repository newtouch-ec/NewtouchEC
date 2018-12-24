<?php exit(); ?>a:3:{s:5:"value";s:6723:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div id="goods_exshow_config" class="tableform">
	<div class="division">
		<h4><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>tab项<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></h4>
		<div class="tableform">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>tab名称：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
					<td>
						<input type="text" name='tab[0][title]' value="<?php echo $this->_vars['setting']['tab']['0']['title']; ?>" class="inputstyle" >
					</td>
					<td>
						<?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "tab[0][goods_id]",'obj_name' => 'tab[0][goods]','linkid' => $this->_vars['setting']['tab']['0']['goods_id'],'value' => $this->_vars['setting']['tab']['0']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red;">请选择5件商品</span>
					</td>
				</tr>
				<tr>
					<th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>tab名称：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
					<td>
						<input type="text" name='tab[1][title]' value="<?php echo $this->_vars['setting']['tab']['1']['title']; ?>" class="inputstyle" >
					</td>
					<td>
						<?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "tab[1][goods_id]",'obj_name' => 'tab[1][goods]','linkid' => $this->_vars['setting']['tab']['1']['goods_id'],'value' => $this->_vars['setting']['tab']['1']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red;">请选择5件商品</span>
					</td>
				</tr>
				<tr>
					<th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>tab名称：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
					<td>
						<input type="text" name='tab[2][title]' value="<?php echo $this->_vars['setting']['tab']['2']['title']; ?>" class="inputstyle" >
					</td>
					<td>
						<?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "tab[2][goods_id]",'obj_name' => 'tab[2][goods]','linkid' => $this->_vars['setting']['tab']['2']['goods_id'],'value' => $this->_vars['setting']['tab']['2']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red;">请选择5件商品</span>
					</td>
				</tr>
				<tr>
					<th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>tab名称：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
					<td>
						<input type="text" name='tab[3][title]' value="<?php echo $this->_vars['setting']['tab']['3']['title']; ?>" class="inputstyle" >
					</td>
					<td>
						<?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "tab[3][goods_id]",'obj_name' => 'tab[3][goods]','linkid' => $this->_vars['setting']['tab']['3']['goods_id'],'value' => $this->_vars['setting']['tab']['3']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red;">请选择5件商品</span>
					</td>
				</tr>
				<tr>
					<th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>tab名称：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
					<td>
						<input type="text" name='tab[4][title]' value="<?php echo $this->_vars['setting']['tab']['4']['title']; ?>" class="inputstyle" >
					</td>
					<td>
						<?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "tab[4][goods_id]",'obj_name' => 'tab[4][goods]','linkid' => $this->_vars['setting']['tab']['4']['goods_id'],'value' => $this->_vars['setting']['tab']['4']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red;">请选择5件商品</span>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>

";s:8:"dateline";s:10:"1432862989";s:3:"ttl";s:1:"0";}