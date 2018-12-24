<?php
if (realpath($_SERVER["SCRIPT_FILENAME"]) == realpath(__FILE__)) die('Permission denied.');

if (!defined('MDK_LIB_DIR')) require_once('../3GPSMDK.php');

/**
 *
 * PHP版トランザクション実行処理管理クラス
 *
 * @category    Veritrans
 * @package     Lib
 * @copyright   VeriTrans Inc.
 * @access  public
 * @author VeriTrans Inc.
 */
class TGMDK_Transaction {

    /** ロガー */
    private $logger;

    /** エンコードの種類を示す定数：暗号化 */
    const ENCODE_ENCRYPTION     = 1;
    /** エンコードの種類を示す定数：Base64Encode */
    const ENCODE_BASE_64_ENCODE = 2;
    /** エンコードの種類を示す定数：HTMLEncode */
    const ENCODE_HTML_ENCODE    = 3;
    /** エンコードの種類を示す定数：エンコードの必要なし */
    const ENCODE_NON            = 0;
    /** URLの区切り文字 */
    const SLASH                 = "/";

    /**
     * コンストラクタ。
     * ロガーを取得する。
     */
    public function __construct() {
        // ロガーを取得
        //$work = TGMDK_Logger::getInstance();
        //$this->logger = $work;
    }

