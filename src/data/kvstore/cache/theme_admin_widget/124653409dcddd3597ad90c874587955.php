<?php exit(); ?>a:3:{s:5:"value";s:4600:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="tableform">
  <div class="widgetconfig">
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
      <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>logo图：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td>
          <input type="text" name='logo' class="imgsrc" id="logo" value="<?php echo $this->_vars['setting']['logo']; ?>"><input type="button" value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addLogo()">
        </td>
      </tr>
      <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>logo图链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td><input type="text" name="logo_link" value="<?php echo $this->_vars['setting']['logo_link']; ?>"></td>
      </tr>
      <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>广告图：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td>
          <input type="text" name='pic' class="imgsrc" id="pic" value="<?php echo $this->_vars['setting']['pic']; ?>"><input type="button" value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic()">
        </td>
      </tr>
      <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>广告图链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td><input type="text" name="pic_link" value="<?php echo $this->_vars['setting']['pic_link']; ?>"></td>
      </tr>
    </table>
  </div>
</div>

<script>
  function addLogo(){
    var url='index.php?app=desktop&act=alertpages&goto='+encodeURIComponent("index.php?app=image&ctl=admin_manage&act=image_broswer&type=big");
    Ex_Loader('modedialog',function(){
      return new imgDialog(url,{onCallback:function(image_id,image_src){
        $('logo').value=image_src;
      }});
    });
  }
  function addPic(){
    var url='index.php?app=desktop&act=alertpages&goto='+encodeURIComponent("index.php?app=image&ctl=admin_manage&act=image_broswer&type=big");
    Ex_Loader('modedialog',function(){
      return new imgDialog(url,{onCallback:function(image_id,image_src){
        $('pic').value=image_src;
      }});
    });
  }
</script>";s:8:"dateline";s:10:"1409121111";s:3:"ttl";s:1:"0";}