<?php exit(); ?>a:3:{s:5:"value";s:8509:"<?php $this->__view_helper_model['desktop_view_helper'] = kernel::single('desktop_view_helper');  $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="tableform">
<div class="widgetconfig">
<table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tbody><tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>广告尺寸：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>宽<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
  <input type="text" vtype="digits" required="true" class='x-input' autocomplete='off'  name="ad_pic_width" value="<?php echo $this->_vars['setting']['ad_pic_width']; ?>" style="width:40px">px <?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>高<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?><input type="text" vtype="digits" required="true" class='x-input' autocomplete='off' name="ad_pic_height" style="width:40px" value="<?php echo ((isset($this->_vars['setting']['ad_pic_height']) && ''!==$this->_vars['setting']['ad_pic_height'])?$this->_vars['setting']['ad_pic_height']:90); ?>">px
	</td>
  </tr>
  <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>图片：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td>
	<input type=hidden name="ad_pic" value="<?php echo $this->_vars['setting']['ad_pic']; ?>"><input name='ad_pic' class="imgsrc x-input " vtype="img_url" required='true' id="ad_pic" value="<?php echo $this->_vars['setting']['ad_pic']; ?>"><input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic()">
	</td>
  </tr>
   <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>图片描述：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><input type="text" class='x-input' autocomplete='off'  name="ad_pic_txt" value="<?php echo $this->_vars['setting']['ad_pic_txt']; ?>"></td>
  </tr>
  <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>图片链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><input type="text" class='x-input ' vtype="purl" autocomplete='off'  name="ad_pic_link" value="<?php echo $this->_vars['setting']['ad_pic_link']; ?>">
    </td>
  </tr>
   <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>链接类型：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td>
    <label><input type="radio" name="link_type" <?php if( $this->_vars['setting']['link_type']=='default' or empty($this->_vars['setting']['link_type']) ){ ?>checked<?php } ?> value="default">&nbsp;默认</label>
    <label><input type="radio" name="link_type" <?php if( $this->_vars['setting']['link_type']=='map' ){ ?>checked<?php } ?> value="map">&nbsp;图片热区域</label>
    </td>
  </tr>
  <tr id='link_map' <?php if( $this->_vars['setting']['link_type']=='default' or empty($this->_vars['setting']['link_type']) ){ ?>style="display:none;"<?php } ?>>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>区域链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><?php echo $this->ui()->input(array('required' => true,'type' => 'select','name' => "area_type",'options' => array('rect'=>'矩形','circle'=>'圆形','poly'=>'多边形'),'value' => ((isset($this->_vars['setting']['area_type']) && ''!==$this->_vars['setting']['area_type'])?$this->_vars['setting']['area_type']:'rect')));?>
    范围：<input type="text" class='x-input' autocomplete='off'  name="link_area" value="<?php echo $this->_vars['setting']['link_area']; ?>">&nbsp;&nbsp;
    <?php $this->_tag_stack[] = array('help', array()); $this->__view_helper_model['desktop_view_helper']->block_help(array(), null, $this); ob_start(); ?>
       说明：坐标点以“,”分割，多组使用“|”线分割<br>矩形：请标注左上坐标和右下坐标点(x1,y1,x2,y2)。<br>&nbsp;&nbsp;&nbsp;&nbsp;例：(0,0,100,100) 左上(0,0)右下(100,100)
       圆形：请标注中心坐标和半径。(x1,y1,r)<br>&nbsp;&nbsp;&nbsp;&nbsp;例：(100,100,50) 中心点(100,100)半径50px
       多边形：设置多边形各个点的坐标。(x1,y1,x2,y2,x3,y3,....)<br>&nbsp;&nbsp;&nbsp;&nbsp;例：0,0,30,0,0,30 第1个点(0,0)，第2个点(30,0)，第3个点(0,30)

    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['desktop_view_helper']->block_help($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
    </td>
  </tr>
</tbody></table>
</div>
</div>
<script>
(function(){
    $$('input[type=radio]').each(function(el){
    el.addEvent('click',function(e){
          if(this.checked==true){
             $('link_map').setStyle('display',this.value=='map'?'':'none');
          }
        });
    });
})();
	function addPic(){
			var url='btools-alertpages.html?dd='+Date.now()+'&goto='+encodeURIComponent("btools-image_broswer.html?type=big");
			Ex_Loader('modedialog',function(){
			return new imgDialog(url,{onCallback:function(image_id,image_src){
					 $('ad_pic').value=image_src;
			}})	;
			});
		}
</script>";s:3:"ttl";i:0;s:8:"dateline";i:1528887765;}