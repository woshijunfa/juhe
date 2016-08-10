<?php
/**
 * Created by PhpStorm.
 * User: chenjunfa
 * Date: 3/15/16
 * Time: 16:34
 */

namespace App\Services;
use App\Models\UserSmsLog;
use App\Services\EmailSerivce;
use Jenssegers\Agent\Agent;
use Log;
use Config;
use Exception;

require_once (app_path() . "/Services/IPay/base.php");

class PayService
{
    public $m_appkey = '';
    public $m_platpkey = '';
    public $m_appid = '';


    public $m_orderNo = '';

    public function __construct() 
    {
        $this->m_appid = Config::get('ipay.appid');
        $this->m_appkey = Config::get('ipay.appkey');
        $this->m_platpkey = Config::get('ipay.platpkey');
    }
    public function getPayUrl($money,$title,$orderNo)
    {
        Log::info("PayService::getPayUrl money:" . $money . " title:" . $title . " orderNo:" . $orderNo);

        $thirdTransId = $this->order($money,$title,$orderNo);
    	Log::info("return transerid:" . $thirdTransId);
        if ($thirdTransId == false) return false;

        return $this->generatePageUrl($thirdTransId);
    }

    private function order($price,$title,$orderNo,$userid='100')
    {
        if (is_string($price)) $price = (int)$price;

        try 
        {
            //下单接口
            $orderReq['appid'] = $this->m_appid;
            $orderReq['waresid'] = 1;
            $orderReq['waresname'] = $title;
            $orderReq['cporderid'] = $orderNo; //确保该参数每次 都不一样。否则下单会出问题。
            $orderReq['price'] = $price;   //单位：元
            $orderReq['currency'] = 'RMB';
            $orderReq['appuserid'] = $userid;
            $orderReq['cpprivateinfo'] = 'xxxx';
            $orderReq['notifyurl'] = CommonService::getHost() . '/ipay/postresult';

            //组装请求报文  对数据签名
            $reqData = composeReq($orderReq, $this->m_appkey);

            //发送到爱贝服务后台请求下单
            $orderUrl = Config::get('ipay.orderUrl');
            $respData = request_by_curl($orderUrl, $reqData, 'order');

            Log::info("order a order url:" . $orderUrl . " reqData:" . json_encode($orderReq) . " result:" . json_encode($reqData));

            //验签数据并且解析返回报文
            $result = parseResp($respData, $this->m_platpkey, $respJson);
    	    Log::info("parseResp result:" . json_encode($result) . " respJson:" . var_export($respJson,true));
    
            //成功返回
            if (isset($respJson->transid) && !empty($respJson->transid)) return $respJson->transid;
 
            //如果已经存在订单号返回订单号
            if (isset($respJson->code) && $respJson->code === 3001) 
            {
                return $this->getTransidByOrderNo($orderNo);
            }

            return false;
        } 
        catch (Exception $e) 
        {
	    Log::info($e);
            return false;
        }
    }

    private function generatePageUrl($transid)
    {
        //下单接口
        $orderReq = [];
        $orderReq['transid'] = "$transid";
        $orderReq['redirecturl'] = CommonService::getHost() . '/ipay/redirectreturn';
        $orderReq['cpurl'] = 'aaa';

        Log::info("PayService::generatePageUrl params:" . json_encode($orderReq));

        //组装请求报文   对数据签名
        $reqData = composeReq($orderReq, $this->m_appkey);

        $agent = new Agent();
        $isMobile = $agent->isMobile();
        $baseUrl =$isMobile ?  Config::get("ipay.h5url") : Config::get("ipay.pcurl") ;

        return $baseUrl . $reqData;
    }


    public function checkResult($params)
    {
        try 
        {
            if (!isset($params['transdata']) || !isset($params['sign']) || !isset($params['signtype'])) 
            {
                return false;
            }

            //解析返回结果
            $respData = 'transdata='.$params['transdata'].'&sign='.$params['sign'].'&signtype='.$params['signtype'];    
            $isok = parseResp($respData, $this->m_platpkey, $respJson); 
            if (!$isok) return false;

            //获取订单号
            $orderNo = $respJson->cporderid;
            if (empty($orderNo)) return false;

            //反向查询订单号是否已经支付
            $isok = $this->getOrderStatus($orderNo);

            if ($isok) $this->m_orderNo = $orderNo;

            return $isok;
        } 
        catch (Exception $e) 
        {
            Log::info($e);
            return false;   
        }
    }

    public function getOrderStatus($orderNo)
    {
        if (empty($orderNo)) return false;

        //组装查询数据
        $contentdata = [];
        $contentdata["appid"]=$this->m_appid;
        $contentdata["cporderid"]=$orderNo;
        $reqData = composeReq($contentdata, $this->m_appkey);
        $queryResultUrl = Config::get("ipay.queryResultUrl");

        //校验查询结果
        $respData = request_by_curl($queryResultUrl, $reqData, 'query order');

        //解析结果
        $isok = parseResp($respData, $this->m_platpkey, $respJson); 
        if (!$isok) return false;

        //支付成功
        if (isset($respJson->result) && ($respJson->result === 0 || $respJson->result === '0')) return true;

        //支付失败
        return false;
    }

    public function getTransidByOrderNo($orderNo)
    {
        if (empty($orderNo)) return false;

        //组装查询数据
        $contentdata = [];
        $contentdata["appid"]=$this->m_appid;
        $contentdata["cporderid"]=$orderNo;
        $reqData = composeReq($contentdata, $this->m_appkey);
        $queryResultUrl = Config::get("ipay.queryResultUrl");

        //校验查询结果
        $respData = request_by_curl($queryResultUrl, $reqData, 'query order');

        //解析结果
        $isok = parseResp($respData, $this->m_platpkey, $respJson); 
        if (!$isok) return false;

        if (isset($respJson->transid) && !empty($respJson->transid)) return $respJson->transid;

        return false;
    }

    public function getOrderNo()
    {

    }

    public static function notifyVpnOrderPaySuccess($orderNo)
    {
        if (empty($orderNo)) return false;

        //
        $notifyUrl = Config::get("vpn.notiryUrl");
        if (empty($notifyUrl)) return false;

        //计算长度，取前18位
        if (strlen($orderNo)>18) $orderNo = substr($orderNo,0,18);

        $params = [
            'order_no' => $orderNo,
            'pay_status' => "success"
        ];

        $result = HttpSslService::sslRequest($notifyUrl,$params);
        $result = json_decode($result,true);

        return isset($result['code']) && ($result['code'] === 0 || $result['code'] === '0');
    }

}


