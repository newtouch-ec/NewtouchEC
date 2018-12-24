<?php exit(); ?>a:3:{s:5:"value";s:12911:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?>
    <div class="tableform widgetconfig" >
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>选择栏目节点:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> </th>
        <td>
            <?php echo $this->ui()->input(array('id' => "select_begin_node",'type' => 'select','name' => 'node_id','value' => $this->_vars['setting']['node_id'],'vtype' => 'required','caution' => kernel::single('base_view_helper')->modifier_t($this->_vars['___content']='请选节点','content'),'rows' => $this->_vars['setting']['selectmaps'],'valueColumn' => "node_id",'labelColumn' => "node_name"));?>
             <em class="note"><?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>即选择从哪个栏目节点开始展示, 选择'---无---' 代表展示所有。<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></em>
        </td>
      </tr>
    <tr data-extends="beginnode">
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>去除根栏目节点链接:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> </th>
        <td >
            <input type="radio" name="stripparenturl" value="1" <?php if( $this->_vars['setting']['stripparenturl'] ==1 ){ ?> checked <?php } ?> > <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>是<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
            <input type="radio" name="stripparenturl" value="0" <?php if( $this->_vars['setting']['stripparenturl'] !=1 ){ ?> checked <?php } ?> > <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>否<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>
        </td>
    </tr>
      <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>栏目节点展示深度:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> </th>
        <td >
               <?php echo $this->ui()->input(array('type' => 'text','name' => 'lv','value' => $this->_vars['setting']['lv'],'size' => 4,'style' => 'width:30px;'));?>

        </td>
      </tr>
      <tr>
        <th><?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>展示栏目下文章标题:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> </th>
        <td >
            <div class="clearfix">
                <div class="span-auto">
                         <label><input data-extends-name="showarticle" type="radio" name="showallart" value="1" <?php if( $this->_vars['setting']['showallart']==1 ){ ?> checked <?php } ?> > <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>是<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></label>
                             <label> <input type="radio" data-extends-name="showarticle" name="showallart" value="0" <?php if( $this->_vars['setting']['showallart']!=1 ){ ?> checked <?php } ?> > <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>否<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></label>
                </div>
                <div class="span-auto" data-extends="showarticle">
                        <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>每个栏目最多展示文章标题数:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content='';  echo $this->ui()->input(array('type' => 'text','name' => 'limit','value' => $this->_vars['setting']['limit'],'size' => 4,'style' => 'width:30px;'));?>
                </div>
                <div class="span-auto" data-extends="showarticle">
                         ，文章标题按
                        <select name="order_type">
                          <?php if($this->_vars['setting']['select_order']['order_type'])foreach ((array)$this->_vars['setting']['select_order']['order_type'] as $this->_vars['key'] => $this->_vars['item']){ ?>
                            <option value="<?php echo $this->_vars['key']; ?>" <?php if( $this->_vars['key']==$this->_vars['setting']['order_type'] ){ ?>selected="selected"<?php } ?> ><?php echo $this->_vars['item']; ?></option>
                          <?php } ?>
                        </select>
                        <select name="order">
                          <?php if($this->_vars['setting']['select_order']['order'])foreach ((array)$this->_vars['setting']['select_order']['order'] as $this->_vars['key'] => $this->_vars['item']){ ?>
                            <option value="<?php echo $this->_vars['key']; ?>" <?php if( $this->_vars['key']==$this->_vars['setting']['order'] ){ ?>selected="selected"<?php } ?> ><?php echo $this->_vars['item']; ?></option>
                          <?php } ?>
                        </select>
                        排序
                </div>
            </div>
         </td>
    </tr>
    <tr data-extends="showarticle">
            <th><?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>展示文章最后更新时间:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> </th>
                <td >
                    <label><input type="radio" name="showuptime" value="1" <?php if( $this->_vars['setting']['showuptime']!=0 ){ ?> checked <?php } ?> > <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>是<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></label>
                    <label><input type="radio" name="showuptime" value="0" <?php if( $this->_vars['setting']['showuptime']==0 ){ ?> checked <?php } ?>> <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>否<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></label>
                </td>
      </tr>
    <tr data-extends="showarticle">
                <th><?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>只展示文章标题:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?> </th>
                <td >
                    <label><input type="radio" name="shownode" value="0" <?php if( $this->_vars['setting']['shownode']==0 ){ ?> checked <?php } ?>> <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>是<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></label>
                       <label><input type="radio" name="shownode" value="1" <?php if( $this->_vars['setting']['shownode']!=0 ){ ?> checked <?php } ?> > <?php $this->_tag_stack[] = array('t', array('app' => 'content')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'content'), null, $this); ob_start(); ?>否<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></label>
                </td>
    </tr>
    </table>
    </div>
<script type="text/javascript">
            
            $$('input[name=showallart]').addEvent('change',function(){
                        if(!this.checked)return;
                        if(this.value.toInt()>0){
                                    $$('[data-extends='+this.get('data-extends-name')+']').setStyle('display','');
                        }else{
                                    $$('[data-extends='+this.get('data-extends-name')+']').setStyle('display','none');
                        }

            }).fireEvent('change');

            $('select_begin_node').addEvent('change',function(){

                      $$('[data-extends=beginnode]').setStyle('display',(this.value&&this.value.toInt()>0)?'':'none');

            }).fireEvent('change');
</script>
";s:8:"dateline";s:10:"1407715390";s:3:"ttl";s:1:"0";}