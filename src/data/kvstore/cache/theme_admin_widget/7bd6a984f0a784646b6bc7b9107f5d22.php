<?php exit(); ?>a:3:{s:5:"value";s:1021:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="tableform widgetconfig">
    <div class="division widgetconfig" style="margin:-5px 0 0 0">

        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <th><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>最多显示数量:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></th>
                <td><input name="max" value="<?php echo ((isset($this->_vars['setting']['max']) && ''!==$this->_vars['setting']['max'])?$this->_vars['setting']['max']:5); ?>" /></td>
            </tr>
        </table>
    </div>
</div>
";s:8:"dateline";s:10:"1409549932";s:3:"ttl";s:1:"0";}