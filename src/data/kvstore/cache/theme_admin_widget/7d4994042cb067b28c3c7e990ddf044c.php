<?php exit(); ?>a:3:{s:5:"value";s:3461:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="shop2_hot">
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
			   <span class="price le_zhi"><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['good']['price'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset'),app::get('b2c')->getConf('system.money.separator')); ?></span>
			   <span class="sall ri_zhi"><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>近期售出<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>：<strong ><?php echo $this->_vars['good']['buy_m_count']; ?></strong> <?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>笔<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></span>
			   <div class="cl_zhi"></div>
			  </div>
			 </li>
       <?php } unset($this->_env_vars['foreach']["_good"]); ?>
			 <div class="cl_zhi"></div>
		  </ul>
		  <div class="cl_zhi"></div>
</div>";s:3:"ttl";i:0;s:8:"dateline";i:1441861151;}