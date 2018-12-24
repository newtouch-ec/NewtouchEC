<?php exit(); ?>a:3:{s:5:"value";s:676:"<?php if( $this->_vars['data']['ad_pic_link'] ){ ?>
<a href="<?php echo $this->_vars['data']['ad_pic_link']; ?>" target="_blank">
<?php } ?>
  <img src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['data']['ad_pic']); ?>" class="img-lazyload" alt="<?php echo $this->_vars['setting']['ad_pic_txt']; ?>" <?php if( $this->_vars['data']['ad_pic_width'] ){ ?>width='<?php echo $this->_vars['data']['ad_pic_width']; ?>'<?php }  if( $this->_vars['data']['ad_pic_height'] ){ ?>height='<?php echo $this->_vars['data']['ad_pic_height']; ?>'<?php } ?>>
<?php if( $this->_vars['data']['ad_pic_link'] ){ ?>
</a>
<?php } ?>";s:8:"dateline";s:10:"1433317981";s:3:"ttl";s:1:"0";}