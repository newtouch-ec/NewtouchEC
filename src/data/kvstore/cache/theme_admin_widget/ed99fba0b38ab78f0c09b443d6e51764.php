<?php exit(); ?>a:3:{s:5:"value";s:6121:"<div class="i_floor_title">
    <?php if( $this->_vars['data']['floor_suspended_goods']['goods_info'] ){ ?>
    <div class="floor_pop" style="display:none;background:<?php if( $this->_vars['data']['bg_color'] ){  echo $this->_vars['data']['bg_color'];  }else{ ?>#87DE6C<?php } ?>;" id="floor_suspended_goods_<?php echo $this->_vars['widgets_id']; ?>">
    <!-- 悬浮商品 -->
        <ul>
        <?php $this->_env_vars['foreach'][floor_suspended_goods]=array('total'=>count($this->_vars['data']['floor_suspended_goods']['goods_info']),'iteration'=>0);foreach ((array)$this->_vars['data']['floor_suspended_goods']['goods_info'] as $this->_vars['key'] => $this->_vars['goods']){
                        $this->_env_vars['foreach'][floor_suspended_goods]['first'] = ($this->_env_vars['foreach'][floor_suspended_goods]['iteration']==0);
                        $this->_env_vars['foreach'][floor_suspended_goods]['iteration']++;
                        $this->_env_vars['foreach'][floor_suspended_goods]['last'] = ($this->_env_vars['foreach'][floor_suspended_goods]['iteration']==$this->_env_vars['foreach'][floor_suspended_goods]['total']);
?>
            <li>
                <div class="f_img">
                <a href="<?php echo $this->_vars['goods']['goods_info']['goodsLink']; ?>"><img src="<?php if( $this->_vars['goods']['pic'] ){  echo $this->_vars['goods']['pic'];  }else{  echo $this->_vars['goods']['goods_info']['goodsPicM'];  } ?>"/></a>
                <div class="f_price"><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['goods']['goods_info']['goodsSalePrice'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset')); ?></div>
                </div>
                <div class="f_name"><a href="<?php echo $this->_vars['goods']['goods_info']['goodsLink']; ?>"><?php if( $this->_vars['goods']['nice'] ){  echo $this->_vars['goods']['nice'];  }else{  echo $this->_vars['goods']['goods_info']['goodsName'];  } ?></a></div>
            </li>
        <?php } unset($this->_env_vars['foreach'][floor_suspended_goods]); ?>
        </ul>
    </div>
    <?php } ?>
    <div class="floor_title"><a href="<?php if( $this->_vars['data']['floor_pic_link'] ){  echo $this->_vars['data']['floor_pic_link'];  }else{ ?>javascript:void(0);<?php } ?>" id="fool_pic_<?php echo $this->_vars['widgets_id']; ?>"><img src="<?php echo $this->_vars['data']['floor_pic']; ?>"/></a></div>

    <?php if( $this->_vars['data']['top_link_title'] ){ ?>
    <div class="floor_link"><!-- 副标题文字链接 -->
        <ul>
        <?php $this->_env_vars['foreach'][top_link_title]=array('total'=>count($this->_vars['data']['top_link_title']),'iteration'=>0);foreach ((array)$this->_vars['data']['top_link_title'] as $this->_vars['key'] => $this->_vars['title']){
                        $this->_env_vars['foreach'][top_link_title]['first'] = ($this->_env_vars['foreach'][top_link_title]['iteration']==0);
                        $this->_env_vars['foreach'][top_link_title]['iteration']++;
                        $this->_env_vars['foreach'][top_link_title]['last'] = ($this->_env_vars['foreach'][top_link_title]['iteration']==$this->_env_vars['foreach'][top_link_title]['total']);
?>
        <li><a href="<?php echo $this->_vars['data']['top_link_url'][$this->_vars['key']]; ?>"><?php echo $this->_vars['title']; ?></a></li>
        <?php if( $this->_env_vars['foreach']['top_link_title']['last'] ){  }else{ ?>
            <li class="site_line">|</li>
        <?php }  } unset($this->_env_vars['foreach'][top_link_title]); ?>
        </ul>
    </div>
    <?php } ?>
</div>


<?php if( $this->_vars['data']['floor_goods']['goods_info'] ){ ?>
<div class="i_floor_pro clb">
    <div class="i_floor_9pro">
        <ul>
            <?php if($this->_vars['data']['floor_goods']['goods_info'])foreach ((array)$this->_vars['data']['floor_goods']['goods_info'] as $this->_vars['key'] => $this->_vars['goods_info']){ ?>
                <li>
                    <div class="pro2_rb_name">
                        <a href="<?php echo $this->_vars['goods_info']['goods_info']['goodsLink']; ?>">
                            <?php if( $this->_vars['goods_info']['nice'] ){  echo $this->_vars['goods_info']['nice'];  }else{  echo $this->_vars['goods_info']['goods_info']['goodsName'];  } ?>
                        </a>
                    </div>
                    <div class="pro2_rb_price"><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['goods_info']['goods_info']['goodsSalePrice'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset')); ?></div>
                    <div class="pro2_rb_img"><a href="<?php echo $this->_vars['goods_info']['goods_info']['goodsLink']; ?>"><img src="<?php if( $this->_vars['goods_info']['pic'] ){  echo $this->_vars['goods_info']['pic'];  }else{  echo $this->_vars['goods_info']['goods_info']['goodsPicM'];  } ?>"/></a></div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
<?php }  if( $this->_vars['data']['floor_suspended_goods']['goods_info'] ){ ?>
<script>
$('fool_pic_<?php echo $this->_vars['widgets_id']; ?>').addEvent('mouseenter',function(){
    $('floor_suspended_goods_<?php echo $this->_vars['widgets_id']; ?>').setStyle('display','');
});

$('floor_suspended_goods_<?php echo $this->_vars['widgets_id']; ?>').addEvent('mouseenter',function(){
    $('floor_suspended_goods_<?php echo $this->_vars['widgets_id']; ?>').setStyle('display','');
});

$('floor_suspended_goods_<?php echo $this->_vars['widgets_id']; ?>').addEvent('mouseleave',function(){
    $('floor_suspended_goods_<?php echo $this->_vars['widgets_id']; ?>').setStyle('display','none');
});

$('fool_pic_<?php echo $this->_vars['widgets_id']; ?>').addEvent('mouseleave',function(){
    $('floor_suspended_goods_<?php echo $this->_vars['widgets_id']; ?>').setStyle('display','none');
});
</script>
<?php } ?>";s:8:"dateline";s:10:"1387946680";s:3:"ttl";s:1:"0";}