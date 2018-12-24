<?php exit(); ?>a:3:{s:5:"value";s:1792:"
<div class="blue-box hot-brand">
    <div class="blue-title">
        热卖品牌
        <a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_brand,'act' => showlist)); ?>" class="more">更多</a>
    </div>
    <div class="blue-content">
        <ul class="brand-list">
            <?php $this->_env_vars['foreach']["branditem"]=array('total'=>count($this->_vars['data']),'iteration'=>0);foreach ((array)$this->_vars['data'] as $this->_vars['key'] => $this->_vars['item']){
                        $this->_env_vars['foreach']["branditem"]['first'] = ($this->_env_vars['foreach']["branditem"]['iteration']==0);
                        $this->_env_vars['foreach']["branditem"]['iteration']++;
                        $this->_env_vars['foreach']["branditem"]['last'] = ($this->_env_vars['foreach']["branditem"]['iteration']==$this->_env_vars['foreach']["branditem"]['total']);
?>
            <li class="brand-item
            <?php if( $this->_env_vars['foreach']['branditem']['iteration']%2 == 0 ){ ?> last<?php }  if( $this->_env_vars['foreach']['branditem']['iteration'] == 5 ){ ?> rowlast<?php }  if( $this->_env_vars['foreach']['branditem']['iteration'] == 6 ){ ?> rowlast<?php } ?>
            ">
            <a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_brand,'act' => index,'arg0' => $this->_vars['item']['brand_id'])); ?>" title="<?php echo $this->_vars['item']['brand_name']; ?>">
                <img src="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['item']['brand_logo']); ?>" alt="<?php echo $this->_vars['item']['brand_name']; ?>" class="img"/>
            </a>
            </li>
            <?php } unset($this->_env_vars['foreach']["branditem"]); ?>
        </ul>
    </div>
</div>
";s:8:"dateline";s:10:"1438937688";s:3:"ttl";s:1:"0";}