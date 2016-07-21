<?php
header("Content-type: text/html; charset=utf-8");
/**
 *类名：trade.php
 *功能  服务器端创建交易Demo
 *版本：1.0
 *日期：2014-06-26
 '说明：
 '以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己的需要，按照技术文档编写,并非一定要使用该代码。
 '该代码仅供学习和研究爱贝云计费接口使用，只是提供一个参考。
*/
require_once ("config.php");
require_once ("base.php");


//此为下单函数。使用时请把下列参数按要求更换成你们自己的数据。另外也需要更换config.php 中的公钥和私钥
function testOrder() {
    global $orderUrl, $appkey, $platpkey , $transid,$appid;
    //下单接口
    $orderReq['appid'] = "$appid";
    $orderReq['waresid'] = 1;
    $orderReq['cporderid'] = "123412zxcvzasdfqwerasdghj"; //确保该参数每次 都不一样。否则下单会出问题。
    echo "microtime()";
    $orderReq['price'] = 0.01;   //单位：元
    $orderReq['currency'] = 'RMB';
    $orderReq['appuserid'] = '10123059';
    $orderReq['cpprivateinfo'] = '11qwe123r23q232111';
    $orderReq['notifyurl'] = 'http://58.250.160.241:8888/IapppayCpSyncForPHPDemo/TradingResultsNotice.php';
    //组装请求报文  对数据签名
    $reqData = composeReq($orderReq, $appkey);
    echo  "$reqData";
    //发送到爱贝服务后台请求下单
    $respData = request_by_curl($orderUrl, $reqData, 'order test');
    echo "respData:$respData\n";
   
    //验签数据并且解析返回报文
    if(!parseResp($respData, $platpkey, $respJson)) {
        echo "failed";
    }else{
    	echo "success";
    	echo "服务端下单完成，trasnid:<br/>";
    	print_r($respJson);
    	//     下单成功之后获取 transid
    	$transid=$respJson->transid;
    }
  
}
//此为H5 和PC 版本调收银台时需要的参数组装函数   特别提醒的是  下面的函数中有  $h5url 和$pcurl 两个url地址。 只需要更换这两个地址就可以 调出 H5 收银台和PC版本收银台。   
function H5orPCpay() {
	global $h5url,$pcurl, $appkey, $platpkey, $transid;//得到transid 再次组装数据并签名。
	echo "开始组装号调用支付接口的参数";
	//下单接口
	$orderReq['transid'] = "$transid";
	$orderReq['redirecturl'] = 'http://test/index.php';
	$orderReq['cpurl'] = 'aaa';
	//组装请求报文   对数据签名
	$reqData = composeReq($orderReq, $appkey);

	echo "参数组装完成：请用浏览器访问该链接:$h5url$reqData\n";//这里组装的最终数据 就可以用浏览器访问调出收银台。
	echo "<script language=\"javascript\">";
	echo "location.href=\"$h5url$reqData\"";//我们的常连接版本 有PC 版本 和移动版本。 根据使用的环境不同请更换相应的URL:$h5url,$pcurl.
	echo "</script>";
}

//在使用H5 Iframe版本时 生成签名数据  次函数只适用于H5  Iframe版本支付。
function H5IframeSign($transid,$redirecturl,$cpurl, $appkey){
	$content=trim($transid).''.trim($redirecturl).''.trim($cpurl);//拼接$transid   $redirecturl    $cpurl
	$appkey=formatPriKey($appkey);   
	$sign=sign($content,$appkey);
	return $sign;
}


testOrder();
H5orPCpay();


?>