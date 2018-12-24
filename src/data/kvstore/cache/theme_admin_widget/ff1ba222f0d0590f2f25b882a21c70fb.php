<?php exit(); ?>a:3:{s:5:"value";s:9780:"<div id="J_crumbs" class="crumb" >
<div class="webwidth pos_r">
     <div class="crumbCon">
     <div id="J_CrumbSlide" class="crumbSlide">
     <a id="J_CrumbSlidePrev" class="crumbSlide-prev" title="上一页" style="visibility: hidden;" data-spm-anchor-id="a220m.1000858.0.28">&lt;</a>
     <i class="crumbSlide-prev-shadow"></i>
     <div class="crumbClip">
     <form id="J_CrumbSearchForm" action="<?php echo kernel::router()->gen_url(array('ctl' => site_search,'act' => result,'app' => b2c)); ?>" method="POST">
     <ul id="J_CrumbSlideCon" class="crumbSlide-con clearfix" style="left: 0px;">
       <?php $this->_env_vars['foreach']["nav"]=array('total'=>count($this->_vars['data']['path']),'iteration'=>0);foreach ((array)$this->_vars['data']['path'] as $this->_vars['item']){
                        $this->_env_vars['foreach']["nav"]['first'] = ($this->_env_vars['foreach']["nav"]['iteration']==0);
                        $this->_env_vars['foreach']["nav"]['iteration']++;
                        $this->_env_vars['foreach']["nav"]['last'] = ($this->_env_vars['foreach']["nav"]['iteration']==$this->_env_vars['foreach']["nav"]['total']);
?>
       <li>
          <?php if( $this->_vars['item']['title'] && $this->_vars['item']['link'] ){  if( $this->_env_vars['foreach']['nav']['last'] ){ ?>
              <span><?php echo $this->_vars['item']['title']; ?></span>
               <i class="crumbArrow">&gt;</i>
              <?php $this->_vars["lastUrl"]=$this->_vars['item']['link'];  }else{ ?>
              <a alt="<?php echo $this->_vars['item']['tips']; ?>" href="<?php echo $this->_vars['item']['link']; ?>" class="crumbStrong"><?php echo $this->_vars['item']['title']; ?></a>
              <?php if( $this->_vars['setting']['split'] ){  echo $this->_vars['setting']['split'];  }else{ ?>
                <i class="crumbArrow">&gt;</i>
              <?php }  }  } ?>
      </li>
      <?php } unset($this->_env_vars['foreach']["nav"]);  if( $this->_vars['data']['brand'] ){ ?>
      <li title="<?php echo $this->_vars['data']['brand']['name']; ?>:<?php echo $this->_vars['data']['brand']['brand_name']; ?>" class="crumbAttr">
      <a href="javascript:;" ><?php echo $this->_vars['data']['brand']['name']; ?>:<?php echo kernel::single('base_view_helper')->modifier_cut($this->_vars['data']['brand']['brand_name'],30); ?></a>
      
        <?php $this->_env_vars['foreach']["ppp"]=array('total'=>count($this->_vars['data']['brand']['options']),'iteration'=>0);foreach ((array)$this->_vars['data']['brand']['options'] as $this->_vars['pk'] => $this->_vars['p']){
                        $this->_env_vars['foreach']["ppp"]['first'] = ($this->_env_vars['foreach']["ppp"]['iteration']==0);
                        $this->_env_vars['foreach']["ppp"]['iteration']++;
                        $this->_env_vars['foreach']["ppp"]['last'] = ($this->_env_vars['foreach']["ppp"]['iteration']==$this->_env_vars['foreach']["ppp"]['total']);
?>
           <input type="hidden" value='<?php echo $this->_vars['pk']; ?>' name="brand_id[]">
        <?php } unset($this->_env_vars['foreach']["ppp"]); ?>
      <a href="javascript:;" class="crumbDelete"></a>
      </li>
      <?php }  if( $this->_vars['data']['props']['0'] ){  $this->_env_vars['foreach']["pp"]=array('total'=>count($this->_vars['data']['props']),'iteration'=>0);foreach ((array)$this->_vars['data']['props'] as $this->_vars['prop']){
                        $this->_env_vars['foreach']["pp"]['first'] = ($this->_env_vars['foreach']["pp"]['iteration']==0);
                        $this->_env_vars['foreach']["pp"]['iteration']++;
                        $this->_env_vars['foreach']["pp"]['last'] = ($this->_env_vars['foreach']["pp"]['iteration']==$this->_env_vars['foreach']["pp"]['total']);
?>
        <li title="<?php echo $this->_vars['prop']['name']; ?>:<?php echo $this->_vars['prop']['prop_name']; ?>" class="crumbAttr">
        <a href="javascript:;"><?php echo $this->_vars['prop']['name']; ?>:<?php echo kernel::single('base_view_helper')->modifier_cut($this->_vars['prop']['prop_name'],30); ?></a>
        <?php $this->_env_vars['foreach']["ppp"]=array('total'=>count($this->_vars['prop']['options']),'iteration'=>0);foreach ((array)$this->_vars['prop']['options'] as $this->_vars['pk'] => $this->_vars['p']){
                        $this->_env_vars['foreach']["ppp"]['first'] = ($this->_env_vars['foreach']["ppp"]['iteration']==0);
                        $this->_env_vars['foreach']["ppp"]['iteration']++;
                        $this->_env_vars['foreach']["ppp"]['last'] = ($this->_env_vars['foreach']["ppp"]['iteration']==$this->_env_vars['foreach']["ppp"]['total']);
?>
         <input type="hidden" value='<?php echo $this->_vars['pk']; ?>' name="p_<?php echo $this->_vars['prop']['goods_p']; ?>[]">
        <?php } unset($this->_env_vars['foreach']["ppp"]); ?>
        <a class="crumbDelete" href="javascript:;"></a>
        </span></li>
        <?php } unset($this->_env_vars['foreach']["pp"]);  }  if( $this->_vars['data']['brand'] && $this->_vars['data']['props']['0'] ){ ?>
       <li>
      <i class="crumbArrow">&gt;</i>
     </li>
     <?php } ?>
     <li class="crumbSearch">
     
     <label for="J_CrumbSearchInuput" class="crumbSearch-label">
         <input type="text" id="J_CrumbSearchInuput" placeholder="<?php echo app::get('b2c')->getConf('search.position.tip'); ?>" class="crumbSearch-input" value="<?php echo $this->_vars['data']['search_key']; ?>" name="name">
          </label>
         <input type="hidden" name='st' value="<?php if( $this->_vars['data']['st']=='s' ){ ?>s<?php }else{ ?>g<?php } ?>">
         <?php if( $this->_vars['data']['cat']['0'] ){ ?>
         <input type="hidden" value=<?php echo $this->_vars['data']['cat']['0']; ?> name="cat_id">
         <?php }  if( $this->_vars['data']['store_id'] ){ ?>
         <input type="hidden" value=<?php echo $this->_vars['data']['store_id']; ?> name="sid">
         <?php } ?>
     <input type="button" class="crumbSearch-btn" id="J_CrumbSearchBtn" value="">
     </li>
     </ul>
     </form>
     </div>
     <i class="crumbSlide-next-shadow"></i>
     <a id="J_CrumbSlideNext" class="crumbSlide-next" title="下一页" style="visibility: hidden;">&gt;</a>
     </div>
      <?php if( $this->_vars['data']['goods_count'] ){ ?>
       <p class="crumbTitle">共<span><?php echo $this->_vars['data']['goods_count']; ?></span>个<?php if( $this->_vars['data']['view']=='index' ){ ?>店铺<?php }else{ ?>商品<?php } ?></p>
       <?php } ?>
         </div>
      </div>
</div>
<script>
(function(){
   var isNotSupportHtml5=this.isNotSupportHtml5=!('placeholder' in new Element('input'));
//如果浏览器不支持html5  hxh
  
    if (isNotSupportHtml5) {
        var hinput=$('J_CrumbSearchInuput');
        if(hinput){
            if(hinput.value==''){
                hinput.value=hinput.get('placeholder');
            }
            hinput.addEvents({
                'focus':function(e){
                    if($(this).value==$(this).get('placeholder')){
                    $(this).value='';
                    }
                    $(this).toggleClass('focus');
                },
                'blur':function(e){
                    $(this).toggleClass('focus');
                    if($(this).value==''){
                    $(this).value=$(this).get('placeholder');
                    }
                }
            });
        }
    }

  if($('J_CrumbSearchBtn')){
      $('J_CrumbSearchBtn').addEvent('click',function(e){
          //不支持html5
          if(isNotSupportHtml5){              
              if($('J_CrumbSearchInuput').get('placeholder')!=''){
                  if($('J_CrumbSearchInuput').get('placeholder')==$('J_CrumbSearchInuput').get('value')){
                    return;
                  }
              }              
          }
          $('J_CrumbSearchForm').submit();
      });
  }
  if($('J_CrumbSearchInuput')){
     $('J_CrumbSearchInuput').addEvents({
       focus:function(e){$(this).toggleClass('focus');$(this).getParent('.crumbSearch-label').toggleClass('focus');},
       blur:function(e){$(this).toggleClass('focus');$(this).getParent('.crumbSearch-label').toggleClass('focus');}
     });
  }
  var  del= document.getElements('.crumbAttr');
     del.each(function(el){
         
         el.addEvent('click',function(e){
           e.stop();
           $(this).destroy();
           //删除智能提醒。
           var hinput=$('J_CrumbSearchInuput');
           if(hinput.value==hinput.get('placeholder')){
               hinput.value='';
           }
           $('J_CrumbSearchForm').submit();
         });
        
     });
     var jcsPx=$('J_CrumbSlide').getPosition().x;
     var w=$('J_CrumbSlide').getElement('.crumbClip').getSize().x;
     var jcsr=jcsPx+w;
     var jcsiPx=$('J_CrumbSearchInuput').getPosition().x;
     var jcsir=jcsiPx+150;
     if(jcsir>jcsr){
         var move=jcsr-jcsir
         $('J_CrumbSlidePrev').setStyle('visibility','visible');
         $('J_CrumbSlideCon').setStyle('left',move+'px');
         
         $('J_CrumbSlidePrev').addEvent('click',function(e){
             $('J_CrumbSlideCon').setStyle('left','0px');
             $('J_CrumbSlideNext').setStyle('visibility','visible');
             $(this).setStyle('visibility','hidden');
         });//J_CrumbSlide
         $('J_CrumbSlideNext').addEvent('click',function(e){
             $('J_CrumbSlideCon').setStyle('left',move+'px');
             $('J_CrumbSlidePrev').setStyle('visibility','visible');
             $(this).setStyle('visibility','hidden');
         });
         
     }
})();
</script>";s:8:"dateline";s:10:"1409722786";s:3:"ttl";s:1:"0";}