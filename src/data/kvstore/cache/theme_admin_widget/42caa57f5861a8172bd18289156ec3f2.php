<?php exit(); ?>a:3:{s:5:"value";s:5668:"
<div class="sj_info mt_10">
<h4><div class="info_title rankTitle"><?php echo $this->_vars['data']['title']; ?></div></h4>
<!--<ul class=" hot_kind_ul" >
    <li class="fl "><a id="a_ranking_buy" href="javascript:void(0);" class="hover">本月热销排行</a></li>
    <li class="fr"><a id="a_ranking_fav" href="javascript:void(0);">热门收藏排行</a></li>
    <div class="cl_zhi"></div>
</ul>-->
<h4 class="rankListTitle"><span class="rankCurrentTitle" id="r_1"">销售量</span><span  id="r_2">收藏数</span></h4>
<div id="ranking_buys">
<?php if($this->_vars['data']['buys'])foreach ((array)$this->_vars['data']['buys'] as $this->_vars['good']){ ?>
<div class="ranking_info">
   <div class="ranklist">
    <a target='_blank' class="fl" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_product,'act' => index,'arg' => $this->_vars['good']['goods_id'])); ?>">
      <?php if( $this->_vars['good']['udfimg'] == 'true' ){  $this->_vars["gimage"]=$this->_vars['good']['thumbnail_pic'];  }else{  $this->_vars["gimage"]=((isset($this->_vars['good']['image_default_id']) && ''!==$this->_vars['good']['image_default_id'])?$this->_vars['good']['image_default_id']:$this->_vars['data']['defaultImage']);  } ?>
      <img class="img-lazyload" src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['gimage']); ?>" alt="<?php echo $this->_vars['good']['name']; ?>"></a>
	  <div class="ranklist_ri fr">
	    <p><a target='_blank' href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_product,'act' => index,'arg' => $this->_vars['good']['goods_id'])); ?>"><?php echo $this->_vars['good']['name']; ?></a></p>
	    <p class="price"><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['good']['price'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset'),app::get('b2c')->getConf('system.money.separator')); ?></p>
	    <p class="sell">已售出<?php echo $this->_vars['good']['buy_count']; ?>笔</p>
	  </div>
	  <div class="cl_zhi"></div>
	</div>
     <div class="cl_zhi"></div>
</div>
<?php } ?>
</div>
<div id="ranking_favs" style="display:none">
<?php if($this->_vars['data']['favs'])foreach ((array)$this->_vars['data']['favs'] as $this->_vars['good']){ ?>
<div class="ranking_info">
   <div class="ranklist">
    <a target='_blank' class="fl" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_product,'act' => index,'arg' => $this->_vars['good']['goods_id'])); ?>">
      <?php if( $this->_vars['good']['udfimg'] == 'true' ){  $this->_vars["gimage"]=$this->_vars['good']['thumbnail_pic'];  }else{  $this->_vars["gimage"]=((isset($this->_vars['good']['image_default_id']) && ''!==$this->_vars['good']['image_default_id'])?$this->_vars['good']['image_default_id']:$this->_vars['data']['defaultImage']);  } ?>
      <img class="img-lazyload" src="images/transparent.gif" lazyload="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['gimage']); ?>" alt="<?php echo $this->_vars['good']['name']; ?>"></a>
	  <div class="ranklist_ri fr">
	    <p><a target='_blank' href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_product,'act' => index,'arg' => $this->_vars['good']['goods_id'])); ?>"><?php echo $this->_vars['good']['name']; ?></a></p>
	    <p class="price"><?php echo app::get('ectools')->model('currency')->changer_odr($this->_vars['good']['price'],$_COOKIE["S"]["CUR"],false,false,app::get('b2c')->getConf('system.money.decimals'),app::get('b2c')->getConf('system.money.operation.carryset'),app::get('b2c')->getConf('system.money.separator')); ?></p>
	    <p class="sell">收藏人气<?php echo $this->_vars['good']['fav_count']; ?>笔</p>
	  </div>
	  <div class="cl_zhi"></div>
	</div>
     <div class="cl_zhi"></div>
</div>
<?php } ?>
</div>
<div class="moreGoods">
<a class="moreGoodsA" target="_blank" href="<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => "site_shop",'act' => "gallery",'arg0' => $this->_vars['data']['store_id'])); ?>">查看更多宝贝</a>
</div>

</div>
<!--<script>
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
</script>  -->
<script>
window.addEvent('domready', function() {
    $E('.rankListTitle').getChildren('span').each(function(item,index){
           
        item.addEvent('mouseenter',function(){
   
          $('r_1').removeClass('rankCurrentTitle');
          $('r_2').removeClass('rankCurrentTitle');
          if(index === 0){
            $('r_1').addClass('rankCurrentTitle');
            $('ranking_buys').setStyle('display','');
            $('ranking_favs').setStyle('display','none');
          }else if(index === 1){
            $('r_2').addClass('rankCurrentTitle');
            $('ranking_favs').setStyle('display','');
            $('ranking_buys').setStyle('display','none');
          }
      });
    });
});
</script>
";s:8:"dateline";s:10:"1439261128";s:3:"ttl";s:1:"0";}