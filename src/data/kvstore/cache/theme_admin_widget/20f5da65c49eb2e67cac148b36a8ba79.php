<?php exit(); ?>a:3:{s:5:"value";s:9643:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div id="picAddress" class="tableform">
  <div class="division widgetconfig">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th width="20%" >图片高度：</th>
        <td width="30%" ><?php echo $this->ui()->input(array('name' => "height",'style' => "width:50px",'value' => ((isset($this->_vars['setting']['height']) && ''!==$this->_vars['setting']['height'])?$this->_vars['setting']['height']:'530'),'required' => "true",'type' => "digits"));?></td>
      </tr>
      <tr>
        <th width="20%"><?php $this->_tag_stack[] = array('t', array()); $this->__view_helper_model['base_view_helper']->block_t(array(), null, $this); ob_start(); ?>切换效果：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td width="30%" >
            <?php echo $this->ui()->input(array('required' => true,'type' => 'radio','name' => "switcheffect",'options' => array('scrollx'=>横向滚动,'scrolly'=>竖向滚动,'fade'=>渐现渐隐),'value' => ((isset($this->_vars['setting']['switcheffect']) && ''!==$this->_vars['setting']['switcheffect'])?$this->_vars['setting']['switcheffect']:scrollx)));?>
        </td>
        <th width="20%" >自动播放：</th>
        <td width="30%" >
            <?php echo $this->ui()->input(array('required' => true,'type' => 'select','name' => "autoplay",'options' => array('true'=>是,'false'=>否),'value' => ((isset($this->_vars['setting']['autoplay']) && ''!==$this->_vars['setting']['autoplay'])?$this->_vars['setting']['autoplay']:true)));?>
        </td>
      </tr>
    </table>
  </div>
  <div class="piccontent">
    <?php if($this->_vars['setting']['pic'])foreach ((array)$this->_vars['setting']['pic'] as $this->_vars['key'] => $this->_vars['data']){ ?>
    <table  width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>图片地址:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td>
          <input type=hidden name=pic[<?php echo $this->_vars['data']['id']; ?>][id] value="<?php echo $this->_vars['data']['id']; ?>">
          <input name='pic[<?php echo $this->_vars['data']['id']; ?>][link]' class="imgsrc" id="pic[<?php echo $this->_vars['data']['id']; ?>][link]"  value="<?php echo $this->_vars['data']['link']; ?>">
          <input type=button value=上传图片 class="uploadbtn">
        </td>
        <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>链接地址:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td>
          <input name="pic[<?php echo $this->_vars['data']['id']; ?>][linktarget]" value="<?php echo $this->_vars['data']['linktarget']; ?>">
        </td>
      </tr>
      <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>描述:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td>
          <input name="pic[<?php echo $this->_vars['data']['id']; ?>][linkinfo]" value="<?php echo $this->_vars['data']['linkinfo']; ?>">
        </td>
        <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>删除该图片及描述:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td><span onclick="$(this).getParent('table').destroy()"><?php echo $this->ui()->img(array('src' => "./images/delecate.gif",'style' => "cursor:pointer;",'alt' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c'),'title' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c')));?></span></td>
      </tr>
    </table>
    <?php } ?>
  </div>
  <?php echo $this->ui()->button(array('label' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="添加图片",'b2c'),'class' => "addimage",'app' => "desktop",'icon' => "btn_add.gif"));?>
</div>
<script>
  (function(){
    
    var tag_type='table',tag_class='pic_items';

    document.getElement(".addimage").addEvent('click',function(){

      var i=new Date().getTime();

      var tpl='\
      <tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>图片地址:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\
        <td><input type=hidden name=pic['+i+'][id] value="'+i+'"><input name="pic['+i+'][link]" class="imgsrc">\
          <input type=button value=<?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> class="uploadbtn" id="pic['+i+']"></td>\
        <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>链接地址:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\
        <td><input name="pic['+i+'][linktarget]"></td></tr>\
      <tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>描述:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\
        <td><input name="pic['+i+'][linkinfo]"></td>\
        <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>删除该图片及描述:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\
        <td><span onclick="$(this).getParent(\'table\').destroy()"><?php echo $this->ui()->img(array('src' => "./images/delecate.gif",'style' => "cursor:pointer;",'alt' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c'),'title' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c')));?></span></td>\
      </tr>';

      $('picAddress').getElement('.piccontent').adopt(new Element(tag_type,{'html':tpl,'width':'100%','class':tag_class}));

      $('pic['+i+']').addEvent('click',function(e){bindevent(this)});
    });


    $$(".piccontent .uploadbtn").addEvent('click',function(e){bindevent(this)});

    function bindevent(el){
      var target=$(el).getParent(tag_type).getElement('.imgsrc');
      var url='index.php?app=desktop&act=alertpages&goto='+encodeURIComponent("index.php?app=image&ctl=admin_manage&act=image_broswer&type=big");
      Ex_Loader('modedialog',function(){
        return new imgDialog(url,{onCallback:function(image_id,image_src){
            target.value=image_src;
        }});
      });
    }

  })();
</script>
";s:8:"dateline";s:10:"1409817042";s:3:"ttl";s:1:"0";}