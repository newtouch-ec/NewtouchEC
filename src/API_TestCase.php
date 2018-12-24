<?php
//接口请求demo


$header = "Content-type: text/xml";//定义content-type为xml

$url = 'http://yifuda.test.bizsov.com/index.php/api';//测试地址   

//以下测试订单搜索
// $post_data = array(
//     'method' => 'b2c.order.search',//接口方法
//     'start_time'=>'2014-01-12',
// 	'end_time'=>'2015-10-12',
// 	'page_no'=>'1',
// 	'page_size'=>'20',
// 	'store_cert'=>'90EB4F3559FB5270CB20C614C26F06A1'//store_cert 去后台店铺列表 找到每个店铺的“店铺识别码”字段。 
// );

//以下是订单详情
// $post_data = array(
//    'method' => 'b2c.order.detail',//接口方法
//	'tid'=>'2015080318243011',
//	'store_cert'=>'90EB4F3559FB5270CB20C614C26F06A1'
// );//订单详情

//以下是更新库存
 $post_data = array(
    'method' => 'b2c.update_store.updateStore',//接口方法
//    'list_quantity'=>'[{"bn":"G552F66A81D6E0","quantity":"2"},{"bn":"A10","quantity":"3"}]',
    'list_quantity'=>'[{"bn":"P53E6F69341046","quantity":"996"}]',
	'store_cert'=>'90EB4F3559FB5270CB20C614C26F06A1'
);//订单详情

$sign = gen_sign($post_data);
$post_data['sign'] = $sign;
//print_r($sign);
//初始化一个cURL会话
$ch = curl_init();

//curl将会获取url站点的内容,设置URL和相应的选项
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// 我们在POST数据哦！
curl_setopt($ch, CURLOPT_POST, 1);

// 把post的变量加上
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch);
echo "<pre>";print_r(json_decode($output,true));exit;

//调试使用
if ($output === FALSE) {
    echo "cURL Error: " . curl_error($ch);
}

//关闭cURL资源，并且释放系统资源
curl_close($ch);

//数据封装
function assemble($params){
    if(!is_array($params))  return null;
    ksort($params, SORT_STRING);
    $sign = '';
    foreach($params AS $key=>$val){
        if(is_null($val))   continue;
        if(is_bool($val))   $val = ($val) ? 1 : 0;
        $sign .= $key . (is_array($val) ? assemble($val) : $val);
    }
    return $sign;
}//End Function

//生成接口验签
function gen_sign($params){
    return strtoupper(md5(strtoupper(md5(assemble($params)))));
}