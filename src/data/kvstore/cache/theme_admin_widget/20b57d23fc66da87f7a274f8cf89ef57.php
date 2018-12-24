<?php exit(); ?>a:3:{s:5:"value";s:2717:"<?php echo $this->ui()->script(array('src' => "mootools_fx.js",'app' => "business",'pdir' => "js"));?>
<div id="divMap_<?php echo $this->_vars['widgets_id']; ?>" class="topad tc" style="background:<?php echo $this->_vars['data']['ad_pic_color']; ?>">
  <?php if( $this->_vars['data']['link_type'] != 'map' ){  if( $this->_vars['data']['ad_pic_link'] ){ ?><a href="<?php echo $this->_vars['data']['ad_pic_link']; ?>" title="<?php echo $this->_vars['data']['ad_pic_txt']; ?>" target="_blank"><?php } ?>
    <img id="picMap_<?php echo $this->_vars['widgets_id']; ?>" src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['data']['ad_pic']); ?>" class="img-lazyload" alt="<?php echo $this->_vars['data']['ad_pic_txt']; ?>" <?php if( $this->_vars['data']['ad_pic_width'] ){ ?>width="<?php echo $this->_vars['data']['ad_pic_width']; ?>px"<?php }  if( $this->_vars['data']['ad_pic_height'] ){ ?>height="<?php echo $this->_vars['data']['ad_pic_height']; ?>px"<?php } ?>>
    <?php if( $this->_vars['data']['ad_pic_link'] ){ ?></a><?php }  }else{ ?>
    <img id="picMap_<?php echo $this->_vars['widgets_id']; ?>" usemap='#Map_<?php echo $this->_vars['widgets_id']; ?>' src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['data']['ad_pic']); ?>" class="img-lazyload" alt="<?php echo $this->_vars['data']['ad_pic_txt']; ?>" <?php if( $this->_vars['data']['ad_pic_width'] ){ ?>width="<?php echo $this->_vars['data']['ad_pic_width']; ?>px"<?php }  if( $this->_vars['data']['ad_pic_height'] ){ ?>height="<?php echo $this->_vars['data']['ad_pic_height']; ?>px"<?php } ?>>
    <?php if( $this->_vars['data']['area'] ){ ?>
      <map name="Map_<?php echo $this->_vars['widgets_id']; ?>">
        <?php if($this->_vars['data']['area'])foreach ((array)$this->_vars['data']['area'] as $this->_vars['ar']){ ?>
          <area shape="<?php echo $this->_vars['ar']['area_type']; ?>" coords="<?php echo $this->_vars['ar']['link_area']; ?>" href="<?php echo $this->_vars['ar']['link_target']; ?>" title="<?php echo $this->_vars['ar']['link_info']; ?>">
        <?php } ?>
      </map>
    <?php }  } ?>
</div>

<script>
    //mootools滑入滑出效果需引入mootools_fx.js add by zlj 2014-8-6 11:13:12
    var slideElement = $('divMap_<?php echo $this->_vars['widgets_id']; ?>');
    var slideVar = new Fx.Slide(slideElement, {
        mode: 'vertical', //滑动效果 默认是'vertical'(垂直)
        duration: '2000', //延时 持续时间
        onComplete: function(){
            this.slideOut.delay(15000, this); //停留15秒后立即消失
        }
    });

    slideVar.hide().slideIn();
</script>";s:8:"dateline";s:10:"1418629553";s:3:"ttl";s:1:"0";}