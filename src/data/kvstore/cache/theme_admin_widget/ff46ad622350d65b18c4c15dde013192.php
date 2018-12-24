<?php exit(); ?>a:3:{s:5:"value";s:6003:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><h4><?php echo $this->_vars['data']['title']; ?></h4>
<ul class="Ranking_ul">
    <li><a id="a_ranking_buy" href="javascript:void(0);" class="hover"><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>本月热销排行<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></a></li>
    <li><a id="a_ranking_fav" href="javascript:void(0);"><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>热门收藏排行<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></a></li>
    <div class="cl_zhi"></div>
</ul>
<div id="ranking_buys">
<?php if($this->_vars['data']['buys'])foreach ((array)$this->_vars['data']['buys'] as $this->_vars['good']){ ?>
<div class="ranking_info">
    <div class="ranking_info_le fl"><a target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => "site_product",'act' => "index",'arg0' => $this->_vars['good']['goods_id'])); ?>"><img class="img-lazyload" src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager(((isset($this->_vars['good']['image_default_id']) && ''!==$this->_vars['good']['image_default_id'])?$this->_vars['good']['image_default_id']:$this->_vars['data']['defaultImage']),'s'); ?>" alt="" /></a></div>          
     <div class="ranking_info_ri fr">
        <p><a target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => "site_product",'act' => "index",'arg0' => $this->_vars['good']['goods_id'])); ?>"><?php echo kernel::single('base_view_helper')->modifier_cut($this->_vars['good']['name'],48); ?></a></p>
        <p class="price">￥<span><?php echo $this->_vars['good']['price']; ?></span></p>
        <p><span class="sell"><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>已售出<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?>&nbsp;<?php echo $this->_vars['good']['buy_m_count']; ?>&nbsp;<?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>件<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></span></p>
     </div>
     <div class="cl_zhi"></div>
</div>
<?php } ?>
</div>
<div id="ranking_favs" style="display:none">
<?php if($this->_vars['data']['favs'])foreach ((array)$this->_vars['data']['favs'] as $this->_vars['good']){ ?>
<div class="ranking_info">
    <div class="ranking_info_le fl"><a target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => "site_product",'act' => "index",'arg0' => $this->_vars['good']['goods_id'])); ?>"><img class="img-lazyload" src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager(((isset($this->_vars['good']['image_default_id']) && ''!==$this->_vars['good']['image_default_id'])?$this->_vars['good']['image_default_id']:$this->_vars['data']['defaultImage']),'s'); ?>" alt="" /></a></div>          
     <div class="ranking_info_ri fr">
        <p><a target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => "site_product",'act' => "index",'arg0' => $this->_vars['good']['goods_id'])); ?>"><?php echo kernel::single('base_view_helper')->modifier_cut($this->_vars['good']['name'],48); ?></a></p>
        <p class="price">￥<span><?php echo $this->_vars['good']['price']; ?></span></p>
        <p><span class="sell"><?php $this->_tag_stack[] = array('t', array('app' => 'b2c')); $this->__view_helper_model['base_view_helper']->block_t(array('app' => 'b2c'), null, $this); ob_start(); ?>收藏人气<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content='';  echo $this->_vars['good']['fav_count']; ?></span></p>
     </div>
     <div class="cl_zhi"></div>
</div>
<?php } ?>
</div>

<script>
    (function(){
        $('a_ranking_buy').addEvent('click',function(){
            this.addClass('hover');
            $('a_ranking_fav').removeClass('hover');
            $('ranking_buys').setStyle('display', ''); 
            $('ranking_favs').setStyle('display', 'none'); 
            return false;
        });
        $('a_ranking_fav').addEvent('click',function(){
            this.addClass('hover');
            $('a_ranking_buy').removeClass('hover');
            $('ranking_buys').setStyle('display', 'none'); 
            $('ranking_favs').setStyle('display', ''); 
            return false;
        });

    })();
</script>   ";s:8:"dateline";s:10:"1439261157";s:3:"ttl";s:1:"0";}