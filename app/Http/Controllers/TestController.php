<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Services\PayService;
use App\Http\Controllers\Controller;
use Auth;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        // $obj = new PayService();
        // $url = $obj->getPayUrl(0.01,"测试订单");
        // if ($url == false) 
        // {
        //     var_dump("下单失败");
        //     return;
        // }

        // echo $url;
    }

}
