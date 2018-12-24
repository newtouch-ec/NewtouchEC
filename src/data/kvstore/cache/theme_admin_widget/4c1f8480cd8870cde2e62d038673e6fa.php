<?php exit(); ?>a:3:{s:5:"value";s:32814:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="tableform widgetconfig">
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
    <h4>新闻公告</h4>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>选择节点:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td>
          <?php echo $this->ui()->input(array('type' => 'select','name' => 'node_id','value' => $this->_vars['setting']['node_id'],'vtype' => 'required','caution' => kernel::single('base_view_helper')->modifier_t($this->_vars['___content']='请选择上级节点','gift'),'rows' => $this->_vars['setting']['selectmaps'],'valueColumn' => "node_id",'labelColumn' => "node_name"));?>
        </td>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>节点下显示文章数:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
        <td><?php echo $this->ui()->input(array('type' => 'text','name' => 'limit','value' => $this->_vars['setting']['limit'],'size' => 4));?></td>
      </tr>
      <tr>
        <th>排序方式:</th>
        <td>
          按<select name="order_type">
              <?php if($this->_vars['setting']['select_order']['order_type'])foreach ((array)$this->_vars['setting']['select_order']['order_type'] as $this->_vars['key'] => $this->_vars['item']){ ?>
            	  <option value="<?php echo $this->_vars['key']; ?>" <?php if( $this->_vars['key']==$this->_vars['setting']['order_type'] ){ ?>selected="selected"<?php } ?>>
                  <?php echo $this->_vars['item']; ?>
                </option>
              <?php } ?>
            </select>
            <select name="order">
              <?php if($this->_vars['setting']['select_order']['order'])foreach ((array)$this->_vars['setting']['select_order']['order'] as $this->_vars['key'] => $this->_vars['item']){ ?>
            	  <option value="<?php echo $this->_vars['key']; ?>" <?php if( $this->_vars['key']==$this->_vars['setting']['order'] ){ ?>selected="selected"<?php } ?>>
                  <?php echo $this->_vars['item']; ?>
                </option>
              <?php } ?>
            </select>
        </td>
        <th>是否显示“更多”链接:</th>
        <td>
          <input type="radio" name="show_more" value="1" <?php if( $this->_vars['setting']['show_more']==1 ){ ?> checked <?php } ?>>
          <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>是<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
          <input type="radio" name="show_more" value="0" <?php if( $this->_vars['setting']['show_more']!=1 ){ ?> checked <?php } ?>>
          <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>否<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
        </td>
      </tr>
    </table>
  </div>
</div>

<div class="tableform widgetconfig">
  <div class="division">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <h4>新闻公告下面的精品展示图片<span style="color:blue"><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>(图片建议尺寸：130px * 65px)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></span></h4>
      <tr>
        <th>精品图片：</th>
        <td>
          <input type=hidden name="jp_show[pic]" value="<?php echo $this->_vars['setting']['jp_show']['pic']; ?>">
          <input name='jp_show[pic]' class="imgsrc" value="<?php echo $this->_vars['setting']['jp_show']['pic']; ?>">
          <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
        </td>
        <th>精品链接：</th>
        <td>
          <input name="jp_show[url]" value="<?php echo $this->_vars['setting']['jp_show']['url']; ?>" />
        </td>
      </tr>
      <tr>
        <th>精品描述：</th>
        <td colspan="3">
          <?php echo $this->ui()->input(array('type' => "textarea",'cols' => "50",'rows' => "4",'name' => "jp_show[info]",'value' => $this->_vars['setting']['jp_show']['info']));?>
        </td>
      </tr>
    </table>
  </div>
</div>

<div class="tableform widgetconfig">
  <div class="division">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <h4>团购活动</h4>
      <tr>
        <th>选择活动：</th>
        <td colspan="3">
          <?php echo $this->ui()->input(array('type' => "object",'object' => "activity@groupbuy",'filter' => $this->_vars['data']['activity_filter'],'multiple' => "false",'return_url' => "{$this->_vars['related_return_url']}",'select' => "radio",'textcol' => "name",'name' => "group_act_id",'value' => $this->_vars['setting']['act_id']));?>
        </td>
      </tr>
    </table>

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <h4>团购活动展示图片<span style="color:blue"><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>(图片建议尺寸：248px * 382px)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></span></h4>
      <tr>
        <th>上传图片：</th>
        <td>
          <input type=hidden name="group_show[pic]" value="<?php echo $this->_vars['setting']['group_show']['pic']; ?>">
          <input name='group_show[pic]' class="imgsrc" value="<?php echo $this->_vars['setting']['group_show']['pic']; ?>">
          <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
        </td>
        <th>图片链接：</th>
        <td>
          <input name="group_show[url]" value="<?php echo $this->_vars['setting']['group_show']['url']; ?>" />
        </td>
      </tr>
      <tr>
        <th>图片描述：</th>
        <td colspan="3">
          <?php echo $this->ui()->input(array('type' => "textarea",'cols' => "50",'rows' => "4",'name' => "group_show[info]",'value' => $this->_vars['setting']['group_show']['info']));?>
        </td>
      </tr>
    </table>
  </div>
</div>

<div class="tableform widgetconfig">
  <div class="division">
    <h4>自定义链接</h4>
    <div id="linkAddress" class="tableform">
      <div class="linkcontent">
        <?php if($this->_vars['setting']['tj_link'])foreach ((array)$this->_vars['setting']['tj_link'] as $this->_vars['key'] => $this->_vars['data']){ ?>
          <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
              <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>链接标题:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
              <td>
                <input type=hidden name=tj_link[<?php echo $this->_vars['data']['id']; ?>][id] value="<?php echo $this->_vars['data']['id']; ?>">
                <input name="tj_link[<?php echo $this->_vars['data']['id']; ?>][linktitle]" value="<?php echo $this->_vars['data']['linktitle']; ?>">
              </td>
              <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>链接地址:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
              <td>
                <input name="tj_link[<?php echo $this->_vars['data']['id']; ?>][linkaddr]" value="<?php echo $this->_vars['data']['linkaddr']; ?>">
              </td>
              <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>删除:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
              <td><span onclick="$(this).getParent('table').destroy()"><?php echo $this->ui()->img(array('src' => "./images/delecate.gif",'style' => "cursor:pointer;",'alt' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c'),'title' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c')));?></span></td>
            </tr>
          </table>
        <?php } ?>
      </div>

      <?php echo $this->ui()->button(array('label' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="添加链接",'b2c'),'class' => "addlink",'app' => "desktop",'icon' => "btn_add.gif"));?>
    </div>
  </div>
