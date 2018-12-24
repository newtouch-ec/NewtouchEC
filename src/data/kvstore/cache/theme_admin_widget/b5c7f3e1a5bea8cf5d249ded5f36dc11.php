<?php exit(); ?>a:3:{s:5:"value";s:3246:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="tableform">
    <div class="widgetconfig">
        <table cellspacing="0" cellpadding="0" border="0" width="100%">
            <tbody id="navList">
                <tr>
                    <th>notice:</th>
                    <td><input type="text" name="notice" value="<?php echo $this->_vars['setting']['notice']; ?>"></td>
                </tr>
                <tr>
                    <th>show share link:</th>
                    <td><?php echo $this->ui()->input(array('required' => true,'type' => 'select','name' => "show_jiathis",'options' => array('true'=>'True','False'=>'false'),'value' => ((isset($this->_vars['setting']['show_jiathis']) && ''!==$this->_vars['setting']['show_jiathis'])?$this->_vars['setting']['show_jiathis']:true)));?></td>
                </tr>
                <tr>
                    <th>logo:</th>
                    <td>
                        <input type=hidden name="logo" value="<?php echo $this->_vars['setting']['logo']; ?>">
                        <input name='logo' class="imgsrc x-input" value="<?php echo $this->_vars['setting']['logo']; ?>">
                        <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>upload<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this)">
                    </td>
                </tr>
                <tr>
                    <th>Background picture:</th>
                    <td>
                        <input type=hidden name="bg_pic" value="<?php echo $this->_vars['setting']['bg_pic']; ?>">
                        <input name='bg_pic' class="imgsrc x-input" value="<?php echo $this->_vars['setting']['bg_pic']; ?>">
                        <input type=button value="<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>upload<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>" class="uploadbtn" onclick="addPic(this)">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    function addPic(target){
            var url='btools-alertpages.html?dd='+Date.now()+'&goto='+encodeURIComponent("btools-image_broswer.html?type=big");
            Ex_Loader('modedialog',function(){
            return new imgDialog(url,{onCallback:function(image_id,image_src){
                     $(target).getPrevious('input').value=image_src;
            }}) ;
            });
        }
</script>";s:8:"dateline";s:10:"1439263711";s:3:"ttl";s:1:"0";}