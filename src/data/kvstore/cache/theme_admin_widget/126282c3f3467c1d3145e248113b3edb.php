<?php exit(); ?>a:3:{s:5:"value";s:2167:"<div class="my_count fl">
<dl>
	<dt><a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_member,'act' => index)); ?>">我的账户</a><b></b></dt>
	<dd>
		<div class="prompt">
			<span class="fl" id="member_<?php echo $this->_vars['widgets_id']; ?>">您好，请<a href="javascript:login()">登录</a></span>
			<span class="fr"></span>        
		</div>
		<div class="uclist">
			<ul class="fore1 fl">
				<li><a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_member,'act' => orders,'arg1' => 'ship')); ?>" target="_blank">待收货订单</a></li>
				<li><a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_member,'act' => ask)); ?>" target="_blank">我的咨询</a></li>
				<li><a href="<?php echo kernel::router()->gen_url(array('app' => aftersales,'ctl' => site_member,'act' => return_list)); ?>" target="_blank">退款退货管理</a></li>
				<li><a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_member,'act' => coupon)); ?>" target="_blank">我的优惠券</a></li>                
			</ul>
			<ul class="fore2 fl">
				<li><a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_member,'act' => favorite)); ?>" target="_blank">我的收藏&nbsp;&gt;</a></li>
				<li><a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_member,'act' => orders)); ?>" target="_blank">我的订单&nbsp;&gt;</a></li>
				<li><a href="<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_msg,'act' => my_msg)); ?>" target="_blank">我的站内信&nbsp;&gt;</a></li>
				<li><a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_member,'act' => balance)); ?>" target="_blank">我的账户&nbsp;&gt;</a></li>
			</ul>
		</div>
	</dd>
</dl>
</div>
<script>
var e = Cookie.read('UNAME')?Cookie.read('UNAME'):'';
	if(e){
		e = "你好，" + e + " 欢迎来到购物商城";
		$("member_<?php echo $this->_vars['widgets_id']; ?>").innerHTML = e;
	}
	function login(){
		url = "passport-login.html";
		window.location = url;
	}

	
</script>";s:8:"dateline";s:10:"1433317985";s:3:"ttl";s:1:"0";}