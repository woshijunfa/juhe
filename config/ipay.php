<?php

$g_ipayBaseUrl = 'http://ipay.iapppay.com:9999';

return [
    //爱贝商户后台接入url
    'iapppayCpUrl'      =>  $g_ipayBaseUrl,

    //登录令牌认证接口 url
    'tokenCheckUrl'     => $g_ipayBaseUrl . "/openid/openidcheck",

    //下单接口 url
    'orderUrl'          =>  $g_ipayBaseUrl . "/payapi/order",

    //支付结果查询接口 url
    'queryResultUrl'    =>  $g_ipayBaseUrl . "/payapi/queryresult",

    //契约查询接口url
    'querysubsUrl'      =>  $g_ipayBaseUrl . "/payapi/subsquery",

    //契约鉴权接口Url
    'ContractAuthenticationUrl'     =>  $g_ipayBaseUrl."/payapi/subsauth",

    //取消契约接口Url
    'subcancel' =>  $g_ipayBaseUrl . "/payapi/subcancel",

    //H5和PC跳转版支付接口Url
    'h5url'     =>  "https://web.iapppay.com/h5/exbegpay?",
    'pcurl'     =>  "https://web.iapppay.com/pc/exbegpay?",

    //应用编号
    'appid'     =>  env("IPAY_APP_ID",""),
    //应用私钥
    'appkey'    =>  env("IPAY_APP_KEY",""),
    //平台公钥
    'platpkey'  =>  env("IPAY_PLAT_KEY",''),

];
