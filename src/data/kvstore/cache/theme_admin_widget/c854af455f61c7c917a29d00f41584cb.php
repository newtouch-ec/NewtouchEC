<?php exit(); ?>a:3:{s:5:"value";s:1951:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><a href="<?php echo kernel::router()->gen_url(array('app' => "b2c",'ctl' => "site_cart",'act' => "index")); ?>">
    <i></i>购物车
        <script>
        var _prefix_number = "";
        var _subfix_number = "</span>";
        <?php if( $this->_vars['setting']['cart_show_type']==1 ){ ?>
          _prefix_number = '<span id="cart_num" class="red">';
            document.write(typeof(Cookie)=='undefined' ? (_prefix_number + '0' + _subfix_number) : _prefix_number + (Cookie.read('S[CART_NUMBER]')?Cookie.read('S[CART_NUMBER]'):'0') + _subfix_number);
        <?php }else{ ?>
          _prefix_number = '<span id="cart_count" class="red">';
            document.write(typeof(Cookie)=='undefined' ? (_prefix_number + '0' + _subfix_number):  _prefix_number + (Cookie.read('S[CART_COUNT]')?Cookie.read('S[CART_COUNT]'):'0') + _subfix_number);
        <?php } ?>
    </script>
    <?php if( $this->_vars['setting']['cart_show_type']==1 ){  $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>件<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content='';  }else{  $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>种<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content='';  } ?>
</a>";s:8:"dateline";s:10:"1387952416";s:3:"ttl";s:1:"0";}