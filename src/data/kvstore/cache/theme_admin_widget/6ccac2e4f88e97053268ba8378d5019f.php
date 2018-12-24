<?php exit(); ?>a:3:{s:5:"value";s:3071:"<style>
    #ex_slide_<?php echo $this->_vars['widgets_id']; ?>{ 
        width:224px;
        height:476px;
        overflow:hidden;
        position:relative;
    }
    #ex_slide_<?php echo $this->_vars['widgets_id']; ?> ol li{
        width:188px;
        height:476px;
        list-style:none; 
        display:block;
        overflow:hidden;
        border:0;
        margin:0 19px;
    }
    #ex_slide_<?php echo $this->_vars['widgets_id']; ?> .slide-trigger{
        position:absolute; 
        z-index:555;
    }
    .slide-trigger{bottom:10px;right:10px;}
    .slide-trigger li{
        float:left;
        width:15px;
        height:15px;
        line-height:15px;
        color:#000;
        background:#dcdddd;
        opacity:1;
        text-align:center;
        margin-left:8px;
        cursor:pointer;
        border-radius:50% 50% 50% 50% }
    .slide-trigger li.active{background:#317EE7;color:#ffffff}
</style>
<div style="width:230px;height:476px;" class="index_onegoods_roll">
    <div id="ex_slide_<?php echo $this->_vars['widgets_id']; ?>">
        <ol class="switchable-content clearfix">
            <?php if($this->_vars['data']['goods']['goods_info'])foreach ((array)$this->_vars['data']['goods']['goods_info'] as $this->_vars['key'] => $this->_vars['item']){ ?>
                <li class="switchable-panel">
                    <div class="index_onegoods_roll_bt">
                    <a href="<?php echo $this->_vars['item']['goods_info']['goodsLink']; ?>"><?php echo $this->_vars['item']['goods_info']['goodsName']; ?></a>
                    </div>
                    <div class="index_onegoods_roll_money">
                    <span><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['item']['goods_info']['goodsSalePrice'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset')); ?></span>
                    </div>
                    <div class="index_onegoods_roll_img">
                    <a href="<?php echo $this->_vars['item']['goods_info']['goodsLink']; ?>">
                        <img src="<?php if( $this->_vars['item']['pic'] ){  echo $this->_vars['item']['pic'];  }else{  echo $this->_vars['item']['goods_info']['goodsPicM'];  } ?>" title="<?php echo $this->_vars['item']['goods_info']['goodsName']; ?>" width="188" height="188">
                    </a>
                    </div>
                </li>
            <?php } ?>
        </ol>
        <ul class="switchable-triggerBox slide-trigger">
          <?php $this->_vars[countnum]="1";  if($this->_vars['data']['goods']['goods_info'])foreach ((array)$this->_vars['data']['goods']['goods_info'] as $this->_vars['parentId'] => $this->_vars['parent']){ ?>
                <li></li> 
          <?php } ?> 
        </ul>
    </div>
</div>
<script>
    new Switchable('ex_slide_<?php echo $this->_vars['widgets_id']; ?>',{
        effect:'scrollx',
        autoplay:'true'
    });
</script>
";s:8:"dateline";s:10:"1387946678";s:3:"ttl";s:1:"0";}