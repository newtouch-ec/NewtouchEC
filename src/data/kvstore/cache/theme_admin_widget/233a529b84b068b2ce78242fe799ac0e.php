<?php exit(); ?>a:3:{s:5:"value";s:2072:"<div class="prolist_hot dis_bl clb">
      <div class="gallery_ri_tit"><span>热卖推荐</span></div>
	   <ul class="gallery_ri_ul">
     <?php $this->_env_vars['foreach'][product]=array('total'=>count($this->_vars['data']['goods']),'iteration'=>0);foreach ((array)$this->_vars['data']['goods'] as $this->_vars['linklist']){
                        $this->_env_vars['foreach'][product]['first'] = ($this->_env_vars['foreach'][product]['iteration']==0);
                        $this->_env_vars['foreach'][product]['iteration']++;
                        $this->_env_vars['foreach'][product]['last'] = ($this->_env_vars['foreach'][product]['iteration']==$this->_env_vars['foreach'][product]['total']);
?>
	     <li>
       <a target='_blank' href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_product,'act' => index,'arg' => $this->_vars['linklist']['id'])); ?>">
       <?php if( $this->_vars['linklist']['udfimg'] == 'true' ){  $this->_vars["gimage"]=$this->_vars['linklist']['thumbnail_pic'];  }else{  $this->_vars["gimage"]=((isset($this->_vars['linklist']['pic']) && ''!==$this->_vars['linklist']['pic'])?$this->_vars['linklist']['pic']:$this->_vars['data']['defaultImage']);  } ?>
    <img src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['gimage'],'m'); ?>" class="img-lazyload"  alt=<?php echo kernel::single('base_view_helper')->modifier_escape($this->_vars['linklist']['nice'],html); ?>>
    <span class="span_<?php echo $this->_env_vars['foreach']['product']['iteration']%7; ?>">
        <?php echo kernel::single('base_view_helper')->modifier_cut($this->_vars['linklist']['nice'],40); ?>
    </span>
    <p><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['linklist']['price'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset')); ?></p>
    </a>
		 </li>
     <?php } unset($this->_env_vars['foreach'][product]); ?>
	   </ul>
</div>";s:8:"dateline";s:10:"1433129671";s:3:"ttl";s:1:"0";}