<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */

/**
 * unionpay担保交易支付网关（银联）
 * @auther shopex ecstore dev dev@shopex.cn
 * @version 0.1
 * @package ectools.lib.payment.plugin
 */
final class cellphone_payment_plugin_appunionpay extends ectools_payment_app implements ectools_interface_payment_app {

	/**
	 * @var string 支付方式名称
	 */
    public $name = '银联支付-客户端版';
    /**
     * @var string 支付方式接口名称
     */
    public $app_name = '银联支付接口-客户端版';
     /**
     * @var string 支付方式key
     */
    public $app_key = 'appunionpay';
	/**
	 * @var string 中心化统一的key
	 */
	public $app_rpc_key = 'appunionpay';
	/**
	 * @var string 统一显示的名称
	 */
    public $display_name = '银联支付-客户端版';
    /**
	 * @var string 货币名称
	 */
    public $curname = 'JPY';
    /**
	 * @var string 当前支付方式的版本号
	 */
    public $ver = '1.0';
    /**
     * @var string 当前支付方式所支持的平台
     */
    public $platform = 'isapp';

	/**
	 * @var array 扩展参数
	 */
    public $supportCurrency =  array(
        "JPY"=>"JPY",
    );

    /**
	 * 构造方法
	 * @param null
	 * @return boolean
	 */
    public function __construct($app){
		parent::__construct($app);

        //$this->callback_url = $this->app->base_url(true)."/apps/".basename(dirname(__FILE__))."/".basename(__FILE__);
		$this->notify_url = kernel::openapi_url('openapi.ectools_payment/parse/' . $this->app->app_id . '/ectools_payment_plugin_unionpay', 'callback');
		if (preg_match("/^(http):\/\/?([^\/]+)/i", $this->notify_url, $matches))
		{
			$this->notify_url = str_replace('http://','',$this->notify_url);
			$this->notify_url = preg_replace("|/+|","/", $this->notify_url);
			$this->notify_url = "http://" . $this->notify_url;
		}
		else
		{
			$this->notify_url = str_replace('https://','',$this->notify_url);
			$this->notify_url = preg_replace("|/+|","/", $this->notify_url);
			$this->notify_url = "https://" . $this->notify_url;
		}
		$this->callback_url = kernel::openapi_url('openapi.ectools_payment/parse/' . $this->app->app_id . '/ectools_payment_plugin_unionpay', 'callback');
		if (preg_match("/^(http):\/\/?([^\/]+)/i", $this->callback_url, $matches))
		{
			$this->callback_url = str_replace('http://','',$this->callback_url);
			$this->callback_url = preg_replace("|/+|","/", $this->callback_url);
			$this->callback_url = "http://" . $this->callback_url;
		}
		else
		{
			$this->callback_url = str_replace('https://','',$this->callback_url);
			$this->callback_url = preg_replace("|/+|","/", $this->callback_url);
			$this->callback_url = "https://" . $this->callback_url;
		}
        //$this->submit_url = 'https://www.alipay.com/cooperate/gateway.do?_input_charset=utf-8';
        //ajx  按照相应要求请求接口网关改为一下地址
        
        //add by libaoji
        $mer_id = $this->getConf('mer_id', __CLASS__);
        $mer_id = $mer_id;
       	//add end

        //$this->submit_url = "https://3g.veritrans.co.jp:443/".$mer_id."/";
        //$this->submit_url = "AuthorizeExec.php";
        //$this->submit_url = $this->app->base_url(false)."app/ectools/lib/payment/".basename(dirname(__FILE__))."/"."AuthorizeExec.php";
        $this->submit_url = app::get('ectools')->res_url."/../../../custom/ectools/lib/payment/plugin/AuthorizeExec.php";
        
        
        $this->submit_method = 'POST';
        $this->submit_charset = 'utf-8';
    }

    /**
     * 后台支付方式列表关于此支付方式的简介
     * @param null
     * @return string 简介内容
     */
    public function admin_intro(){
        $regIp = isset($_SERVER['SERVER_ADDR'])?$_SERVER['SERVER_ADDR']:$_SERVER['HTTP_HOST'];
        //return '<img src="' . $this->app->res_url . '/payments/images/MOLPay.png">';
        return '<img src="' . $this->app->res_url . '/payments/images/upop.gif">';
        //return "<img src='http://online.unionpay.com/static/open/images/open_logo_index_top.gif' alt='MOLPay Online Payment Gateway' title='MOLPay Online Payment Gateway' border=0>";
    }

