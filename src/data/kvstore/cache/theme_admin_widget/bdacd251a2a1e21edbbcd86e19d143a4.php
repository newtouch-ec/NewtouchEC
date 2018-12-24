<?php exit(); ?>a:3:{s:5:"value";s:7904:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="tableform widgetconfig">
<div class="division" style='border:1px solid #d8d8d8;'>
<table width="100%" border="0" cellspacing="0" cellpadding="0">  
  <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>标题：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><?php echo $this->ui()->input(array('type' => "text",'name' => "title",'value' => ((isset($this->_vars['setting']['title']) && ''!==$this->_vars['setting']['title'])?$this->_vars['setting']['title']:'请填写标题')));?></td>
  </tr>
</table>
</div>
<div class="division" id="add_ad_pic" style="border:1px solid #d8d8d8;">

</div>
<div class="division">
<?php echo $this->ui()->input(array('type' => "storegoodsfilter",'value' => $this->_vars['setting']['adjunct']['items']['0'],'member_id' => $this->_vars['data']['store']['account_id']));?>
</div>
<div class="division" style='border:1px solid #d8d8d8;'>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'business')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'business'), null, $this); ob_start(); ?>排行依据：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td>
            <select name="ranking"> 
    <?php if($this->_vars['data']['orderby'])foreach ((array)$this->_vars['data']['orderby'] as $this->_vars['key'] => $this->_vars['orderby']){ ?>
    <option value="<?php echo $this->_vars['orderby']['sql']; ?>" <?php if( $this->_vars['setting']['ranking']==$this->_vars['orderby']['sql'] ){ ?>selected<?php } ?>><?php echo $this->_vars['orderby']['label']; ?></option>
    <?php } ?>
    </select></td>
  </tr>
  <tr>
    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>榜单显示商品数：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
    <td><?php echo $this->ui()->input(array('name' => "limit",'value' => ((isset($this->_vars['setting']['limit']) && ''!==$this->_vars['setting']['limit'])?$this->_vars['setting']['limit']:'8'),'size' => 8,'required' => "true",'type' => "digits",'id' => 'show_limit'));?></td>
  </tr>
</table>
</div>
</div>
<script>
  (function(){
    function getCfgForm(id){
      var config = $$(id)[0];
      while(config.tagName != 'FORM'){
        config = config.getParent();
      }
      return config;
    }
    var pic_html='<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>广告尺寸高度：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>';
    pic_html+='<td><input type="text" vtype="digits" required="true" class="x-input" autocomplete="off" name="ad_pic_height" style="width:40px" value="<?php echo ((isset($this->_vars['setting']['ad_pic_height']) && ''!==$this->_vars['setting']['ad_pic_height'])?$this->_vars['setting']['ad_pic_height']:300); ?>">px';
	pic_html+='</td></tr><tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>图片：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th><td><input type=hidden name="ad_pic" value="<?php echo $this->_vars['setting']['ad_pic']; ?>"><input name="ad_pic"  vtype="purl" required="true"  class="imgsrc x-input" id="ad_pic" value="<?php echo $this->_vars['setting']['ad_pic']; ?>"><input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic()">';
	pic_html+='</td></tr><tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>图片描述：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>';
    pic_html+='<td><input type="text" class="x-input" autocomplete="off"  name="ad_pic_txt" value="<?php echo $this->_vars['setting']['ad_pic_txt']; ?>"></td>';
    pic_html+='</tr><tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>图片链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th><td><input type="text" class="x-input" autocomplete="off"  vtype="purl"  name="ad_pic_link" value="<?php echo $this->_vars['setting']['ad_pic_link']; ?>"></td>';
    pic_html+=' </tr>';
    pic_html+='</table>';
    function getWgtTpl(){
      var sels = getCfgForm('.wgtconfig').getElements('select');
      var wgtTpl = '';
      sels.each(function(sel){
        if(sel.getProperty('name') == '__wg[tpl]') wgtTpl = sel;
      });
      return wgtTpl;
    }
    var SelectTp = getWgtTpl();
    SelectTp.addEvent('change',function(){
      if(this.value == 'electron_ad.html'){
        $('add_ad_pic').set('html',pic_html).show();
      }else{
        $('add_ad_pic').empty().hide();
      }
    });
    if(SelectTp.value!='electron_ad.html'){
        $('add_ad_pic').empty().hide();
    }
   

  })();
  function addPic(){
			var url='btools-alertpages.html?dd='+Date.now()+'&goto='+encodeURIComponent("btools-image_broswer.html?type=big");
			Ex_Loader('modedialog',function(){
			return new imgDialog(url,{onCallback:function(image_id,image_src){
					 $('ad_pic').value=image_src;
			}})	;
			});
		}
</script>";s:8:"dateline";s:10:"1409821742";s:3:"ttl";s:1:"0";}