</div>

<div class="tableform widgetconfig">
  <div class="division">
    <h4>推荐品牌(最多添加5个品牌)<span style="color:blue"><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>(图片建议尺寸：130px * 65px)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></span></h4>
    <div id="brandAddress" class="tableform">
      <div class="brandcontent">
        <?php if($this->_vars['setting']['brands'])foreach ((array)$this->_vars['setting']['brands'] as $this->_vars['key'] => $this->_vars['data']){ ?>
          <table  width="100%" cellpadding="0" cellspacing="0">
            <tr>
              <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>品牌图片:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
              <td>
                <input type=hidden name=brands[<?php echo $this->_vars['data']['id']; ?>][id] value="<?php echo $this->_vars['data']['id']; ?>">
                <input name='brands[<?php echo $this->_vars['data']['id']; ?>][link]' class="imgsrc" id="brands[<?php echo $this->_vars['data']['id']; ?>][link]"  value="<?php echo $this->_vars['data']['link']; ?>">
                <input type=button value=上传图片 class="uploadbtn">
              </td>
              <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>品牌链接:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
              <td>
                <input name="brands[<?php echo $this->_vars['data']['id']; ?>][linktarget]" value="<?php echo $this->_vars['data']['linktarget']; ?>">
              </td>
            </tr>
            <tr>
              <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>品牌名称:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
              <td>
                <input name="brands[<?php echo $this->_vars['data']['id']; ?>][linkinfo]" value="<?php echo $this->_vars['data']['linkinfo']; ?>">
              </td>
              <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>删除该图片及描述:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
              <td><span onclick="$(this).getParent('table').destroy()"><?php echo $this->ui()->img(array('src' => "./images/delecate.gif",'style' => "cursor:pointer;",'alt' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c'),'title' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c')));?></span></td>
            </tr>
          </table>
        <?php } ?>
      </div>

      <?php echo $this->ui()->button(array('label' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="添加品牌",'b2c'),'class' => "addbrand",'app' => "desktop",'icon' => "btn_add.gif"));?>
    </div>
  </div>
</div>

<div class="tableform widgetconfig">
  <div class="division">
    <h4>精彩汇(最多添加6张图片)<span style="color:blue"><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>(图片建议尺寸：245px * 190px)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></span></h4>
    <div id="picAddress" class="tableform">
      <div class="piccontent">
        <?php if($this->_vars['setting']['wonderful'])foreach ((array)$this->_vars['setting']['wonderful'] as $this->_vars['key'] => $this->_vars['data']){ ?>
          <table  width="100%" cellpadding="0" cellspacing="0">
            <tr>
              <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>上传图片:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
              <td>
                <input type=hidden name=wonderful[<?php echo $this->_vars['data']['id']; ?>][id] value="<?php echo $this->_vars['data']['id']; ?>">
                <input name='wonderful[<?php echo $this->_vars['data']['id']; ?>][link]' class="imgsrc" id="wonderful[<?php echo $this->_vars['data']['id']; ?>][link]" value="<?php echo $this->_vars['data']['link']; ?>">
                <input type=button value=上传图片 class="uploadbtn">
              </td>
              <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>图片链接:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
              <td>
                <input name="wonderful[<?php echo $this->_vars['data']['id']; ?>][linktarget]" value="<?php echo $this->_vars['data']['linktarget']; ?>">
              </td>
            </tr>
            <tr>
              <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>图片描述:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
              <td>
                <input name="wonderful[<?php echo $this->_vars['data']['id']; ?>][linkinfo]" value="<?php echo $this->_vars['data']['linkinfo']; ?>">
              </td>
              <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>删除该图片及描述:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
              <td><span onclick="$(this).getParent('table').destroy()"><?php echo $this->ui()->img(array('src' => "./images/delecate.gif",'style' => "cursor:pointer;",'alt' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c'),'title' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c')));?></span></td>
            </tr>
          </table>
        <?php } ?>
      </div>

      <?php echo $this->ui()->button(array('label' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="添加精彩汇图片",'b2c'),'class' => "addimage",'app' => "desktop",'icon' => "btn_add.gif"));?>
    </div>
  </div>
