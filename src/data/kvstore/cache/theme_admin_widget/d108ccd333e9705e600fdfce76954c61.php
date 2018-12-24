<?php exit(); ?>a:3:{s:5:"value";s:2807:"<div class="refilter">
    <h4>所有分类<?php echo $this->_vars['cat_id']; ?></h4>
    <ul id="gallery_cat_<?php echo $this->_vars['widgets_id']; ?>" class="l_aone">
        <?php if($this->_vars['data'])foreach ((array)$this->_vars['data'] as $this->_vars['catId'] => $this->_vars['cat']){ ?>
            <li class="ahover <?php if( $this->_vars['cat']['i'] >$this->_vars['setting']['num'] ){ ?>js_gallery_category_<?php echo $this->_vars['widgets_id'];  } ?>" <?php if( $this->_vars['cat']['i'] > $this->_vars['setting']['num'] ){ ?>style="display:none;"<?php } ?>>
                <i></i>
                <a href="<?php echo $this->_vars['cat']['url']; ?>"><?php echo $this->_vars['cat']['cat_name']; ?></a>
                <?php if( $this->_vars['cat']['children'] ){ ?>
                    <ul style="display:none;" class="l_btwo">
                        <?php if($this->_vars['cat']['children'])foreach ((array)$this->_vars['cat']['children'] as $this->_vars['childId'] => $this->_vars['child']){ ?>
                        <li>
                        <a href="<?php echo $this->_vars['child']['url']; ?>"><?php echo $this->_vars['child']['cat_name']; ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
        <?php } ?>
    </ul>
    <h5 class="all_filter" id="gallery_<?php echo $this->_vars['widgets_id']; ?>_viewall"><a href="javascript:void(0);">显示全部分类</a><i></i></h5>
</div>
<script>
$('gallery_cat_<?php echo $this->_vars['widgets_id']; ?>').getElements('li').each(function(item,index){
    item.addEvent('mouseover',function(){
        $('gallery_cat_<?php echo $this->_vars['widgets_id']; ?>').getElements('li').each(function(i,k){
            if(k == index){
                if(i.getElement('ul')){
                    i.getElement('ul').setStyle('display','');
                    i.removeClass('ahover');
                }
            }else{
                if(i.getElement('ul')){
                    i.getElement('ul').setStyle('display','none');
                    i.addClass('ahover');
                }
            }

        });
    });

});

$('gallery_<?php echo $this->_vars['widgets_id']; ?>_viewall').addEvent('click',function(){
    $ES('.js_gallery_category_<?php echo $this->_vars['widgets_id']; ?>').each(function(item,index){
        if(item.getStyle('display')=='none'){
            item.setStyle('display','');
            $('gallery_<?php echo $this->_vars['widgets_id']; ?>_viewall').addClass('filter_close');
        }else{
            item.setStyle('display','none');
            $('gallery_<?php echo $this->_vars['widgets_id']; ?>_viewall').removeClass('filter_close');
        }
    });
});
</script>";s:8:"dateline";s:10:"1409549821";s:3:"ttl";s:1:"0";}