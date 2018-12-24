<?php exit(); ?>a:3:{s:5:"value";s:2264:"<div class="rsidebar">
    <div class="red-box gift">
        <div class="red-title"><?php echo $this->_vars['setting']['block_name']; ?></div>
        <div class="red-content">
            <ul class="product-list">
                <?php $this->_env_vars['foreach'][goodsrow]=array('total'=>count($this->_vars['data']['goodsRows']),'iteration'=>0);foreach ((array)$this->_vars['data']['goodsRows'] as $this->_vars['gid'] => $this->_vars['row']){
                        $this->_env_vars['foreach'][goodsrow]['first'] = ($this->_env_vars['foreach'][goodsrow]['iteration']==0);
                        $this->_env_vars['foreach'][goodsrow]['iteration']++;
                        $this->_env_vars['foreach'][goodsrow]['last'] = ($this->_env_vars['foreach'][goodsrow]['iteration']==$this->_env_vars['foreach'][goodsrow]['total']);
?>
                <li class="product-item<?php if( $this->_env_vars['foreach']['goodsrow']['iteration']%5 == 0 ){ ?> last<?php } ?>">
                <?php $this->_vars[pickey]=((isset($this->_vars['setting']['gpic_size']) && ''!==$this->_vars['setting']['gpic_size'])?$this->_vars['setting']['gpic_size']:'goodsPicS'); ?>
                <a href="<?php echo $this->_vars['row']['goodsLink']; ?>" class="product-img">
                    <img src="<?php echo $this->_vars['row'][$this->_vars['pickey']]; ?>" alt="<?php echo $this->_vars['row']['goodsName']; ?>" class="img"/>
                </a>
                <div class="product-info">
                    <div class="product-name">
                        <a href="<?php echo $this->_vars['row']['goodsLink']; ?>">
                            <?php echo $this->_vars['row']['goodsName']; ?>
                        </a>
                    </div>
                    <div class="product-price">销售价：<?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['row']['goodsSalePrice'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset'),app::get('b2c')->getConf('system.money.separator')); ?></div>
                </div>
                </li>
                <?php } unset($this->_env_vars['foreach'][goodsrow]); ?>
            </ul>
        </div>
    </div>
</div>";s:8:"dateline";s:10:"1438937595";s:3:"ttl";s:1:"0";}