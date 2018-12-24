<?php exit(); ?>a:3:{s:5:"value";s:17888:"<?php $this->__view_helper_model['desktop_view_helper'] = kernel::single('desktop_view_helper');  $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="tableform">
  <div class="widgetconfig">
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
      <tbody>
        <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>广告尺寸：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
            <?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>宽<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
            <input type="text" vtype="digits" required="true" class='x-input' autocomplete='off' name="ad_pic_width" value="<?php echo ((isset($this->_vars['setting']['ad_pic_width']) && ''!==$this->_vars['setting']['ad_pic_width'])?$this->_vars['setting']['ad_pic_width']:1200); ?>" style="width:40px">px
            &nbsp;&nbsp;&nbsp;&nbsp;
            <?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>高<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
            <input type="text" vtype="digits" required="true" class='x-input' autocomplete='off' name="ad_pic_height" value="<?php echo ((isset($this->_vars['setting']['ad_pic_height']) && ''!==$this->_vars['setting']['ad_pic_height'])?$this->_vars['setting']['ad_pic_height']:70); ?>" style="width:40px">px
            &nbsp;&nbsp;&nbsp;&nbsp;
            <?php $this->_tag_stack[] = array('help', array()); $this->__view_helper_model['desktop_view_helper']->block_help(array(), null, $this); ob_start(); ?>说明：建议尺寸 1200px*70px<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['desktop_view_helper']->block_help($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
	        </td>
        </tr>

        <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>广告图片：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
	          <input type=hidden name="ad_pic" value="<?php echo $this->_vars['setting']['ad_pic']; ?>">
            <input name='ad_pic' class="imgsrc x-input " vtype="img_url" required='true' id="ad_pic" value="<?php echo $this->_vars['setting']['ad_pic']; ?>">
            <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this);">
	        </td>
        </tr>

        <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>背景颜色：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
            <?php echo $this->ui()->input(array('type' => "color",'name' => "ad_pic_color",'required' => 'true','id' => "ad_pic_color",'value' => $this->_vars['setting']['ad_pic_color']));?>
	        </td>
        </tr>

        <tr>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>链接类型：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
            <label>
              <input type="radio" name="link_type" <?php if( $this->_vars['setting']['link_type']=='default' or empty($this->_vars['setting']['link_type']) ){ ?>checked<?php } ?> value="default">&nbsp;默认
            </label>
            <label>
              <input type="radio" name="link_type" <?php if( $this->_vars['setting']['link_type']=='map' ){ ?>checked<?php } ?> value="map">&nbsp;图片热区域
            </label>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <?php $this->_tag_stack[] = array('help', array()); $this->__view_helper_model['desktop_view_helper']->block_help(array(), null, $this); ob_start(); ?>
              图片热区域范围说明：坐标点以英文逗号“,”分割
              矩形：请标注左上坐标和右下坐标点(x1,y1,x2,y2)；
              例：(0,0,100,100)， 左上(0,0) 右下(100,100)。
              圆形：请标注中心坐标和半径(x1,y1,r)；
              例：(100,100,50)， 中心点(100,100) 半径50px。
              多边形：设置多边形各个点的坐标(x1,y1,x2,y2,x3,y3,....)；
              例：0,0,30,0,0,30， 第1个点(0,0)，第2个点(30,0)，第3个点(0,30)。
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['desktop_view_helper']->block_help($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
          </td>
        </tr>

        <tr id="def_link" <?php if( $this->_vars['setting']['link_type']=='map' ){ ?>style="display:none;"<?php } ?>>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>图片链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
            <input type="text" class='x-input' vtype="purl" autocomplete='off' name="ad_pic_link" value="<?php echo $this->_vars['setting']['ad_pic_link']; ?>">
          </td>
        </tr>
        <tr id="desc_link" <?php if( $this->_vars['setting']['link_type']=='map' ){ ?>style="display:none;"<?php } ?>>
          <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>图片描述：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
          <td>
            <input type="text" class='x-input' autocomplete='off'  name="ad_pic_txt" value="<?php echo $this->_vars['setting']['ad_pic_txt']; ?>">
          </td>
        </tr>

        <tr id="link_map" <?php if( $this->_vars['setting']['link_type']=='default'  or  empty($this->_vars['setting']['link_type']) ){ ?>style="display:none;"<?php } ?>>
          <th></th>
          <td>
            <div id="linkAddress" class="tableform">
              <div class="linkcontent">
                <?php if($this->_vars['setting']['hot_points'])foreach ((array)$this->_vars['setting']['hot_points'] as $this->_vars['key'] => $this->_vars['data']){ ?>
                  <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                      <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>热点区域：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                      <td>
                        <input type="hidden" name="hot_points[<?php echo $this->_vars['data']['id']; ?>][id]" value="<?php echo $this->_vars['data']['id']; ?>">
                        <?php echo $this->ui()->input(array('required' => "true",'type' => "select",'name' => "hot_points["+$this->_vars['data']['id']+"][area_type]",'options' => array("rect"=>"矩形","circle"=>"圆形","poly"=>"多边形"),'value' => ((isset($this->_vars['data']['area_type']) && ''!==$this->_vars['data']['area_type'])?$this->_vars['data']['area_type']:'rect')));?>
                      <th>范围：</th>
                      <td>
                        <input type="text" class="x-input" autocomplete="off" name="hot_points[<?php echo $this->_vars['data']['id']; ?>][link_area]" value="<?php echo $this->_vars['data']['link_area']; ?>">
                      </td>
                    </tr>
                    <tr>
                      <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>热点链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                      <td>
                        <input name="hot_points[<?php echo $this->_vars['data']['id']; ?>][link_target]" value="<?php echo $this->_vars['data']['link_target']; ?>">
                      </td>
                      <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>热点描述：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                      <td>
                        <input type="text" class='x-input' autocomplete='off' name="hot_points[<?php echo $this->_vars['data']['id']; ?>][link_info]" value="<?php echo $this->_vars['data']['link_info']; ?>">
                      </td>
                    </tr>
                    <tr>
                      <th></th>
                      <td></td>
                      <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>删除:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                      <td><span onclick="$(this).getParent('table').destroy()"><?php echo $this->ui()->img(array('src' => "./images/delecate.gif",'style' => "cursor:pointer;",'alt' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c'),'title' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c')));?></span></td>
                    </tr>
                  </table>
                <?php } ?>
              </div>

              <?php echo $this->ui()->button(array('label' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="添加图片热链接",'b2c'),'class' => "addlink",'app' => "desktop",'icon' => "btn_add.gif"));?>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<script>
    (function(){
        $$('input[type=radio]').each(function(el){
            el.addEvent('click',function(e){
                if(this.checked==true){
                    $('def_link').setStyle('display',this.value=='map'?'none':'');
                    $('desc_link').setStyle('display',this.value=='map'?'none':'');
                    $('link_map').setStyle('display',this.value=='map'?'':'none');
                }
            });
        });

        var tag_type='table',tag_class='pic_items';
        document.getElement(".addlink").addEvent('click',function(){
            var i=new Date().getTime();
            var tpl='\<tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>热点区域：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\<td><input type="hidden" name="hot_points['+i+'][id]" value="'+i+'">\<?php echo $this->ui()->input(array('required' => true,'type' => "select",'name' => "hot_points['+i+'][area_type]",'options' => array("rect"=>"矩形","circle"=>"圆形","poly"=>"多边形"),'value' => "rect"));?></td>\<th>范围：</th><td><input type="text" class="x-input" autocomplete="off" name="hot_points['+i+'][link_area]"></td></tr>\<tr><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>热点链接：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\<td><input name="hot_points['+i+'][link_target]" class="x-input"></td>\<th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>热点描述：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\<td><input type="text" class="x-input" autocomplete="off" name="hot_points['+i+'][link_info]"></td></tr>\<tr><th></th><td></td><th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>删除:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>\<td><span onclick="$(this).getParent(\'table\').destroy()"><?php echo $this->ui()->img(array('src' => "./images/delecate.gif",'style' => "cursor:pointer;",'alt' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c'),'title' => kernel::single('base_view_helper')->modifier_t($this->_vars['___b2c']="删除",'b2c')));?></span></td>\</tr>';

            $('linkAddress').getElement('.linkcontent').adopt(new Element(tag_type,{'html':tpl,'width':'100%','class':tag_class}));
        });
    })();

    function addPic(target){
        var url = 'index.php?app=desktop&act=alertpages&goto='+encodeURIComponent("index.php?app=image&ctl=admin_manage&act=image_broswer&type=big");

        Ex_Loader('modedialog',function(){
            return new imgDialog(url,{onCallback:function(image_id,image_src){
                $(target).getPrevious('input').value=image_src;
            }});
        });
    }
</script>";s:8:"dateline";s:10:"1409550974";s:3:"ttl";s:1:"0";}