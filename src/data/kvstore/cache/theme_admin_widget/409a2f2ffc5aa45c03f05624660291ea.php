<?php exit(); ?>a:3:{s:5:"value";s:4156:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><span class="ShopCartWrap">
	<a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => "site_cart",'act' => "index")); ?>" class="cart-container">
<!-- <img src="images/cart.png" style="vertical-align:middle;"/>&nbsp; -->
		<span><!--<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>-->购物车<!--<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>-->
			<script>
			var _prefix_number = "";
			var _subfix_number = "</b>";
			<?php if( $this->_vars['setting']['cart_show_type']==1 ){ ?>
			_prefix_number = '<b class="cart-number">';	
			document.write(typeof(Cookie)=='undefined' ? (_prefix_number + '0' + _subfix_number) : _prefix_number + (Cookie.read('S[CART_NUMBER]')?Cookie.read('S[CART_NUMBER]'):'0') + _subfix_number);
			<?php }else{ ?>
			_prefix_number = '<b class="cart-count">';
			document.write(typeof(Cookie)=='undefined' ? (_prefix_number + '0' + _subfix_number):  _prefix_number + (Cookie.read('S[CART_COUNT]')?Cookie.read('S[CART_COUNT]'):'0') + _subfix_number);
			<?php } ?>
		</script><?php if( $this->_vars['setting']['cart_show_type']==1 ){ ?><!--<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>-->&nbsp;件<!--<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>--><?php }else{ ?><!--<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>-->种<!--<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>--><?php } ?><!--<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>--><!--<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>--></span>
		<!--<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>--><!--<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>-->

		<?php if( $this->_vars['setting']['cart_show_total'] == "1" ){  $this->_tag_stack[] = array('t', array()); $this->__view_helper_model['base_view_helper']->block_t(array(), null, $this); ob_start(); ?>共计：<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?><span class="cart-money-total"><script>document.write(typeof(Cookie)=='undefined' ? 0 : (Cookie.read('S[CART_TOTAL_PRICE]')?Cookie.read('S[CART_TOTAL_PRICE]'):0));</script></span>
		<?php } ?>
	</a>
</span>
";s:8:"dateline";s:10:"1439345534";s:3:"ttl";s:1:"0";}