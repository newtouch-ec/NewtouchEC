<?php exit(); ?>a:3:{s:5:"value";s:11859:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="tableform widgetconfig">
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

<div class="tableform">
    <div class="widgetconfig">
        <table cellspacing="0" cellpadding="0" border="0" width="100%">
            <tr>
                <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>选择添加广告图片的个数：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                <td>
                    <input type="radio" name="num" value="1" <?php if( $this->_vars['setting']['num'] == '1' or $this->_vars['setting']['num']=="" ){ ?>checked<?php } ?>> 一张  
                    <input type="radio" name="num" value="2" <?php if( $this->_vars['setting']['num'] == '2' ){ ?>checked<?php } ?>>两张
                    <input type="radio" name="num" value="3" <?php if( $this->_vars['setting']['num'] == '3' ){ ?>checked<?php } ?>>三张
                    <input type="radio" name="num" value="4" <?php if( $this->_vars['setting']['num'] == '4' ){ ?>checked<?php } ?>>四张
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div id="picAddress" class="tableform">
                        <div class="piccontent">
                        <?php if($this->_vars['setting']['ad']['pic'])foreach ((array)$this->_vars['setting']['ad']['pic'] as $this->_vars['key'] => $this->_vars['data']){ ?>
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>图片地址:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                                    <td>
                                        <input type=hidden name=ad[pic][<?php echo $this->_vars['data']['id']; ?>][id] value="<?php echo $this->_vars['data']['id']; ?>">
                                        <input name='ad[pic][<?php echo $this->_vars['data']['id']; ?>][link]'  autocomplete='off'  vtype="img_url" required='true'  class="imgsrc x-input" id="ad[pic][<?php echo $this->_vars['data']['id']; ?>][link]"  value="<?php echo $this->_vars['data']['link']; ?>">
                                        <input type=button value=上传图片 class="uploadbtn">
                                    </td>
                                    <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>链接地址:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                                    <td>
                                        <input name="ad[pic][<?php echo $this->_vars['data']['id']; ?>][linktarget]"  vtype="purl" class='x-input' autocomplete='off'   value="<?php echo $this->_vars['data']['linktarget']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>描述:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                                    <td>
                                        <input name="ad[pic][<?php echo $this->_vars['data']['id']; ?>][linkinfo]"  class='x-input' autocomplete='off'  value="<?php echo $this->_vars['data']['linkinfo']; ?>">
                                    </td>
                                    <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>删除该图片及描述:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                                    <td><span onclick="$(this).getParent('table').destroy()"><?php echo $this->ui()->img(array('src' => "./images/delecate.gif",'style' => "cursor:pointer;",'alt' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c'),'title' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c')));?></span></td>
                                </tr>
                            </table>
                        <?php } ?>
                        </div>
                        <?php echo $this->ui()->button(array('label' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="添加图片",'b2c'),'class' => "addimage",'app' => "desktop",'icon' => "btn_add.gif"));?>
                    </div>
                    </td>
                </tr>
            </table>
    </div>
</div>
<script>
(function(){
    
    var picnum = document.getElement('.piccontent').getElements('table').length;
    var count=0;
    
    document.getElement(".addimage").addEvent('click',function(){

        document.getElements('input[name="num"]').each(function(item){
            if(item.checked){
                count=item.value;
            }
        });
        if(picnum<count){
        
          var i=new Date().getTime();

          var tpl='\
          <tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>图片地址:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\
            <td><input type=hidden name=ad[pic]['+i+'][id] value="'+i+'"><input autocomplete="off" name="ad[pic]['+i+'][link]" vtype="img_url" required="true"  class="imgsrc x-input">\
              <input type=button value=<?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> class="uploadbtn" id="ad[pic]['+i+']"></td>\
            <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>链接地址:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\
            <td><input name="ad[pic]['+i+'][linktarget]" vtype="purl" class="x-input" autocomplete="off"></td></tr>\
          <tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>描述:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\
            <td><input name="ad[pic]['+i+'][linkinfo]" class="x-input" autocomplete="off" ></td>\
            <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>删除该图片及描述:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\
            <td><span onclick="$(this).getParent(\'table\').destroy()"><?php echo $this->ui()->img(array('src' => "./images/delecate.gif",'style' => "cursor:pointer;",'alt' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c'),'title' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c')));?></span></td>\
          </tr>';
          var tag_type='table',tag_class='pic_items';

          $('picAddress').getElement('.piccontent').adopt(new Element(tag_type,{'html':tpl,'width':'100%','class':tag_class}));

          $('ad[pic]['+i+']').addEvent('click',function(e){bindevent(this)});
      }
    });
    $$(".piccontent .uploadbtn").addEvent('click',function(e){bindevent(this)});
})();
    

    function bindevent(el){
      var tag_type='table';
      var target=$(el).getParent(tag_type).getElement('.imgsrc');
      url='index.php?app=desktop&act=alertpages&goto='+encodeURIComponent("index.php?app=image&ctl=admin_manage&act=image_broswer&type=big");
      Ex_Loader('modedialog',function(){
        return new imgDialog(url,{onCallback:function(image_id,image_src){
            target.value=image_src;
        }});
      });
    }
</script>";s:8:"dateline";s:10:"1409556917";s:3:"ttl";s:1:"0";}