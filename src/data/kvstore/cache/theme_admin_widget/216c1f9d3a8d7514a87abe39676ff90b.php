<?php exit(); ?>a:3:{s:5:"value";s:2408:"<div class="shop2_hot">
	      <h4><?php echo $this->_vars['setting']['title']; ?></h4>
	      <ul class="shop2_hot_ul">
		     <?php $this->_env_vars['foreach']["_good"]=array('total'=>count($this->_vars['data']['goods']),'iteration'=>0);foreach ((array)$this->_vars['data']['goods'] as $this->_vars['key'] => $this->_vars['good']){
                        $this->_env_vars['foreach']["_good"]['first'] = ($this->_env_vars['foreach']["_good"]['iteration']==0);
                        $this->_env_vars['foreach']["_good"]['iteration']++;
                        $this->_env_vars['foreach']["_good"]['last'] = ($this->_env_vars['foreach']["_good"]['iteration']==$this->_env_vars['foreach']["_good"]['total']);
?>
         <li>
         <a target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => "site_product",'act' => "index",'arg0' => $this->_vars['good']['goods_id'])); ?>">
         <img class="img-lazyload" src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager(((isset($this->_vars['good']['image_default_id']) && ''!==$this->_vars['good']['image_default_id'])?$this->_vars['good']['image_default_id']:$this->_vars['data']['defaultImage']),'m'); ?>" alt="<?php echo kernel::single('base_view_helper')->modifier_cut($this->_vars['good']['name'],72); ?>" />
         </a>
			  <div class="shop2_hot_ul_info" style='height:40px;overflow:hidden;'>
        <a title="<?php echo $this->_vars['good']['name']; ?>" target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => "site_product",'act' => "index",'arg0' => $this->_vars['good']['goods_id'])); ?>" >
        <?php echo $this->_vars['good']['name']; ?>
        </a>
        </div>
			  <div class="shop2_hot_ul_pice">
			   <span class="price le_zhi"><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['good']['price'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset')); ?></span>
			   <span class="sall ri_zhi">近期售出：<strong ><?php echo $this->_vars['good']['buy_m_count']; ?></strong>笔</span>
			   <div class="cl_zhi"></div>
			  </div>
			 </li>
       <?php } unset($this->_env_vars['foreach']["_good"]); ?>
			 <div class="cl_zhi"></div>
		  </ul>
		  <div class="cl_zhi"></div>
</div>";s:8:"dateline";s:10:"1418799435";s:3:"ttl";s:1:"0";}