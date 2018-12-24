<?php exit(); ?>a:3:{s:5:"value";s:586:"<div class="content-node-list">
    <?php if( $this->_vars['data']['__shownode']&&$this->_vars['data']['node_name'] ){ ?>
    <div class="content-node-list-title">
        <?php if( !$this->_vars['data']['__stripparenturl'] ){ ?>
            <a href="<?php echo $this->_vars['data']['node_url']; ?>" ><span><?php echo $this->_vars['data']['node_name']; ?></span></a>
        <?php }else{  echo $this->_vars['data']['node_name'];  } ?>
    </div> 
    <?php } ?>
    <ul class="content-node-list-body">
                <?php echo $this->_vars['data']['__html']; ?>
    </ul> 
</div>



	";s:8:"dateline";s:10:"1433233310";s:3:"ttl";s:1:"0";}