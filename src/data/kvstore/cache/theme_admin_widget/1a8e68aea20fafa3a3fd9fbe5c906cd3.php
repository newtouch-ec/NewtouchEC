<?php exit(); ?>a:3:{s:5:"value";s:1040:"<div class="sj_info mb_10">
	<div class="info_title"><?php echo ((isset($this->_vars['setting']['title']) && ''!==$this->_vars['setting']['title'])?$this->_vars['setting']['title']:'搜索店内商品'); ?></div>
  <form action='<?php echo kernel::router()->gen_url(array('app' => business,'ctl' => site_shop,'act' => gallery,'arg0' => $this->_vars['data']['store_id'])); ?>' enctype="multipart/form-data" encoding="multipart/form-data" method="get" name="return_search">
	<div class="info_details">
	<div class="seach_line">
  <input type="hidden" value="all" name="searchRange">
	<span class="keys">商品名：</span><input name="keyword" type="text" class="width_110" maxlength="8"/>
	</div>
	<div class="seach_line">
	<span class="keys">价格：</span><input name="price1" type="text" class="width_42" maxlength="8"/><span>到</span><input name="price2" type="text" class="width_42" maxlength="8"/>
	</div>
	<div class="seach_line"><input type="submit" value="搜索" class="search_anniu"></div>
	</div>
  </form>
</div>";s:8:"dateline";s:10:"1409549919";s:3:"ttl";s:1:"0";}