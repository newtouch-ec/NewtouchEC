<?php exit(); ?>a:3:{s:5:"value";s:2655:"<div class="shop2_newp">
	      <h4><span><?php echo $this->_vars['setting']['title']; ?></span></h4>
		  <ul class="shop2_newp_ul">
            <?php $this->_env_vars['foreach']["_good"]=array('total'=>count($this->_vars['data']['goods']),'iteration'=>0);foreach ((array)$this->_vars['data']['goods'] as $this->_vars['key'] => $this->_vars['good']){
                        $this->_env_vars['foreach']["_good"]['first'] = ($this->_env_vars['foreach']["_good"]['iteration']==0);
                        $this->_env_vars['foreach']["_good"]['iteration']++;
                        $this->_env_vars['foreach']["_good"]['last'] = ($this->_env_vars['foreach']["_good"]['iteration']==$this->_env_vars['foreach']["_good"]['total']);
?>
		     <li> <a target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => "site_product",'act' => "index",'arg0' => $this->_vars['good']['goods_id'])); ?>">
                 <img class="img-lazyload" src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager(((isset($this->_vars['good']['image_default_id']) && ''!==$this->_vars['good']['image_default_id'])?$this->_vars['good']['image_default_id']:$this->_vars['data']['defaultImage']),'m'); ?>" alt="<?php echo kernel::single('base_view_helper')->modifier_cut($this->_vars['good']['name'],72); ?>" />
                 </a>
			 <div class="shop2_newp_ul_div" style="height:50px; overflow:hidden;">
                <a title="<?php echo $this->_vars['good']['name']; ?>" target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => "site_product",'act' => "index",'arg0' => $this->_vars['good']['goods_id'])); ?>">
                     <?php echo $this->_vars['good']['name']; ?>
                </a>
                </div>
                        <div class="shop2_newp_ul_div">
                <p><span class="price le_zhi"><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['good']['price'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset')); ?></span>
                         <span class="sall ri_zhi"><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['good']['mktprice'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset')); ?></span>
                         <span class="cl_zhi"></span></p>
                </div>
               </li>
		    <?php } unset($this->_env_vars['foreach']["_good"]); ?>
		  </ul>
</div>";s:8:"dateline";s:10:"1407655007";s:3:"ttl";s:1:"0";}