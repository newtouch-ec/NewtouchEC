<?php
//获取日元对人民币汇率
//返回值 0：异常
//　　 非0：汇率值
// add by Seven for BBC150519001-汇率抓取脚本PHP
function GetRate(){
	$url = "http://www.xe.com/ucc/convert.cgi?Amount=1&From=JPY&To=CNY";
	$content = file_get_contents($url);
	$regex = "/1&nbsp;JPY&nbsp;=&nbsp;(.+?)&nbsp;CNY/"; //正则表达式.
	if(preg_match_all($regex, $content, $matches)) {
		return $matches[1][0];
	}
	else{
		return '0';
	}
}
?>