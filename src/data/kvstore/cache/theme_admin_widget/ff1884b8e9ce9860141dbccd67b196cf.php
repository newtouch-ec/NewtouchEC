<?php exit(); ?>a:3:{s:5:"value";s:6613:"<style>
    #ex_slide_<?php echo $this->_vars['widgets_id']; ?>{ 
        width:<?php echo $this->_vars['data']['ad']['width']; ?>px;
        height:<?php echo $this->_vars['data']['ad']['height']; ?>px;
        overflow:hidden;
        position:relative;
    }
    #ex_slide_<?php echo $this->_vars['widgets_id']; ?> ol li{
        height:<?php echo $this->_vars['data']['ad']['height']; ?>px;
        width:<?php echo $this->_vars['data']['ad']['width']; ?>px;
        list-style:none outside none; 
        display:block;
        overflow:hidden;
        border:0;
        margin:0 0 0 0 ;
    }
#ex_slide_<?php echo $this->_vars['widgets_id']; ?> .slide-trigger{position:absolute;z-index:60; bottom:10px; left:50%;}
.slide-trigger li{ float:left; background:#626262;margin-right:5px;font-size: 0;text-indent: -999;height: 3px;width: 20px;}
.slide-trigger li.active{background:#e32a2f;}

</style>
<a name="floor_<?php echo $this->_vars['widgets_id']; ?>" class="js_floor_icon" img_src="<?php echo $this->_vars['data']['floor_icon']; ?>"></a>
<div class="floorone_left">
     <div class="floor_tag" style="background:<?php echo $this->_vars['data']['fbg_color']; ?>">
         <div class="floor_num"><?php echo $this->_vars['data']['floor_num']; ?></div>
         <div class="floor_corner" style="border-color:transparent transparent transparent <?php echo $this->_vars['data']['fbg_color']; ?>"></div>
         <div class="floor_corner2" style="border-color:transparent transparent transparent <?php echo $this->_vars['data']['fbg_color']; ?>"></div>
     </div>
      <h2  style="background:<?php echo $this->_vars['data']['bg_color']; ?>"><?php echo $this->_vars['data']['title']; ?></h2>
          <ul>
            <?php if($this->_vars['data']['f_link'])foreach ((array)$this->_vars['data']['f_link'] as $this->_vars['key'] => $this->_vars['item']){ ?>
                <li><a href="<?php echo $this->_vars['item']['top_link_url']; ?>"><?php echo $this->_vars['item']['top_link_title']; ?></a></li>
            <?php } ?>
          </ul>
          <dl>
            
            <dd>
                <a href="<?php echo $this->_vars['data']['piclink']['0']; ?>"><img src="<?php echo $this->_vars['data']['pic']['0']; ?>" /></a>
           </dd>
           <dd>
                <a href="<?php echo $this->_vars['data']['piclink']['1']; ?>"><img src="<?php echo $this->_vars['data']['pic']['1']; ?>" /></a>
           </dd>
          </dl>
   </div>

    <!--轮播广告开始-->
    <div class="floorone_center">
        <div class="ex-slide1-box cl_zhi" style="width:<?php echo $this->_vars['data']['ad']['width']; ?>px;height:<?php echo $this->_vars['data']['ad']['height']; ?>px;overflow: hidden;margin:0 auto;">
            <div id="ex_slide_<?php echo $this->_vars['widgets_id']; ?>" class="ex-slide1">
                <ol class="switchable-content clearfix">
                <?php if($this->_vars['data']['ad']['pic'])foreach ((array)$this->_vars['data']['ad']['pic'] as $this->_vars['parentId'] => $this->_vars['parent']){ ?>
                    <li class="switchable-panel">
                        <a href="<?php echo $this->_vars['parent']['linktarget']; ?>">
                            <img src="images/transparent.gif" lazyload="<?php echo $this->_vars['parent']['link']; ?>" class="img-lazyload" title="<?php echo $this->_vars['data']['linkinfo']; ?>">
                        </a>
                    </li>
                <?php } ?>
                </ol>
                <ul class="switchable-triggerBox slide-trigger">
                    <?php $this->_vars[countnum]="1";  if($this->_vars['data']['ad']['pic'])foreach ((array)$this->_vars['data']['ad']['pic'] as $this->_vars['parentId'] => $this->_vars['parent']){ ?>
                        <li><?php echo $this->_vars['countnum']++; ?></li> 
                    <?php } ?> 
                </ul>
            </div>
        </div>
        </div>
        <!--轮播广告结束-->

   <div class="floorone_right">
      <ul>
         <?php $this->_env_vars['foreach'][product]=array('total'=>count($this->_vars['data']['goods']),'iteration'=>0);foreach ((array)$this->_vars['data']['goods'] as $this->_vars['linklist']){
                        $this->_env_vars['foreach'][product]['first'] = ($this->_env_vars['foreach'][product]['iteration']==0);
                        $this->_env_vars['foreach'][product]['iteration']++;
                        $this->_env_vars['foreach'][product]['last'] = ($this->_env_vars['foreach'][product]['iteration']==$this->_env_vars['foreach'][product]['total']);
 if( $this->_env_vars['foreach']['product']['iteration'] <= 6 ){ ?>
	     <li>
            <?php if( $this->_vars['linklist']['pic'] ){ ?>
                <a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_product,'act' => index,'arg' => $this->_vars['linklist']['id'])); ?>"><img src="images/transparent.gif" lazyload="<?php echo $this->_vars['linklist']['pic']; ?>" class="img-lazyload"  ></a>
            <?php }else{ ?>
                  <a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_product,'act' => index,'arg' => $this->_vars['linklist']['id'])); ?>">
                <img src="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['linklist']['image_default_id'],'m'); ?>" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['linklist']['image_default_id'],'m'); ?>" class="img-lazyload"  >
</a>
            <?php } ?>
            <div class="floor_title">
                <p class="floor_title_tis"><a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_product,'act' => index,'arg' => $this->_vars['linklist']['id'])); ?>"><?php echo $this->_vars['linklist']['nice']; ?></a></p>
                <p class="floor_title_pearc"><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['linklist']['price'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset')); ?></p>
            </div>
		 </li>
         <?php }  } unset($this->_env_vars['foreach'][product]); ?>
      </ul>
   </div>

<script> 
window.addEvent('domready',function(){

    new Switchable('ex_slide_<?php echo $this->_vars['widgets_id']; ?>',{
        effect:'<?php echo $this->_vars['data']['ad']['switcheffect']; ?>',
        autoplay:<?php echo $this->_vars['data']['ad']['autoplay']; ?>
    });

});

</script> 
";s:8:"dateline";s:10:"1433317985";s:3:"ttl";s:1:"0";}