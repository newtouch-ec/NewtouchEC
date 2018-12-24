<?php exit(); ?>a:3:{s:5:"value";s:1935:"<ul class="fr" id="head_activity_<?php echo $this->_vars['widgets_id']; ?>">
<?php if( !$this->_vars['data']['pic_1'] && !$this->_vars['data']['pic_2'] && !$this->_vars['data']['pic_3'] && !$this->_vars['data']['pic_4'] ){ ?>
<li>没有数据</li>
<?php }else{  if( $this->_vars['data']['pic_1'] ){ ?>
    <li>
        <?php if( $this->_vars['data']['link_1'] ){ ?><a href="<?php echo $this->_vars['data']['link_1']; ?>"><?php } ?>
            <img src="<?php echo $this->_vars['data']['pic_1']; ?>"/>
        <?php if( $this->_vars['data']['link_1'] ){ ?></a><?php } ?>
    </li>
    <?php }  if( $this->_vars['data']['pic_2'] ){ ?>
    <li>
        <?php if( $this->_vars['data']['link_2'] ){ ?><a href="<?php echo $this->_vars['data']['link_2']; ?>"><?php } ?>
            <img src="<?php echo $this->_vars['data']['pic_2']; ?>"/>
        <?php if( $this->_vars['data']['link_2'] ){ ?></a><?php } ?>
    </li>
    <?php }  if( $this->_vars['data']['pic_3'] ){ ?>
    <li>
        <?php if( $this->_vars['data']['link_3'] ){ ?><a href="<?php echo $this->_vars['data']['link_3']; ?>"><?php } ?>
            <img src="<?php echo $this->_vars['data']['pic_3']; ?>"/>
        <?php if( $this->_vars['data']['link_3'] ){ ?></a><?php } ?>
    </li>
    <?php }  if( $this->_vars['data']['pic_4'] ){ ?>
    <li>
        <?php if( $this->_vars['data']['link_4'] ){ ?><a href="<?php echo $this->_vars['data']['link_4']; ?>"><?php } ?>
            <img src="<?php echo $this->_vars['data']['pic_4']; ?>"/>
        <?php if( $this->_vars['data']['link_4'] ){ ?></a><?php } ?>
    </li>
    <?php }  } ?>
</ul>
<script>
window.addEvent('domready',function(){
    if($('head_activity_<?php echo $this->_vars['widgets_id']; ?>').getElements('li').length == 0){
        var ActiveLi = new Element('li',{'html':'没有数据'}).inject('head_activity_<?php echo $this->_vars['widgets_id']; ?>');
    }
});
</script>";s:8:"dateline";s:10:"1387946894";s:3:"ttl";s:1:"0";}