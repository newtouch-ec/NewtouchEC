<?php exit(); ?>a:3:{s:5:"value";s:944:"<?php if( $this->_vars['data']['type'] == 'qq' ){ ?>
<div class="sj_info mb_10">
	<div class="info_title"><?php echo ((isset($this->_vars['setting']['title']) && ''!==$this->_vars['setting']['title'])?$this->_vars['setting']['title']:'店内客服'); ?></div>
    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_vars['data']['number']; ?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo $this->_vars['data']['number']; ?>:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
</div>
<?php }elseif( $this->_vars['data']['type'] == 'ww' ){ ?> 
    <a target="_blank" href="http://amos.im.alisoft.com/msg.aw?v=2&uid=<?php echo $this->_vars['data']['number']; ?>&site=cntaobao&s=1&charset=utf-8" ><img border="0" src="http://amos.im.alisoft.com/online.aw?v=2&uid=<?php echo $this->_vars['data']['number']; ?>&site=cntaobao&s=1&charset=utf-8"/></a>
<?php } ?>
";s:8:"dateline";s:10:"1409549919";s:3:"ttl";s:1:"0";}