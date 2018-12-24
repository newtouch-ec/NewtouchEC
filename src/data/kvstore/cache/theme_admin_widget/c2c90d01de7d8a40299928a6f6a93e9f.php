<?php exit(); ?>a:3:{s:5:"value";s:7197:"<style>
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
.slide-trigger li{ float:left; background:#626262;margin-right:5px;font-size: 0;text-indent: -999;height:2px;width: 20px;}
.slide-trigger li.active{background:#c40000;}
</style>

<div class="floorone webwidth clb">
    <div class="floorbt fl">
        <a name="floor_<?php echo $this->_vars['widgets_id']; ?>" class="js_floor_icon" img_src="<?php echo $this->_vars['data']['floor_icon']; ?>"></a>
        <h2 style="background:<?php echo $this->_vars['data']['bg_color']; ?>">
            <a href="<?php echo $this->_vars['data']['title_link']; ?>"><?php echo $this->_vars['data']['title']; ?></a>
        </h2>
        <div class="flooronead01">
            <a href="<?php echo $this->_vars['data']['leftlink']['0']; ?>"><img src="<?php echo $this->_vars['data']['leftpic']['0']; ?>" /></a>
        </div>
        <div class="flooronead02">
            <a href="<?php echo $this->_vars['data']['leftlink']['1']; ?>"><img src="<?php echo $this->_vars['data']['leftpic']['1']; ?>" /></a>
        </div>
    </div>
    <div class="floorone-mid fl">
        <div class="floorone-tips">
            <?php if($this->_vars['data']['f_link'])foreach ((array)$this->_vars['data']['f_link'] as $this->_vars['key'] => $this->_vars['item']){  if( $this->_vars['key']<6 ){ ?>
                <a href="<?php echo $this->_vars['item']['top_link_url']; ?>"><?php echo $this->_vars['item']['top_link_title']; ?></a>
              <?php }  } ?>
        </div>
        <!--轮播广告开始-->
        <div class="flooronead03 fl">
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
        <div class="flooronead06 fl">
            <a href="<?php echo $this->_vars['data']['rightlink']['0']; ?>"><img src="<?php echo $this->_vars['data']['rightpic']['0']; ?>" /></a>
        </div>
        <div class="flooronead04 fl">
            <a href="<?php echo $this->_vars['data']['belowlink']['0']; ?>"><img src="<?php echo $this->_vars['data']['belowpic']['0']; ?>" /></a>
        </div>
        <div class="flooronead05 fl">
            <a href="<?php echo $this->_vars['data']['belowlink']['1']; ?>"><img src="<?php echo $this->_vars['data']['belowpic']['1']; ?>" /></a>
        </div>
        <div class="flooronead07">
            <a href="<?php echo $this->_vars['data']['rightlink']['1']; ?>"><img src="<?php echo $this->_vars['data']['rightpic']['1']; ?>" /></a>
        </div>
    </div>
    <div class="floorone-kind fr">
        <div class="floorshopad">
            <div class="ex-slide1-box cl_zhi">
                <div id="ex_slide_<?php echo $this->_vars['widgets_id']; ?>_shop" class="ex-slide1">
                    <ol class="switchable-content clearfix">
                        <?php if($this->_vars['data']['store'])foreach ((array)$this->_vars['data']['store'] as $this->_vars['key'] => $this->_vars['store']){ ?>
                            <li class="fl">
                                <div class="floorshopad-brand">
                                    <a href="<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => view,'arg' => $this->_vars['store']['store_id'])); ?>">
                                        <img alt="<?php echo $this->_vars['store']['store_name']; ?>" src="<?php echo kernel::single('base_view_helper')->modifier_storager(((isset($this->_vars['store']['store_logo']) && ''!==$this->_vars['store']['store_logo'])?$this->_vars['store']['store_logo']:$this->_vars['data']['defaultImage'])); ?>" /></a>
                                 </div>
                                <div class="floorshopad-name">
                                      <a href="<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => view,'arg' => $this->_vars['store']['store_id'])); ?>"><?php echo $this->_vars['store']['store_name']; ?></a>
                                </div>
                            </li>
                        <?php } ?>
                    </ol>
                </div>
            </div>
        </div>
        <div class="flooronead08">
            <a href="<?php echo $this->_vars['data']['rightlink']['2']; ?>"><img src="<?php echo $this->_vars['data']['rightpic']['2']; ?>" /></a>
        </div>
        <div class="flooronead09">
            <a href="<?php echo $this->_vars['data']['rightlink']['3']; ?>"><img src="<?php echo $this->_vars['data']['rightpic']['3']; ?>" /></a>
        </div>
    </div>
</div>
<script> 
window.addEvent('domready',function(){

    new Switchable('ex_slide_<?php echo $this->_vars['widgets_id']; ?>',{
        effect:'<?php echo $this->_vars['data']['ad']['switcheffect']; ?>',
        autoplay:<?php echo $this->_vars['data']['ad']['autoplay']; ?>
//        hasTriggers:false
    });

    new Switchable('ex_slide_<?php echo $this->_vars['widgets_id']; ?>_shop',{
        effect:'scrollx',
        autoplay:true,
        hasTriggers:false
    });

});
</script> 
";s:8:"dateline";s:10:"1408608622";s:3:"ttl";s:1:"0";}