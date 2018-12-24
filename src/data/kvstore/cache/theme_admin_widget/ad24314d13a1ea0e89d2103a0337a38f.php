<?php exit(); ?>a:3:{s:5:"value";s:2982:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="tableform">
<label for="f_tag"><?php $this->_tag_stack[] = array('t', array()); $this->__view_helper_model['base_view_helper']->block_t(array(), null, $this); ob_start(); ?>标签<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> </label>
    <select style="width:120px" id="f_tag" name="tag[]" size="7" multiple="multiple">
      <option style="font-weight:bold" value="_ANY_" selected="selected"><?php $this->_tag_stack[] = array('t', array()); $this->__view_helper_model['base_view_helper']->block_t(array(), null, $this); ob_start(); ?>全部<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></option>
      <?php $this->_env_vars['foreach']["_s"]=array('total'=>count($this->_vars['data']['tags']),'iteration'=>0);foreach ((array)$this->_vars['data']['tags'] as $this->_vars['tag']){
                        $this->_env_vars['foreach']["_s"]['first'] = ($this->_env_vars['foreach']["_s"]['iteration']==0);
                        $this->_env_vars['foreach']["_s"]['iteration']++;
                        $this->_env_vars['foreach']["_s"]['last'] = ($this->_env_vars['foreach']["_s"]['iteration']==$this->_env_vars['foreach']["_s"]['total']);
 if( in_array($this->_vars['tag']['tag_id'],$this->_vars['setting']['tag']) ){ ?>
      <option selected="selected" <?php if( $this->_env_vars['foreach']['_s']['iteration'] %2==1 ){ ?>  class="row2"<?php } ?> value="<?php echo $this->_vars['tag']['tag_id']; ?>"><?php echo $this->_vars['tag']['tag_name']; ?></option>
      <?php }else{ ?>
      <option<?php if( $this->_env_vars['foreach']['_s']['iteration'] %2==1 ){ ?> class="row2"<?php } ?> value="<?php echo $this->_vars['tag']['tag_id']; ?>"><?php echo $this->_vars['tag']['tag_name']; ?></option>
      <?php }  } unset($this->_env_vars['foreach']["_s"]); ?>
    </select>  
</div>
<div class="tableform">	
	显示商品数：<input type="text" name='show_nums' value='<?php echo $this->_vars['setting']['show_nums']; ?>'>
</div>
<div class="tableform">	
	选择商品：<?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'filter' => $this->_vars['goodslink_filter'],'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "linkid",'linkid' => $this->_vars['setting']['linkid'],'value' => $this->_vars['setting']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>
</div>";s:8:"dateline";s:10:"1409549828";s:3:"ttl";s:1:"0";}