<?php exit(); ?>a:3:{s:5:"value";s:2818:"<div class="shop2_floor">
  <h4><?php echo $this->_vars['setting']['title']; ?></h4>
</div>
<?php if( $this->_vars['data']['setting']['ad_pic'] ){ ?>
  <div class="ad">
   <?php if( $this->_vars['data']['setting']['ad_pic_link'] ){ ?><a href="<?php echo $this->_vars['data']['setting']['ad_pic_link']; ?>" title="<?php echo $this->_vars['data']['setting']['ad_pic_txt']; ?>" target="_blank"><?php } ?>
  <img src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['data']['setting']['ad_pic']); ?>" class="img-lazyload"  alt="<?php echo $this->_vars['data']['setting']['ad_pic_txt']; ?>"  <?php if( $this->_vars['data']['setting']['ad_pic_height'] ){ ?>height='<?php echo $this->_vars['data']['setting']['ad_pic_height']; ?>'<?php } ?>>
  <?php if( $this->_vars['data']['setting']['ad_pic_link'] ){ ?></a><?php } ?>
</div>
<?php } ?>
<ul class="shop2_floor_ul">
<?php $this->_env_vars['foreach']["_good"]=array('total'=>count($this->_vars['data']['goods']),'iteration'=>0);foreach ((array)$this->_vars['data']['goods'] as $this->_vars['key'] => $this->_vars['good']){
                        $this->_env_vars['foreach']["_good"]['first'] = ($this->_env_vars['foreach']["_good"]['iteration']==0);
                        $this->_env_vars['foreach']["_good"]['iteration']++;
                        $this->_env_vars['foreach']["_good"]['last'] = ($this->_env_vars['foreach']["_good"]['iteration']==$this->_env_vars['foreach']["_good"]['total']);
?>
<li>

<div class="shop_p_info" >
<a target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => "site_product",'act' => "index",'arg0' => $this->_vars['good']['goods_id'])); ?>"><?php echo $this->_vars['good']['name']; ?></a>
</div>
<a target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => "site_product",'act' => "index",'arg0' => $this->_vars['good']['goods_id'])); ?>">
<img class="img-lazyload" src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager(((isset($this->_vars['good']['image_default_id']) && ''!==$this->_vars['good']['image_default_id'])?$this->_vars['good']['image_default_id']:$this->_vars['data']['defaultImage']),'m'); ?>" alt="<?php echo kernel::single('base_view_helper')->modifier_cut($this->_vars['good']['name'],72); ?>" />
</a>
<div class="shop2_price">RMB:<span><?php echo $this->_vars['good']['price']; ?></span>元</div>
<a target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => "site_product",'act' => "index",'arg0' => $this->_vars['good']['goods_id'])); ?>">
<input type="button" class="buy_now" value="立即购买"><!--还需修改-->
</a>
</li>
<?php } unset($this->_env_vars['foreach']["_good"]); ?>
<div class="cl_zhi"></div>
</ul>";s:8:"dateline";s:10:"1418799435";s:3:"ttl";s:1:"0";}