<?php exit(); ?>a:3:{s:5:"value";s:22038:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><style>
  #top_link_area .add-title,
  #top_link_area .add-url,
  #top_link_area .delete{float:left;_display:inline;margin-left:5px;}
  #top_link_area .delete{height:20px;width:16px;cursor:pointer;}
  #top_link_area .top-link-item{background-color:#E2E8EB;padding:5px 5px 3px;line-height:22px;margin:2px 0;}
  #add_top_link{cursor:pointer;}
</style>
<div class="tableform widgetconfig">
  <div class="division">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th>楼层小图标：</th>
        <td>
          <input type=hidden name="floor_icon" value="<?php echo $this->_vars['setting']['floor_icon']; ?>">
          <input name='floor_icon' class="imgsrc" value="<?php echo $this->_vars['setting']['floor_icon']; ?>">
          <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
        </td>
      </tr>
    </table>
  </div>
</div>

<div class="tableform widgetconfig">
  <div class="division">
    <h4>楼层基本信息</h4>
    <div class="tableform">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>楼层标题:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
            <input type="text" name='title' value="<?php echo $this->_vars['setting']['title']; ?>" class="inputstyle" >
          </td>
        </tr>
        <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>楼层标题链接:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
            <input type="text" name='title_link' value="<?php echo $this->_vars['setting']['title_link']; ?>" class="inputstyle" >
          </td>
        </tr>
        <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>楼层标题下图片展示：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
            <input type=hidden name="floor_pic" value="<?php echo $this->_vars['setting']['floor_pic']; ?>">
            <input name="floor_pic" class="imgsrc x-input" value="<?php echo $this->_vars['setting']['floor_pic']; ?>" >
            <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);" >
          </td>
        </tr>
        <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>楼层标题下图片链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
            <input type="text" name='floor_pic_link' value="<?php echo $this->_vars['setting']['floor_pic_link']; ?>" class="inputstyle">
          </td>
        </tr>
		    <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>tab链接下小图展示：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
            <input name="tab_icon" class="imgsrc x-input" value="<?php echo $this->_vars['setting']['tab_icon']; ?>" >
            <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);" >
          </td>
        </tr>
        <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>tab链接下小图链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
            <input type="text" name='tab_icon_link' value="<?php echo $this->_vars['setting']['tab_icon_link']; ?>" class="inputstyle">
          </td>
        </tr>
        <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>标题背景色：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
            <?php echo $this->ui()->input(array('type' => "color",'name' => "bg_color",'class' => "inputstyle",'value' => ((isset($this->_vars['setting']['bg_color']) && ''!==$this->_vars['setting']['bg_color'])?$this->_vars['setting']['bg_color']:'#cccccc'),'size' => 7,'maxlength' => 7));?>
          </td>
        </tr>
      </table>
    </div>

    <h4>tab项</h4>
    <div id="picAddress" class="tableform widgetconfig">
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableform">
        <tr>
          <td>
            tab名称:<input type="text" name='tab[0][title]' value="<?php echo $this->_vars['setting']['tab']['0']['title']; ?>" class="inputstyle" >
          </td>
          <td>
            tab链接:<input type="text" name='tab[0][link]' value="<?php echo $this->_vars['setting']['tab']['0']['link']; ?>" class="inputstyle" >
          </td>
          <td>
            <?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "tab[0][goods_id]",'obj_name' => 'tab[0][goods]','linkid' => $this->_vars['setting']['tab']['0']['goods_id'],'value' => $this->_vars['setting']['tab']['0']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>
          </td>
        </tr>
        <tr>
          <td>
            <input name='tab[0][ad][pic]' class="imgsrc"  value="<?php echo $this->_vars['setting']['tab']['0']['ad']['pic']; ?>">
            <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
          </td>
          <td colspan="2">
            图片链接:<input type="text" name='tab[0][ad][pic_link]' value="<?php echo $this->_vars['setting']['tab']['0']['ad']['pic_link']; ?>" class="inputstyle" >
          </td>
        </tr>
      </table>

      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableform">
        <tr>
          <td>
            tab名称:<input type="text" name='tab[1][title]' value="<?php echo $this->_vars['setting']['tab']['1']['title']; ?>" class="inputstyle" >
          </td>
          <td>
            tab链接:<input type="text" name='tab[1][link]' value="<?php echo $this->_vars['setting']['tab']['1']['link']; ?>" class="inputstyle" >
          </td>
          <td>
            <?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "tab[1][goods_id]",'obj_name' => 'tab[1][goods]','linkid' => $this->_vars['setting']['tab']['1']['goods_id'],'value' => $this->_vars['setting']['tab']['1']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>
          </td>
        </tr>
        <tr>
          <td>
            <input name='tab[1][ad][pic]' class="imgsrc"  value="<?php echo $this->_vars['setting']['tab']['1']['ad']['pic']; ?>">
            <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
          </td>
          <td colspan="2">
            图片链接:<input type="text" name='tab[1][ad][pic_link]' value="<?php echo $this->_vars['setting']['tab']['1']['ad']['pic_link']; ?>" class="inputstyle" >
          </td>
        </tr>
      </table>

      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableform">
        <tr>
          <td>
            tab名称:<input type="text" name='tab[2][title]' value="<?php echo $this->_vars['setting']['tab']['2']['title']; ?>" class="inputstyle" >
          </td>
          <td>
            tab链接:<input type="text" name='tab[2][link]' value="<?php echo $this->_vars['setting']['tab']['2']['link']; ?>" class="inputstyle" >
          </td>
          <td>
            <?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "tab[2][goods_id]",'obj_name' => 'tab[2][goods]','linkid' => $this->_vars['setting']['tab']['2']['goods_id'],'value' => $this->_vars['setting']['tab']['2']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>
          </td>
        </tr>
        <tr>
          <td>
            <input name='tab[2][ad][pic]' class="imgsrc"  value="<?php echo $this->_vars['setting']['tab']['2']['ad']['pic']; ?>">
            <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
          </td>
          <td colspan="2">
            图片链接:<input type="text" name='tab[2][ad][pic_link]' value="<?php echo $this->_vars['setting']['tab']['2']['ad']['pic_link']; ?>" class="inputstyle" >
          </td>
        </tr>
      </table>

      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableform">
        <tr>
          <td>
            tab名称:<input type="text" name='tab[3][title]' value="<?php echo $this->_vars['setting']['tab']['3']['title']; ?>" class="inputstyle" >
          </td>
          <td>
            tab链接:<input type="text" name='tab[3][link]' value="<?php echo $this->_vars['setting']['tab']['3']['link']; ?>" class="inputstyle" >
          </td>
          <td>
            <?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "tab[3][goods_id]",'obj_name' => 'tab[3][goods]','linkid' => $this->_vars['setting']['tab']['3']['goods_id'],'value' => $this->_vars['setting']['tab']['3']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>
          </td>
        </tr>
        <tr>
          <td>
            <input name='tab[3][ad][pic]' class="imgsrc"  value="<?php echo $this->_vars['setting']['tab']['3']['ad']['pic']; ?>">
            <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
          </td>
          <td colspan="2">
            图片链接:<input type="text" name='tab[3][ad][pic_link]' value="<?php echo $this->_vars['setting']['tab']['3']['ad']['pic_link']; ?>" class="inputstyle" >
          </td>
        </tr>
      </table>

      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableform">
        <tr>
          <td>
            tab名称:<input type="text" name='tab[4][title]' value="<?php echo $this->_vars['setting']['tab']['4']['title']; ?>" class="inputstyle" >
          </td>
          <td>
            tab链接:<input type="text" name='tab[4][link]' value="<?php echo $this->_vars['setting']['tab']['4']['link']; ?>" class="inputstyle" >
          </td>
          <td>
            <?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "tab[4][goods_id]",'obj_name' => 'tab[4][goods]','linkid' => $this->_vars['setting']['tab']['4']['goods_id'],'value' => $this->_vars['setting']['tab']['4']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>
          </td>
        </tr>
        <tr>
          <td>
            <input name='tab[4][ad][pic]' class="imgsrc"  value="<?php echo $this->_vars['setting']['tab']['4']['ad']['pic']; ?>">
            <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
          </td>
          <td colspan="2">
            图片链接:<input type="text" name='tab[4][ad][pic_link]' value="<?php echo $this->_vars['setting']['tab']['4']['ad']['pic_link']; ?>" class="inputstyle" >
          </td>
        </tr>
      </table>

      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableform">
        <tr>
          <td>
            tab名称:<input type="text" name='tab[5][title]' value="<?php echo $this->_vars['setting']['tab']['5']['title']; ?>" class="inputstyle" >
          </td>
          <td>
            tab链接:<input type="text" name='tab[5][link]' value="<?php echo $this->_vars['setting']['tab']['5']['link']; ?>" class="inputstyle" >
          </td>
          <td>
            <?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "tab[5][goods_id]",'obj_name' => 'tab[5][goods]','linkid' => $this->_vars['setting']['tab']['5']['goods_id'],'value' => $this->_vars['setting']['tab']['5']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>
          </td>
        </tr>
        <tr>
          <td>
            <input name='tab[5][ad][pic]' class="imgsrc"  value="<?php echo $this->_vars['setting']['tab']['5']['ad']['pic']; ?>">
            <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
          </td>
          <td colspan="2">
            图片链接:<input type="text" name='tab[5][ad][pic_link]' value="<?php echo $this->_vars['setting']['tab']['5']['ad']['pic_link']; ?>" class="inputstyle" >
          </td>
        </tr>
      </table>

      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableform">
        <tr>
          <td>
            tab名称:<input type="text" name='tab[6][title]' value="<?php echo $this->_vars['setting']['tab']['6']['title']; ?>" class="inputstyle" >
          </td>
          <td>
            tab链接:<input type="text" name='tab[6][link]' value="<?php echo $this->_vars['setting']['tab']['6']['link']; ?>" class="inputstyle" >
          </td>
          <td>
            <?php echo $this->ui()->input(array('type' => "goods_select",'object' => "goods@b2c",'multiple' => "true",'return_url' => "{$this->_vars['related_return_url']}",'rowselect' => "true",'textcol' => "name",'name' => "tab[6][goods_id]",'obj_name' => 'tab[6][goods]','linkid' => $this->_vars['setting']['tab']['6']['goods_id'],'value' => $this->_vars['setting']['tab']['6']['goods'],'view' => "b2c:admin/goods/detail/rel_items.html"));?>
          </td>
        </tr>
        <tr>
          <td>
            <input name='tab[6][ad][pic]' class="imgsrc"  value="<?php echo $this->_vars['setting']['tab']['6']['ad']['pic']; ?>">
            <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
          </td>
          <td colspan="2">
            图片链接:<input type="text" name='tab[6][ad][pic_link]' value="<?php echo $this->_vars['setting']['tab']['6']['ad']['pic_link']; ?>" class="inputstyle" >
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>

<script>
    function addPic(target){
        var url='index.php?app=desktop&act=alertpages&goto='+encodeURIComponent("index.php?app=image&ctl=admin_manage&act=image_broswer&type=big");
        Ex_Loader('modedialog',function(){
            return new imgDialog(url,{onCallback:function(image_id,image_src){
                target.getPrevious('input').value=image_src;
            }});
        });
    }
</script>";s:8:"dateline";s:10:"1409641557";s:3:"ttl";s:1:"0";}