<?php exit(); ?>a:3:{s:5:"value";s:3943:"<div class="sj_info mt_10">
	<!--<div class="info_title">热门推荐</div>-->
	 <div class="hot_kind">
	    <ul class="hot_kind_ul">
		   <li class="le_zhi"><a href="#" class="hover" id="t_1"><?php echo ((isset($this->_vars['setting']['tag0']) && ''!==$this->_vars['setting']['tag0'])?$this->_vars['setting']['tag0']:'热门推荐'); ?></a></li>
		   <li class="ri_zhi"><a href="#" id="t_2"><?php echo ((isset($this->_vars['setting']['tag1']) && ''!==$this->_vars['setting']['tag1'])?$this->_vars['setting']['tag1']:'新品上架'); ?></a></li>
		   <div class="cl_zhi"></div>
		 </ul>
      <?php $this->_env_vars['foreach'][foo]=array('total'=>count($this->_vars['data']['tag']),'iteration'=>0);foreach ((array)$this->_vars['data']['tag'] as $this->_vars['key'] => $this->_vars['list']){
                        $this->_env_vars['foreach'][foo]['first'] = ($this->_env_vars['foreach'][foo]['iteration']==0);
                        $this->_env_vars['foreach'][foo]['iteration']++;
                        $this->_env_vars['foreach'][foo]['last'] = ($this->_env_vars['foreach'][foo]['iteration']==$this->_env_vars['foreach'][foo]['total']);
?>
	    <ul class="hot_kind_ul_list"
        <?php if( $this->_env_vars['foreach']['foo']['iteration'] == 1 ){ ?>id="tag1" style="display:block"<?php }  if( $this->_env_vars['foreach']['foo']['iteration'] == 2 ){ ?>id="tag2" style="display:none"<?php } ?>>
        <?php if($this->_vars['list']['goodsdata'])foreach ((array)$this->_vars['list']['goodsdata'] as $this->_vars['goodsdemo']){ ?>
          <li>
            <a target='_blank' href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_product,'act' => index,'arg' => $this->_vars['goodsdemo']['goods_id'])); ?>">
            <?php if( $this->_vars['goodsdemo']['udfimg'] == 'true' ){  $this->_vars["gimage"]=$this->_vars['goodsdemo']['thumbnail_pic'];  }else{  $this->_vars["gimage"]=((isset($this->_vars['goodsdemo']['image_default_id']) && ''!==$this->_vars['goodsdemo']['image_default_id'])?$this->_vars['goodsdemo']['image_default_id']:$this->_vars['data']['defaultImage']);  } ?>
            <img class="img-lazyload" src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['gimage']); ?>" alt="<?php echo $this->_vars['goodsdemo']['name']; ?>"></a>
          <p class="clo_info">
            <a target='_blank' href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_product,'act' => index,'arg' => $this->_vars['goodsdemo']['goods_id'])); ?>"><?php echo $this->_vars['goodsdemo']['name']; ?></a></p>
          <p class="price"><strong class="le_zhi"><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['goodsdemo']['price'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset'),app::get('b2c')->getConf('system.money.separator')); ?></strong> 
          <span class="ri_zhi">已售出<span><?php echo $this->_vars['goodsdemo']['buy_count']; ?></span>笔</span>
          <span class="cl_zhi"></span>
          </p>
          </li>
        <?php } ?>
      </ul>
      <?php } unset($this->_env_vars['foreach'][foo]); ?>
	 </div>
</div>          
<script>
window.addEvent('domready', function() {
    $E('.hot_kind_ul').getChildren('li').each(function(item,index){
      item.addEvent('mouseenter',function(){
          $('t_1').removeClass('hover');
          $('t_2').removeClass('hover');
          if(index == 0){
            $('t_1').addClass('hover');
            $('tag1').setStyle('display','block');
            $('tag2').setStyle('display','none');
          }else if(index == 1){
            $('t_2').addClass('hover');
            $('tag1').setStyle('display','none');
            $('tag2').setStyle('display','block');
          }
      });
    });
});
</script>";s:8:"dateline";s:10:"1438937548";s:3:"ttl";s:1:"0";}