</div>

<script>
    function addPic(target){
        var url = 'index.php?app=desktop&act=alertpages&goto='+encodeURIComponent("index.php?app=image&ctl=admin_manage&act=image_broswer&type=big");

        Ex_Loader('modedialog',function(){
            return new imgDialog(url,{onCallback:function(image_id,image_src){
                $(target).getPrevious('input').value=image_src;
            }}) ;
        });
    }

    (function(){
        var tag_type='table',tag_class='pic_items';
//        var linknum = document.getElement('.linkcontent').getElements('table').length;//链接不限制添加
        var brandnum = document.getElement('.brandcontent').getElements('table').length;
        var picnum = document.getElement('.piccontent').getElements('table').length;

        document.getElement(".addlink").addEvent('click',function(){
            var i=new Date().getTime();
            var tpl='\<tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>链接标题:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\<td><input type=hidden name=tj_link['+i+'][id] value="'+i+'"><input name="tj_link['+i+'][linktitle]" ></td>\<th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>链接地址:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\<td><input name="tj_link['+i+'][linkaddr]"></td>\<th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>删除:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\<td><span onclick="$(this).getParent(\'table\').destroy()"><?php echo $this->ui()->img(array('src' => "./images/delecate.gif",'style' => "cursor:pointer;",'alt' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c'),'title' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c')));?></span></td>\</tr>';

            $('linkAddress').getElement('.linkcontent').adopt(new Element(tag_type,{'html':tpl,'width':'100%','class':tag_class}));
        });

        document.getElement(".addbrand").addEvent('click',function(){
            if(brandnum < 5){
                var i=new Date().getTime();
                var tpl='\<tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>品牌图片:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\<td><input type=hidden name=brands['+i+'][id] value="'+i+'"><input name="brands['+i+'][link]" class="imgsrc">\<input type=button value=<?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> class="uploadbtn" id="brands['+i+']"></td>\<th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>品牌链接:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\<td><input name="brands['+i+'][linktarget]"></td></tr>\<tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>品牌名称:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\<td><input name="brands['+i+'][linkinfo]"></td>\<th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>删除该图片及描述:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\<td><span onclick="$(this).getParent(\'table\').destroy()"><?php echo $this->ui()->img(array('src' => "./images/delecate.gif",'style' => "cursor:pointer;",'alt' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c'),'title' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c')));?></span></td>\</tr>';

                $('brandAddress').getElement('.brandcontent').adopt(new Element(tag_type,{'html':tpl,'width':'100%','class':tag_class}));
                brandnum++;

                $('brands['+i+']').addEvent('click',function(e){bindevent(this)});
            }
        });

        document.getElement(".addimage").addEvent('click',function(){
            if(picnum < 6){
                var i=new Date().getTime();
                var tpl='\<tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>上传图片:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\<td><input type=hidden name=wonderful['+i+'][id] value="'+i+'"><input name="wonderful['+i+'][link]" class="imgsrc">\<input type=button value=<?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> class="uploadbtn" id="wonderful['+i+']"></td>\<th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>图片链接:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\<td><input name="wonderful['+i+'][linktarget]"></td></tr>\<tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>图片描述:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\<td><input name="wonderful['+i+'][linkinfo]"></td>\<th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>删除该图片及描述:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\<td><span onclick="$(this).getParent(\'table\').destroy()"><?php echo $this->ui()->img(array('src' => "./images/delecate.gif",'style' => "cursor:pointer;",'alt' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c'),'title' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c')));?></span></td>\</tr>';

                $('picAddress').getElement('.piccontent').adopt(new Element(tag_type,{'html':tpl,'width':'100%','class':tag_class}));
                picnum++;

                $('wonderful['+i+']').addEvent('click',function(e){bindevent(this)});
            }
        });

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
</script>";s:8:"dateline";s:10:"1417865086";s:3:"ttl";s:1:"0";}