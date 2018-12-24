<?php exit(); ?>a:3:{s:5:"value";s:2557:"<div class="content-node-list">
    <?php if( $this->_vars['data']['__shownode']&&$this->_vars['data']['node_name'] ){ ?>
    <div class="content-node-list-title">
        <?php if( !$this->_vars['data']['__stripparenturl'] ){ ?>
            <a href="<?php echo $this->_vars['data']['node_url']; ?>" ><span><?php echo $this->_vars['data']['node_name']; ?></span></a>
        <?php }else{  echo $this->_vars['data']['node_name'];  } ?>
    </div> 
    <?php } ?>
    <ul class="content-node-list-body">
                <?php echo $this->_vars['data']['__html']; ?>
    </ul> 
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
	jQuery.noConflict();
	jQuery(function($){
		var $subNav1=$(".subNav1");
		var $subNav2=$(".subNav2");
		var $subNav3=$(".subNav3");
		var $subNav1a=$(".content-node-list-body").find(".subNav1").find("a");
		var $subNav2a=$(".content-node-list-body").find(".subNav2").find("a");
		$subNav1a.each(function(){
			$(this).click(function(){
				event.stopPropagation();	
			})	
		})
		$subNav2a.each(function(){
			$(this).click(function(){
				event.stopPropagation();	
			})	
		})
		$subNav1.each(function(){
			$(this).click(function(){
				var $subNav1s=$(this).nextAll(".subNav1");
				var $subNav2s=$subNav1s.nextAll(".subNav2");
				var $subNav3s=$subNav2s.nextAll(".subNav3");
				if($(this).hasClass("subNav1Show")){
					$(this).removeClass("subNav1Show");
					$(this).nextAll(".subNav2").not($subNav2s).removeClass("subNav2Show subNav2Show2")
						.nextAll(".subNav3").not($subNav3s).removeClass("subNav3Show");
							/*.end().siblings().removeClass("ftBold");*/

				}else{
					$(this).addClass("subNav1Show");
					$(this).nextAll(".subNav2").not($subNav2s).addClass("subNav2Show");
					
				}	
			})	
		})
		$subNav2.each(function(){
			$(this).click(function(){
				var $subNav2ss=$(this).nextAll(".subNav2");
				var $subNav3s=$subNav2ss.nextAll(".subNav3");
				if($(this).hasClass("subNav2Show2")){
					$(this).removeClass("subNav2Show2");
					$(this).nextAll(".subNav3").not($subNav3s).removeClass("subNav3Show");	
				}else{
					$(this).addClass("subNav2Show2");
					$(this).nextAll(".subNav3").not($subNav3s).addClass("subNav3Show");
				}	
			})	
		})
		$subNav3.each(function(){
			$(this).click(function(){
				if($(this).hasClass("ftBold")){
					$(this).removeClass("ftBold");	
				}else{
					$(this).addClass("ftBold").siblings().removeClass("ftBold");		
				}
				
			})	
		})
	})



</script>

	";s:8:"dateline";s:10:"1407715507";s:3:"ttl";s:1:"0";}