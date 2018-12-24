<?php exit(); ?>a:3:{s:5:"value";s:4718:"<style>
    .none {display: none;}
</style>
<div class="floor_new webwidth">

      <div class="plist">
            <ul class="tabs tabs_zf js_<?php echo $this->_vars['widgets_id']; ?>_tab">
                <?php $this->_env_vars['foreach']["tab"]=array('total'=>count($this->_vars['data']['tab']),'iteration'=>0);foreach ((array)$this->_vars['data']['tab'] as $this->_vars['tab']){
                        $this->_env_vars['foreach']["tab"]['first'] = ($this->_env_vars['foreach']["tab"]['iteration']==0);
                        $this->_env_vars['foreach']["tab"]['iteration']++;
                        $this->_env_vars['foreach']["tab"]['last'] = ($this->_env_vars['foreach']["tab"]['iteration']==$this->_env_vars['foreach']["tab"]['total']);
?>
					<li  <?php if( $this->_env_vars['foreach']['tab']['first'] ){ ?>class="hover" <?php } ?>><?php echo $this->_vars['tab']['title']; ?></li>
				<?php } unset($this->_env_vars['foreach']["tab"]); ?>
            </ul>
        	<?php $this->_env_vars['foreach']["tabGoods"]=array('total'=>count($this->_vars['data']['tab']),'iteration'=>0);foreach ((array)$this->_vars['data']['tab'] as $this->_vars['tabGoods']){
                        $this->_env_vars['foreach']["tabGoods"]['first'] = ($this->_env_vars['foreach']["tabGoods"]['iteration']==0);
                        $this->_env_vars['foreach']["tabGoods"]['iteration']++;
                        $this->_env_vars['foreach']["tabGoods"]['last'] = ($this->_env_vars['foreach']["tabGoods"]['iteration']==$this->_env_vars['foreach']["tabGoods"]['total']);
?>
            <ul class="tabsprolist tabsprolist_zf fl <?php if( !$this->_env_vars['foreach']['tabGoods']['first'] ){ ?>none<?php } ?> js_<?php echo $this->_vars['widgets_id']; ?>_tabsprolist">
				<?php if( $this->_vars['tabGoods']['goods_info'] ){  $this->_env_vars['foreach'][gname]=array('total'=>count($this->_vars['tabGoods']['goods_info']),'iteration'=>0);foreach ((array)$this->_vars['tabGoods']['goods_info'] as $this->_vars['key'] => $this->_vars['goods']){
                        $this->_env_vars['foreach'][gname]['first'] = ($this->_env_vars['foreach'][gname]['iteration']==0);
                        $this->_env_vars['foreach'][gname]['iteration']++;
                        $this->_env_vars['foreach'][gname]['last'] = ($this->_env_vars['foreach'][gname]['iteration']==$this->_env_vars['foreach'][gname]['total']);
 if( $this->_vars['goods']['udfimg'] == 'true' ){  $this->_vars["gimage"]=$this->_vars['goods']['thumbnail_pic'];  }else{  $this->_vars["gimage"]=((isset($this->_vars['goods']['image_default_id']) && ''!==$this->_vars['goods']['image_default_id'])?$this->_vars['goods']['image_default_id']:$this->_vars['data']['defaultImage']);  } ?>
				<li> 
				     <div class="p-img">
				         <a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_product,'act' => index,'arg1' => $this->_vars['goods']['goods_id'])); ?>" target="_blank">
				            <img src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['gimage']); ?> " alt="<?php echo $this->_vars['goods']['name']; ?>" />
                         </a>
				     </div>
				     <div class="p-name">
				         <a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_product,'act' => index,'arg1' => $this->_vars['goods']['goods_id'])); ?>" target="_blank"><?php echo kernel::single('base_view_helper')->modifier_cut($this->_vars['goods']['name'],100,''); ?></a>
				     </div>
				     <div class="p-price <?php echo $this->_vars['data']['css_class']; ?>"><b><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['goods']['price'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset')); ?></b></div>
					 

				</li>
				<?php } unset($this->_env_vars['foreach'][gname]);  } ?>
            </ul>
			<?php } unset($this->_env_vars['foreach']["tabGoods"]); ?>
      </div>
</div>

<script>
addEvent('domready', function () {
	var aLi = $$(".js_<?php echo $this->_vars['widgets_id']; ?>_tab li");
	var aTabsprolist = $$(".js_<?php echo $this->_vars['widgets_id']; ?>_tabsprolist");

	$$(".js_<?php echo $this->_vars['widgets_id']; ?>_tab li").each(function(o,i){
		o.addEvent('mouseover',function(){
			aLi.removeClass('hover');
			aLi.setStyle("border-bottom",'');
			//aLi.setStyle("color",'');
			aTabsprolist.addClass('none');
			o.addClass('hover');
			//o.setStyle("border-bottom","2px solid ");
			//o.setStyle("color",color);
			aTabsprolist[i].removeClass('none');
		});
	});
});
</script>";s:8:"dateline";s:10:"1433317985";s:3:"ttl";s:1:"0";}