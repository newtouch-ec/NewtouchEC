<?php
/**
 * 短信接口主类
 * @time 2013-10-24
 * @author  qianlei
**/
class sms_operating{
    var $gwUrl;
    var $serialNumber;
    var $password;
    var $sessionKey;
    var $connectTimeOut;
    var $readTimeOut;
    var $proxyhost;
    var $proxyport;
    var $proxyusername;
    var $proxypassword;
    var $client;

    public function __construct($data){
        set_time_limit(0);
        header("Content-Type: text/html; charset=UTF-8");
        /**
         * 定义程序绝对路径
         */
        define('SCRIPT_ROOT',dirname(__FILE__).'/');
        require_once(SCRIPT_ROOT.'include/Client.php');
        /**
         * 网关地址
         */
        //$this->gwUrl = 'http://sdkhttp.eucp.b2m.cn/sdk/SDKService?wsdl';
        $this->gwUrl = 'http://sdk999ws.eucp.b2m.cn:8080/sdk/SDKService?wsdl';
        //$this->gwUrl = 'http://sdkhttp.eucp.b2m.cn/sdk/SDKService?wsdl';
        //$this->gwUrl = 'http://sdk229ws.eucp.b2m.cn:8080/sdk/SDKService?wsdl';
        // $this->gwUrl = 'http://sdk4report.eucp.b2m.cn:8080/sdk/SDKService?wsdl';

        $data_arr = json_decode($data,true);

        /**
         * 序列号,请通过亿美销售人员获取
         */
        $this->serialNumber = $data_arr['serialNumber'];

        /**
         * 密码,请通过亿美销售人员获取
         */
        $this->password = $data_arr['password'];

        /**
         * 登录后所持有的SESSION KEY，即可通过login方法时创建
         */
        $this->sessionKey = $data_arr['sessionKey'];

        /**
         * 连接超时时间，单位为秒
         */
        $this->connectTimeOut = 2;

        /**
         * 远程信息读取超时时间，单位为秒
         */ 
        $this->readTimeOut = 10;

        /**
         *  $proxyhost      可选，代理服务器地址，默认为 false ,则不使用代理服务器
         *  $proxyport      可选，代理服务器端口，默认为 false
         *  $proxyusername  可选，代理服务器用户名，默认为 false
         *  $proxypassword  可选，代理服务器密码，默认为 false
        **/
        $this->proxyhost = false;
        $this->proxyport = false;
        $this->proxyusername = false;
        $this->proxypassword = false;

        $this->client = new Client(
                $this->gwUrl,
                $this->serialNumber,
                $this->password,
                $this->sessionKey,
                $this->proxyhost,
                $this->proxyport,
                $this->proxyusername,
                $this->proxypassword,
                $this->connectTimeOut,
                $this->readTimeOut
            );

        /**
         * 发送向服务端的编码
        **/
        $this->client->setOutgoingEncoding("UTF-8");
    }

    /**
     *   login();           //激活序列号
     *   updatePassword();  //修改密码
     *   logout();          //注销序列号 
     *   registDetailInfo();//注册企业信息
     *   getEachFee();      //得到单价 
     *   getMO();           //接收短信
     *   getVersion();      //得到版本号   
     *   sendSMS();         //发送短信
     *   getBalance();      //得到余额
     *   chargeUp();        //充值
    **/

    /**
     * 接口调用错误查看 用例
     */
    function chkError(){
        $err = $this->client->getError();
        if ($err){
            /**
             * 调用出错，可能是网络原因，接口版本原因 等非业务上错误的问题导致的错误
             * 可在每个方法调用后查看，用于开发人员调试
             */
            
            echo $err;
        }

    }

    /**
     * 登录 用例
     */
    function login(){
        /**
         * 下面的操作是产生随机6位数 session key
         * 注意: 如果要更换新的session key，则必须要求先成功执行 logout(注销操作)后才能更换
         * 我们建议 sesson key不用常变
         */
        //$sessionKey = $this->client->generateKey();
        //$statusCode = $this->client->login($sessionKey);

        $statusCode = $this->client->login();

        $result = array();
        $result['statusCode'] = $statusCode;
        if ($statusCode!=null && $statusCode === "0"){
            $result['msg'] = "登录成功";
            //登录成功，并且做保存 $sessionKey 的操作，用于以后相关操作的使用
            $result['sessionKey'] = $this->client->getSessionKey();
        }else{
            //登录失败处理
            $result['msg'] = "登录失败";
        }

        return json_encode($result);

    }

