<?php exit(); ?>a:3:{s:5:"value";s:1340:"<div class="movement webwidth clb">
    <a name="floor_<?php echo $this->_vars['widgets_id']; ?>" class="js_floor_icon" img_src="<?php echo $this->_vars['data']['floor_icon']; ?>"></a>
    <h2><b>您可能感兴趣的活动</b></h2>
    <ul>
    <?php if($this->_vars['data']['ad']['pic'])foreach ((array)$this->_vars['data']['ad']['pic'] as $this->_vars['key'] => $this->_vars['item']){ ?>
        <li>
            <a href="<?php echo $this->_vars['item']['linktarget']; ?>">
                <img src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['item']['link']); ?>" alt="<?php echo $this->_vars['item']['linkinfo']; ?>" class="img-lazyload" />
            </a>
        </li>
    <?php } ?>
    </ul>
    <input type="hidden" name="picnum" value="<?php echo $this->_vars['data']['num']; ?>" id="piccount">
</div>
<script>
    var count=$('piccount').value;
    if(count==1){
        $$('.movement').getElement('ul').addClass('movementlist-01');
    }
    if(count==2){
        $$('.movement').getElement('ul').addClass('movementlist-02');
    }
    if(count==3){
        $$('.movement').getElement('ul').addClass('movementlist-03');
    }
    if(count==4){
        $$('.movement').getElement('ul').addClass('movementlist-04');
    }
</script>";s:8:"dateline";s:10:"1418629553";s:3:"ttl";s:1:"0";}