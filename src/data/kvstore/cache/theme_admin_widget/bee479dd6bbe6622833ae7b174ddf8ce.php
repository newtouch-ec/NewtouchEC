<?php exit(); ?>a:3:{s:5:"value";s:26431:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><style>
  #top_link_area .add-title,
  #top_link_area .add-url,
  #top_link_area .delete{float:left;_display:inline;margin-left:5px;}
  #top_link_area .delete{height:20px;width:16px;cursor:pointer;}
  #top_link_area .top-link-item{background-color:#E2E8EB;padding:5px 5px 3px;line-height:22px;margin:2px 0;}
  #add_top_link{cursor:pointer;}
</style>
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
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>标题链接:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
            <input type="text" name='title_link' value="<?php echo $this->_vars['setting']['title_link']; ?>" class="inputstyle" >
          </td>
        </tr>
        <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>楼层小图标：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
            <input type=hidden name="floor_icon" value="<?php echo $this->_vars['setting']['floor_icon']; ?>">
            <input name="floor_icon" class="imgsrc x-input" value="<?php echo $this->_vars['setting']['floor_icon']; ?>" >
            <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);" >
          </td>
        </tr>
        <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>标题背景色：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
            <?php echo $this->ui()->input(array('type' => "color",'name' => "bg_color",'class' => "inputstyle",'value' => ((isset($this->_vars['setting']['bg_color']) && ''!==$this->_vars['setting']['bg_color'])?$this->_vars['setting']['bg_color']:'#cccccc'),'size' => 7,'maxlength' => 7));?>
          </td>
        </tr>
        <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>自定义文字链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
            <input type="button" id="add_top_link" value="添加文字链接" />
            <ul id="top_link_area">

            </ul>
         </td>
        </tr>
      </table>
    </div>


    <h4>轮播广告部分</h4>
        <div id="picAddress" class="tableform">
            <div class="division widgetconfig">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <th width="20%"><?php $this->_tag_stack[] = array('t', array()); $this->__view_helper_model['base_view_helper']->block_t(array(), null, $this); ob_start(); ?>图片宽度：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                        <td width="30%" ><?php echo $this->ui()->input(array('name' => "ad[width]",'style' => "width:50px",'value' => ((isset($this->_vars['setting']['ad']['width']) && ''!==$this->_vars['setting']['ad']['width'])?$this->_vars['setting']['ad']['width']:'509'),'required' => "true",'type' => "digits"));?></td>
                        <th width="20%" >图片高度：</th>
                        <td width="30%" ><?php echo $this->ui()->input(array('name' => "ad[height]",'style' => "width:50px",'value' => ((isset($this->_vars['setting']['ad']['height']) && ''!==$this->_vars['setting']['ad']['height'])?$this->_vars['setting']['ad']['height']:'309'),'required' => "true",'type' => "digits"));?></td>
                    </tr>
                    <tr>
                        <th width="20%"><?php $this->_tag_stack[] = array('t', array()); $this->__view_helper_model['base_view_helper']->block_t(array(), null, $this); ob_start(); ?>切换效果：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                        <td width="30%" >
                            <?php echo $this->ui()->input(array('required' => true,'type' => 'radio','name' => "ad[switcheffect]",'options' => array('scrollx'=>横向滚动,'scrolly'=>竖向滚动,'fade'=>渐现渐隐),'value' => ((isset($this->_vars['setting']['ad']['switcheffect']) && ''!==$this->_vars['setting']['ad']['switcheffect'])?$this->_vars['setting']['ad']['switcheffect']:scrollx)));?>
                        </td>
                        <th width="20%" >自动播放：</th>
                        <td width="30%" >
                            <?php echo $this->ui()->input(array('required' => true,'type' => 'select','name' => "ad[autoplay]",'options' => array('true'=>是,'false'=>否),'value' => ((isset($this->_vars['setting']['ad']['autoplay']) && ''!==$this->_vars['setting']['ad']['autoplay'])?$this->_vars['setting']['ad']['autoplay']:true)));?>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="piccontent">
                <?php if($this->_vars['setting']['ad']['pic'])foreach ((array)$this->_vars['setting']['ad']['pic'] as $this->_vars['key'] => $this->_vars['data']){ ?>
                <table  width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>图片地址:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                        <td>
                            <input type=hidden name=ad[pic][<?php echo $this->_vars['data']['id']; ?>][id] value="<?php echo $this->_vars['data']['id']; ?>">
                            <input name='ad[pic][<?php echo $this->_vars['data']['id']; ?>][link]'  autocomplete='off'  vtype="img_url" required='true'  class="imgsrc x-input" id="ad[pic][<?php echo $this->_vars['data']['id']; ?>][link]"  value="<?php echo $this->_vars['data']['link']; ?>">
                            <input type=button value=上传图片 class="uploadbtn">
                        </td>
                        <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>链接地址:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                        <td>
                            <input name="ad[pic][<?php echo $this->_vars['data']['id']; ?>][linktarget]"  vtype="purl"   class='x-input' autocomplete='off'   value="<?php echo $this->_vars['data']['linktarget']; ?>">
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
    </div>

    <h4>品牌滚动部分</h4>
    <div class="tableform">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <th>选择要展示的品牌：</th>
                <td>
                   <?php echo $this->ui()->input(array('type' => 'object','multiple' => "true",'filter' => '','rowselect' => "true",'object' => "brand@b2c",'textcol' => "brand_name",'name' => "brand_id",'cols' => "brand_name",'value' => $this->_vars['setting']['brand_id']));?>
                </td>
            </tr>
        </table>
    </div>
    <h4>广告图片部分</h4>
    <div class="tableform">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <th>轮播下方一张图片：（宽：509px 高：176px）</th>
                <td>
                    <input type=hidden name="pic[0]" value="<?php echo $this->_vars['setting']['pic']['0']; ?>">
                    <input name='pic[0]' class="imgsrc x-input" value="<?php echo $this->_vars['setting']['pic']['0']; ?>">
                    <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
                </td>
                <th>链接：</th>
                <td>
                    <input name='piclink[0]' class="x-input" value="<?php echo $this->_vars['setting']['piclink']['0']; ?>">
                </td>
            </tr>
            <tr>
                <th>轮播右1(上)图片：（宽：256px 高：179px）</th>
                <td>
                    <input type=hidden name="pic[1]" value="<?php echo $this->_vars['setting']['pic']['1']; ?>">
                    <input name='pic[1]' class="imgsrc x-input" value="<?php echo $this->_vars['setting']['pic']['1']; ?>">
                    <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
                </td>
                <th>链接：</th>
                <td>
                    <input name='piclink[1]' class="x-input" value="<?php echo $this->_vars['setting']['piclink']['1']; ?>">
                </td>
            <tr>
                <th>轮播右1(下)图片：（宽：256px 高：305px）</th>
                <td>
                    <input type=hidden name="pic[2]" value="<?php echo $this->_vars['setting']['pic']['2']; ?>">
                    <input name='pic[2]' class="imgsrc x-input" value="<?php echo $this->_vars['setting']['pic']['2']; ?>">
                    <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
                </td>
                <th>链接：</th>
                <td>
                    <input name='piclink[2]' class="x-input" value="<?php echo $this->_vars['setting']['piclink']['2']; ?>">
                </td>
            </tr>
            <tr>
                <th>轮播右2(上)图片：（宽：234px 高：179px）</th>
                <td>
                    <input type=hidden name="pic[3]" value="<?php echo $this->_vars['setting']['pic']['3']; ?>">
                    <input name='pic[3]' class="imgsrc x-input" value="<?php echo $this->_vars['setting']['pic']['3']; ?>">
                    <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
                </td>
                <th>链接：</th>
                <td>
                    <input name='piclink[3]' class="x-input" value="<?php echo $this->_vars['setting']['piclink']['3']; ?>">
                </td>
            </tr>
            <tr>
                <th>轮播右2(中)图片：（宽：234px 高：152px）</th>
                <td>
                    <input type=hidden name="pic[4]" value="<?php echo $this->_vars['setting']['pic']['4']; ?>">
                    <input name='pic[4]' class="imgsrc x-input" value="<?php echo $this->_vars['setting']['pic']['4']; ?>">
                    <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
                </td>
                <th>链接：</th>
                <td>
                    <input name='piclink[4]' class="x-input" value="<?php echo $this->_vars['setting']['piclink']['4']; ?>">
                </td>
            </tr>
            <tr>
                <th>轮播右2(下)图片：（宽：234px 高：152px）</th>
                <td>
                    <input type=hidden name="pic[5]" value="<?php echo $this->_vars['setting']['pic']['5']; ?>">
                    <input name='pic[5]' class="imgsrc x-input" value="<?php echo $this->_vars['setting']['pic']['5']; ?>">
                    <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
                </td>
                <th>链接：</th>
                <td>
                    <input name='piclink[5]' class="x-input" value="<?php echo $this->_vars['setting']['piclink']['5']; ?>">
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
        var ActiveLi = new Element('li',{'class':'top-link-item clearfix','html':'<div class="add-title"> 文字：<input type="text" name="top_link_title[]" class="x-input" value="'+k+'"/> </div> <div class="add-url"> 链接地址：<input type="text" class="x-input" name="top_link_url[]" value="'+v+'"/> </div> <span class="delete" title="删除"></span>'}).inject('top_link_area');
        ActiveLi.getElement('.delete').addEvent('click',function(){
          DelTopLink(this);
        });
      });
    }
    CreateTopLinkDom(TopLink);
    var AddTopLink = $('add_top_link');
    AddTopLink.addEvent('click',function(){
      var ActiveLi = new Element('li',{'class':'top-link-item clearfix','html':'<div class="add-title"> 文字：<input type="text" class="x-input" name="top_link_title[]"/> </div> <div class="add-url"> 链接地址：<input type="text" name="top_link_url[]" class="x-input"/> </div> <span class="delete" title="删除"></span>'}).inject('top_link_area');
      ActiveLi.getElement('.delete').addEvent('click',function(){
        DelTopLink(this);
      });
    });

    var tag_type='table',tag_class='pic_items';

    document.getElement(".addimage").addEvent('click',function(){

      var i=new Date().getTime();

      var tpl='\
      <tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>图片地址:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\
        <td><input type=hidden name=ad[pic]['+i+'][id] value="'+i+'"><input autocomplete="off" name="ad[pic]['+i+'][link]" vtype="img_url" required="true"  class="imgsrc x-input">\
          <input type=button value=<?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> class="uploadbtn" id="ad[pic]['+i+']"></td>\
        <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>链接地址:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\
        <td><input name="ad[pic]['+i+'][linktarget]"  vtype="purl" class="x-input" autocomplete="off"></td></tr>\
      <tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>描述:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\
        <td><input name="ad[pic]['+i+'][linkinfo]"  class="x-input" autocomplete="off" ></td>\
        <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>删除该图片及描述:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\
        <td><span onclick="$(this).getParent(\'table\').destroy()"><?php echo $this->ui()->img(array('src' => "./images/delecate.gif",'style' => "cursor:pointer;",'alt' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c'),'title' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c')));?></span></td>\
      </tr>';

      $('picAddress').getElement('.piccontent').adopt(new Element(tag_type,{'html':tpl,'width':'100%','class':tag_class}));

      $('ad[pic]['+i+']').addEvent('click',function(e){bindevent(this)});
    });
    $$(".piccontent .uploadbtn").addEvent('click',function(e){bindevent(this)});

    function bindevent(el){
      var target=$(el).getParent(tag_type).getElement('.imgsrc');
      url='index.php?app=desktop&act=alertpages&goto='+encodeURIComponent("index.php?app=image&ctl=admin_manage&act=image_broswer&type=big");
      Ex_Loader('modedialog',function(){
        return new imgDialog(url,{onCallback:function(image_id,image_src){
            target.value=image_src;
        }});
      });
    }

</script>";s:8:"dateline";s:10:"1408588467";s:3:"ttl";s:1:"0";}