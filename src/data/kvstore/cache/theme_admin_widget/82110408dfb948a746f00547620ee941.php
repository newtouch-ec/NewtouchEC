<?php exit(); ?>a:3:{s:5:"value";s:4764:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="tableform">
<div class="widgetconfig">
<table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tbody><tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>广告尺寸：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>宽<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
  <input type="text" name="ad_pic_width" value="<?php echo $this->_vars['setting']['ad_pic_width']; ?>" style="width:40px">px <?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>高<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?><input type="text" name="ad_pic_height" style="width:40px" value="<?php echo $this->_vars['setting']['ad_pic_height']; ?>">px
	</td>
  </tr>
  <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>图片：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td>
	<input type=hidden name="ad_pic" value="<?php echo $this->_vars['setting']['ad_pic']; ?>"><input name='ad_pic' class="imgsrc" id="ad_pic" value="<?php echo $this->_vars['setting']['ad_pic']; ?>"><input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic()">
	</td>
  </tr>
   <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>图片描述：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><input type="text" name="ad_pic_txt" value="<?php echo $this->_vars['setting']['ad_pic_txt']; ?>"></td>
  </tr>
  <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>图片链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><input type="text" name="ad_pic_link" value="<?php echo $this->_vars['setting']['ad_pic_link']; ?>"></td>
  </tr>
</tbody></table>
</div>
</div>
<script>
	function addPic(){
			var url='index.php?app=desktop&act=alertpages&goto='+encodeURIComponent("index.php?app=image&ctl=admin_manage&act=image_broswer&type=big");
			Ex_Loader('modedialog',function(){
			return new imgDialog(url,{onCallback:function(image_id,image_src){
					 $('ad_pic').value=image_src;
			}})	;
			});
		}
</script>";s:8:"dateline";s:10:"1407565573";s:3:"ttl";s:1:"0";}