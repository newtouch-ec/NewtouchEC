<?php exit(); ?>a:3:{s:5:"value";s:1700:"<div class="tableform">
    <div class="division">
      标签：<input name="tag0" class="inputstyle" value="<?php echo $this->_vars['setting']['tag']; ?>">
      <br />
      显示商品数：<input type="text" name='num0' value='<?php echo $this->_vars['setting']['num0']; ?>'>
      <br />
      选择商品：<?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'filter' => $this->_vars['data']['cat_id'],'cat_filter' => $this->_vars['data']['cat_id'],'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "list[0][linkid]",'linkid' => $this->_vars['setting']['list']['0']['linkid'],'obj_name' => 'list[0][goods]','value' => $this->_vars['setting']['list']['0']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>
    </div>
    <div class="division">
      标签：<input name="tag1" class="inputstyle" value="<?php echo $this->_vars['setting']['tag1']; ?>">
      <br />
      显示商品数：<input type="text" name='num1' value='<?php echo $this->_vars['setting']['num1']; ?>'>
      <br />
      选择商品：<?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'filter' => $this->_vars['data']['cat_id'],'cat_filter' => $this->_vars['data']['cat_id'],'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "list[1][linkid]",'linkid' => $this->_vars['setting']['list']['1']['linkid'],'obj_name' => 'list[1][goods]','value' => $this->_vars['setting']['list']['1']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>
    </div>
</div>";s:8:"dateline";s:10:"1407661681";s:3:"ttl";s:1:"0";}