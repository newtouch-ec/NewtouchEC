<?php exit(); ?>a:3:{s:5:"value";s:13849:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="tableform">
    <div class="widgetconfig">
    <h4 style="color:red;">建议左右侧广告图片尺寸为：194*326</h4>
        <table cellspacing="0" cellpadding="0" border="0" width="100%">
          <tbody>
            <tr>
                <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>左侧图片:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                <td>
                  <input type=hidden name="left_pic" value="<?php echo $this->_vars['setting']['left_pic']; ?>">
                  <input name='left_pic' class="imgsrc x-input" value="<?php echo $this->_vars['setting']['left_pic']; ?>">
                  <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this)">
                </td>
                <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>链接:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                <td>
                    <input name='left_piclink' class="x-input" value="<?php echo $this->_vars['setting']['left_piclink']; ?>">
                </td>
            </tr>
            <tr>
                <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>右侧图片:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                <td>
                  <input type=hidden name="right_pic" value="<?php echo $this->_vars['setting']['right_pic']; ?>">
                  <input name='right_pic' class="imgsrc x-input" value="<?php echo $this->_vars['setting']['right_pic']; ?>">
                  <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>上传图片<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this)">
                </td>
                <th><?php $this->_tag_stack[] = array('t', array('app' => "b2c")); $this->__view_helper_model['base_view_helper']->block_t(array('app' => "b2c"), null, $this); ob_start(); ?>链接:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                <td>
                    <input name='right_piclink' class="x-input" value="<?php echo $this->_vars['setting']['right_piclink']; ?>">
                </td>
            </tr>
            <tr>
                <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>标题：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                <td>
                    <input type=hidden name="tab_info[0][title_id]" value="<?php echo $this->_vars['setting']['tab_info']['0']['title_id']; ?>">
                    <input name="tab_info[0][title]" type="text" class="x-input" value="<?php echo $this->_vars['setting']['tab_info']['0']['title']; ?>" onfocus="set_title_name(this);">
                </td>
                <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>选择对应的品牌：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                <td>
                    <?php echo $this->ui()->input(array('type' => "object",'object' => "brand@b2c",'multiple' => "true",'return_url' => "",'rowselect' => "true",'textcol' => "brand_name",'name' => "list[0][id]",'filter' => $this->_vars['data'],'value' => $this->_vars['setting']['list']['0']['id']));?>
                </td>
            </tr>

            <tr>
                <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>标题：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                <td>
                    <input type=hidden name="tab_info[1][title_id]" value="<?php echo $this->_vars['setting']['tab_info']['1']['title_id']; ?>">
                    <input name="tab_info[1][title]" type="text" class="x-input" value="<?php echo $this->_vars['setting']['tab_info']['1']['title']; ?>" onfocus="set_title_name(this);">
                </td>
                <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>选择对应的品牌：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                <td>
                    <?php echo $this->ui()->input(array('type' => "object",'object' => "brand@business",'multiple' => "true",'return_url' => "",'rowselect' => "true",'textcol' => "brand_name",'name' => "list[1][id]",'filter' => $this->_vars['data'],'value' => $this->_vars['setting']['list']['1']['id']));?>
                </td>
            </tr>

            <tr>
                <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>标题：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                <td>
                    <input type=hidden name="tab_info[2][title_id]" value="<?php echo $this->_vars['setting']['tab_info']['2']['title_id']; ?>">
                    <input name="tab_info[2][title]" type="text" class="x-input" value="<?php echo $this->_vars['setting']['tab_info']['2']['title']; ?>" onfocus="set_title_name(this);">
                </td>
                <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>选择对应的品牌：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                <td>
                    <?php echo $this->ui()->input(array('type' => "object",'object' => "brand@business",'multiple' => "true",'return_url' => "",'rowselect' => "true",'textcol' => "brand_name",'name' => "list[2][id]",'filter' => $this->_vars['data'],'value' => $this->_vars['setting']['list']['2']['id']));?>
                </td>
            </tr>

            <tr>
                <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>标题：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                <td>
                    <input type=hidden name="tab_info[3][title_id]" value="<?php echo $this->_vars['setting']['tab_info']['3']['title_id']; ?>">
                    <input name="tab_info[3][title]" type="text" class="x-input" value="<?php echo $this->_vars['setting']['tab_info']['3']['title']; ?>" onfocus="set_title_name(this);">
                </td>
                <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>选择对应的品牌：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                <td>
                    <?php echo $this->ui()->input(array('type' => "object",'object' => "brand@business",'multiple' => "true",'return_url' => "",'rowselect' => "true",'textcol' => "brand_name",'name' => "list[3][id]",'filter' => $this->_vars['data'],'value' => $this->_vars['setting']['list']['3']['id']));?>
                </td>
            </tr>

            <tr>
                <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>标题：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                <td>
                    <input type=hidden name="tab_info[4][title_id]" value="<?php echo $this->_vars['setting']['tab_info']['4']['title_id']; ?>">
                    <input name="tab_info[4][title]" type="text" class="x-input" value="<?php echo $this->_vars['setting']['tab_info']['4']['title']; ?>" onfocus="set_title_name(this);">
                </td>
                <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>选择对应的品牌：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                <td>
                    <?php echo $this->ui()->input(array('type' => "object",'object' => "brand@business",'multiple' => "true",'return_url' => "",'rowselect' => "true",'textcol' => "brand_name",'name' => "list[4][id]",'filter' => $this->_vars['data'],'value' => $this->_vars['setting']['list']['4']['id']));?>
                </td>
            </tr>
          </tbody>
        </table>
    </div>
</div>
<script>

    function set_title_name(input){
        var idate=new Date().getTime();
        $(input).getPrevious('input').value=idate;
    }

    function addPic(target){
        var url = 'index.php?app=desktop&act=alertpages&goto='+encodeURIComponent("index.php?app=image&ctl=admin_manage&act=image_broswer&type=big");

        Ex_Loader('modedialog',function(){
            return new imgDialog(url,{onCallback:function(image_id,image_src){
                $(target).getPrevious('input').value=image_src;
            }}) ;
        });
    }

</script>";s:8:"dateline";s:10:"1432801051";s:3:"ttl";s:1:"0";}