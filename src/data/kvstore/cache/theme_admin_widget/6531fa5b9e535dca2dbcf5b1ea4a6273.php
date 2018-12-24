<?php exit(); ?>a:3:{s:5:"value";s:1433:"<div class="quick_link fl" id="loginBar_<?php echo $this->_vars['widgets_id']; ?>">
请<a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_passport,'act' => login)); ?>">登录</a>或<a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_passport,'act' => signup)); ?>">免费注册</a>
</div>
<div class="quick_link fl" id="memberBar_<?php echo $this->_vars['widgets_id']; ?>" style="display:none">
<span>您好！<span id="uname_<?php echo $this->_vars['widgets_id']; ?>"></span><?php echo $this->_vars['setting']['welcome']; ?></span>
<a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_passport,'act' => logout)); ?>">[退出]</a>
</div>

<script>
var e = Cookie.read('UNAME')?Cookie.read('UNAME'):'';
var seller = Cookie.read('SELLER')?Cookie.read('SELLER'):'';

if(e){
    $("uname_<?php echo $this->_vars['widgets_id']; ?>").innerHTML = e+',';
    $("memberBar_<?php echo $this->_vars['widgets_id']; ?>").setStyle('display','block');
    if($("loginBar_<?php echo $this->_vars['widgets_id']; ?>"))
    $("loginBar_<?php echo $this->_vars['widgets_id']; ?>").setStyle('display','none');
}
else{
    $("loginBar_<?php echo $this->_vars['widgets_id']; ?>").setStyle('display','block');
    if($("memberBar_<?php echo $this->_vars['widgets_id']; ?>"))
    $("memberBar_<?php echo $this->_vars['widgets_id']; ?>").setStyle('display','none');
}
</script>";s:8:"dateline";s:10:"1402376076";s:3:"ttl";s:1:"0";}