    /**
     * 注销登录 用例
     */
    function logout(){
        $statusCode = $this->client->logout();
        return $statusCode;
    }

    /**
     * 获取版本号 用例
     */
    function getVersion(){
        return "版本:". $this->client->getVersion();

    }


    /**
     * 取消短信转发 用例
     */
    function cancelMOForward(){
        $statusCode = $this->client->cancelMOForward();
       return $statusCode;
    }

    /**
     * 短信充值 用例
     */
    function chargeUp($cardId,$cardPass){
        /**
         * $cardId [充值卡卡号]
         * $cardPass [密码]
         * 请通过亿美销售人员获取 [充值卡卡号]长度为20内 [密码]长度为6
         */

        $statusCode = $this->client->chargeUp($cardId,$cardPass);
        return $statusCode;
    }


    /**
     * 查询单条费用 用例
     */
    function getEachFee(){
        $fee = $this->client->getEachFee();
        return "费用:".$fee;
    }


    /**
     * 企业注册 用例
     */
    function registDetailInfo($data){
        $eName = $data['eName'];
        $linkMan = $data['linkMan'];
        $phoneNum = $data['phoneNum'];
        $mobile = $data['mobile'];
        $email = $data['email'];
        $fax = $data['fax'];
        $address = $data['address'];
        $postcode = $data['postcode'];

        /**
         * 企业注册  [邮政编码]长度为6 其它参数长度为20以内
         * 
         * @param string $eName     企业名称
         * @param string $linkMan   联系人姓名
         * @param string $phoneNum  联系电话
         * @param string $mobile    联系手机号码
         * @param string $email     联系电子邮件
         * @param string $fax       传真号码
         * @param string $address   联系地址
         * @param string $postcode  邮政编码
         * 
         * @return int 操作结果状态码
         * 
         */
        $statusCode = $this->client->registDetailInfo($eName,$linkMan,$phoneNum,$mobile,$email,$fax,$address,$postcode);

        return $statusCode;

    }

    /**
     * 更新密码 用例
     */
    function updatePassword($psw){
        /**
         * [密码]长度为6
         * 
         * 如下面的例子是将密码修改成: 654321
         */
        $statusCode = $this->client->updatePassword($psw);
        return $statusCode;
    }

    /**
     * 短信转发 用例
     */
    function setMOForward($phone){
        /**
         * 向 159xxxxxxxx 进行转发短信
         */
        $statusCode = $this->client->setMOForward($phone);
        return $statusCode;
    }

    /**
     * 得到上行短信 用例
     */
    function getMO(){
        $moResult = $this->client->getMO();
        echo "返回数量:".count($moResult);
        foreach($moResult as $mo){
            //$mo 是位于 Client.php 里的 Mo 对象
            // 实例代码为直接输出
            echo "发送者附加码:".$mo->getAddSerial();
            echo "接收者附加码:".$mo->getAddSerialRev();
            echo "通道号:".$mo->getChannelnumber();
            echo "手机号:".$mo->getMobileNumber();
            echo "发送时间:".$mo->getSentTime();
            
            /**
             * 由于服务端返回的编码是UTF-8,所以需要进行编码转换
             */
            //echo "短信内容:".iconv("UTF-8","GBK",$mo->getSmsContent());
            echo "短信内容:".$mo->getSmsContent();
            
            // 上行短信务必要保存,加入业务逻辑代码,如：保存数据库，写文件等等
        }
            
    }

    /**
     * 短信发送 用例
     */
    function sendSMS($phones,$content){
        /**
         * $phones:手机号组成的数组;$content:发送内容;
         * 下面的代码将发送内容为 test 给 159xxxxxxxx 和 159xxxxxxxx
         * $client->sendSMS还有更多可用参数，请参考 Client.php
         */
        if(!is_array($phones)){
            $phones = array($phones);
        }

        $statusCode = $this->client->sendSMS($phones,$content);
        //error_log(date("Y-m-d H:i:s")."\r\n".print_r(func_get_args(oid),true)."\r\n"."statusCode=".$statusCode."\r\n",3,DATA_DIR.'/sms_'.date("Y_m_d").'.txt');
        return $statusCode;
    }

    /**
     * 余额查询 用例
     */
    function getBalance(){
        $balance = $this->client->getBalance();
        return $balance;
    }

    /**
     * 短信转发扩展 用例
     */
    function setMOForwardEx($phones){
        /**
         * 向多个号码进行转发短信
         * $phones:手机号组成的数组;
         * 以数组形式填写手机号码
         */
        $statusCode = $this->client->setMOForwardEx($phones);
        return $statusCode;
    }

}
?>