<?php exit(); ?>a:3:{s:5:"value";s:3217:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="sj_info">
	<div class="info_title"><?php echo $this->_vars['data']['title']; ?></div>
  <?php if( $this->_vars['data']['store_id'] ){ ?>
    <div class="info_details">
    <img class="img-lazyload" src="images/transparent.gif" lazyload="images/sjinfo_1.jpg" class="mr_6"><img class="img-lazyload" src="images/transparent.gif" lazyload="images/sjinfo_2.jpg" class="mr_6"><img class="img-lazyload" src="images/transparent.gif" lazyload="images/sjinfo_3.jpg">
    <?php if( $this->_vars['data']['showname'] && $this->_vars['data']['showname'] == '1' ){  $this->_vars["showname"]="true";  }else{  $this->_vars["showname"]="false";  }  echo $this->ui()->input(array('type' => "storepoint",'store' => "{$this->_vars['data']['store_id']}",'show_name' => $this->_vars['showname']));?>
    <a href="<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => view,'arg' => $this->_vars['data']['store_id'])); ?>" class="info_enter"><?php $this->_tag_stack[] = array('t', array()); $this->__view_helper_model['base_view_helper']->block_t(array(), null, $this); ob_start(); ?>进入店铺<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></a>
    <p>
      <ul class="button">
        <li class="star-off" isspecial="1" <?php if( $this->_vars['data']['login']=="member" ){ ?>star="<?php echo $this->_vars['data']['store_id']; ?>" data-type="on"<?php } ?>> <a <?php if( $this->_vars['data']['login']=="nologin" ){ ?>href="<?php echo kernel::router()->gen_url(array('app' => "b2c",'ctl' => "site_passport",'act' => "login")); ?>"<?php }elseif( $this->_vars['data']['login']=="business" ){ ?>href="javascript:void(0);" <?php }else{ ?>href="javascript:void(0);" rel="_fav_"<?php } ?> class=" listact"><!--<i class="has-icon"> </i>--><span>
            <div class="fav"><?php $this->_tag_stack[] = array('t', array()); $this->__view_helper_model['base_view_helper']->block_t(array(), null, $this); ob_start(); ?>收藏本店铺<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></div>
            <div class="nofav"><?php $this->_tag_stack[] = array('t', array()); $this->__view_helper_model['base_view_helper']->block_t(array(), null, $this); ob_start(); ?>已收藏<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></div>
        </span></a>
        </li>
      </ul>
    </p>
    </div>
  <?php }else{ ?>
    <span>没有获取到任何店家信息</span>
  <?php } ?>
</div>";s:8:"dateline";s:10:"1407726451";s:3:"ttl";s:1:"0";}