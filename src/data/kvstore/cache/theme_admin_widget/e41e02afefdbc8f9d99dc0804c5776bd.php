<?php exit(); ?>a:3:{s:5:"value";s:8505:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><style>
  #top_link_area .add-title,
  #top_link_area .add-url,
  #top_link_area .delete{float:left;_display:inline;margin-left:5px;}
  #top_link_area .delete{height:20px;width:16px;cursor:pointer;}
  #top_link_area .top-link-item{background-color:#E2E8EB;padding:5px 5px 3px;line-height:22px;margin:2px 0;}
  #add_top_link{cursor:pointer;}
</style>
<div class="tableform">
<div class="widgetconfig">
<table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tbody>
    <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>楼层图片：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td>
            <input type=hidden name="floor_pic" value="<?php echo $this->_vars['setting']['floor_pic']; ?>">
            <input name='floor_pic' class="imgsrc" id="floor_pic" value="<?php echo $this->_vars['setting']['floor_pic']; ?>">
            <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic()">
        </td>
    </tr>
    <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>楼层图片链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td>
            <input type="text" name="floor_pic_link" value="<?php echo $this->_vars['setting']['floor_pic_link']; ?>" />
        </td>
    </tr>
    <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>楼层标题背景色：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td>
            <?php echo $this->ui()->input(array('type' => "color",'name' => "bg_color",'value' => ((isset($this->_vars['setting']['bg_color']) && ''!==$this->_vars['setting']['bg_color'])?$this->_vars['setting']['bg_color']:'#cccccc'),'size' => 7,'maxlength' => 7));?>
        </td>
    </tr>
    <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>楼层悬浮商品：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td>
           <?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'filter' => $this->_vars['goodslink_filter'],'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "floor_suspended_goods[linkid]",'linkid' => $this->_vars['setting']['floor_suspended_goods']['linkid'],'obj_name' => 'floor_suspended_goods[goods]','value' => $this->_vars['setting']['floor_suspended_goods']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>
        </td>
    </tr>
    <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>副标题文字链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td>
            <input type="button" id="add_top_link" value="添加文字链接" />
            <ul id="top_link_area">

            </ul>
        </td>
    </tr>
    <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>楼层商品：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td>
           <?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'filter' => $this->_vars['goodslink_filter'],'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "floor_goods[linkid]",'linkid' => $this->_vars['setting']['floor_goods']['linkid'],'obj_name' => 'floor_goods[goods]','value' => $this->_vars['setting']['floor_goods']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?><span>(请选择9个商品)</span>
        </td>
    </tr>
  </tbody>
</table>

</div>
</div>
<script>
    function addPic(){
            var url='index.php?app=desktop&act=alertpages&goto='+encodeURIComponent("index.php?app=image&ctl=admin_manage&act=image_broswer&type=big");
            Ex_Loader('modedialog',function(){
            return new imgDialog(url,{onCallback:function(image_id,image_src){
                     $('floor_pic').value=image_src;
            }});
            });
        }
</script>
<script>
	var TopLinkTitle = new Array(<?php if($this->_vars['setting']['top_link_title'])foreach ((array)$this->_vars['setting']['top_link_title'] as $this->_vars['title_item']){ ?> "<?php echo $this->_vars['title_item']; ?>", <?php } ?>"end");
    TopLinkTitle.pop();
    var TopLinkUrl = new Array(<?php if($this->_vars['setting']['top_link_url'])foreach ((array)$this->_vars['setting']['top_link_url'] as $this->_vars['url_item']){ ?>"<?php echo $this->_vars['url_item']; ?>",<?php } ?>"end");
    TopLinkUrl.pop();
    var TopLink = new Hash(TopLinkUrl.associate(TopLinkTitle));
    function DelTopLink(item){
        item.getParent(".top-link-item").destroy();
    }
    function CreateTopLinkDom(DomHash){
      DomHash.each(function(v,k){
        var ActiveLi = new Element('li',{'class':'top-link-item clearfix','html':'<div class="add-title"> 文字：<input type="text" name="top_link_title[]" value="'+k+'"/> </div> <div class="add-url"> 链接地址：<input type="text" name="top_link_url[]" value="'+v+'"/> </div> <span class="delete" title="删除"></span>'}).inject('top_link_area');
        ActiveLi.getElement('.delete').addEvent('click',function(){
          DelTopLink(this);
        });
      });
    }
    CreateTopLinkDom(TopLink);
    var AddTopLink = $('add_top_link');
    AddTopLink.addEvent('click',function(){
      var ActiveLi = new Element('li',{'class':'top-link-item clearfix','html':'<div class="add-title"> 文字：<input type="text" name="top_link_title[]"/> </div> <div class="add-url"> 链接地址：<input type="text" name="top_link_url[]"/> </div> <span class="delete" title="删除"></span>'}).inject('top_link_area');
      ActiveLi.getElement('.delete').addEvent('click',function(){
        DelTopLink(this);
      });
    });
</script>";s:8:"dateline";s:10:"1402368436";s:3:"ttl";s:1:"0";}