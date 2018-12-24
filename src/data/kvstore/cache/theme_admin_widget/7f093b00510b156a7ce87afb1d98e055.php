<?php exit(); ?>a:3:{s:5:"value";s:932:"<h4><?php echo $this->_vars['data']['title']; ?></h4>
<form action="<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => gallery,'arg0' => $this->_vars['data']['store']['store_id'])); ?>" method="get">
<input type="hidden" value="all" name="searchRange">
<p class="search_shop_p"><span class="width_55 tar">关键字：</span>
    <span><input type="text" name="keyword" maxlength="8" class="shop_input width_125" /></span>
    <div class="cl_zhi"></div>
    </p>
<p class="search_shop_p">
  <span class="width_55 tar">价格：</span>
    <span><input type="text" name="price1" maxlength="8" class="shop_input width_55" /></span>
    <span>到</span>
    <span><input type="text" name="price2" maxlength="8" class="shop_input width_55"/></span>
    <div class="cl_zhi"></div>
</p>
<p class="search_shop_p_s">
<input type="submit" class="sea_b" value="搜索"/></span></p>
</form>";s:8:"dateline";s:10:"1439263446";s:3:"ttl";s:1:"0";}