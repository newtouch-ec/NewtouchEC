<?php exit(); ?>a:3:{s:5:"value";s:3552:"<h3>今日推荐</h3>
<s></s>
<div class="grounp_hotbox">
  <ul class="grounp_hotlist" id="group_products">
	<?php if($this->_vars['data'])foreach ((array)$this->_vars['data'] as $this->_vars['item']){ ?>
    <li>
      <?php $this->_vars["cimage"]=kernel::single('base_view_helper')->modifier_storager(((isset($this->_vars['item']['image_codeid']) && ''!==$this->_vars['item']['image_codeid'])?$this->_vars['item']['image_codeid']:$this->_vars['item']['image']),'m');  $this->_vars["gimage"]=kernel::single('base_view_helper')->modifier_storager(((isset($this->_vars['cimage']) && ''!==$this->_vars['cimage'])?$this->_vars['cimage']:$this->_vars['item']['defaultImage']),'m'); ?>
      <a target="_blank" class="group_img" href="<?php echo kernel::router()->gen_url(array('app' => groupbuy,'ctl' => site_product,'act' => index,'args' => $this->_vars['item']['args'])); ?>"><img src="<?php echo $this->_vars['gimage']; ?>"></a>
      <a target="_blank" class="group_name" href="<?php echo kernel::router()->gen_url(array('app' => groupbuy,'ctl' => site_product,'act' => index,'args' => $this->_vars['item']['args'])); ?>"><?php echo $this->_vars['item']['goods_name']; ?></a>
      <div class="group_price">
        <div class="group_pricel fl">
          <div class="group_buy"><b>￥</b><?php echo $this->_vars['item']['price']; ?></div>
          <div class="group_sprice">
            <div class="group_namor"><del><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['item']['mktprice'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset')); ?></del></div>
            <div class="group_sall">节省：<?php echo $this->_vars['item']['mktprice']-$this->_vars['item']['price']; ?></div>
          </div>
        </div>
        <div class="group_btnr fr">
		  <?php if( $this->_vars['item']['now'] >= $this->_vars['item']['start_time'] && $this->_vars['item']['now'] <= $this->_vars['item']['end_time'] ){  if( $this->_vars['item']['remainnums'] != '' && $this->_vars['item']['remainnums'] <= 0 ){ ?>
				  <a class="btn_b">已售完</a>
			  <?php }else{ ?>
				  <a href="<?php echo kernel::router()->gen_url(array('app' => groupbuy,'ctl' => site_product,'act' => index,'args' => $this->_vars['item']['args'])); ?>" target="_blank" class="btn_a">我要团</a>
			  <?php }  }elseif( $this->_vars['item']['now'] < $this->_vars['item']['start_time'] ){ ?>
			  <a class="btn_c">未开始</a>
		  <?php }elseif( $this->_vars['item']['now'] > $this->_vars['item']['end_time'] ){ ?>
			  <a class="btn_b">已结束</a>
		  <?php } ?>
          <!--
          <a class="btn_b">已售完</a>
          <a class="btn_c">未开始</a>
          <a class="btn_b">已结束</a>
        -->
        </div>
      </div>
      <div class="group_time_people">
        <div class="fl group_time" starttime="<?php echo $this->_vars['item']['start_time']; ?>" endtime="<?php echo $this->_vars['item']['end_time']; ?>" gid="<?php echo $this->_vars['item']['gid']; ?>">
          <span class="day">0</span><span>天</span>
          <span class="hour">0</span><span>小时</span>
          <span class="minute">0</span><span>分</span>
          <span class="second">0</span><span>秒</span>
        </div>
        <div class="fr group_people">已有<i><?php echo $this->_vars['item']['nums'] - $this->_vars['item']['remainnums']; ?></i>人已购买</div>
      </div>
    </li>
    <?php } ?>
  </ul>
</div>";s:8:"dateline";s:10:"1407722612";s:3:"ttl";s:1:"0";}