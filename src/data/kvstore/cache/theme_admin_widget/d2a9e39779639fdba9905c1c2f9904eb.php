<?php exit(); ?>a:3:{s:5:"value";s:2003:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="share_site">
<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>您当前的位置：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content='';  if( $this->_vars['setting']['begin'] ){ ?>
    <span class="begin"><?php echo $this->_vars['setting']['begin']; ?></span>
  <?php }  $this->_env_vars['foreach']["nav"]=array('total'=>count($this->_vars['data']),'iteration'=>0);foreach ((array)$this->_vars['data'] as $this->_vars['item']){
                        $this->_env_vars['foreach']["nav"]['first'] = ($this->_env_vars['foreach']["nav"]['iteration']==0);
                        $this->_env_vars['foreach']["nav"]['iteration']++;
                        $this->_env_vars['foreach']["nav"]['last'] = ($this->_env_vars['foreach']["nav"]['iteration']==$this->_env_vars['foreach']["nav"]['total']);
 if( $this->_vars['item']['title'] && $this->_vars['item']['link'] ){  if( $this->_env_vars['foreach']['nav']['last'] ){ ?>
  <span class="now"><?php echo $this->_vars['item']['title']; ?></span>
  <?php }else{ ?>
  <span><a href="<?php echo $this->_vars['item']['link']; ?>" alt="<?php echo $this->_vars['item']['tips']; ?>" title="<?php echo $this->_vars['item']['tips']; ?>"><?php echo $this->_vars['item']['title']; ?></a></span>
  <?php if( $this->_vars['setting']['split'] ){  echo $this->_vars['setting']['split'];  }else{ ?><span> &gt; </span><?php }  }  }  } unset($this->_env_vars['foreach']["nav"]);  if( $this->_vars['setting']['end'] ){ ?>
    <span class="end"><?php echo $this->_vars['setting']['end']; ?></span>
  <?php } ?>
</div>";s:8:"dateline";s:10:"1409549919";s:3:"ttl";s:1:"0";}