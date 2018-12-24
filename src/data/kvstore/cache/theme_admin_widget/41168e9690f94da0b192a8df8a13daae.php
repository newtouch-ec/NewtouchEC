<?php exit(); ?>a:3:{s:5:"value";s:6198:"<ul class="clb js_menu_<?php echo $this->_vars['widgets_id']; ?>">
    <?php $this->_env_vars['foreach'][wgtmenu]=array('total'=>count($this->_vars['data']),'iteration'=>0);foreach ((array)$this->_vars['data'] as $this->_vars['key'] => $this->_vars['item']){
                        $this->_env_vars['foreach'][wgtmenu]['first'] = ($this->_env_vars['foreach'][wgtmenu]['iteration']==0);
                        $this->_env_vars['foreach'][wgtmenu]['iteration']++;
                        $this->_env_vars['foreach'][wgtmenu]['last'] = ($this->_env_vars['foreach'][wgtmenu]['iteration']==$this->_env_vars['foreach'][wgtmenu]['total']);
 if( $this->_vars['setting']['max_leng'] && $this->_vars['key']>=$this->_vars['setting']['max_leng'] ){  if( $this->_vars['key']==$this->_vars['setting']['max_leng'] ){ ?>
        <li class="js_menu_1" id="index_menu_more_<?php echo $this->_vars['widgets_id']; ?>">
            <a href="javascript:void(0);"><?php echo $this->_vars['setting']['showinfo']; ?></a>
            <div style="display:none;" id="index_menu_more_view_<?php echo $this->_vars['widgets_id']; ?>" class="inav_more">
                <ul>
                    <li>
                        <?php if( $this->_vars['item']['custom_url'] != '' ){ ?>
                            <a href="<?php echo $this->_vars['item']['custom_url']; ?>" <?php if( $this->_vars['item']['target_blank'] == 'true' ){ ?>target="_blank"<?php } ?>><?php echo $this->_vars['item']['title']; ?></a>
                        <?php }else{ ?>
                            <a href="<?php echo kernel::router()->gen_url(array('app' => $this->_vars['item']['app'],'ctl' => $this->_vars['item']['ctl'],'act' => $this->_vars['item']['act'],'args' => $this->_vars['item']['params'],'full' => 1)); ?>"  <?php if( $this->_vars['item']['target_blank'] == 'true' ){ ?>target="_blank"<?php } ?>><?php echo $this->_vars['item']['title']; ?></a>
                        <?php } ?>
                    </li>
        <?php }  if( $this->_vars['key']>$this->_vars['setting']['max_leng'] ){ ?>
            <li>
                <?php if( $this->_vars['item']['custom_url'] != '' ){ ?>
                    <a href="<?php echo $this->_vars['item']['custom_url']; ?>" <?php if( $this->_vars['item']['target_blank'] == 'true' ){ ?>target="_blank"<?php } ?>><?php echo $this->_vars['item']['title']; ?></a>
                <?php }else{ ?>
                    <a href="<?php echo kernel::router()->gen_url(array('app' => $this->_vars['item']['app'],'ctl' => $this->_vars['item']['ctl'],'act' => $this->_vars['item']['act'],'args' => $this->_vars['item']['params'],'full' => 1)); ?>"  <?php if( $this->_vars['item']['target_blank'] == 'true' ){ ?>target="_blank"<?php } ?>><?php echo $this->_vars['item']['title']; ?></a>
                <?php } ?>
            </li><!--导航-->
        <?php }  if( $this->_env_vars['foreach']['wgtmenu']['last'] ){  if( $this->_vars['key']>$this->_vars['setting']['max_leng'] ){ ?>
                </ul>
                </div>
            <?php } ?>
        </li>
        <?php }  }else{ ?>
        <li class="js_menu_1">
            <?php if( $this->_vars['item']['custom_url'] != '' ){ ?>
            <a href="<?php echo $this->_vars['item']['custom_url']; ?>" <?php if( $this->_vars['item']['target_blank'] == 'true' ){ ?>target="_blank"<?php } ?>><?php echo $this->_vars['item']['title']; ?></a>
            <?php }else{ ?>
            <a href="<?php echo kernel::router()->gen_url(array('app' => $this->_vars['item']['app'],'ctl' => $this->_vars['item']['ctl'],'act' => $this->_vars['item']['act'],'args' => $this->_vars['item']['params'],'full' => 1)); ?>"  <?php if( $this->_vars['item']['target_blank'] == 'true' ){ ?>target="_blank"<?php } ?>><?php echo $this->_vars['item']['title']; ?></a>
            <?php } ?>
            <!-- <a class="menu_index" href="<?php echo $this->_vars['item']['custom_url']; ?>" <?php if( $this->_vars['item']['target_blank'] == 'true' ){ ?>target="_blank"<?php } ?>><?php echo $this->_vars['item']['title']; ?></a> --><!--导航-->
            
        </li>
    <?php }  } unset($this->_env_vars['foreach'][wgtmenu]); ?>
</ul>

<script>
$ES('.js_menu_1').each(function(item,index){
    item.addEvent('mouseenter',function(){
        if(item.getElement('.js_menu_2')){
            item.getElement('.js_menu_2').setStyle('display','');
        }
    });

    item.addEvent('mouseleave',function(){
        if(item.getElement('.js_menu_2')){
            item.getElement('.js_menu_2').setStyle('display','none');
        }
    });

});

$ES('.js_menu_2').each(function(item,index){
    item.getElements('.js_menu_2e').each(function(item2,index2){
        item2.addEvent('mouseenter',function(){
            if(item2.getElement('.js_menu_3')){
                item2.getElement('.js_menu_3').setStyle('display','');
            }
        });

        item2.addEvent('mouseleave',function(){
            if(item2.getElement('.js_menu_3')){
                item2.getElement('.js_menu_3').setStyle('display','none');
            }
        });
    
    });
});

if($('index_menu_more_<?php echo $this->_vars['widgets_id']; ?>')){
    
    $('index_menu_more_<?php echo $this->_vars['widgets_id']; ?>').addEvent('mouseenter',function(){
        $('index_menu_more_view_<?php echo $this->_vars['widgets_id']; ?>').setStyle('display','');
    });
    $('index_menu_more_<?php echo $this->_vars['widgets_id']; ?>').addEvent('mouseleave',function(){
        $('index_menu_more_view_<?php echo $this->_vars['widgets_id']; ?>').setStyle('display','none');
    });
}


window.addEvent('domready',function(){
    var hrf=location.href.split('/').getLast(), n=hrf.lastIndexOf('-'),
        menulist=$$('.js_menu_<?php echo $this->_vars['widgets_id']; ?> li');

    //if(n>-1)hrf=hrf.substring(0,n);
    if(!hrf.trim().length) hrf='index.html';

    var reg=new RegExp('\/'+hrf,'i');
    menulist.each(function(el){
        var link=el.getElement('a');
        if(link&&link.href.test(reg))
        el.addClass('<?php echo $this->_vars['setting']['className']; ?>');

    });

});

</script>
";s:8:"dateline";s:10:"1409816990";s:3:"ttl";s:1:"0";}