<?php exit(); ?>a:3:{s:5:"value";s:1742:"<ul class="nav-list clearfix">
    <?php $this->_env_vars['foreach'][wgtmenu]=array('total'=>count($this->_vars['data']),'iteration'=>0);foreach ((array)$this->_vars['data'] as $this->_vars['key'] => $this->_vars['item']){
                        $this->_env_vars['foreach'][wgtmenu]['first'] = ($this->_env_vars['foreach'][wgtmenu]['iteration']==0);
                        $this->_env_vars['foreach'][wgtmenu]['iteration']++;
                        $this->_env_vars['foreach'][wgtmenu]['last'] = ($this->_env_vars['foreach'][wgtmenu]['iteration']==$this->_env_vars['foreach'][wgtmenu]['total']);
 if( $this->_vars['item']['custom_url'] != '' ){ ?>
    <li class="nav-item"><a href="<?php echo $this->_vars['item']['custom_url']; ?>" <?php if( $this->_vars['item']['target_blank'] == 'true' ){ ?>target="_blank"<?php } ?>><?php echo $this->_vars['item']['title']; ?></a></li>
    <?php }else{ ?>
    <li class="nav-item"><a href="<?php echo kernel::router()->gen_url(array('app' => $this->_vars['item']['app'],'ctl' => $this->_vars['item']['ctl'],'act' => $this->_vars['item']['act'],'args' => $this->_vars['item']['params'],'full' => 1)); ?>" <?php if( $this->_vars['item']['target_blank'] == 'true' ){ ?>target="_blank"<?php } ?>><?php echo $this->_vars['item']['title']; ?></a></li>
    <?php }  } unset($this->_env_vars['foreach'][wgtmenu]); ?>
</ul>
<script>
    (function(){
        var url =location.href.split('/').getLast();
        if(!url.trim().length || url == 'index.php' || url == 'index') url='index.php/index';
        var reg=new RegExp('\/'+url,'i');
        var menulist = $$('.nav-item a');
        menulist.each(function(el){
            if(el&&el.href.test(reg))el.addClass('active');
        });
    })();
</script>
";s:3:"ttl";i:0;s:8:"dateline";i:1441861150;}