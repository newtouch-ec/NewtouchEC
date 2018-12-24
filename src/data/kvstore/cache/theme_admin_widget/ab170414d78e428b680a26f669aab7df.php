<?php exit(); ?>a:3:{s:5:"value";s:4876:"<form action="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_search,'act' => result)); ?>"  class="SearchBar  searchBar_<?php echo $this->_vars['widgets_id']; ?>" >
<?php if( $this->_vars['data']['st']=='s' ){ ?>
    <input type="hidden" name='view' value='index'>
    <input type="hidden" name='st' value='s'>
<?php }else{ ?>     
    <input type="hidden" name='view' value='grid'>
    <input type="hidden" name='st' value='g'>
<?php } ?>
<div class="search_three dis_bl">
    <div class="search_box fl">
         <?php if( $this->_vars['data']['search_key'] ){  if( $this->_vars['data']['search_key'] !=app::get('b2c')->getConf('search.goods.tip') ){  $this->_vars[showtip]=false;  }  } ?>
         <!-- <label id='J_Fsk_top_tip' <?php if( $this->_vars['showtip']==false ){ ?>style='display:none;'<?php } ?>><?php echo app::get('b2c')->getConf('search.goods.tip'); ?></label> -->
         <input type="text" placeholderd="<?php echo app::get('b2c')->getConf('search.goods.tip'); ?>" id='J_Fsk' name="name[]" value="<?php echo $this->_vars['data']['search_key']; ?>" autocompleter="associate_autocomplete_goods:name,goods_id" ac_options="{}" class="search_keyword dis_bl" tabindex="0" autocomplete="off"/>
        <!-- <input type="text"  value="" class="search_keyword dis_bl" > -->
    </div>
    <div class="search_button fl">
        <!-- <input type="submit" onfocus="" class="btn_search" value="搜 索">
        <input type="submit"  class="btn_search"  onfocus='this.blur();' view="index" st="s" value="搜 索"/> -->
        <input type="submit"  class="btn_search" onfocus='this.blur();' view="grid" st="g" value="搜 索"/>
    </div>
</div>
</form>

<?php if( $this->_vars['data']['search'] ){ ?>
<div class="search_hots dis_bl clb">
    <!--热门搜索词好像没有呀。-->
    <?php if( $this->_vars['setting']['hotkey'] ){  echo $this->_vars['setting']['hotkey'];  }  if($this->_vars['data']['search'])foreach ((array)$this->_vars['data']['search'] as $this->_vars['top_key'] => $this->_vars['toplink']){ ?>
        <a href="<?php echo $this->_vars['toplink']['top_link_url']; ?>"><?php echo $this->_vars['toplink']['top_link_title']; ?></a>
    <?php } ?>
</div>
<?php } ?>

<script>
(function(scope){
	if(scope){
    var hview=scope.getElement('input[name="view"]');
    var hst = scope.getElement('input[name="st"]');
    var subBtn=scope.getElements('.btn_search');
    subBtn.addEvent('click',function(e){
    var j_fsk=$('J_Fsk');
       if(j_fsk.value.trim()==''){
          e.stop();
          j_fsk.value='';
          //$('J_Fsk_top_tip').set('html','请输入关键字');
          j_fsk.focus();
       }else{
          e.stop();
          hview.value = this.get('view');
          hst.value = this.get('st');
          this.form.submit();
       }
    });
    // scope.getElements('a').each(function(el,index,arr){
    //    if(el.get('view')==hview.value){
    //       el.removeClass('shop_sear');
    //       if(!el.hasClass('prod_sear')){
    //          el.addClass('prod_sear');
    //       }
    //    }else{
    //       el.removeClass('prod_sear');
    //      if(!el.hasClass('shop_sear')){
    //       el.addClass('shop_sear');
    //      }
    //    }
    //    el.addEvent('click',function(e){
    //      e.stop();
    //      var st=el.get('view');
    //        if(hview.value==st){
    //           return;
    //        }
    //        hview.value=st;
    //        hst.value=el.get('st');
    //        $('J_Fsk_top_tip').show();
    //        $('J_Fsk').value='';
    //        $('J_Fsk_top_tip').set('html',$(this).get('tip'));
    //        arr.map(function(ell){
    //            ell.toggleClass('prod_sear');
    //            ell.toggleClass('shop_sear');
    //        });
    //    });
    // });
//    $(scope).getElements('input[autocompleter]').each(function(item) {
//         item.addEvents({
//         'focus':function(e){
//            $('J_Fsk_top_tip').setStyle('color','#CCCCCC');
//         },
//         'blur':function(e){
//            if($(this).value==''){
//                $('J_Fsk_top_tip').setStyle('color','#666666');
//                $('J_Fsk_top_tip').show();
//            }else{
//                $('J_Fsk_top_tip').hide();
//            }
//         },
//         'keydown':function(e){
//            $('J_Fsk_top_tip').hide();
//         },
//         'change':function(e){
//            $('J_Fsk_top_tip').hide();
//         }
//         });
//    });
}
})(document.getElement('.searchBar_<?php echo $this->_vars['widgets_id']; ?>'));
</script>
<!-- <?php if( $this->_vars['data']['bottom_html'] ){  echo kernel::single('base_view_helper')->modifier_regex_replace($this->_vars['data']['bottom_html'],'/widgets_id/',$this->_vars['widgets_id']);  } ?> -->";s:8:"dateline";s:10:"1402376076";s:3:"ttl";s:1:"0";}