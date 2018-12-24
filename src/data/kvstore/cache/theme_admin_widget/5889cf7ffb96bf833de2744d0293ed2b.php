<?php exit(); ?>a:3:{s:5:"value";s:20423:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?>﻿<style>
  .ad_ul .add-title,
  .ad_ul .add-url,
  .ad_ul .delete{float:left;_display:inline;margin-left:5px;}
  .ad_ul .delete{height:20px;width:16px;cursor:pointer;}
  .ad_ul .ad-item{background-color:#E2E8EB;padding:5px 5px 3px;line-height:22px;margin:2px 0;}
  .ad_ul{cursor:pointer;}

  #hotkey_area .add-title,
  #hotkey_area .add-url,
  #hotkey_area .delete{float:left;_display:inline;margin-left:5px;}
  #hotkey_area .delete{height:20px;width:16px;cursor:pointer;}
  #hotkey_area .hot-link-item{background-color:#E2E8EB;padding:5px 5px 3px;line-height:22px;margin:2px 0;}
  #add_hotkey{cursor:pointer;}
</style>
<div class="tableform widgetconfig">
    <div class="division">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <input type=hidden name="newCatPic" id="newCatPic" value="0">
            <?php if($this->_vars['data']['cat'])foreach ((array)$this->_vars['data']['cat'] as $this->_vars['k'] => $this->_vars['cat']){ ?>
                <input type=hidden name="cat[<?php echo $this->_vars['k']; ?>][cat_id]" value="<?php echo $this->_vars['cat']['cat_id']; ?>">
                <input type=hidden name="cat[<?php echo $this->_vars['k']; ?>][cat_name]" value="<?php echo $this->_vars['cat']['cat_name']; ?>">
            <tr>
                <th colspan="4" style="text-align:left;background:#DDE5FC;color:#669">&nbsp;
                    <strong>
                        <?php echo $this->_vars['cat']['cat_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>自定义标题：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?><input type="text" name="cat[<?php echo $this->_vars['k']; ?>][title]" value="<?php echo $this->_vars['setting']['cat'][$this->_vars['k']]['title']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>自定义链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?><input type="text" name="cat[<?php echo $this->_vars['k']; ?>][link]" value="<?php echo $this->_vars['setting']['cat'][$this->_vars['k']]['link']; ?>">
                    </strong>
                </th>
        </tr>

        <tr>
            <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>分类分组自定义链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
            <td>
                <div id="selfLink_<?php echo $this->_vars['k']; ?>" class="tableform">
                    <div class="js_linkcontent">
                    <?php if($this->_vars['setting']['cat'][$this->_vars['k']]['selfLink'])foreach ((array)$this->_vars['setting']['cat'][$this->_vars['k']]['selfLink'] as $this->_vars['key'] => $this->_vars['data']){ ?>
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tbody>
                            <tr>
                                <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>名称：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                                <td>
                                    <input type=hidden name='cat[<?php echo $this->_vars['k']; ?>][selfLink][<?php echo $this->_vars['data']['id']; ?>][id]' value="<?php echo $this->_vars['data']['id']; ?>">
                                    <input name='cat[<?php echo $this->_vars['k']; ?>][selfLink][<?php echo $this->_vars['data']['id']; ?>][self_name]' value="<?php echo $this->_vars['data']['self_name']; ?>">
                                </td>
                                <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                                <td>
                                    <input name='cat[<?php echo $this->_vars['k']; ?>][selfLink][<?php echo $this->_vars['data']['id']; ?>][self_link]' value="<?php echo $this->_vars['data']['self_link']; ?>">
                                </td>
                                <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>删除:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                                <td>
                                    <span onclick="$(this).getParent('table').destroy()">
                                    <?php echo $this->ui()->img(array('src' => "./images/delecate.gif",'style' => "cursor:pointer;",'alt' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c'),'title' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c')));?>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    <?php } ?>
                    </div>
                    <?php echo $this->ui()->button(array('label' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="添加自定义链接",'b2c'),'class' => "addLinks",'app' => "desktop",'icon' => "btn_add.gif"));?>
                </div>
            </td>
        </tr>

        <tr>
            <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>促销广告图片：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
            <td>
                <div class="tableform">
                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>广告尺寸：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                            <td><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>宽<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
                                <input type="text" name="cat[<?php echo $this->_vars['k']; ?>][ad][width]" value="<?php echo $this->_vars['setting']['cat'][$this->_vars['k']]['ad']['width']; ?>" style="width:40px">px 
                                <?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>高<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
                                <input type="text" name="cat[<?php echo $this->_vars['k']; ?>][ad][height]" style="width:40px" value="<?php echo $this->_vars['setting']['cat'][$this->_vars['k']]['ad']['height']; ?>">px
                            </td>
                        </tr>
                        <tr>
                            <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>图片：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                            <td>
                                <input type=hidden name="cat[<?php echo $this->_vars['k']; ?>][ad][pic]" value="<?php echo $this->_vars['cat']['ad']['pic']; ?>">
                                <input name='cat[<?php echo $this->_vars['k']; ?>][ad][pic]' class="imgsrc"  value="<?php echo $this->_vars['setting']['cat'][$this->_vars['k']]['ad']['pic']; ?>"><input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
                            </td>
                        </tr>
                        <tr>
                            <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>图片链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                            <td><input type="text" name="cat[<?php echo $this->_vars['k']; ?>][ad][link]" value="<?php echo $this->_vars['setting']['cat'][$this->_vars['k']]['ad']['link']; ?>"></td>
                        </tr>
                    </table>
                </div>
            </td>
      </tr>
      <?php } ?>
    </table>
</div>

    <div class="division">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <th colspan="4" style="text-align:left;background:#DDE5FC;color:#669">&nbsp;
                <strong>弹出菜单</strong></th></tr>
            <tr>
                <th>三级分类最多显示数：</th>
                <td colspan="3"><?php echo $this->ui()->input(array('name' => "gshowmax",'value' => ((isset($this->_vars['setting']['gshowmax']) && ''!==$this->_vars['setting']['gshowmax'])?$this->_vars['setting']['gshowmax']:'0')));?>“0”为全显示，如果商品分类超出设置数，超出部分隐藏并显示更多</td>
            </tr>
        </table>
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

function add_ad(id,k){
      var li_len = $('ad_ul_'+k).getElements('li').length;
      var ActiveLi = new Element(
            'li',{'class':'ad-item clearfix','html':'<table cellspacing="0" cellpadding="0" border="0" width="100%"><tbody><tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>广告尺寸：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th><td><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>宽<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?><input type="text" name="cat['+k+'][ad]['+li_len+'][width]" style="width:40px">px <?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>高<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?><input type="text" name="cat['+k+'][ad]['+li_len+'][height]" style="width:40px">px</td></tr><tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>图片：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th><td><input type=hidden name="cat['+k+'][ad]['+li_len+'][pic]"><input name="cat['+k+'][ad]['+li_len+'][pic]" class="imgsrc" id="cat_'+k+'_ad_'+li_len+'"><input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(\'cat_'+k+'_ad_'+li_len+'\')"></td></tr><tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>图片描述：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th><td><input type="text" name="cat['+k+'][ad]['+li_len+'][txt]"></td></tr><tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>图片链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th><td><input type="text" name="cat['+k+'][ad]['+li_len+'][link]"></td></tr></tbody></table> <a class="delete" title="删除"></a>'}).inject(id);
      ActiveLi.getElement('.delete').addEvent('click',function(){
        DelTopMenu(this);
      });
}
function DelTopMenu(item){
        item.getParent(".ad-item").destroy();
    }

	(function(){
    var tag_type='table',tag_class='tableform';
    document.getElements('.addLinks').each(function(item,index){
        item.addEvent('click',function(){
            var i=new Date().getTime();
            var tpl='<tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>名称：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th><td><input type=hidden name="cat['+index+'][selfLink]['+i+'][id]" value="'+i+'" ><input name="cat['+index+'][selfLink]['+i+'][self_name]" ></td><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th><td><input name="cat['+index+'][selfLink]['+i+'][self_link]" ></td><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>删除:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th><td><span onclick="$(this).getParent(\'table\').destroy()"><?php echo $this->ui()->img(array('src' => "./images/delecate.gif",'style' => "cursor:pointer;",'alt' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c'),'title' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c')));?></span></td></tr>';

            $('selfLink_'+index).getElement('.js_linkcontent').adopt(new Element(tag_type,{'html':tpl,'width':'100%','class':tag_class}));
        });
    });
})();
</script>";s:8:"dateline";s:10:"1407741289";s:3:"ttl";s:1:"0";}