     /**
     * 后台配置参数设置
     * @param null
     * @return array 配置参数列表
     */
    public function setting(){
        return array(
                    'pay_name'=>array(
                        'title'=>app::get('ectools')->_('支付方式名称'),
                        'type'=>'string',
						'validate_type' => 'required',
                    ),
                    'mer_id'=>array(
                        'title'=>app::get('ectools')->_('合作者身份(parterID)'),
                        'type'=>'string',
						'validate_type' => 'required',
                    ),
                    'mer_key'=>array(
                        'title'=>app::get('ectools')->_('交易安全校验码(key)'),
                        'type'=>'string',
                    ),
                    'order_by' =>array(						'validate_type' => 'required',

                        'title'=>app::get('ectools')->_('排序'),
                        'type'=>'string',
                        'label'=>app::get('ectools')->_('整数值越小,显示越靠前,默认值为1'),
                    ),
                    'support_cur'=>array(
                        'title'=>app::get('ectools')->_('支持币种'),
                        'type'=>'select',
						'options'=>$this->arrayCurrencyOptions,
                    ),
                    'real_method'=>array(
                        'title'=>app::get('ectools')->_('选择接口类型'),
                        'type'=>'select',
                        'options'=>array('0'=>app::get('ectools')->_('使用标准双接口'),'2'=>app::get('ectools')->_('使用担保交易接口'),'1'=>app::get('ectools')->_('使用即时到帐交易接口')),
                        'tip'=>'消费者如用担保交易充值，需在支付宝后台进行确认操作，充值款才可到账',
                    ),
                    'pay_fee'=>array(
                        'title'=>app::get('ectools')->_('交易费率'),
                        'type'=>'pecentage',
						'validate_type' => 'number',
                    ),
                    'pay_brief'=>array(
                        'title'=>app::get('ectools')->_('支付方式简介'),
                         'type'=>'textarea',
                    ),
                    'pay_desc'=>array(
                        'title'=>app::get('ectools')->_('描述'),
                        'type'=>'html',
						'includeBase' => true,
                    ),
					'pay_type'=>array(
						 'title'=>app::get('ectools')->_('支付类型(是否在线支付)'),
						 'type'=>'radio',
		                 'options'=>array('false'=>app::get('ectools')->_('否'),'true'=>app::get('ectools')->_('是')),
		                 'name' => 'pay_type',
					),
					'status'=>array(
						'title'=>app::get('ectools')->_('是否开启此支付方式'),
						'type'=>'radio',
						'options'=>array('false'=>app::get('ectools')->_('否'),'true'=>app::get('ectools')->_('是')),
						'name' => 'status',
					),
                );
    }
	/**
     * 前台支付方式列表关于此支付方式的简介
     * @param null
     * @return string 简介内容
     */
    public function intro(){
        return app::get('ectools')->_('支付宝（中国）网络技术有限公司是国内领先的独立第三方支付平台，由阿里巴巴集团创办。支付宝致力于为中国电子商务提供“简单、安全、快速”的在线支付解决方案。').'
<a target="_blank" href="https://www.onlinepayment.com.my/MOLPay/">'.app::get('ectools')->_('如何使用支付宝支付？').'</a>';
    }

