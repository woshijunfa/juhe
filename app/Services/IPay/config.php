<?php
header("Content-type: text/html; charset=utf-8");
/**
 *功能：配置文件
 *版本：1.0
 *修改日期：2014-06-26
 '说明：
 '以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己的需要，按照技术文档编写,并非一定要使用该代码。
 '该代码仅供学习和研究爱贝云计费接口使用，只是提供一个参考。
 */
 
//爱贝商户后台接入url
// $coolyunCpUrl="http://pay.coolyun.com:6988";
$iapppayCpUrl="http://ipay.iapppay.com:9999";
//登录令牌认证接口 url
$tokenCheckUrl=$iapppayCpUrl . "/openid/openidcheck";

//下单接口 url
// $orderUrl=$coolyunCpUrl . "/payapi/order";
$orderUrl=$iapppayCpUrl . "/payapi/order";

//支付结果查询接口 url
$queryResultUrl=$iapppayCpUrl ."/payapi/queryresult";

//契约查询接口url
$querysubsUrl=$iapppayCpUrl."/payapi/subsquery";

//契约鉴权接口Url
$ContractAuthenticationUrl=$iapppayCpUrl."/payapi/subsauth";

//取消契约接口Url
$subcancel=$iapppayCpUrl."/payapi/subcancel";
//H5和PC跳转版支付接口Url
$h5url="https://web.iapppay.com/h5/exbegpay?";
$pcurl="https://web.iapppay.com/pc/exbegpay?";

//应用编号
$appid="3003686553";
//应用私钥
$appkey="MIICWwIBAAKBgQCRVM0Ibxnbz5p6cr6RpjcijgtzBC3mi4Am5Jpzn9o3SgX0VIg8CV9OvPJ9cq9RvQ4fsZtvTAbz8dmd5OsFUmzBlvlsJPks5Hit3NLO5IeirKbO6rIDd1hkTPuu0HpPZVcdW8k+7tZ2e1FnHkVdaBsvIuFHOeWKELtgKA4TE/HZXwIDAQABAoGAHkImskPXgXGW+zmavd56ikJC1f6fw+l1lCNymPJGT86ksLtM5hsZcd5bKo1PPVh8cVLcRu7wX6gSJBK+cAw6Qj9kRW1bplcUUhok/Oh3OJlrVqppdPShIQIOiE9MYKhBapQPiYu8v+FtUbDxJx3YtjEjvwFtehqQEf9qb5tPpskCQQDX+zDOoP2Pas9x3RTy3Vn9Apdv0sbqU9xy4iqrDah58M1E039GERRFCtXwYfRBSUwnlr1DpE0Rs/AgWwnEzZv1AkEArEJqD2y7/e6vEu3weZu0fwNRIa2DBGn7CzT+ri64p+6eL0XK2s1iGJwsY0lNl1EWrBTcE9nyTl4y5Wn/Y5r/gwJAeZERb7x9+/OKv/RIjkq5FAgZZP+mps59DszuZ0lQwxIe99ZzlOSYHCR1NtBrwzOWgdH+xcv89THqvst/PB7e4QJAMP/LT4vshbTpVAceyljCJQb6gwvqIs1KvctbToy3tf0oPeYqZ8bYSovSDIQDcDF+s4BTgcoTJLui2qMmJF0opQJAMpysAOWJ1efEha+1irA87PbnP0p43ZWt7wFfyWF13RjCOTpq0/l8JaKoc5ptXtYDN8VOkHxT68UBjj33REcnsA==";
//平台公钥
$platpkey="MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCehnC3YOO5muakxkL24cTgQXqj2etJjZ7Ev3+JWr440Hpy9uaTvZbJVLZLsGoelvgWGN8Z+U2a98oRk07924rs9fTB8QeiLfYKNEV0u4Tv/SXElhTClyam2qsUABdzwOIpfuqL2dTb3rE7i6JhcEi+Zqq8kJqjvN1WLZcPrhdLMQIDAQAB";

?>