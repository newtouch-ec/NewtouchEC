<?php exit(); ?>a:3:{s:5:"value";s:9030:"<?php if( $this->_vars['data']['top_html'] ){  echo $this->_vars['data']['top_html'];  } ?>
<form id='apply_form_<?php echo $this->_vars['widgets_id']; ?>' action="<?php echo kernel::router()->gen_url(array('app' => b2c,'ctl' => site_search,'act' => result)); ?>"  class="SearchBar  searchBar_<?php echo $this->_vars['widgets_id']; ?>" >
<div class="top_search_select fl">
    <div class="search-triggers">
       <ul id="ks-switchable-nav">
        <?php if( $this->_vars['data']['search_key'] ){  if( $this->_vars['data']['st']=='g' ){ ?>
            <div id='searchKey'>
              <li  class="J_SearchTab selected" onclick='searchTab(this);' id='<?php echo $this->_vars['widgets_id']; ?>_g' >
                <a href="javascript:void(0);">宝贝</a>
              </li>
              <li  class="J_SearchTab" onclick='searchTab(this);' id='<?php echo $this->_vars['widgets_id']; ?>_s'>
                <a href="javascript:void(0);">店铺</a>
              </li>
              </div>
         <?php }else{ ?>
              <div id='searchKey'>
              <li  class="J_SearchTab" onclick='searchTab(this);' id='<?php echo $this->_vars['widgets_id']; ?>_g' >
                <a href="javascript:void(0);">宝贝</a>
              </li>
              <li  class="J_SearchTab selected" onclick='searchTab(this);' id='<?php echo $this->_vars['widgets_id']; ?>_s'>
                <a href="javascript:void(0);">店铺</a>
              </li>
              </div>
        <?php }  }else{ ?>
             <div id='searchKey'>
              <li  class="J_SearchTab selected" onclick='searchTab(this);' id='<?php echo $this->_vars['widgets_id']; ?>_g' >
                <a href="javascript:void(0);">宝贝</a>
              </li>
              <li  class="J_SearchTab" onclick='searchTab(this);' id='<?php echo $this->_vars['widgets_id']; ?>_s'>
                <a href="javascript:void(0);">店铺</a>
              </li>
              </div>

          <?php } ?>

       </ul>
       <div class="search-tab-icon">
              <i>
                <em></em>
                <span></span>
              </i>
       </div>
   </div>
</div>

<?php if( $this->_vars['data']['st']=='s' ){ ?>
    <input type="hidden" name='view' value='index'>
    <input type="hidden" name='st' value='s'>
<?php }else{ ?>     
    <input type="hidden" name='view' value='grid'>
    <input type="hidden" name='st' value='g'>
<?php } ?>
     <div class="top_search_input fl">
        
         <?php $this->_vars[showtip]=true;  if( $this->_vars['data']['search_key'] ){  if( $this->_vars['data']['search_key'] !=app::get('b2c')->getConf('search.goods.tip') ){  $this->_vars[showtip]=false;  }  } ?>
         
          <label class="topsearch_tip" id='J_Fsk_top_tip' <?php if( $this->_vars['showtip']==false ){ ?>style='display:none;'<?php } ?>></label>
         <input type="text"  id='J_Fsk' name="name[]" value="<?php echo $this->_vars['data']['search_key']; ?>" autocompleter="associate_autocomplete_goods:name,goods_id" ac_options="{}" class="input_search fl"  />
     
         <input type="button" class="btn_search fr" onfocus='this.blur();' view="grid" st="g" value="搜 索"/>

     </div>
</form>
<?php if( $this->_vars['data']['search'] ){ ?>
<div class="key_words">
<!--热门搜索词好像没有呀。-->
<?php if( $this->_vars['setting']['hotkey'] ){ ?><span><?php echo $this->_vars['setting']['hotkey']; ?>:</span><?php }  if($this->_vars['data']['search'])foreach ((array)$this->_vars['data']['search'] as $this->_vars['top_key'] => $this->_vars['toplink']){ ?>
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

    var j_input=$('J_Fsk');
    var form=$('apply_form_<?php echo $this->_vars['widgets_id']; ?>');
    
    j_input.addEvent('keydown',function(e){  
        if(e.code == 13){
            //搜索条前台店铺商品样式  Add by PanF  2013-12-23 begin
            var id= $$('.selected')[0].id;
            if(id=="<?php echo $this->_vars['widgets_id']; ?>_g"){
                subBtn[0].attributes['st'].nodeValue='g';
                subBtn[0].attributes['view'].nodeValue='grid';
            } else{
                subBtn[0].attributes['st'].nodeValue='s';
                subBtn[0].attributes['view'].nodeValue='index';
            }


           var j_fsk=$('J_Fsk');
           if(j_fsk.value.trim()==''){
              e.stop();
              j_fsk.value='';
              $('J_Fsk_top_tip').set('html','请输入关键字');
              j_fsk.focus();
           }else{
                 e.stop();
                 hview.value =  subBtn[0].get('view');
                 hst.value = subBtn[0].get('st');
                 form.submit();
           }
        }
    });

    j_input.addEvent('mouseenter',function(e){  
        $('J_Fsk_top_tip').hide();
    });

    j_input.addEvent('mouseout',function(e){ 
         if($(this).value==''){
             $('J_Fsk_top_tip').show();
         }else{
            $('J_Fsk_top_tip').hide();
         }
    });
 


    subBtn.addEvent('click',function(e){

        //搜索条前台店铺商品样式  Add by PanF  2013-12-23 begin
        var id= $$('.selected')[0].id;
        if(id=="<?php echo $this->_vars['widgets_id']; ?>_g"){
            subBtn[0].attributes['st'].nodeValue='g';
      subBtn[0].attributes['view'].nodeValue='grid';
        } else{
            subBtn[0].attributes['st'].nodeValue='s';
      subBtn[0].attributes['view'].nodeValue='index';
        }


       var j_fsk=$('J_Fsk');
       if(j_fsk.value.trim()==''){
          e.stop();
          j_fsk.value='';
          $('J_Fsk_top_tip').set('html','请输入关键字');
          j_fsk.focus();
       }else{
             e.stop();
             hview.value = this.get('view');
             hst.value = this.get('st');
             form.submit();
           
       }
    });

     //搜索条前台店铺商品样式  Add by PanF  2013-12-23 begin
    $('ks-switchable-nav').addEvent('mouseenter',function(e){
        $$('.J_SearchTab')[1].setStyle('display','block');
    });

    if($('J_Fsk').value.trim()==''){
         $('J_Fsk_top_tip').set('html','请输入关键字');
    }

    
    
    $(scope).getElements('input[autocompleter]').each(function(item) {
         item.addEvents({
         'focus':function(e){
            $('J_Fsk_top_tip').setStyle('color','#CCCCCC');
         },
         'blur':function(e){
            if($(this).value==''){
                $('J_Fsk_top_tip').setStyle('color','#666666');
                $('J_Fsk_top_tip').show();
            }else{
                $('J_Fsk_top_tip').hide();
            }
         },
         'keydown':function(e){
            $('J_Fsk_top_tip').hide();
         },
         'change':function(e){
            $('J_Fsk_top_tip').hide();
         }
         });
    });
}
})(document.getElement('.searchBar_<?php echo $this->_vars['widgets_id']; ?>'));


