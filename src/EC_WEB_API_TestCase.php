<?php
$data  = "mall_cert=D683FABE4C35BDA34E98C8081A683ADB\n";
$data .= '{"system_id":"CNEC","shop_id":"75","order_bn":"2015080414268799","member_id":"1023","order_country":"JP","ship_type":"1","passport_no":"2324242525","passport_name01":"Li","passport_name02":"Baoji","ship_code":"10000101","ship_states":"\u5317\u6d77\u9053","flight_no":"C11109","ship_city":"","ship_addr":"","deliv_fee":"6.000","payment_total":"1109.000","bill_zip":"","bill_tel":"","order_sex":"0","order_birth":"19770714","ship_tel":"44556677","ship_mobile":"13355667788","flight_date":"20150724","flight_time":"0210","deliv_airport":"\u65ed\u5ddd\u673a\u573a","order_date":"20150723","item":[{"item_bn":"SHOP001-ITEM001","sku_bn":"SHOP001-SKU001","item_name":"Diamant Ring Verlobung Brillantring 585 Wei\u00dfgold Damenring Gelbgold GOLD","item_price":"1103.000","item_nums":"1","item_weight":"1"}]}';

//echo('<pre>');print_r($data);exit();
	// Header
	$header = array(
		"Content-Type: application/json; charset=utf-8",
		"Content-Length: ".strlen($data),
		"Pragma: no-cache",
		"Cache-Control: no-cache"
	);
	 
	//SSL Context
	$contextOptions = array(
		'http' => array(
			"method"  => "POST",
			"header"  => implode("\r\n", $header),
			"content" => $data
		)
	);
	$sslContext = stream_context_create($contextOptions);
	 
	$url = "https://ec.yijapan.co.jp/bos/webapi.json";
	 
	$ret = file_get_contents($url, false, $sslContext);
	 
	echo $ret;