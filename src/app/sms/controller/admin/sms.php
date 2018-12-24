<?php
/**
 * 短信接口后台配置类
 *
 * @author qianlei
 * @time 2013-10-24
 */

class sms_ctl_admin_sms extends desktop_controller{

     public function __construct($app){
        parent::__construct($app);
        header("cache-control: no-store, no-cache, must-revalidate");
    }

    function showUrl(){
        $b2c_app = app::get('b2c');
        //序列号
        $sms_code = array();
        $sms_code['sms_code_num'] = $b2c_app->getConf('sms_code_num');
        $sms_code['sms_code_psw'] = $b2c_app->getConf('sms_code_psw');
        $sms_code['sms_code_key'] = $b2c_app->getConf('sms_code_key');

        

        $this->pagedata['sms_code'] = $sms_code;

        $this->display('admin/showsignup.html');
    }

    function signup(){
        //$this->begin();
        $this->begin('index.php?app=b2c&ctl=admin_member_messenger&act=index');
        $b2c_app = app::get('b2c');
        $serialNumber = $_POST['sms_code_num'];
        $password = $_POST['sms_code_psw'];
        $sessionKey = $_POST['sms_code_key'];
        $sms_code = array(
                'serialNumber'=>$serialNumber,
                'password'=>$password,
                'sessionKey'=>$sessionKey
            );

        $smsObj = kernel::single('sms_operating',json_encode($sms_code));

        //登陆激活序列号
        $login_result = $smsObj->login();

        $login_result_arr = json_decode($login_result,true);
        if($login_result_arr['statusCode'] == 0){
            $b2c_app->setConf('sms_code_num',$_POST['sms_code_num']);
            $b2c_app->setConf('sms_code_psw',$_POST['sms_code_psw']);
            $b2c_app->setConf('sms_code_key',$_POST['sms_code_key']);
            $this->end(true,app::get('b2c')->_('激活成功！'));
            exit;
        }else{

            $this->end(false,'激活不成功！处理状态代码:'.$this->getErrorDes($login_result_arr['statusCode'])."！");
            //$this->end(false,);
            exit;
        }

    }

    private function getErrorDes($errNum){
        $errArr = array(
                    '0'=>'成功',
                    '-1'=>'系统异常',
                    '-2'=>'客户端异常',
                    '-101'=>'命令不被支持',
                    '-102'=>'RegistryTransInfo删除信息失败',
                    '-103'=>'RegistryInfo更新信息失败',
                    '-104'=>'请求超过限制',
                    '-110'=>'号码注册激活失败',
                    '-111'=>'企业注册失败',
                    '-113'=>'充值失败',
                    '-117'=>'发送短信失败',
                    '-118'=>'接收MO失败',
                    '-119'=>'接收Report失败',
                    '-120'=>'修改密码失败',
                    '-122'=>'号码注销激活失败',
                    '-123'=>'查询单价失败',
                    '-124'=>'查询余额失败',
                    '-125'=>'设置MO转发失败',
                    '-126'=>'路由信息失败',
                    '-127'=>'计费失败0余额',
                    '-128'=>'计费失败余额不足',
                    '-190'=>'数据操作失败',
                    '-1100'=>'序列号错误,序列号不存在内存中,或尝试攻击的用户',
                    '-1102'=>'序列号密码错误',
                    '-1103'=>'序列号Key错误',
                    '-1104'=>'路由失败，请联系亿美系统管理员',
                    '-1105'=>'注册号状态异常, 未用 1',
                    '-1107'=>'注册号状态异常, 停用 3',
                    '-1108'=>'注册号状态异常, 停止 5',
                    '-1131'=>'充值卡无效',
                    '-1132'=>'充值密码无效',
                    '-1133'=>'充值卡绑定异常',
                    '-1134'=>'充值状态无效',
                    '-1135'=>'充值金额无效',
                    '-1901'=>'数据库插入操作失败',
                    '-1902'=>'数据库更新操作失败',
                    '-1903'=>'数据库删除操作失败',
                    '-9000'=>'数据格式错误,数据超出数据库允许范围',
                    '-9001'=>'序列号格式错误',
                    '-9002'=>'密码格式错误',
                    '-9003'=>'客户端Key格式错误',
                    '-9004'=>'设置转发格式错误',
                    '-9005'=>'公司地址格式错误',
                    '-9006'=>'企业中文名格式错误',
                    '-9007'=>'企业中文名简称格式错误',
                    '-9008'=>'邮件地址格式错误',
                    '-9009'=>'企业英文名格式错误',
                    '-9010'=>'企业中文名简称格式错误',
                    '-9011'=>'传真格式错误',
                    '-9012'=>'联系人格式错误',
                    '-9013'=>'联系电话格式错误',
                    '-9014'=>'邮编格式错误',
                    '-9015'=>'新密码格式错误',
                    '-9016'=>'发送短信包大小超出范围',
                    '-9017'=>'发送短信内容格式错误',
                    '-9018'=>'发送短信扩展号格式错误',
                    '-9019'=>'发送短信优先级格式错误',
                    '-9020'=>'发送短信手机号格式错误',
                    '-9021'=>'发送短信定时时间格式错误',
                    '-9022'=>'发送短信唯一序列值错误',
                    '-9023'=>'充值卡号格式错误',
                    '-9024'=>'充值密码格式错误',
                    '-9025'=>'客户端请求sdk5超时'
                );
        if(isset($errArr[$errNum])){
            return $errArr[$errNum];
        }else{
            return $errNum;
        }
    }
}