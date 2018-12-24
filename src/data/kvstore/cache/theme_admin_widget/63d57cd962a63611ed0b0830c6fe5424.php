<?php exit(); ?>a:3:{s:5:"value";s:699:"<div class="webwidth">
    <div class="btomlogo fl"><img src="<?php echo $this->_vars['data']['logo']; ?>" /></div>
    <div class="btombox fr">
        <div class="btomboxleft fl"></div>
            <ul class="btomboxcenter fl">
            <?php if($this->_vars['data']['list'])foreach ((array)$this->_vars['data']['list'] as $this->_vars['key'] => $this->_vars['item']){ ?>
                <li><i><img src="<?php echo $this->_vars['item']['icon']; ?>" /></i><?php echo $this->_vars['item']['big_title']; ?><span><?php echo $this->_vars['item']['small_title']; ?></span></li>
            <?php } ?>
            </ul>
            <div class="btomboxright fl"></div>
        </div>
</div>";s:8:"dateline";s:10:"1407563499";s:3:"ttl";s:1:"0";}