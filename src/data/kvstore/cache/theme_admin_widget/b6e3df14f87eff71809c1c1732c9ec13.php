<?php exit(); ?>a:3:{s:5:"value";s:1446:"<div class="share_site">

  <?php if( $this->_vars['setting']['begin'] ){ ?>
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
</div>";s:8:"dateline";s:10:"1440125085";s:3:"ttl";s:1:"0";}