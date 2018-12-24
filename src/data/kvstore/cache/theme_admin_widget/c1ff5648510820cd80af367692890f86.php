<?php exit(); ?>a:3:{s:5:"value";s:3437:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="cart_div" id="head_menu_cart">
  <a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_cart,'act' => index)); ?>" class="mini-cart fl"><s></s>
    共 <script>
        var _prefix_number = "";
        var _subfix_number = "</span>";

        <?php if( $this->_vars['setting']['cart_show_type']==1 ){ ?>
            _prefix_number = '<span id="cart_num">';
            document.write(typeof(Cookie)=='undefined' ? (_prefix_number + '0' + _subfix_number) : _prefix_number + (Cookie.read('S[CART_NUMBER]')?Cookie.read('S[CART_NUMBER]'):'0') + _subfix_number);
        <?php }else{ ?>
            _prefix_number = '<span id="cart_count">';
            document.write(typeof(Cookie)=='undefined' ? (_prefix_number + '0' + _subfix_number): _prefix_number + (Cookie.read('S[CART_COUNT]')?Cookie.read('S[CART_COUNT]'):'0') + _subfix_number);
        <?php } ?>
    </script>
    <?php if( $this->_vars['setting']['cart_show_type']==1 ){  $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>件<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content='';  }else{  $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>种<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content='';  } ?>
	商品
  </a>
  <a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_cart,'act' => index)); ?>" class="jiesuan">结算</a>
  <div class="cart_inproduct" style="display:none" id="cart_goods_div">
    <?php $_tpl_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("b2c","site/cart/cart_mini.html", array(),false);
$this->_vars = $_tpl_tpl_vars;
unset($_tpl_tpl_vars);
 ?>
  </div>
</div>

<script>
    $('head_menu_cart').addEvent('mouseenter',function(){
        $('cart_goods_div').setStyle('display','');
        var cart_show_type = <?php if( $this->_vars['setting']['cart_show_type']==1 ){ ?>1<?php }else{ ?>0<?php } ?>;
        new Request.HTML({
            update:$('cart_goods_div'),
            url:'<?php echo kernel::router()->gen_url(array('app' => "b2c",'ctl' => "site_cart",'act' => "mini_cart")); ?>',
            onSuccess:function(){
                <?php if( $this->_vars['setting']['cart_show_type']==1 ){ ?>
                    $('cart_num').innerHTML = (Cookie.read('S[CART_NUMBER]')?Cookie.read('S[CART_NUMBER]'):'0');
                <?php }else{ ?>
                    $('cart_count').innerHTML = (Cookie.read('S[CART_COUNT]')?Cookie.read('S[CART_COUNT]'):'0');
                <?php } ?>
            }
        }).post();
    });

    $('head_menu_cart').addEvent('mouseleave',function(){
        $('cart_goods_div').setStyle('display','none');
    });
</script>";s:8:"dateline";s:10:"1409816990";s:3:"ttl";s:1:"0";}