<?php exit(); ?>a:3:{s:5:"value";s:5593:"<div class="floorthree webwidth clb" style="border-top:2px solid <?php echo $this->_vars['data']['bg_color']; ?>;"><!--需要取标题色-->
  <a name="floor_<?php echo $this->_vars['widgets_id']; ?>" class="js_floor_icon" img_src="<?php echo $this->_vars['data']['floor_icon']; ?>"></a>
  <div class="floorbt fl">
    <h2 style="background:<?php echo $this->_vars['data']['bg_color']; ?>"><a href="<?php echo $this->_vars['data']['title_link']; ?>" title="<?php echo $this->_vars['data']['title']; ?>" target="_blank"><?php echo $this->_vars['data']['title']; ?></a></h2><!--需要取标题色-->
    <div class="floorthreead01"><a href="<?php echo $this->_vars['data']['floor_pic_link']; ?>" target="_blank"><img src="images/transparent.gif" lazyload="<?php echo $this->_vars['data']['floor_pic']; ?>" class="img-lazyload" /></a></div>
  </div>

  <div class="floorthree-box fr" style="border:1px solid <?php echo $this->_vars['data']['bg_color']; ?>;border-top:none;"><!--需要取标题色-->
    <div class="floor-inner fl">
      <ul class="floor-side fl" id="floor-side_<?php echo $this->_vars['widgets_id']; ?>">
        <?php if($this->_vars['data']['tab'])foreach ((array)$this->_vars['data']['tab'] as $this->_vars['key'] => $this->_vars['item']){ ?>
          <li key="<?php echo $this->_vars['key']; ?>"><a href="<?php echo $this->_vars['item']['link']; ?>" title="<?php echo $this->_vars['item']['title']; ?>" target="_blank"><?php echo $this->_vars['item']['title']; ?></a></li>
        <?php } ?>
      </ul>
      <div class="floorthreead02 fl"><a href="<?php echo $this->_vars['data']['tab_icon_link']; ?>"><img src="images/transparent.gif" lazyload="<?php echo $this->_vars['data']['tab_icon']; ?>" class="img-lazyload" /></a></div>
    </div>

    <?php if($this->_vars['data']['tab'])foreach ((array)$this->_vars['data']['tab'] as $this->_vars['key'] => $this->_vars['item']){ ?>
      <div class="floorthree-ad fl J_f J_f_<?php echo $this->_vars['widgets_id']; ?>_<?php echo $this->_vars['key']; ?>" <?php if( $this->_vars['key'] >0 ){ ?>style="display:none"<?php } ?>>
        <div class="floorthreead03">
          <a href="<?php echo $this->_vars['item']['ad']['pic_link']; ?>" target="_blank"><img src="images/transparent.gif" lazyload="<?php echo $this->_vars['item']['ad']['pic']; ?>" class="img-lazyload" /></a>
        </div>

        <?php if($this->_vars['item']['goodsinfo'])foreach ((array)$this->_vars['item']['goodsinfo'] as $this->_vars['skey'] => $this->_vars['sitem']){  if( $this->_vars['skey'] < 3 ){ ?>
            <div class="floorthreead04 fl">
              <a href="<?php echo $this->_vars['sitem']['goodslink']; ?>" title="<?php echo $this->_vars['sitem']['name']; ?>">
                <img  lazyload=<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['sitem']['image_default_id'],'s' ); ?> class="img-lazyload" >
              </a>
              <h3><a href="<?php echo $this->_vars['sitem']['goodslink']; ?>" title="<?php echo $this->_vars['sitem']['name']; ?>"><?php echo $this->_vars['sitem']['name']; ?></a></h3>
              <p><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['sitem']['price'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset')); ?></p>
            </div>
          <?php }  } ?>
      </div>
    <?php }  if($this->_vars['data']['tab'])foreach ((array)$this->_vars['data']['tab'] as $this->_vars['key'] => $this->_vars['item']){ ?>
      <span class="J_f J_f_<?php echo $this->_vars['widgets_id']; ?>_<?php echo $this->_vars['key']; ?>" <?php if( $this->_vars['key'] >0 ){ ?>style="display:none"<?php } ?>>
        <?php if($this->_vars['item']['goodsinfo'])foreach ((array)$this->_vars['item']['goodsinfo'] as $this->_vars['ikey'] => $this->_vars['iitem']){  if( $this->_vars['ikey'] > 2 ){ ?>
            <div class="floorthreead04 fl">
              <a href="<?php echo $this->_vars['iitem']['goodslink']; ?>" title="<?php echo $this->_vars['iitem']['name']; ?>">
                <img src="images/transparent.gif" app="b2c" lazyload=<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['iitem']['image_default_id'],'s'); ?> class="img-lazyload">
              </a>
              <h3><a href="<?php echo $this->_vars['iitem']['goodslink']; ?>" title="<?php echo $this->_vars['iitem']['name']; ?>"><?php echo $this->_vars['iitem']['name']; ?></a></h3>
              <p><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['iitem']['price'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset')); ?></p>
            </div>
          <?php }  } ?>
      </span>
    <?php } ?>
  </div>
</div>

<script>
	$$("#floor-side_<?php echo $this->_vars['widgets_id']; ?> li").each(function(o,i){
//		console.log(i);
			o.addEvent('mouseover',function(){
        $$("#floor-side_<?php echo $this->_vars['widgets_id']; ?> li").setStyle('background',"");
        $$("#floor-side_<?php echo $this->_vars['widgets_id']; ?> li").removeClass('current');
        o.addClass('current');
        o.setStyle('background',"<?php echo $this->_vars['data']['bg_color']; ?>");
        $$(".J_f").setStyle('display','none');
        var key = o.get('key');
//        console.log(key);
        $$(".J_f_<?php echo $this->_vars['widgets_id']; ?>_"+key).setStyle('display','block');
		});
	});
</script>";s:8:"dateline";s:10:"1411110995";s:3:"ttl";s:1:"0";}