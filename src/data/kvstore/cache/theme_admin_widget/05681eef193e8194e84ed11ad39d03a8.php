<?php exit(); ?>a:3:{s:5:"value";s:1915:"<div class="shop2_nav">
<ul class="shop2_nav_ul le_zhi">
<li><a class="home" href="<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => view,'arg' => $this->_vars['data']['store']['store_id'])); ?>">首页</a></li>
<?php if( $this->_vars['data']['nav'] ){  $this->_env_vars['foreach'][nav_n]=array('total'=>count($this->_vars['data']['nav']),'iteration'=>0);foreach ((array)$this->_vars['data']['nav'] as $this->_vars['nav_k'] => $this->_vars['nav_s']){
                        $this->_env_vars['foreach'][nav_n]['first'] = ($this->_env_vars['foreach'][nav_n]['iteration']==0);
                        $this->_env_vars['foreach'][nav_n]['iteration']++;
                        $this->_env_vars['foreach'][nav_n]['last'] = ($this->_env_vars['foreach'][nav_n]['iteration']==$this->_env_vars['foreach'][nav_n]['total']);
?>
   <li><a href="<?php echo $this->_vars['nav_s']['link']; ?>" target="_blank"><?php echo $this->_vars['nav_s']['title']; ?></a></li>    
<?php } unset($this->_env_vars['foreach'][nav_n]);  } ?>
 <div class="cl_zhi"></div>
 </ul>
 <form action="<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => gallery,'arg0' => $this->_vars['data']['store']['store_id'])); ?>" method="get">
  <div class="nav_search le_zhi">
  <input type="hidden" name='view' value='grid'>
  <input type="hidden" name='sid' value='<?php echo $this->_vars['data']['store']['store_id']; ?>'>
   <input id='navSearch' type="text" name="keyword" class="s_t" autocomplete='off' >
   <input type="button" class="s_on">
   </div>
   </form>
 <div class="cl_zhi"></div>
</div>
<script>
 /*(function(){
    if($('navSearch')){
        $('navSearch').addEvent('keypress',function(e){
          if(e.code==13 && this.value.trim()!=''){ 
                 e.stop();
                 this.getParent('form').submit();
          }
        });
    }
 })();*/
</script>";s:8:"dateline";s:10:"1402376076";s:3:"ttl";s:1:"0";}