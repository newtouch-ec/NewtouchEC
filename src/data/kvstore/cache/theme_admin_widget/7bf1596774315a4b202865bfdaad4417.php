<?php exit(); ?>a:3:{s:5:"value";s:8267:"<?php $this->__view_helper_model['b2c_view_helper'] = kernel::single('b2c_view_helper'); ?><h2 class="allkind_title f16 c_bold">全部分类</h2>
<div class="allkind_menu_index" id="">
    <ul class="menu_box c_bold" id="">
        <?php $this->_env_vars['foreach'][catslist]=array('total'=>count($this->_vars['data']['cat']),'iteration'=>0);foreach ((array)$this->_vars['data']['cat'] as $this->_vars['parentId'] => $this->_vars['parent']){
                        $this->_env_vars['foreach'][catslist]['first'] = ($this->_env_vars['foreach'][catslist]['iteration']==0);
                        $this->_env_vars['foreach'][catslist]['iteration']++;
                        $this->_env_vars['foreach'][catslist]['last'] = ($this->_env_vars['foreach'][catslist]['iteration']==$this->_env_vars['foreach'][catslist]['total']);
?>
        <li class="js_depth-0">
            <div class="one clb">
                <h3><a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_gallery,'act' => index,'arg0' => $this->_vars['parent']['cat_id'])); ?>"><?php if( $this->_vars['parent']['title'] ){  echo $this->_vars['parent']['title'];  }else{  echo $this->_vars['parent']['cat_name'];  } ?></a></h3>

                <!-- 二级虚拟分类分类 start -->
                <?php if( $this->_vars['parent']['virtualcat1'] ){ ?>
                <ul>
                  <?php if($this->_vars['parent']['virtualcat1'])foreach ((array)$this->_vars['parent']['virtualcat1'] as $this->_vars['virtualcat']){ ?>
                  <li><a href="<?php echo $this->_vars['virtualcat']['url']; ?>"><?php echo $this->_vars['virtualcat']['virtual_cat_name']; ?></a></li>
                  <?php } ?>
                </ul>
                <?php } ?>
                <!-- 二级虚拟分类分类 end -->
            </div>

            <!-- 弹出分类start -->
            <div class="i_mc js_depth-3" style="display:none;">

                <!--弹出左边-->
                <div class="i_mc_l">

                    <?php $this->_env_vars['foreach'][subcat]=array('total'=>count($this->_vars['parent']['children']),'iteration'=>0);foreach ((array)$this->_vars['parent']['children'] as $this->_vars['childId'] => $this->_vars['child']){
                        $this->_env_vars['foreach'][subcat]['first'] = ($this->_env_vars['foreach'][subcat]['iteration']==0);
                        $this->_env_vars['foreach'][subcat]['iteration']++;
                        $this->_env_vars['foreach'][subcat]['last'] = ($this->_env_vars['foreach'][subcat]['iteration']==$this->_env_vars['foreach'][subcat]['total']);
 if( $this->_vars['child']['hidden'] != 'true' ){ ?>
                        <div class="i_mc_lbox">
                            <h4><a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_gallery,'act' => index,'arg0' => $this->_vars['child']['cat_id'])); ?>"><?php echo $this->_vars['child']['cat_name']; ?></a></h4>
                            <div class="i_mc_lbox_links">
                                <?php $this->_env_vars['foreach'][childnum]=array('total'=>count($this->_vars['child']['children']),'iteration'=>0);foreach ((array)$this->_vars['child']['children'] as $this->_vars['gChildId'] => $this->_vars['gChild']){
                        $this->_env_vars['foreach'][childnum]['first'] = ($this->_env_vars['foreach'][childnum]['iteration']==0);
                        $this->_env_vars['foreach'][childnum]['iteration']++;
                        $this->_env_vars['foreach'][childnum]['last'] = ($this->_env_vars['foreach'][childnum]['iteration']==$this->_env_vars['foreach'][childnum]['total']);
 if( $this->_vars['gChild']['hidden'] != 'true' ){  if( $this->_env_vars['foreach']['childnum']['iteration'] <= $this->_vars['setting']['gshowmax']  or  $this->_vars['setting']['gshowmax'] == 0 ){ ?>
                                            <a href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_gallery,'act' => index,'arg0' => $this->_vars['gChild']['cat_id'])); ?>"><?php echo $this->_vars['gChild']['cat_name']; ?></a>
                                            <?php }else{ ?>
                                            <a href="<?php echo $this->_vars['gChild']['onSel']; ?>" href="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_gallery,'act' => index,'arg0' => $this->_vars['child']['cat_id'])); ?>">更多&gt;&gt;</a>
                                            <?php break;  }  }  } unset($this->_env_vars['foreach'][childnum]); ?>
                            </div>
                        </div>
                        <?php }  } unset($this->_env_vars['foreach'][subcat]); ?>

                </div>

                <!--弹出左边 start-->
                <div class="i_mc_r">

                    <!--弹出分类右边促销活动 start-->
                    <?php if( $this->_vars['parent']['ad'] ){ ?>
                    <div class="i_mc_r_promotions">
                        <h4>促销活动</h4>
                        <?php if($this->_vars['parent']['ad'])foreach ((array)$this->_vars['parent']['ad'] as $this->_vars['adId'] => $this->_vars['ad']){ ?>
                          <a href="<?php echo $this->_vars['ad']['link']; ?>" target="_blank">
                            <img class="img-lazyload" src="<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['ad']['pic']); ?>"  alt="<?php echo $this->_vars['ad']['txt']; ?>" <?php if( $this->_vars['ad']['width'] ){ ?>width='<?php echo $this->_vars['ad']['width']; ?>'<?php }  if( $this->_vars['ad']['height'] ){ ?>height='<?php echo $this->_vars['ad']['height']; ?>'<?php } ?> />
                          </a>
                        <?php } ?>
                    </div>
                    <?php } ?>
                    <!--弹出分类右边促销活动 end-->

                    <!-- 弹出分类右边推荐品牌 start -->
                    <?php if( $this->_vars['parent']['brand'] ){ ?>
                    <div class="i_mc_r_brand">
                        <h4>推荐品牌</h4>
                        <ul>
                            <?php if($this->_vars['parent']['brand'])foreach ((array)$this->_vars['parent']['brand'] as $this->_vars['brandId'] => $this->_vars['brand']){ ?>
                            <li>
                                <a href='<?php echo $this->__view_helper_model['b2c_view_helper']->function_selector(array('args' => $this->_vars['brand']['args2'],'filter' => $this->_vars['brand']['bfilter'],'key' => $this->_vars['brand']['column_id'],'value' => $this->_vars['brand']['brand_id'],'pageIndex' => 1), $this);?>'><?php echo $this->_vars['brand']['brand_name']; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                    <!-- 弹出分类右边推荐品牌 end -->

                </div>
                <!--弹出左边 end-->

            </div>
            <!-- 弹出分类end -->
        </li>
        <?php } unset($this->_env_vars['foreach'][catslist]); ?>
    </ul>
</div>
<script language="javascript">
  $ES('.js_depth-0').each(function(item,index){
    if(item.getElement('.js_depth-3')){
      item.addEvent('mouseenter',function(){
        var div_h = 0;
        item1 = item.getElement('.one');
        item1.set('class','menuhover one clb');
        if(index > 0){
          for(var i=0;i<=index-1;i++){
            div_h += $ES('.js_depth-0')[i].getHeight();
          }
          //item.getElement('.js_depth-3').setStyle('top',-div_h);
        }
        item.getElement('.js_depth-3').setStyle('display','');
        if(item.getElement('.js_depth-3').getHeight() < (div_h+item.getHeight())){
            item.getElements('.js_depth-3').setStyle('height',div_h+item.getHeight());
        }
      });
      item.addEvent('mouseleave',function(){
        item1 = item.getElement('.menuhover'); 
        item1 = item.getElement('.one');
        item1.set('class','one clb');
        item.getElement('.js_depth-3').setStyle('display','none');
      });
    }
  });
</script>";s:8:"dateline";s:10:"1402368430";s:3:"ttl";s:1:"0";}