	/**
     * 提交支付信息的接口
     * @param array 提交信息的数组
     * @return mixed false or null
     */
    public function dopay($payment)
	{
		/*
		//echo('<pre>');print_r($payment);exit();
        $mer_id = $this->getConf('mer_id', __CLASS__);
        $mer_id = $mer_id;
        $mer_key = $this->getConf('mer_key', __CLASS__);
        $mer_key = $mer_key;
        //$subject = $payment['account'].$payment['payment_id'];
        //$subject = str_replace("'",'`',trim($subject));
        //$subject = str_replace('"','`',$subject);
        //$orderDetail = str_replace("'",'`',trim($orderDetail));
        //$orderDetail = str_replace('"','`',$orderDetail);

        //$virtual_method = $this->getConf('virtual_method', __CLASS__);#$config['virtual_method'];
        //$real_method = $this->getConf('real_method', __CLASS__);#$config['real_method'];

		//金额
        $this->add_field('amount',number_format($payment['cur_money'],2,".",""));
		//支付ID
        $this->add_field('orderid',$payment['payment_id']);
        //收货人
        $this->add_field('bill_name',$payment['member_name']);
        //bill_email
        $this->add_field('bill_email',$payment['member_email']);
        //bill_mobile
        $this->add_field('bill_mobile',$payment['member_mobile']);
        //bill_desc
        $this->add_field('bill_desc','You are buying from '.$payment['shopName']);
        //vcode
        $this->add_field('vcode',md5(number_format($payment['cur_money'],2,".","").$mer_id.$payment['payment_id'].$mer_key));
        //returnurl
        $this->add_field('returnurl',$this->callback_url);
        //currency
        $this->add_field('currency',$payment['currency']);
        */
 // echo('<pre>');print_r($mer_id.' '.$mer_key.' '.$subject.' '.$orderDetail);exit();

		//支付ID
        $this->add_field('orderId',$payment['order_id']);
		//金额
        $this->add_field('amount',$payment['cur_money']);
        //returnurl
        $this->add_field('termUrl',$this->callback_url);
        //customerIp
        $this->add_field('customerIp',$this->getRealIpAddr());
        //与信方法
        $this->add_field('withCapture','true');//与信売上（与信と同時に売上処理も行います）。
       
        
        /*
        //收货人
        $this->add_field('bill_name',$payment['member_name']);
        //bill_email
        $this->add_field('bill_email',$payment['member_email']);
        //bill_mobile
        $this->add_field('bill_mobile',$payment['member_mobile']);
        //bill_desc
        $this->add_field('bill_desc','You are buying from '.$payment['shopName']);
        //vcode
        $this->add_field('vcode',md5(number_format($payment['cur_money'],2,".","").$mer_id.$payment['order_id'].$mer_key));
        //currency
        $this->add_field('currency',$payment['currency']);
		*/
//echo('<pre>');print_r($this->gen_form());exit();

        if($this->is_fields_valiad())
		{
			// Generate html and send payment.
            echo $this->get_html();exit;
        }
		else
		{
            return false;
        }
    }

    /**
	 * 校验方法
	 * @param null
	 * @return boolean
	 */
    public function is_fields_valiad(){
        return true;
    }

	/**
	 * 支付后返回后处理的事件的动作
	 * @params array - 所有返回的参数，包括POST和GET
	 * @return null
	 */
    public function callback(&$recv)
	{
		//echo('<pre>');print_r(&$recv);exit();
		/*
        #键名与pay_setting中设置的一致
        $mer_id = $this->getConf('mer_id', __CLASS__);
        $mer_id = $mer_id == '' ? 'mecvalley' : $mer_id;
        $mer_key = $this->getConf('mer_key', __CLASS__);
        $mer_key = $mer_key=='' ? '80a13feb38acf057fef470f29a40a403' : $mer_key;
        if($this->is_return_vaild($recv,$mer_key)){
            $ret['payment_id'] = $recv['orderid'];
			$ret['account'] = $mer_id;
			$ret['bank'] = $recv['channel'];
			$ret['pay_account'] = app::get('ectools')->_('付款帐号');
			$ret['currency'] = $recv['currency'];
			$ret['money'] = $recv['amount'];
			$ret['paycost'] = '0.00';
			$ret['cur_money'] = $recv['amount'];
            $ret['trade_no'] = $recv['tranID'];
			$ret['t_payed'] = strtotime($recv['paydate']) ? strtotime($recv['paydate']) : time();
			$ret['pay_app_id'] = "unionpay";
			$ret['pay_type'] = 'online';
			$ret['memo'] = '';

			if($recv['status'] == '00')
			{
				$ret['status'] = 'succ';
			}elseif($recv['status'] == '11')
			{
				$ret['status'] =  'failed';
			}elseif($recv['status'] == '22')
			{
				$ret['status'] =  'pending.';
			}
            

        }else{
            $message = 'Invalid Sign';
            $ret['status'] = 'invalid';
        }
		*/
		if($recv['serviceType'] !='upop')
		{
			$ret['status'] =  'failed';
		}
		elseif($recv['mstatus'] =='failure')
		{
			$ret['status'] =  'failed';
		}
		elseif($recv['mstatus'] =='pending')
		{
			$ret['status'] =  'pending';
		}
		else{
			$ret['status'] = 'succ';
			//根据OrderId获取payment_id
			$obj_bills = app::get('ectools')->model('order_bills');
        	$payment = $obj_bills->getRow('bill_id',array('rel_id'=>$recv['orderId']));
            $ret['payment_id'] = $payment['bill_id'];
			$ret['trade_no'] = $recv['custTxn'];
			$ret['money'] = $recv['capturedAmount'];
			$ret['cur_money'] = $recv['capturedAmount'];
            $ret['pay_app_id'] = "unionpay";
			$ret['pay_type'] = 'online';
			$ret['pay_account'] = app::get('ectools')->_('付款帐号');
			$ret['paycost'] = '0.00';
	        $ret['t_payed'] = strtotime($recv['txnDatetimeJp']) ? strtotime($recv['txnDatetimeJp']) : time();
			$ret['currency'] = 'JPY';
			$ret['memo'] = '';
		}

		return $ret;
    }

