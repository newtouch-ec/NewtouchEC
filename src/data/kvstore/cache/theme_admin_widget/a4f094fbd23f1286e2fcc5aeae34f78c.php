<?php exit(); ?>a:3:{s:5:"value";s:11891:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><style>
.tableform th{width:100px;}
</style>
<div class="tableform">
左侧图片选择：
<div class="widgetconfig">
<table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tbody><tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>图片：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td>
	<input type=hidden name="l[pic]" value="<?php echo $this->_vars['setting']['l']['pic']; ?>">
    <input name='l[pic]' class="imgsrc x-input" id="ad_picl"  vtype="img_url" required='true' value="<?php echo $this->_vars['setting']['l']['pic']; ?>">
    <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" index='ad_picl' onclick="addPic(this)">
	</td>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>图片描述：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><input type="text" class='x-input' autocomplete='off'  name="l[pic_txt]" value="<?php echo $this->_vars['setting']['l']['pic_txt']; ?>"></td>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>图片链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><input type="text" class='x-input' autocomplete='off'  vtype="purl"   name="l[pic_link]" value="<?php echo $this->_vars['setting']['l']['pic_link']; ?>"></td>
  </tr>
</tbody>
</table>
</div>
</div>
<div class="tableform">

右侧图片选择中间4张图片选择：
<div class="widgetconfig">
<table cellspacing="0" cellpadding="0" border="0" width="100%">

  <tbody>
  <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>描述<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>链接<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>名称<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>价格<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    </tr>
  <tr>
    <td>
	<input type=hidden name="c[0][pic]" value="<?php echo $this->_vars['setting']['c']['0']['pic']; ?>">
    <input name='c[0][pic]' class="imgsrc x-input" id="ad_pic0"  vtype="img_url" required='true'  value="<?php echo $this->_vars['setting']['c']['0']['pic']; ?>">
    <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" index='ad_pic0' onclick="addPic(this)">
	</td>
    <td><input type="text" class='x-input' autocomplete='off'  name="c[0][pic_txt]" value="<?php echo $this->_vars['setting']['c']['0']['pic_txt']; ?>"></td>
    <td><input type="text" class='x-input' autocomplete='off'  vtype="purl"  name="c[0][pic_link]" value="<?php echo $this->_vars['setting']['c']['0']['pic_link']; ?>"></td>
     <td><input type="text" class='x-input' autocomplete='off'  name="c[0][name]" value="<?php echo $this->_vars['setting']['c']['0']['name']; ?>"></td>
     <td><input type="text" class='x-input' autocomplete='off'  name="c[0][price]" value="<?php echo $this->_vars['setting']['c']['0']['price']; ?>"></td>
  </tr>
  <tr>
    <td>
	<input type=hidden name="c[1][pic]" value="<?php echo $this->_vars['setting']['c']['1']['pic']; ?>">
    <input name='c[1][pic]' class="imgsrc x-input" id="ad_pic1"  vtype="img_url" required='true'  value="<?php echo $this->_vars['setting']['c']['1']['pic']; ?>">
    <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" index='ad_pic1' onclick="addPic(this)">
	</td>
    <td><input type="text" class='x-input' autocomplete='off'  name="c[1][pic_txt]" value="<?php echo $this->_vars['setting']['c']['1']['pic_txt']; ?>"></td>
    <td><input type="text" class='x-input' autocomplete='off'  vtype="purl"  name="c[1][pic_link]" value="<?php echo $this->_vars['setting']['c']['1']['pic_link']; ?>"></td>
  <td><input type="text" class='x-input' autocomplete='off'  name="c[1][name]" value="<?php echo $this->_vars['setting']['c']['1']['name']; ?>"></td>
     <td><input type="text" class='x-input' autocomplete='off'  name="c[1][price]" value="<?php echo $this->_vars['setting']['c']['1']['price']; ?>"></td>
  </tr>
  <tr>
    <td>
	<input type=hidden name="c[2][pic]" value="<?php echo $this->_vars['setting']['c']['2']['pic']; ?>">
    <input name='c[2][pic]' class="imgsrc x-input" id="ad_pic2"  vtype="img_url" required='true'  value="<?php echo $this->_vars['setting']['c']['2']['pic']; ?>">
    <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" index='ad_pic2' onclick="addPic(this)">
	</td>
    <td><input type="text" class='x-input' autocomplete='off'  name="c[2][pic_txt]" value="<?php echo $this->_vars['setting']['c']['2']['pic_txt']; ?>"></td>

    <td><input type="text" class='x-input' autocomplete='off'  vtype="purl"   name="c[2][pic_link]" value="<?php echo $this->_vars['setting']['c']['2']['pic_link']; ?>"></td>
  <td><input type="text" class='x-input' autocomplete='off'  name="c[2][name]" value="<?php echo $this->_vars['setting']['c']['2']['name']; ?>"></td>
     <td><input type="text" class='x-input' autocomplete='off'  name="c[2][price]" value="<?php echo $this->_vars['setting']['c']['2']['price']; ?>"></td>
  </tr>
  <tr>
    <td>
	<input type=hidden name="c[3][pic]" value="<?php echo $this->_vars['setting']['c']['3']['pic']; ?>">
    <input name='c[3][pic]' class="imgsrc x-input" id="ad_pic3"  vtype="img_url" required='true'  value="<?php echo $this->_vars['setting']['c']['3']['pic']; ?>">
    <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" index='ad_pic3' onclick="addPic(this)">
	</td>
    <td><input type="text" class='x-input' autocomplete='off'  name="c[3][pic_txt]" value="<?php echo $this->_vars['setting']['c']['3']['pic_txt']; ?>"></td>
    <td><input type="text" class='x-input' autocomplete='off'  vtype="purl"   name="c[3][pic_link]" value="<?php echo $this->_vars['setting']['c']['3']['pic_link']; ?>"></td>
  <td><input type="text" class='x-input' autocomplete='off'  name="c[3][name]" value="<?php echo $this->_vars['setting']['c']['3']['name']; ?>"></td>
     <td><input type="text" class='x-input' autocomplete='off'  name="c[3][price]" value="<?php echo $this->_vars['setting']['c']['3']['price']; ?>"></td>
  </tr>
</tbody>
</table>
</div>
</div>

<script>
	function addPic(obj){
			var url='btools-alertpages.html?dd='+Date.now()+'&goto='+encodeURIComponent("btools-image_broswer.html?type=big");
			Ex_Loader('modedialog',function(){
			return new imgDialog(url,{onCallback:function(image_id,image_src){
					 $($(obj).get('index')).value=image_src;
			}})	;
			});
		}
</script>";s:8:"dateline";s:10:"1409391271";s:3:"ttl";s:1:"0";}