    /**
     * リクエストDTOから呼び出すパラメータを作成し、
     * 3GPSを呼び出し、結果をレスポンスDTOに格納して返す。
     *
     * @access  public
     * @param リクエストDTO $requestDto 処理を行う各リクエストDTO
     * @param $props　マルチマーチャント用設定内容
     * @return レスポンスDTO リクエストDTOに紐付くレスポンスDTO
     */
    public function execute($requestDto, $props=null) {
       try {
            //$this->logger->debug("TGMDK_Transaction.execute() start");
            // リクエストDTOクラス名からレスポンスDTOクラス名を取得
            $responseDtoName = str_replace("RequestDto", "ResponseDto", get_class($requestDto));

            // レスポンスDTOからクラスが生成できるかをチェック
            if (class_exists($responseDtoName) == false) {
                throw new Exception("Not found response dto class. [$responseDtoName]");
echo('<pre>');print_r("Not found response dto class. [$responseDtoName]");exit();
            }
echo('<pre>');print_r('000');

            // TGMDK_Configファイルの読み込み
            $config = TGMDK_Config::getInstance();
echo('<pre>');print_r('111');

            // エラーがある場合
            // エラー内容のログはcheck_config内で出力されているため
            // ここのtry～catchではログを出力せずにレスポンスDTOのみ生成して返却する。
            // throwしてしまうと、catch文で同じログの出力をおこなってしまうためthrowしない。
            try {
                // TGMDK_Configのチェック
                $this->check_config($config);
            } catch(TGMDK_Exception $conf_error) {
                try {
                    //$this->logger->debug("TGMDK_Transaction.execute() end");
echo('<pre>');print_r("TGMDK_Transaction.execute() end");exit();

                    // リクエストDTOクラス名からレスポンスDTOクラス名を取得
                    return $this->set_error_response_dto($requestDto, $conf_error->get_v_result_code(), $conf_error->getMessage());
                } catch(Exception $conf_error2) {
                    // ログ出力
                    //$this->logger->error($conf_error2->getMessage());
echo('<pre>');print_r("TGMDK_Transaction.execute() end");exit();

                    return null;
                }
            }
echo('<pre>');print_r('222');

            // トランザクション用のConfigを取得する
            $conf_array = $config->getTransactionParameters();
echo('<pre>');print_r('333');

            // マーチャントCCIDのチェック＆上書き
            if (isset($props["merchant_ccid"])) {
                $conf_array[TGMDK_Config::MERCHANT_CC_ID] = $props["merchant_ccid"];
            }
            // マーチャントパスワードのチェック＆上書き
            if (isset($props["merchant_secret_key"])) {
                $conf_array[TGMDK_Config::MERCHANT_SECRET_KEY] = $props["merchant_secret_key"];
            }
            // ダミーリクエストのチェック＆上書き
            if (isset($props["dummy_request"])) {
                $conf_array[TGMDK_Config::DUMMY_REQUEST] = $props["dummy_request"];
            }

echo('<pre>');print_r('444');

            // TGMDK_ConfigのMDK_ERROR_MODEが1の場合
            if ($conf_array[TGMDK_Config::MDK_ERROR_MODE] == "1") {
echo('<pre>');print_r('99');exit();
                return $this->set_ma99_exception($requestDto);
            }
echo('<pre>');print_r('555');

            // JSONパラメータの生成
            $query = new TGMDK_JSONQuery();
            // JSON文字列生成メソッドを起動
            $query->createJsonParameter($requestDto, get_class($requestDto));
echo('<pre>');print_r('666');

            // リクエストパラメータをJSON形式に変換
            $jsonParam = $query->getJsonParam();
            // マスク化
            $maskedJsonParam = $query->getMaskedJsonParam();
echo('<pre>');print_r('777');

            //ログ出力用文字列（マスク化JSON文字列)を設定
            $requestDto->_setMaskedLog($query->getMaskedJsonParam());

            // 接続パスの作成
            $url = $this->createSendUrl($requestDto, $query->getServiceType(), $query->getServiceCommand(), $conf_array);
            //TGMDK_Logger::getInstance()->debug("connect 3gw url  ==> " . $url );
echo('<pre>');print_r('888');

            // 共通項目をJSON文字列に追加
            $jsonParam = $this->add_common_param($jsonParam, $conf_array, $maskedJsonParam);

            // 送信するパラメータ
            $param = "{\"params\":" . $jsonParam . "}";
            // URLエンコードする
            $param = urlencode($param);
            // 送信実行
            $connection = new TGMDK_Connection();
            $response = $connection->execute($param, $url);
echo('<pre>');print_r('999');

            // JSONをレスポンスDTOクラスにマッピング
            $mdkContentHandler = new TGMDK_ContentHandler();

            // JSON形式を連想配列に変換する。
            $responseArray = json_decode($response, true);
            // JSONをレスポンスDTOにする
            $responseDto = $mdkContentHandler->parseDto($responseArray, new $responseDtoName);
echo('<pre>');print_r('111');

            // 3GPSから取得したJSONをマスク化
            $mask_response = json_encode($mdkContentHandler->maskedResponse($responseArray));
            $mask_response = $this->unicode_encode($mask_response);

            // マスク済みのJSONをレスポンスDTOに設定する
            $responseDto->_setResultXml($mask_response);
echo('<pre>');print_r('222');

            //$this->logger->debug("response data     ==> " . TGMDK_Util::deleteRN($mask_response));

            //$this->logger->debug("TGMDK_Transaction.execute() end");

            $mstatus = $responseDto->getMstatus();
            if (!isset($mstatus)) {
                $this->logger->debug("Respose DTO has no mstatus");
                throw new TGMDK_Exception(TGMDK_Exception::MF99_SYSTEM_INTERNAL_ERROR);
            }
echo('<pre>');print_r('333');

            return $responseDto;

        } catch (TGMDK_Exception $e) {
            try {
                // ログ出力
                //@$this->logger->debug($e->getMessage());
                //@$this->logger->fatal($e->getTraceMessage());

                //@$this->logger->debug("TGMDK_Transaction.execute() end");

                // リクエストDTOクラス名からレスポンスDTOクラス名を取得
                return $this->set_error_response_dto($requestDto, $e->get_v_result_code(), $e->getMessage());
            } catch(Exception $e2) {
                // ログ出力
                //@$this->logger->fatal($e2->getMessage());
                //@$this->logger->fatal($e2->__toString());

                return null;
            }
        } catch (Exception $e) {
            try {
                // ログ出力
                //@$this->logger->fatal($e->getMessage());
                //@$this->logger->fatal($e->__toString());

                //@$this->logger->debug("TGMDK_Transaction.execute() end");

                // リクエストDTOクラス名からレスポンスDTOクラス名を取得
                return $this->set_error_response_dto($requestDto, "MA99000000000000", "System internal error");
            } catch(Exception $e2) {
                // ログ出力
                //@$this->logger->fatal($e2->getMessage());
                //@$this->logger->fatal($e2->__toString());

                return null;
            }
        }
    }

    /**
    * Unicodeエスケープされた文字列をUTF-8文字列に戻す。
    * @param unknown_type $str
    */
    private function unicode_encode($str) {
        return preg_replace_callback("/\\\\u([0-9a-zA-Z]{4})/", array($this, "encode_callback"), $str);
    }

    private function encode_callback($matches) {
        return mb_convert_encoding(pack("H*", $matches[1]), "UTF-8", "UTF-16");
    }

