<?php exit(); ?>a:3:{s:5:"value";s:2035:"<h4><?php echo $this->_vars['data']['title']; ?></h4>
<ul class="new_shop">
  <?php $this->_env_vars['foreach']["_good"]=array('total'=>count($this->_vars['data']['goods']),'iteration'=>0);foreach ((array)$this->_vars['data']['goods'] as $this->_vars['key'] => $this->_vars['good']){
                        $this->_env_vars['foreach']["_good"]['first'] = ($this->_env_vars['foreach']["_good"]['iteration']==0);
                        $this->_env_vars['foreach']["_good"]['iteration']++;
                        $this->_env_vars['foreach']["_good"]['last'] = ($this->_env_vars['foreach']["_good"]['iteration']==$this->_env_vars['foreach']["_good"]['total']);
?>
  <li><a target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => "site_product",'act' => "index",'arg0' => $this->_vars['good']['goods_id'])); ?>"><img class="img-lazyload" src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager(((isset($this->_vars['good']['image_default_id']) && ''!==$this->_vars['good']['image_default_id'])?$this->_vars['good']['image_default_id']:$this->_vars['data']['defaultImage']),'m'); ?>" alt="<?php echo kernel::single('base_view_helper')->modifier_cut($this->_vars['good']['name'],72); ?>" /></a>
     <p><a target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => "site_product",'act' => "index",'arg0' => $this->_vars['good']['goods_id'])); ?>"><?php echo $this->_vars['good']['name']; ?></a></p>
   <p class="price_p">一口价：<span class="shop_zhi">￥</span><span class="shop_price"><?php echo $this->_vars['good']['price']; ?></span></p>
  </li>
  <?php } unset($this->_env_vars['foreach']["_good"]); ?>
  <div class="cl_zhi"></div>
</ul>
<a href="<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => "site_shop",'act' => "gallery",'arg0' => $this->_vars['data']['store']['store_id'])); ?>"><input type="button" class="shop_right_button fr" value="更多宝贝" /></a>
<div class="cl_zhi"></div>";s:8:"dateline";s:10:"1407640184";s:3:"ttl";s:1:"0";}