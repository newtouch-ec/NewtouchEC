<?php
class b2c_orderinfosend{
	//订单付款后调用WMS接口 通知发货
	public function order_information_send(){
        $objorders = app::get('business')->model('orders');
        //$orderinfo = $objorders->getList('*', array('pay_status'=>'1','ship_status'=>'0','status'=>'active'));
		//订单
		$sSql = "SELECT
					 a.*,FROM_UNIXTIME(a.hope_service_date,'%Y%m%d') as new_hope_service_date,b.firstname,b.lastname,b.passport,b.area,b.zip,b.tel,b.sex,
					 b.b_year,b.b_month,b.b_day,FROM_UNIXTIME(a.departure_time,'%Y%m%d%H%i') AS new_departure_time,
					 FROM_UNIXTIME(a.createtime,'%Y%m%d') AS new_createtime
				 FROM
					 sdb_b2c_orders AS a
				 LEFT JOIN sdb_b2c_members AS b ON a.member_id = b.member_id
				 WHERE
				     a.pay_status='1' AND a.ship_status='0' AND a.status='active' AND (a.bos_api_status='' OR a.bos_api_status is NULL)
			     ORDER BY createtime desc";

		$orderinfo = $objorders->db->select($sSql);
		
		//echo('<pre>');print_r($orderinfo);exit();
		if($orderinfo)
		{
			//已付款 未发货订单信息
			foreach($orderinfo as $key=>$val)
			{
				// EC Mall Cert
				$data  = "mall_cert=D683FABE4C35BDA34E98C8081A683ADB\n";

				$objdata = array();
				//○：必須 半角	8桁	システムＩＤ	”CNEC”固定	
				$objdata['system_id'] = 'CNEC';
				//○：必須 半角英数字	8桁	店舗ID	越境ECモールで定義した店舗ID	
				$objdata['shop_id'] = $val['store_id'];
				//○：必須 半角文字	14桁	受注番号
				$objdata['order_bn'] = $val['order_id'];
				//○：必須 半角英数字	20桁	会員ID  会員制サイトの場合の会員ID
				$objdata['member_id'] = $val['member_id'];
				// 半角英数字	256桁  メールアドレス ＠．－＿は入力可
				//$objdata['ship_email'] = $val['ship_email'];
				//○：必須 半角英数字	2桁  国籍区分  ISO 3166-1 国名コード 中国:CN 日本:JP
				$objdata['order_country'] = 'JP';
				//○：必須 半角数字	1桁  配送区分  0：日本国内（ホテル）、1：日本国内（空港）、2：中国
				//                       database--2：日本国内（ホテル）、3：日本国内（空港）、1：中国
				if($val['region_type'] =='1'){
					$objdata['ship_type'] = '2';
					//○：必須 半角英数字	2桁  国籍区分  ISO 3166-1 国名コード 中国:CN 日本:JP
					$objdata['order_country'] = 'CN';					
				}else if($val['region_type'] =='2'){
					$objdata['ship_type'] = '0';
				}else{
					$objdata['ship_type'] = '1';
				}
				//○：必須 半角英数字	20桁  旅券番号
				$objdata['passport_no'] = $val['passport'];
				//○：必須 半角英数字	40桁  旅券英字氏名（姓）
				$objdata['passport_name01'] = $val['firstname'];
				//○：必須 半角英数字	40桁  旅券英字氏名（名）
				$objdata['passport_name02'] = $val['lastname'];
				//○：必須 半角数字のみ	10桁  配送先郵便番号
				//$objdata['ship_zip'] = $val['ship_zip'];
				
				$ship_area = explode(':', $val['ship_area']);
				//ホテル、空港の受取先コード。－（ハイフン）は入力可
				//No.21 配送区分が0：日本国内（ホテル）、1:日本国内（空港）の場合は必須
				$memberAddrs = app::get('b2c')->model('member_addrs');
				$shipCodeRow = $memberAddrs->getRow('area',array('addr_id'=>$ship_area[2]));
				$ship_code = explode(':', $shipCodeRow['area']);
				$objdata['ship_code'] = $ship_code[2];
				
				$ship_area = explode('/', $ship_area[1]);
				//○：必須 全角半角	10桁  配送先 省-都道府県  コードではなく名称を格納
				$objdata['ship_states'] = $ship_area[0];
				//○：必須 全角半角	256桁  配送先住所
				if($objdata['ship_type']=='1'){
					//航班号
					$objdata['flight_no'] = $val['flight_no'];
					$objdata['ship_city'] = '';
					// 全角半角	256桁  配送先住所（肩書）
					$objdata['ship_addr'] = '';
				}else{
					$objdata['ship_city'] = $ship_area[1];
					//No.21 配送区分が0：日本国内（ホテル）、1:日本国内（空港）以外の場合は必須
					$objdata['ship_zip'] = $val['ship_zip'];
					// 全角半角	256桁  配送先住所（肩書）
					$objdata['ship_addr'] = $val['ship_addr'];
				}

				//○：必須 数値	9桁  配送料（合計）
				$objdata['deliv_fee'] = $val['cost_freight'];
				//○：必須 数値	9桁  受注金額（合計）
				$objdata['payment_total'] = $val['final_amount'];
				// 半角数字のみ	10桁  請求先郵便番号  3桁以上の指定で有効
				$objdata['bill_zip'] = $val['zip'];
				// 半角数字	20桁  請求先電話番号 －（ハイフン）は入力可
				$objdata['bill_tel'] = $val['tel'];
				// 半角英数字	1桁  性別コード  0：男性、1：女性、2：その他
				if($val['sex']=='0'){
					$objdata['order_sex'] = '1';
				}else if($val['sex']=='1'){
					$objdata['order_sex'] = '0';
				}else{
					$objdata['order_sex'] = '2';
				}
				// YYYYMMDD	8桁  生年月日
				if($val['b_year'] !='0'){
					$objdata['order_birth'] = $val['b_year'].sprintf("%02d", $val['b_month']).sprintf("%02d", $val['b_day']);
				}
				
				//△：条件必須 半角数字	20桁  配送先電話番号  －（ハイフン）は入力可,No.35 ship_mobile未入力の場合必須
				$objdata['ship_tel'] = $val['ship_tel'];
				//△：条件必須 半角数字	20桁  配送先携帯電話番号  －（ハイフン）は入力可,No.34 ship_tel未入力の場合必須
				$objdata['ship_mobile'] = $val['ship_mobile'];
				//$objdata['ship_type'] = '1';
				if($objdata['ship_type']=='0'){
					//△：条件必須 YYYYMMDD	8桁  配送希望年月日 No.21 配送区分が0：日本国内（ホテル）の場合は必須
					$objdata['req_deliv_ymd'] = $val['new_hope_service_date'];	
					//△：条件必須 全角半角	256桁  配送先ホテル名   No.21 配送区分が0：日本国内（ホテル）の場合は必須
					$objdata['deliv_hotel'] = $ship_area[2];					
				}else if($objdata['ship_type']=='1'){
					//△：条件必須 YYYYMMDD	8桁  搭乗日   No.21 配送区分が1：日本国内（空港）の場合は必須
					$objdata['flight_date'] = substr($val['new_departure_time'],0,8);
					//△：条件必須 HHNN	4桁  出発時刻   No.21 配送区分が1：日本国内（空港）の場合は必須
					$objdata['flight_time'] = substr($val['new_departure_time'],8,11);
					//△：条件必須 全角半角	256桁  配送先空港名   No.21 配送区分が1：日本国内（空港）の場合は必須
					$objdata['deliv_airport'] = $ship_area[1];	
				}
				//受注年月日
				$objdata['order_date'] = $val['new_createtime'];		
//echo('<pre>');print_r($objdata);exit();
				//订单item信息
				$objorder_items = app::get('b2c')->model('order_items');
				$order_item_info = $objorder_items->getList('*', array('order_id'=>$val['order_id']));

				
				if($order_item_info)
				{
					foreach($order_item_info as $item_key=>$item_val)
					{
                        $objgoods = app::get('b2c')->model('goods');
				        $objgoods_info = $objgoods->getRow('bn', array('goods_id'=>$item_val['goods_id']));
                        
						$objitem = array();
						//○：必須 半角文字	50桁	商品コード		
						$objitem['item_bn'] = $objgoods_info['bn'];
						//○：必須 半角文字	50桁	SKUコード		
						$objitem['sku_bn'] = $item_val['bn'];
						//○：必須 全角半角文字	256桁 商品名	
						$objitem['item_name'] = $item_val['name'];
						//○：必須 数値	9桁 商品単価	
						$objitem['item_price'] = $item_val['price'];
						//○：必須 数値	8桁 受注数量	
						$objitem['item_nums'] = $item_val['nums'];
						// 数値	9桁 商品重量	
						$objitem['item_weight'] = $item_val['weight'];
						
						$objdata['item'][$item_key] = $objitem;
					}
						
				}

				
				$data = $data.json_encode($objdata);
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
                
				$arrRet = json_decode($ret,true);
                $s_bos_api_status = $arrRet['rsp'];
                $s_bos_api_msg = $arrRet['res'];
                $s_order_id = $val['order_id'];
                $sSql = "UPDATE sdb_b2c_orders SET bos_api_status = '".$s_bos_api_status."',bos_api_msg='".$s_bos_api_msg."' WHERE order_id ='".$s_order_id."'";
                
				$objorders->db->exec($sSql);
			}
		}
	}
}

