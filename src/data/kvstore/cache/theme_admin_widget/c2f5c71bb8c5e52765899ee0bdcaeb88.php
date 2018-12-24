<?php exit(); ?>a:3:{s:5:"value";s:2288:"<ul class="product-list">
    <?php $this->_env_vars['foreach'][goodsrow]=array('total'=>count($this->_vars['data']['goodsRows']),'iteration'=>0);foreach ((array)$this->_vars['data']['goodsRows'] as $this->_vars['gid'] => $this->_vars['row']){
                        $this->_env_vars['foreach'][goodsrow]['first'] = ($this->_env_vars['foreach'][goodsrow]['iteration']==0);
                        $this->_env_vars['foreach'][goodsrow]['iteration']++;
                        $this->_env_vars['foreach'][goodsrow]['last'] = ($this->_env_vars['foreach'][goodsrow]['iteration']==$this->_env_vars['foreach'][goodsrow]['total']);
?>
    <li class="product-item<?php if( $this->_env_vars['foreach']['goodsrow']['iteration']%4 == 0 ){ ?> last<?php } ?>">
    <?php $this->_vars[pickey]=((isset($this->_vars['setting']['gpic_size']) && ''!==$this->_vars['setting']['gpic_size'])?$this->_vars['setting']['gpic_size']:'goodsPicS'); ?>
    <a href="<?php echo $this->_vars['row']['goodsLink']; ?>" class="product-img">
        <img src="<?php echo $this->_vars['row'][$this->_vars['pickey']]; ?>" alt="<?php echo $this->_vars['row']['goodsName']; ?>" />
    </a>
    <a href="<?php echo $this->_vars['row']['goodsLink']; ?>" class="product-name" title="<?php echo $this->_vars['row']['goodsName']; ?>">
        <?php echo $this->_vars['row']['goodsName']; ?>
    </a>
    <div class="product-price">
        <div class="selling-price">
            抢购价：<span class="price"><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['row']['goodsSalePrice'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset'),app::get('b2c')->getConf('system.money.separator')); ?></span>
        </div>
        <div class="market-price">
            市场价：<span class="price"><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['row']['goodsMarketPrice'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset'),app::get('b2c')->getConf('system.money.separator')); ?></span>
        </div>
    </div>
    
    </li>
    <?php } unset($this->_env_vars['foreach'][goodsrow]); ?>
</ul>
";s:8:"dateline";s:10:"1439345538";s:3:"ttl";s:1:"0";}