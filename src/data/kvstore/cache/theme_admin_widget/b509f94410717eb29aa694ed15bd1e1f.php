<?php exit(); ?>a:3:{s:5:"value";s:1677:"<div class="welcome fl"><?php echo $this->_vars['setting']['welcome']; ?></div>
<div class="quick_link fl">
    <div id="loginBar_<?php echo $this->_vars['widgets_id']; ?>">
        <a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_passport,'act' => signup)); ?>">免费注册</a>/
        <a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_passport,'act' => login)); ?>">登录</a>/
        <a href="<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_storeapply,'act' => index)); ?>">商家入驻</a>
    </div>
    <div class="quick_link fl" id="memberBar_<?php echo $this->_vars['widgets_id']; ?>" style="display:none">
        <span><span id="uname_<?php echo $this->_vars['widgets_id']; ?>"></span></span>
        <a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_passport,'act' => logout)); ?>">[退出]</a>
    </div>
</div>
<script>
var e = Cookie.read('UNAME')?Cookie.read('UNAME'):'';
var seller = Cookie.read('SELLER')?Cookie.read('SELLER'):'';

if(e){
    $("uname_<?php echo $this->_vars['widgets_id']; ?>").innerHTML = e;
    $("memberBar_<?php echo $this->_vars['widgets_id']; ?>").setStyle('display','block');
    if($("loginBar_<?php echo $this->_vars['widgets_id']; ?>"))
    $("loginBar_<?php echo $this->_vars['widgets_id']; ?>").setStyle('display','none');
}
else{
    $("loginBar_<?php echo $this->_vars['widgets_id']; ?>").setStyle('display','block');
    if($("memberBar_<?php echo $this->_vars['widgets_id']; ?>"))
    $("memberBar_<?php echo $this->_vars['widgets_id']; ?>").setStyle('display','none');
}
</script>";s:8:"dateline";s:10:"1411110994";s:3:"ttl";s:1:"0";}