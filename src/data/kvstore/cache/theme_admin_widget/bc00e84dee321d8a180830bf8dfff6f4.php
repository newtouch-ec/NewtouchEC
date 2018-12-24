<?php exit(); ?>a:3:{s:5:"value";s:4970:"<?php $this->__view_helper_model['base_view_helper'] = kernel::single('base_view_helper'); ?><div class="shop_head_<?php echo $this->_vars['widgets_id']; ?> shop_head" style="background:url('<?php echo $this->_vars['data']['bg_pic']; ?>') no-repeat;">
    <div class="shop_top">
    <div class="shop_logo le_zhi" style="overflow:hidden;">
        <a target='_blank' class="fl" title="<?php echo $this->_vars['data']['store']['store_name']; ?>"  href="<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => view,'arg' => $this->_vars['data']['store']['store_id'])); ?>">
        <img height="60" src="images/transparent.gif" lazyload="<?php if( $this->_vars['data']['logo'] ){  echo kernel::single('base_view_helper')->modifier_storager($this->_vars['data']['logo']);  }else{  echo kernel::single('base_view_helper')->modifier_storager($this->_vars['data']['store']['image']);  } ?>" class="img-lazyload"  >
        </a>
        <h3 class="fl"><?php echo $this->_vars['data']['store']['store_name']; ?></h3>
    </div>    
    <div class="kef le_zhi">
         <ul class="button">
            <li class="star-off" isspecial="1" <?php if( $this->_vars['data']['isLogin'] ){ ?>star="<?php echo $this->_vars['data']['store']['store_id']; ?>" data-type="on"<?php } ?>>
                <a <?php if( $this->_vars['data']['isLogin']==false ){ ?>href="<?php echo kernel::router()->gen_url(array('app' => "b2c",'ctl' => "site_passport",'act' => "login")); ?>" <?php }else{ ?>href="javascript:void(0);" rel="_fav_"<?php } ?> class=" listact">
                 <span>
                    <div class="fav"><?php $this->_tag_stack[] = array('t', array()); $this->__view_helper_model['base_view_helper']->block_t(array(), null, $this); ob_start(); ?>收藏本店<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></div>
                    <div class="nofav"><?php $this->_tag_stack[] = array('t', array()); $this->__view_helper_model['base_view_helper']->block_t(array(), null, $this); ob_start(); ?>已收藏<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_content = $this->__view_helper_model['base_view_helper']->block_t($this->_tag_stack[count($this->_tag_stack) - 1][1], $_block_content, $this); echo $_block_content; array_pop($this->_tag_stack); $_block_content=''; ?></div>
                </span>
                </a>
            </li>
        </ul>
     </div> 
    
    <div class="shop_broad ri_zhi">
          <?php if( $this->_vars['data']['notice'] ){ ?>
              <b>通知:<?php echo $this->_vars['data']['notice']; ?></b>
              <?php }else{  }  if( $this->_vars['data']['show_jiathis']=='true' ){ ?>
                <div class="shop_share ri_zhi">
                       <!-- JiaThis Button BEGIN -->
                      <div id="ckepop">
                      <p style="float:left;" >分享店铺</p>
                        <a class="jiathis_button_douban"></a>
                        <a class="jiathis_button_renren"></a>
                        <a class="jiathis_button_tqq"></a>
                        <a class="jiathis_button_tsina"></a>
                        <a class="jiathis_button_kaixin001"></a>
                        <a href="http://www.jiathis.com/share" title="更多" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a> 
                      </div>
                      <script type="text/javascript" >
                      var jiathis_config={
                        data_track_clickback:false,
                        url:"",
                        summary:"",
                        title:"<?php echo $this->_vars['data']['store']['store_name']; ?>",
                        pic:"<?php echo kernel::single('base_view_helper')->modifier_storager($this->_vars['data']['store']['image'],'s'); ?>",
                        hideMore:false
                      }
                      </script>
                      <script type="text/javascript" src="http://v2.jiathis.com/code/jia.js?uid=1626174" charset="utf-8"></script>
                      <!-- JiaThis Button END --> 
                </div>
              <?php } ?>
          </div>
    </div>
</div>
<script>
function AddFavorite() {
  var url = document.location.href;
  var title = document.title;
  try {
      window.external.addFavorite(url, title);
  }catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }catch (e) {
         //alert("Sorry, your browser cannot complete this operation.\n\nAdd collection failure，Please use Ctrl+D to add");
		 alert("对不起,您的浏览器无法完成此操作,加入收藏失败,请使用Ctrl + D添加");
     }
  }
}
</script>";s:3:"ttl";i:0;s:8:"dateline";i:1528890897;}