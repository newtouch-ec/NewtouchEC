<?php
class b2c_orderinfosend{
	//������������WMS�ӿ� ֪ͨ����
	public function order_information_send(){
        $objorders = app::get('business')->model('orders');
        //$orderinfo = $objorders->getList('*', array('pay_status'=>'1','ship_status'=>'0','status'=>'active'));
		//����
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
			//�Ѹ��� δ����������Ϣ
			foreach($orderinfo as $key=>$val)
			{
				// EC Mall Cert
				$data  = "mall_cert=D683FABE4C35BDA34E98C8081A683ADB\n";

				$objdata = array();
				//�𣺱�� ���	8��	�����ƥ�ɣ�	��CNEC���̶�	
				$objdata['system_id'] = 'CNEC';
				//�𣺱�� ���Ӣ����	8��	���nID	Խ��EC��`��Ƕ��x�������nID	
				$objdata['shop_id'] = $val['store_id'];
				//�𣺱�� �������	14��	��ע����
				$objdata['order_bn'] = $val['order_id'];
				//�𣺱�� ���Ӣ����	20��	��TID  ��T�ƥ����ȤΈ��Ϥλ�TID
				$objdata['member_id'] = $val['member_id'];
				// ���Ӣ����	256��  ��`�륢�ɥ쥹 �������ߤ�������
				//$objdata['ship_email'] = $val['ship_email'];
				//�𣺱�� ���Ӣ����	2��  ��������  ISO 3166-1 �������`�� �й�:CN �ձ�:JP
				$objdata['order_country'] = 'JP';
				//�𣺱�� �������	1��  ��������  0���ձ����ڣ��ۥƥ룩��1���ձ����ڣ��ոۣ���2���й�
				//                       database--2���ձ����ڣ��ۥƥ룩��3���ձ����ڣ��ոۣ���1���й�
				if($val['region_type'] =='1'){
					$objdata['ship_type'] = '2';
					//�𣺱�� ���Ӣ����	2��  ��������  ISO 3166-1 �������`�� �й�:CN �ձ�:JP
					$objdata['order_country'] = 'CN';					
				}else if($val['region_type'] =='2'){
					$objdata['ship_type'] = '0';
				}else{
					$objdata['ship_type'] = '1';
				}
				//�𣺱�� ���Ӣ����	20��  ��ȯ����
				$objdata['passport_no'] = $val['passport'];
				//�𣺱�� ���Ӣ����	40��  ��ȯӢ���������գ�
				$objdata['passport_name01'] = $val['firstname'];
				//�𣺱�� ���Ӣ����	40��  ��ȯӢ������������
				$objdata['passport_name02'] = $val['lastname'];
				//�𣺱�� ������֤Τ�	10��  �������]�㷬��
				//$objdata['ship_zip'] = $val['ship_zip'];
				
				$ship_area = explode(':', $val['ship_area']);
				//�ۥƥ롢�ոۤ���ȡ�ȥ��`�ɡ������ϥ��ե󣩤�������
				//No.21 �������֤�0���ձ����ڣ��ۥƥ룩��1:�ձ����ڣ��ոۣ��Έ��Ϥϱ��
				$memberAddrs = app::get('b2c')->model('member_addrs');
				$shipCodeRow = $memberAddrs->getRow('area',array('addr_id'=>$ship_area[2]));
				$ship_code = explode(':', $shipCodeRow['area']);
				$objdata['ship_code'] = $ship_code[2];
				
				$ship_area = explode('/', $ship_area[1]);
				//�𣺱�� ȫ�ǰ��	10��  ������ ʡ-�������h  ���`�ɤǤϤʤ����Ƥ��{
				$objdata['ship_states'] = $ship_area[0];
				//�𣺱�� ȫ�ǰ��	256��  ������ס��
				if($objdata['ship_type']=='1'){
					//�����
					$objdata['flight_no'] = $val['flight_no'];
					$objdata['ship_city'] = '';
					// ȫ�ǰ��	256��  ������ס���������
					$objdata['ship_addr'] = '';
				}else{
					$objdata['ship_city'] = $ship_area[1];
					//No.21 �������֤�0���ձ����ڣ��ۥƥ룩��1:�ձ����ڣ��ոۣ�����Έ��Ϥϱ��
					$objdata['ship_zip'] = $val['ship_zip'];
					// ȫ�ǰ��	256��  ������ס���������
					$objdata['ship_addr'] = $val['ship_addr'];
				}

				//�𣺱�� ����	9��  �����ϣ���Ӌ��
				$objdata['deliv_fee'] = $val['cost_freight'];
				//�𣺱�� ����	9��  ��ע���~����Ӌ��
				$objdata['payment_total'] = $val['final_amount'];
				// ������֤Τ�	10��  Ո�����]�㷬��  3�����Ϥ�ָ�����Є�
				$objdata['bill_zip'] = $val['zip'];
				// �������	20��  Ո�����Ԓ���� �����ϥ��ե󣩤�������
				$objdata['bill_tel'] = $val['tel'];
				// ���Ӣ����	1��  �Ԅe���`��  0�����ԡ�1��Ů�ԡ�2��������
				if($val['sex']=='0'){
					$objdata['order_sex'] = '1';
				}else if($val['sex']=='1'){
					$objdata['order_sex'] = '0';
				}else{
					$objdata['order_sex'] = '2';
				}
				// YYYYMMDD	8��  ��������
				if($val['b_year'] !='0'){
					$objdata['order_birth'] = $val['b_year'].sprintf("%02d", $val['b_month']).sprintf("%02d", $val['b_day']);
				}
				
				//����������� �������	20��  �������Ԓ����  �����ϥ��ե󣩤�������,No.35 ship_mobileδ�����Έ��ϱ��
				$objdata['ship_tel'] = $val['ship_tel'];
				//����������� �������	20��  ������Я���Ԓ����  �����ϥ��ե󣩤�������,No.34 ship_telδ�����Έ��ϱ��
				$objdata['ship_mobile'] = $val['ship_mobile'];
				//$objdata['ship_type'] = '1';
				if($objdata['ship_type']=='0'){
					//����������� YYYYMMDD	8��  ����ϣ�������� No.21 �������֤�0���ձ����ڣ��ۥƥ룩�Έ��Ϥϱ��
					$objdata['req_deliv_ymd'] = $val['new_hope_service_date'];	
					//����������� ȫ�ǰ��	256��  �����ȥۥƥ���   No.21 �������֤�0���ձ����ڣ��ۥƥ룩�Έ��Ϥϱ��
					$objdata['deliv_hotel'] = $ship_area[2];					
				}else if($objdata['ship_type']=='1'){
					//����������� YYYYMMDD	8��  ��\��   No.21 �������֤�1���ձ����ڣ��ոۣ��Έ��Ϥϱ��
					$objdata['flight_date'] = substr($val['new_departure_time'],0,8);
					//����������� HHNN	4��  ���k�r��   No.21 �������֤�1���ձ����ڣ��ոۣ��Έ��Ϥϱ��
					$objdata['flight_time'] = substr($val['new_departure_time'],8,11);
					//����������� ȫ�ǰ��	256��  �����ȿո���   No.21 �������֤�1���ձ����ڣ��ոۣ��Έ��Ϥϱ��
					$objdata['deliv_airport'] = $ship_area[1];	
				}
				//��ע������
				$objdata['order_date'] = $val['new_createtime'];		
//echo('<pre>');print_r($objdata);exit();
				//����item��Ϣ
				$objorder_items = app::get('b2c')->model('order_items');
				$order_item_info = $objorder_items->getList('*', array('order_id'=>$val['order_id']));

				
				if($order_item_info)
				{
					foreach($order_item_info as $item_key=>$item_val)
					{
                        $objgoods = app::get('b2c')->model('goods');
				        $objgoods_info = $objgoods->getRow('bn', array('goods_id'=>$item_val['goods_id']));
                        
						$objitem = array();
						//�𣺱�� �������	50��	��Ʒ���`��		
						$objitem['item_bn'] = $objgoods_info['bn'];
						//�𣺱�� �������	50��	SKU���`��		
						$objitem['sku_bn'] = $item_val['bn'];
						//�𣺱�� ȫ�ǰ������	256�� ��Ʒ��	
						$objitem['item_name'] = $item_val['name'];
						//�𣺱�� ����	9�� ��Ʒ�g��	
						$objitem['item_price'] = $item_val['price'];
						//�𣺱�� ����	8�� ��ע����	
						$objitem['item_nums'] = $item_val['nums'];
						// ����	9�� ��Ʒ����	
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

