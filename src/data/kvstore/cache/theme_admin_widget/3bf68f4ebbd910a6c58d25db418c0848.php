<?php exit(); ?>a:3:{s:5:"value";s:689:"<form action="<?php echo kernel::router()->gen_url(array('app' => groupbuy,'ctl' => site_grouplist,'act' => index)); ?>" method="get">
  <input type="text" class="search_keyword fl" name="scontent" value="输入您要搜索的商品" id="J_Fsk">
  <input type="submit" value="搜 索" class="s_btn fl">
</form>
<script>
window.addEvent('domready',function(){
  var j_input=$('J_Fsk');

  j_input.addEvent('mouseenter',function(e){  
    if(this.value == '输入您要搜索的商品'){
      this.value = '';
    }
  });

  j_input.addEvent('mouseout',function(e){ 
    if(this.value == ''){
      this.value = '输入您要搜索的商品';
    }
  });

});
</script>";s:8:"dateline";s:10:"1430960778";s:3:"ttl";s:1:"0";}