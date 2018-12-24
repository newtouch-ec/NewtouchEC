<?php exit(); ?>a:3:{s:5:"value";s:4841:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="tableform">
    <button type="button" id="addLink"> Add link</button>
    <div class="widgetconfig">
        <table cellspacing="0" cellpadding="0" border="0" width="100%">
            <tbody id="navList">
            <?php if( $this->_vars['setting']['nav'] ){  $this->_env_vars['foreach'][nav_n]=array('total'=>count($this->_vars['setting']['nav']),'iteration'=>0);foreach ((array)$this->_vars['setting']['nav'] as $this->_vars['nav_k'] => $this->_vars['nav_s']){
                        $this->_env_vars['foreach'][nav_n]['first'] = ($this->_env_vars['foreach'][nav_n]['iteration']==0);
                        $this->_env_vars['foreach'][nav_n]['iteration']++;
                        $this->_env_vars['foreach'][nav_n]['last'] = ($this->_env_vars['foreach'][nav_n]['iteration']==$this->_env_vars['foreach'][nav_n]['total']);
?>
                <tr>
                    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>Title:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                    <td><input type="text" class="inputstyle" name="nav[<?php echo $this->_env_vars['foreach']['nav_n']['iteration']; ?>][title]" value="<?php echo $this->_vars['nav_s']['title']; ?>"></td>
      
                    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>Link:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                    <td><input type="text" class="inputstyle" name="nav[<?php echo $this->_env_vars['foreach']['nav_n']['iteration']; ?>][link]" vtype="purl" required='true' value="<?php echo $this->_vars['nav_s']['link']; ?>"></td>
                    <td>
                        <button type="button" onclick="$(this).getParent('tr').remove()" > Delete</button>
                    </td>
                </tr>
                <?php } unset($this->_env_vars['foreach'][nav_n]);  }else{ ?>
                <tr>
                    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>Title:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                    <td><input type="text" name="nav[0][title]" value="" class="inputstyle"></td>
  
                    <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>Link:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                    <td><input type="text" name="nav[0][link]" vtype="purl" required='true' value="" class="inputstyle"></td>
                    <td><button type="button" onclick="$(this).getParent('tr').remove()" > Delete</button></td>
                </tr>
            <?php } ?>
   
            </tbody>
        </table>
    </div>
</div>
<script>
    (function(){

    var btn_delete = '<button type="button" onclick="$(this).getParent(\'tr\').remove()" >Delete</button>';
    var PROPSTMP = '<th>Title:</th><td><input type="text" name="nav[{key}][title]" value="" class="inputstyle"></td><th>Link:</th> <td><input type="text" name="nav[{key}][link]" vtype="purl" required="true" class="inputstyle" value=""></td><td>'+btn_delete+'</td>';
    
    $('addLink').addEvent('click',function(e){
          var propsItem = $('navList').getElements('tr');
          var index=propsItem?propsItem.length:0;
          var el = new Element('tr').setHTML( PROPSTMP.substitute({'key':'new_'+index++}) );
          $('navList').adopt(el);
    });
})();
</script>";s:8:"dateline";s:10:"1439260876";s:3:"ttl";s:1:"0";}