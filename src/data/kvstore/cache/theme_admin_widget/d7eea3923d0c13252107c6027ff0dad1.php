<?php exit(); ?>a:3:{s:5:"value";s:1027:"<div class="shop_search_<?php echo $this->_vars['widgets_id']; ?> shop_search">
<form action="<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => gallery,'arg0' => $this->_vars['data']['store']['store_id'])); ?>" method="get">
    <ul>
        <li>
            <input type="hidden" value="all" name="searchRange">
            <span class="width_55 tar">关键字：</span>
            <span><input type="text" name="keyword" maxlength="8" class="shop_input shop_input_key" autocomplete="off" /></span>
        </li>
        <li> 
            <span class="width_55 tar">价格：</span>
            <span><input type="text" autocomplete="off" name="price1" maxlength="8" class="shop_input " /></span>
            <span>到</span>
            <span><input type="text" autocomplete="off" name="price2" maxlength="8" class="shop_input "/></span>
        </li>
        <li>
            <input type="submit" class="sea_b" value="搜索"/>
        </li>
    </ul>
</form>
</div>";s:8:"dateline";s:10:"1408416468";s:3:"ttl";s:1:"0";}