	/**
	 * 生成支付表单 - 自动提交
	 * @params null
	 * @return null
	 */
    public function gen_form()
	{
      $tmp_form="<img src='" . $this->app->res_url . "/payments/images/upop.gif' alt='UnionPay Online Payment Gateway' title=''UnionPay Online Payment Gateway' border=0>";
      $tmp_form.="<form name='applyForm' method='".$this->submit_method."' action='" . $this->submit_url . "' target='_blank'>";
	  // 生成提交的hidden属性
      foreach($this->fields as $key => $val)
	  {
            $tmp_form.="<input type='hidden' name='".$key."' value='".$val."'>";
      }

      $tmp_form.="</form>";

      return $tmp_form;
    }


    /**
     * 生成签名
     * @param mixed $form 包含签名数据的数组
     * @param mixed $key 签名用到的私钥
     * @access private
     * @return string
     */
    public function _get_mac($key){
        ksort($this->fields);
        reset($this->fields);
        $mac= "";
        foreach($this->fields as $k=>$v){
            $mac .= "&{$k}={$v}";
        }
        $mac = substr($mac,1);
        $mac = md5($mac.$key);  //验证信息
        return $mac;
    }

    /**
     * 检验返回数据合法性
     * @param mixed $form 包含签名数据的数组
     * @param mixed $key 签名用到的私钥
     * @access private
     * @return boolean
     */
    public function is_return_vaild($recv,$key)
	{
		/*
        ksort($recv);
        foreach($recv as $k=>$v){
            if($k!='skey'&&$k!='skey'){
                $signstr .= "&$k=$v";
            }
        }

        $signstr = ltrim($signstr,"&");
        $signstr = $signstr.$key;

        if($recv['skey']==md5($signstr)){
            return true;
        }
        */
        $key0 = md5( $recv['tranID'].$recv['orderid'].$recv['status'].$recv['domain'].$recv['amount'].$recv['currency']);
        $key1 = md5( $recv['paydate'].$recv['domain'].$key0.$recv['appcode'].$key );
        if( $recv['skey'] == $key1 ) {
            return true;
        }
        #记录返回失败的情况
        logger::error(app::get('ectools')->_('支付单号：') . $recv['tranID'] . app::get('ectools')->_('签名验证不通过，请确认！')."\n");
        logger::error(app::get('ectools')->_('本地产生的加密串：') . $key1);
        logger::error(app::get('ectools')->_('UnionPay传递打过来的签名串：') . $recv['skey']);
		$str_xml .= "<unionpayform>";
        foreach ($recv as $key=>$value)
        {
            $str_xml .= "<$key>" . $value . "</$key>";
        }
        $str_xml .= "</unionform>";

        return false;
    }

	function getRealIpAddr()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
		{
			$ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
		{
			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$ip=$_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}
}