//搜索条前台店铺商品样式  Add by PanF  2013-12-23 begin
function searchTab(object){

    if(object.attributes['class'].value=="J_SearchTab selected" ){
        return;
    }

    DelTopMenu(object);


    if(object.id=='<?php echo $this->_vars['widgets_id']; ?>_g'){
      var ActiveLi = new Element(
            'div',{'id':'searchKey',
          'html':'<li  class="J_SearchTab selected" onclick="searchTab(this);"  id="<?php echo $this->_vars['widgets_id']; ?>_g"><a href="javascript:void(0);">宝贝</a></li><li  class="J_SearchTab" onclick="searchTab(this);" id="<?php echo $this->_vars['widgets_id']; ?>_s"><a href="javascript:void(0);">店铺</a></li>'
           }).inject('ks-switchable-nav');
    }


    if(object.id=='<?php echo $this->_vars['widgets_id']; ?>_s'){
      var Li = new Element(
            'div',{'id':'searchKey',
          'html':'<li  class="J_SearchTab selected" onclick="searchTab(this);" id="<?php echo $this->_vars['widgets_id']; ?>_s"><a href="javascript:void(0);">店铺</a></li><li  class="J_SearchTab" onclick="searchTab(this);" id="<?php echo $this->_vars['widgets_id']; ?>_g"><a href="javascript:void(0);">宝贝</a></li>'
           }).inject('ks-switchable-nav');
    }

    $$('.J_SearchTab')[1].setStyle('display','none');
    
}

function DelTopMenu(item){
        $('searchKey').destroy();
}

//搜索条前台店铺商品样式  Add by PanF  2013-12-23 end
</script>
<?php if( $this->_vars['data']['bottom_html'] ){  echo kernel::single('base_view_helper')->modifier_regex_replace($this->_vars['data']['bottom_html'],'/widgets_id/',$this->_vars['widgets_id']);  } ?>
";s:8:"dateline";s:10:"1408608621";s:3:"ttl";s:1:"0";}