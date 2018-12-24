<?php exit(); ?>a:3:{s:5:"value";s:1313:"<div id="other_menu_header_<?php echo $this->_vars['widgets_id']; ?>">
    <a href="<?php echo $this->_vars['data']['title_link']; ?>" id='other_menu_a_<?php echo $this->_vars['widgets_id']; ?>'>
        <?php echo $this->_vars['data']['title']; ?><i></i>
    </a>
    <div class="tool_menu_list" id='other_menu_link_<?php echo $this->_vars['widgets_id']; ?>' style="display:none;">
        <?php if($this->_vars['data']['href'])foreach ((array)$this->_vars['data']['href'] as $this->_vars['top_key'] => $this->_vars['toplink']){ ?>
          <a href="<?php echo $this->_vars['toplink']['top_link_url']; ?>"><?php echo $this->_vars['toplink']['top_link_title']; ?></a>
          <?php } ?>
    </div>
</div>

<script>
$('other_menu_header_<?php echo $this->_vars['widgets_id']; ?>').addEvent('mouseenter',function(){
    $('other_menu_link_<?php echo $this->_vars['widgets_id']; ?>').setStyle('display','');
    $('other_menu_a_<?php echo $this->_vars['widgets_id']; ?>').set('class','h_expb');
});
$('other_menu_header_<?php echo $this->_vars['widgets_id']; ?>').addEvent('mouseleave',function(){
    $('other_menu_link_<?php echo $this->_vars['widgets_id']; ?>').setStyle('display','none');
    $('other_menu_a_<?php echo $this->_vars['widgets_id']; ?>').set('class','h_expa');
});
</script>";s:8:"dateline";s:10:"1418799435";s:3:"ttl";s:1:"0";}