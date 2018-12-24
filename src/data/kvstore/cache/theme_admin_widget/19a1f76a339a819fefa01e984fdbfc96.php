<?php exit(); ?>a:3:{s:5:"value";s:6138:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper');  echo $this->ui()->css(array('src' => "shop.css",'app' => "b2c"));?>
<p class="mall_store_info_p">
<!--<strong>店铺：</strong>-->
<span>店铺：</span>
<span>描述相符：</span> <span><?php if( $this->_vars['data']['store_point']['0']['avg_point'] ){  echo $this->_vars['data']['store_point']['0']['avg_point'];  }else{ ?>0<?php } ?> </span>
<?php if( empty($this->_vars['data']['store_point']['0']['avg_point']) ){ ?>
 <span class="point blow">低于</span>
    <span>100%</span>
<?php }else{  if( $this->_vars['data']['store_point']['0']['avg_percent'] > 0 ){ ?>
      <span class="point blow">低于</span>
    <span><?php echo abs($this->_vars['data']['store_point']['0']['avg_percent']); ?>%</span>
    <?php }elseif( $this->_vars['data']['store_point']['0']['avg_percent'] < 0  ){ ?>
        <span class="point">高于</span>
    <span><?php echo abs($this->_vars['data']['store_point']['0']['avg_percent']); ?>%</span>
    <?php }else{ ?>
        <span class="point">持平</span>
    <span><?php echo abs($this->_vars['data']['store_point']['0']['avg_percent']); ?>%</span>
    <?php }  } ?>
<span class="store_down"></span>
<span class="cl_zhi"></span>
</p>
<div class="mall_store_shop_info_detail">
<div class="shopheader-dsr p_0 border_b">
<p class="shopdsr-title" >店铺动态评分<span>与同行业相比</span></p>
<ul class="shopdsr-con">
    <?php if($this->_vars['data']['store_point'])foreach ((array)$this->_vars['data']['store_point'] as $this->_vars['key'] => $this->_vars['item']){ ?>
        <li style="width:200px;">
        <span class='de_score'><?php echo $this->_vars['item']['name']; ?>：</span><span class="sdc-num"><?php if( empty($this->_vars['item']['avg_point'])==false ){  echo $this->_vars['item']['avg_point'];  }else{ ?>0<?php } ?></span>
        <?php if( empty($this->_vars['item']['avg_point']) ){ ?>
        <b class="sdc-low">低于</b>
                <span class="sdc-low">100%</span>
        <?php }else{  if( $this->_vars['item']['avg_percent'] > 0 ){ ?>
                <b class="sdc-low">低于</b>
                <span class="sdc-low"><?php echo abs($this->_vars['item']['avg_percent']); ?>%</span>
            <?php }elseif( $this->_vars['item']['avg_percent'] < 0  ){ ?>
                <b class="sdc-high">高于</b>
                <span class="sdc-high"><?php echo abs($this->_vars['item']['avg_percent']); ?>%</span>
            <?php }else{ ?>
                <b class="sdc-high">持平</b>
                <span class="sdc-high">----</span>
            <?php }  } ?>
      </li>
    <?php } ?>
    </ul>
  </div>
<div class="mall_store_shop_info_addre">
   <p>店铺等级：<span><?php echo $this->_vars['data']['grade_name']; ?></span></p>
   <p>店&nbsp;&nbsp;铺&nbsp;&nbsp;名：<span><?php echo $this->_vars['data']['store']['store_name']; ?></span></p>
    <?php if( $this->_vars['data']['type'] == 'qq' ){ ?>
    <p><strong class="fl">客&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;服：</strong>
    <span class="fl">   
        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_vars['data']['number']; ?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $this->_vars['data']['number']; ?>:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
     </span>
      <span class="cl_zhi"></span>
     </p>
   <?php }  if( $this->_vars['data']['type'] == 'ww' ){ ?> 
   <p><strong class="fl">客&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;服：</strong>
    <span class="fl"> 
    <a target="_blank" href="http://amos.im.alisoft.com/msg.aw?v=2&uid=<?php echo $this->_vars['data']['number']; ?>&site=cntaobao&s=1&charset=utf-8" ><img border="0" src="http://amos.im.alisoft.com/online.aw?v=2&uid=<?php echo $this->_vars['data']['number']; ?>&site=cntaobao&s=1&charset=utf-8"/></a>
    </span>
      <span class="cl_zhi"></span>
     </p>
   <?php } ?>

   <p>公&nbsp;&nbsp;司&nbsp;&nbsp;名：<span><?php echo $this->_vars['data']['store']['company_name']; ?></span></p>
   <p>所&nbsp;&nbsp;在&nbsp;&nbsp;地：<span><?php echo $this->_vars['data']['store']['area']; ?></span></p>
   <div class="mall_store_shop_info_come">
     <a target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => view,'arg' => $this->_vars['data']['store']['store_id'])); ?>">进入店铺</a>
     
    <ul class="button">
            <li class="star-off" isspecial="1" <?php if( $this->_vars['data']['isLogin'] ){ ?>star="<?php echo $this->_vars['data']['store']['store_id']; ?>" data-type="on"<?php } ?>>
            <a <?php if( $this->_vars['data']['isLogin']==false ){ ?>href="<?php echo kernel::router()->gen_url(array('app' => "b2c",'ctl' => "site_passport",'act' => "login")); ?>" <?php }else{ ?>href="javascript:void(0);" rel="_fav_"<?php } ?> class=" listact">
             <span>
                <div class="fav"><?php $this->_tag_stack[] = array('t', array()); $this->__view_helper_model['base_view_helper']->block_t(array(), null, $this); ob_start(); ?>收藏本店<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></div>
                <div class="nofav"><?php $this->_tag_stack[] = array('t', array()); $this->__view_helper_model['base_view_helper']->block_t(array(), null, $this); ob_start(); ?>已收藏<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></div>
            </span>
            </a>
            </li>
          </ul>
     <div class="cl_zhi"></div>
   </div>
</div>
</div>";s:8:"dateline";s:10:"1433314527";s:3:"ttl";s:1:"0";}