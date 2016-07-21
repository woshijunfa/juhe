<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\Order;
use App\Services\UserService;
use App\Services\PayService;
use App\Services\HttpSslService;
use App\Http\Controllers\Controller;
use Input;
use Auth;
use Session;
use Redirect;
use Hash;
use Log;
use Config;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postresult()
    {
        //获取参数
        $params = Input::all();
        Log::info("BuyController::postresult get params:" . json_encode($params));

        //获取支付结果
        $obj = new PayService();
        $result = $obj->checkResult($params);
        if (!$result)
        {
            Log::info("BuyController::postresult 没有通过校验 result orderNo:" . $obj->m_orderNo . " result:" . $result);
            die("FAILURE");
        } 

        //支付成功，标记结果，跳转
        $result = PayService::notifyVpnOrderPaySuccess($obj->m_orderNo);
        Log::info("BuyController::postresult 支付成功，通知vpn result orderNo:" . $obj->m_orderNo . " result:" . $result);

        $echostr =  $result ? "SUCCESS" : "FAILURE";
    	
	Log::info("postresult echo str is:" . $echostr);
	echo $echostr;
    }

    public function redirectreturn()
    {
        //获取参数
        $params = Input::all();
        Log::info("BuyController::redirectreturn get params:" . json_encode($params));

        //获取支付结果
        $obj = new PayService();
        $result = $obj->checkResult($params);
        if (!$result) return $this->errorPage();

        //支付成功，标记结果，跳转
        $result = PayService::notifyVpnOrderPaySuccess($obj->m_orderNo);

        Log::info("BuyController::redirectreturn result orderNo:" . $obj->m_orderNo . " result:" . $result);

        //跳转到vpn订单地址
        $path = Config::get("vpn.redirectUrl");
        if (empty($path)) return $this->errorPage();

        //跳转到vpn订单地址
        $fullPath = $path . "?order_no=" . $obj->m_orderNo;
        return Redirect($fullPath);
    }

    public function payOrderGet()
    {
        //获取订单号
        $orderNo = Input::get("order_no");
        if (empty($orderNo)) return $this->errorPage();

        //获取支付信息
        $orderInfo = Order::where("order_no",$orderNo)->first();
        if (empty($orderInfo)) return $this->errorPage();

        $orderInfo->pay_money = 0.01;

        //生成支付url
        $obj = new PayService();
        $url = $obj->getPayUrl($orderInfo->pay_money,$orderInfo->order_name,$orderInfo->order_no);
        if ($url == false)
        {
            return $this->errorPage();
        } 

        return Redirect($url);
    }

}
