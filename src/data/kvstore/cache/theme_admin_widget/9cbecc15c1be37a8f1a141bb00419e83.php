<?php exit(); ?>a:3:{s:5:"value";s:3635:"<h4><?php echo $this->_vars['data']['title']; ?></h4>
<ul class="Ranking_ul">
    <li><a id="a_ranking_buy" href="javascript:void(0);" class="hover">本月热销排行</a></li>
    <li><a id="a_ranking_fav" href="javascript:void(0);">热门收藏排行</a></li>
    <div class="cl_zhi"></div>
</ul>
<div id="ranking_buys">
<?php if($this->_vars['data']['buys'])foreach ((array)$this->_vars['data']['buys'] as $this->_vars['good']){ ?>
<div class="ranking_info">
    <div class="ranking_info_le fl"><a target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => "site_product",'act' => "index",'arg0' => $this->_vars['good']['goods_id'])); ?>"><img class="img-lazyload" src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager(((isset($this->_vars['good']['image_default_id']) && ''!==$this->_vars['good']['image_default_id'])?$this->_vars['good']['image_default_id']:$this->_vars['data']['defaultImage']),'s'); ?>" alt="" /></a></div>          
     <div class="ranking_info_ri fr">
        <p><a target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => "site_product",'act' => "index",'arg0' => $this->_vars['good']['goods_id'])); ?>"><?php echo kernel::single('base_view_helper')->modifier_cut($this->_vars['good']['name'],48); ?></a></p>
        <p class="price">￥<span><?php echo $this->_vars['good']['price']; ?></span></p>
        <p><span class="sell">已售出<?php echo $this->_vars['good']['buy_m_count']; ?>件</span></p>
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
        <p><span class="sell">收藏人气<?php echo $this->_vars['good']['fav_count']; ?></span></p>
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
</script>   ";s:8:"dateline";s:10:"1431656527";s:3:"ttl";s:1:"0";}