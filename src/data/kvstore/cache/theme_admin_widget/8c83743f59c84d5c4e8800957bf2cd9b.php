<?php exit(); ?>a:3:{s:5:"value";s:1965:"<h4><?php echo $this->_vars['data']['title']; ?></h4>
<div class="pro_kind">
    <h5><!--<span class="plus"></span>--><a href='<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => gallery,'arg0' => $this->_vars['data']['store_id'])); ?>'"><span>查看所有宝贝》</span><span class="cl_zhi"></span></a></h5>
    <?php if($this->_vars['data']['cats'])foreach ((array)$this->_vars['data']['cats'] as $this->_vars['cat']){ ?>
    <p><span <?php if( $this->_vars['cat']['child_cats'] ){ ?>class="plus"<?php }else{ ?>class="mius"<?php } ?>></span><a href='<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => gallery,'arg0' => $this->_vars['data']['store_id'],'arg1' => "c,{$this->_vars['cat']['cat_id']}")); ?>'><span><?php echo $this->_vars['cat']['cat_name']; ?></span><span class="cl_zhi"></span></a>
    <?php if($this->_vars['cat']['child_cats'])foreach ((array)$this->_vars['cat']['child_cats'] as $this->_vars['child_cat']){ ?><a href='<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => gallery,'arg0' => $this->_vars['data']['store_id'],'arg1' => "c,{$this->_vars['child_cat']['cat_id']}")); ?>' class="plus_2"><?php echo $this->_vars['child_cat']['cat_name']; ?></a><?php } ?>
    </p>
    <?php } ?>
</div>
<script>
    (function(){ 
        $$("span.mius","span.plus").addEvent("click",function(){
            if(this.hasClass("plus")){
                this.removeClass("plus");
                this.addClass("mius");
                this.getParent("p").getChildren("a.plus_2").setStyle("display","none");
                return;
            }
            if(this.hasClass("mius")){
                this.removeClass("mius");
                this.addClass("plus");
                this.getParent("p").getChildren("a.plus_2").setStyle("display","");
                return;
            }

        });
    })();
</script>";s:8:"dateline";s:10:"1431656503";s:3:"ttl";s:1:"0";}