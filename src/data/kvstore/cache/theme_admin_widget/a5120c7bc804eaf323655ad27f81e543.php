<?php exit(); ?>a:3:{s:5:"value";s:2475:"<style>
    #ex_slide_<?php echo $this->_vars['widgets_id']; ?>{ 
        width:206px;
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
        margin:0 9px;
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
<div style="width:206px;height:476px;" class="index_brand_roll">
    <div id="ex_slide_<?php echo $this->_vars['widgets_id']; ?>">
        <ol class="switchable-content clearfix">
            <?php if($this->_vars['data'])foreach ((array)$this->_vars['data'] as $this->_vars['parentId'] => $this->_vars['parent']){ ?>
                <li class="switchable-panel">
                    <?php if($this->_vars['parent'])foreach ((array)$this->_vars['parent'] as $this->_vars['key'] => $this->_vars['item']){ ?>
                        <a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_brand,'act' => index,'arg0' => $this->_vars['item']['brand_id'])); ?>">
                            <img src="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['item']['brand_logo'],''); ?>" title="<?php echo $this->_vars['item']['brand_name']; ?>" width="186" height="88">
                        </a>
                    <?php } ?>
                </li>
            <?php } ?>
        </ol>
        <ul class="switchable-triggerBox slide-trigger">
          <?php $this->_vars[countnum]="1";  if($this->_vars['data'])foreach ((array)$this->_vars['data'] as $this->_vars['parentId'] => $this->_vars['parent']){ ?>
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
";s:8:"dateline";s:10:"1402368430";s:3:"ttl";s:1:"0";}