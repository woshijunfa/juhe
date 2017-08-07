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
    public function repaypage($orderNo)
    {
        $path = Config::get("vpn.redirectUrl");

        $fullPath = $path . "?order_no=" . $orderNo;
        return Redirect($fullPath);
    }

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
        if (!$result) return $this->repaypage('000');

        //支付成功，标记结果，跳转
        $result = PayService::notifyVpnOrderPaySuccess($obj->m_orderNo);

        Log::info("BuyController::redirectreturn result orderNo:" . $obj->m_orderNo . " result:" . $result);

        return $this->repaypage($obj->m_orderNo);
    }

    public function payOrderGet()
    {
        try {
            
            //获取订单号
            $orderNo = Input::get("order_no");
            if (empty($orderNo))
            {
                Log::info("payOrderGet 订单号为空，url产生失败~");
                return $this->repaypage('000');
            } 

            //获取支付信息
            $orderInfo = Order::where("order_no",$orderNo)->first();
            if (empty($orderInfo))
            {
                Log::info("payOrderGet 没有对应订单 orderNo:" . $orderNo);
                return $this->repaypage($orderNo);
            } 

            //测试环境下价格0.01
            if (Config::get('app.debug')) $orderInfo->pay_money = 0.01;

            //每次唯一
            $orderNo = $orderInfo->order_no . rand(100, 999);

            //生成支付url
            $obj = new PayService();
            $url = $obj->getPayUrl($orderInfo->pay_money,$orderInfo->order_name,$orderNo);
            if ($url == false)
            {
                return $this->repaypage($orderNo);
            } 

            return Redirect($url);
        } catch (\Exception $e) {
            return $this->repaypage(Input::get("order_no"));
        }

    }

}
