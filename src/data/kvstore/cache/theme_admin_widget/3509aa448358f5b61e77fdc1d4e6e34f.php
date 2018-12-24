<?php exit(); ?>a:3:{s:5:"value";s:1712:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="sj_info mt_10">
<h4><div class="info_title rankTitle"><?php echo $this->_vars['data']['title']; ?></div></h4>
<div class="pro_kind">
    <h5><span class="plusnew"></span><a href='<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => gallery,'arg0' => $this->_vars['data']['store_id'])); ?>'"><span><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>查看所有宝贝<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></span><span class="cl_zhi"></span></a></h5>
    <div class="pro_kind_three">
    <a href='<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => gallery,'arg0' => $this->_vars['data']['store_id'],'arg1' => " ",'arg2' => "grid",'arg3' => 1,'arg4' => 10)); ?>'>按关注</a>
    <a href='<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => gallery,'arg0' => $this->_vars['data']['store_id'],'arg1' => " ",'arg2' => "grid",'arg3' => 1,'arg4' => 6)); ?>'>按价格</a>
    <a href='<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => gallery,'arg0' => $this->_vars['data']['store_id'],'arg1' => " ",'arg2' => "grid",'arg3' => 1,'arg4' => 4)); ?>'>按时间</a>
    </div>
</div>
</div>
";s:8:"dateline";s:10:"1439261444";s:3:"ttl";s:1:"0";}