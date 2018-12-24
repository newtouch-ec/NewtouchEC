<?php exit(); ?>a:3:{s:5:"value";s:929:"<div class="shop_nav">
    <ul>
        <?php if( $this->_vars['data']['nav'] ){  $this->_env_vars['foreach'][nav_n]=array('total'=>count($this->_vars['data']['nav']),'iteration'=>0);foreach ((array)$this->_vars['data']['nav'] as $this->_vars['nav_k'] => $this->_vars['nav_s']){
                        $this->_env_vars['foreach'][nav_n]['first'] = ($this->_env_vars['foreach'][nav_n]['iteration']==0);
                        $this->_env_vars['foreach'][nav_n]['iteration']++;
                        $this->_env_vars['foreach'][nav_n]['last'] = ($this->_env_vars['foreach'][nav_n]['iteration']==$this->_env_vars['foreach'][nav_n]['total']);
?>
                <li><a href="<?php echo $this->_vars['nav_s']['link']; ?>" target="_blank"><?php echo $this->_vars['nav_s']['title']; ?></a></li>      
            <?php } unset($this->_env_vars['foreach'][nav_n]);  } ?>
        <div class="cl_zhi"></div>
    </ul>
</div>

";s:8:"dateline";s:10:"1408416468";s:3:"ttl";s:1:"0";}