    /**
     * GWのURLを作成する
     * @param type $requestDto リクエストDTO
     * @param type $serviceType サービスタイプ
     * @param type $servcieCommand サービスコマンド
     * @return type GWのURL
     */
    private function createSendUrl($requestDto, $serviceType, $servcieCommand, $conf_array) {
        $url = $conf_array[TGMDK_Config::HOST_URL];
        $serviceTypeArray = preg_split("/,/",$conf_array[TGMDK_Config::PAYNOWID_SERVICE_TYPE]);
        if (in_array($serviceType, $serviceTypeArray)) {
            return $url
                    . self::SLASH. $conf_array[TGMDK_Config::ADD_URL_VTID]
                    . self::SLASH. $conf_array[TGMDK_Config::ADD_URL_VTID_VERSION]
                    . self::SLASH. $servcieCommand
                    . self::SLASH. $serviceType;
        } else {
            return $url
                    . self::SLASH. $conf_array[TGMDK_Config::ADD_URL_PAYMENT]
                    . self::SLASH. $conf_array[TGMDK_Config::ADD_URL_PAYMENT_VERSION]
                    . self::SLASH. $servcieCommand
                    . self::SLASH. $serviceType;
        }
    }

    /**
     * 共通項目を追加する。
     * @param type $jsonParam GWに送信するパラメータJSON文字列
     * @param type $conf_array TGMDK_Configの連想配列
     * @param type $maskedJsonParam  ログ出力用JSON文字列
     * @return String 共通項目を追加したJSON文字列
     */
    private function add_common_param($jsonParam, $conf_array, $maskedJsonParam) {
        $add_param = array();
        $add_param["txnVersion"] =$conf_array[TGMDK_Config::MDK_DTO_VERSION];  // TXNバージョン
        $add_param["dummyRequest"] =$conf_array[TGMDK_Config::DUMMY_REQUEST];  // ダミーリクエスト
        $add_param["merchantCcid"] =$conf_array[TGMDK_Config::MERCHANT_CC_ID]; // マーチャントCCID
        $common_json_str = json_encode($add_param);
        // ログ出力
        //$this->logger->debug("request data ==> " . substr($maskedJsonParam, 0, -1). "," . substr($common_json_str, 1));

        // GWに投げるパラメータに追加
        $jsonParam = substr($jsonParam, 0, -1). "," . substr($common_json_str, 1);
        // 認証ハッシュの生成
        $hash_param = $conf_array[TGMDK_Config::MERCHANT_CC_ID] .$jsonParam . $conf_array[TGMDK_Config::MERCHANT_SECRET_KEY];
        $hash_data  = TGMDK_Util::get_hash_256($hash_param);

        // 認証ハッシュの追加
        return $jsonParam. "," . "\"authHash\":" . "\"" . $hash_data . "\"";
    }

    /**
     * MA99エラーが設定されたレスポンスDTOを返す。
     *
     * @access  private
     * @param リクエストDTO $requestDto リクエストDTO
     * @return レスポンスDTO MA99のエラー内容が設定されたレスポンスDTO
     */
    private function set_ma99_exception($requestDto) {
        $e = new TGMDK_Exception(TGMDK_Exception::MA99_SYSTEM_INTERNAL_ERROR);
        return $this->set_error_response_dto($requestDto, $e->get_v_result_code(), $e->getMessage());
    }

    /**
     * エラー用レスポンスDTOをセットする。
     *
     * @access  private
     * @param リクエストDTO $requestDto リクエストDTO
     * @param String $code エラーコード
     * @param String $message エラーメッセージ
     * @return エラー内容が設定されたレスポンスDTO
     */
    private function set_error_response_dto($requestDto, $code, $message) {
        $responseDtoName = str_replace("RequestDto", "ResponseDto", get_class($requestDto));

        // レスポンスDTOからクラスが生成できるかをチェック
        if (class_exists($responseDtoName) == false) {
            return null;
        }

        $error_res_instance = new $responseDtoName();
        $error_res_instance->setVResultCode($code);
        $error_res_instance->setMerrMsg($message);
        $error_res_instance->setMstatus("failure");

        return $error_res_instance;
    }

    /**
     * TGMDK_Configファイルの記述内容チェックを行う。
     *
     * @access  private
     * @param TGMDK_Config $config TGMDK_Config読み込みクラス
     */
    private function check_config($config) {

        // TGMDK_Configのチェック
        if ($config->validate(TRUE) === FALSE) {
        // エラー発生時
            // チェックエラーのリストを取得
            $error_list = $config->getErrors();
            foreach ($error_list as $exception) {
                // ログ出力
                //$this->logger->error($exception->getMessage());
            }

            throw reset($error_list);
        }
    }
}
