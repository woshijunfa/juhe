<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="天气预报数据接口,API数据调用" />
<meta name="description" content="聚合数据，专业的API数据平台，为您提供内容标题数据接口以及调用信息，无期限免费试用再付费升级。" />
<link rel="stylesheet" type="text/css" href="/themes/v4/public/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="/themes/v4/public/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="/themes/v4/public/css/headFooter.css"/>
<link rel="stylesheet" type="text/css" href="/themes/v4/public/css/api.v5.css"/>
<title>天气预报数据接口_免费API接口调用-聚合数据</title>
<script src="/themes/v4/public/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/themes/v4/public/js/json.parse.js" type="text/javascript" charset="utf-8"></script>
<!--[if lt IE 9]>
<script src="/themes/v4/public/js/html5shiv.min.js" type="text/javascript" charset="utf-8"></script>
<![endif]-->
<!--[if IE 6]>
<script src="/themes/v4/public/js/DD_belatedPNG_0.0.8a.js"  type="text/javascript"></script>
<script>DD_belatedPNG.fix('.png_bg');</script>
<![endif]-->
</head>
<body>
    <!-- activity start   -->


<!-- 悬浮 start -->
    <!-- xuanfu end -->

	
<!--  activity end  -->

<header class="width100_v4">
	<div class="newyearbg1"></div>
	<div class="newyearbg2"></div>
        <div class="width1200_v4">
			<div class="newyearicon1"></div>
        	<div class="newyearicon2"></div>
        	<div class="newyearicon3"></div>
            <div id="headerTop_v4">
                <h1><a href="/"><img src="/themes/v4/public/images/logo.png" alt="聚合数据" /></a></h1>
                <div class="search_v4">
                    <input type="text" id="searchText_v4" name="q" placeholder="输入想要查询的数据，例如：天气预报" />
                    <input type="button" id="searchBtn_v4" value="搜索" />
                    <p class="hotWord_v4">
                        <a class="active" href="/docs/s/q/%E8%BF%9D%E7%AB%A0" rel="nofollow">违章查询</a>
                        <a href="/docs/s/q/%E8%AF%9D%E8%B4%B9" rel="nofollow">话费充值</a>
                        <a href="/docs/s/q/%E5%9F%BA%E7%AB%99" rel="nofollow">基站</a>
                        <a href="/docs/s/q/%E6%B2%B9%E5%8D%A1" rel="nofollow">加油卡</a>
                        <a href="/docs/s/q/%E7%81%AB%E8%BD%A6" rel="nofollow">火车</a>
                        <a href="/docs/s/q/%E5%A4%A9%E6%B0%94" rel="nofollow">天气预报</a>
                    </p>
                </div>
                <div class="userCenter_v4">
                
                                    <a style="color: #03c5ff;" href="/login" rel="nofollow">登录</a>
                    <a style="color: #ff9445;" href="/register" rel="nofollow">注册</a>
                                
                <p class="line_v4"></p>
                </div>
            </div>
            <nav class="clearfix">
                <a href="/" >首页</a>
                <a href="/docs" title="所有数据API" class="active">API</a>

                <!--<a href="">活动</a>-->
                <!--<a href="/docs" title="资费价格" >价格</a>-->
                <a href="/qa" title="常见问题" >常见问题</a>
                <!--<a href="/contact" >商务合作</a>-->
                <!-- <a href="http://open.juhe.cn">发布服务</a> -->
                <!--<a href="">企业服务</a>
                <a href="">聚合国际造型</a>-->
                <a class="contact_v4" href="/contact">联系我们</a>
            </nav>
        </div>
    </header>
    <script type="text/javascript">
        var searchUrl = '/docs/s/q/%40q%40';
        var loginOutUrl = '/login/logout';
        var juheIndex = '/';
    </script>
    <script src="/themes/v4/public/js/common.js"></script>

    <div id="docsapiContent" class="clearfix">
        <div id="docs_api_main">
            <div class="api_data">
                <div class="api_data_img png_bg" style="background:url(/themes/images/data/new/a73.png) center no-repeat;">
                	<!--五周年活动 icon-->
                		                	<!--五周年活动 icon end-->
                </div>
                <div class="api_data_info">
                    <h2><strong>天气预报</strong>
                                                <span class="h1_span color_disanfang">weather.com</span>
                        
                        <span class="h1_span color_mianfei">免费</span>                        <span class="h1_span color_https">支持HTTPS</span>                        
                                            </h2>
                    <p class="doc_api_decsP">全国天气预报，生活指数、实况、PM2.5等信息</p>
					<!--五周年活动 start-->
                    					<!--五周年活动 end-->
                    <div id="api_arguments" class="clearfix">
                        <div class="doc_arguments">
                            <p><b>数据ID：</b><font color="#ff9445">73</font></p>
                            <p><b>接口状态：</b><font color="#88c773"><span style="color:#88c773; ">正常</span></font></p>
                        </div>
                        <div class="doc_arguments">
                            <p><b>连接应用数：</b><font color="#777">14394</font></p>
                            <p><b>接入服务商：</b><font color="#03c5ff">weather.com</font></p>
                        </div>
                        <div class="doc_arguments docPrice">
                                                        <p><span style="color: #28da84; font-size: 16px;">免费</span><span style="color: #888; padding-left: 5px;">/无限次</span></p>
                                                        <!-- <p>使用SDK每日免费赠送 10000 次 <a class="youhuia" href="https://www.juhe.cn/docs" target="_blank" rel="nofollow">详情&gt;&gt;</a></p> -->
                        </div>
                    </div>
                    <div class="api_data_btns">
                                                
                        <a class="api_newbtn_apply" href="javascript:xlogin();" title="申请天气预报 API" data="/myData/apply/id/73">申请数据</a>
                        
                        
                        
                        <!-- <a class="api_newbtn_pdf" href="/docs/demo/id/73" target="_blank">离线文档</a> -->
                    </div>
                </div>
                
                                  <a class="unfavit" id="favita" data="73"></a>
                                <!--  -->
                

            </div>
            <!--tab-->
            <div class="docs_api_tab">
                <ul class="tabul clearfix">
                    <li id="apilists" class="active">API</li>
                    <li id="errorcode">错误码参照</li>

                    <li id="apiprice">价格与请求限制</li>

                    <li id="sdkandqa">示例代码</li>
                                        <li id="apicontact">其他相关</li>
                </ul>
            </div>
            <div class="tabDiv">
                <!--api-->
                <div style="padding-left: 0;" class="docs_api_show clearfix">
                    <ul class="das_left">
                                                 <li class="clearfix">
                            <a class="selected" href="/docs/api/id/73" title="根据城市查询天气">1.根据城市查询天气</a>
                        </li>
                                            </ul>
                    <div class="das_right">
                        <div class="simpleline"><strong>接口地址：</strong><span class="url">http://op.juhe.cn/onebox/weather/query</span></div>
                        <div class="simpleline"><strong>支持格式：</strong><span class="url">json/xml</span></div>
                        <div class="simpleline"><strong>请求方式：</strong><span class="url">http get/post</span></div>
                        <div class="simpleline"><strong>请求示例：</strong><span class="url">http://op.juhe.cn/onebox/weather/query?cityname=%E6%B8%A9%E5%B7%9E&amp;key=您申请的KEY</span></div>

                                                <div class="simpleline"><strong>接口备注：</strong><font color="">根据城市查询天气，未来5天、生活指数、PM2.5</font></div>
                        
                                                <div class="simpleline"><strong>调用样例及调试工具：</strong><a class="api_test_tools" href="/box/index/id/73" target="_blank">API测试工具</a></div>
                                                <div class="simpleline simpleTable">
                            <strong>请求参数说明：</strong>
                            <table class="api_table" border="0" cellspacing="0" cellpadding="0">
                                <tr class="title">
                                    <th width="20"></th>
                                    <th width="100">名称</th>
                                    <th width="80">类型</th>
                                    <th width="60">必填</th>
                                    <th>说明</th>
                                </tr>
                                                                  <tr>
                                    <td>&nbsp;</td>
                                    <td class="url">cityname</td>
                                    <td class="url">string</td>
                                    <td class="url">是</td>
                                    <td>要查询的城市，如：温州、上海、北京，需要utf8 urlencode</td>
                                  </tr>
                                                                    <tr>
                                    <td>&nbsp;</td>
                                    <td class="url">key</td>
                                    <td class="url">string</td>
                                    <td class="url">是</td>
                                    <td>应用APPKEY(应用详细页查询)</td>
                                  </tr>
                                                                    <tr>
                                    <td>&nbsp;</td>
                                    <td class="url">dtype</td>
                                    <td class="url">string</td>
                                    <td class="url">否</td>
                                    <td>返回数据的格式,xml或json，默认json</td>
                                  </tr>
                                                              </table>
                        </div>
                        <div class="simpleline simpleTable">
                            <strong>返回参数说明：</strong>
                            <table class="api_table" border="0" cellspacing="0" cellpadding="0">
                                <tr class="title">
                                    <th width="20"></th>
                                    <th width="100">名称</th>
                                    <th width="80">类型</th>
                                    <th>说明</th>
                                </tr>
                                                                  <tr>
                                    <td>&nbsp;</td>
                                    <td class="url">error_code</td>
                                    <td class="url">int</td>
                                    <td>返回码</td>
                                  </tr>
                                                                    <tr>
                                    <td>&nbsp;</td>
                                    <td class="url">reason</td>
                                    <td class="url">string</td>
                                    <td>返回说明</td>
                                  </tr>
                                                                    <tr>
                                    <td>&nbsp;</td>
                                    <td class="url">result</td>
                                    <td class="url">string</td>
                                    <td>返回结果集</td>
                                  </tr>
                                                              </table>
                        </div>
                                                <div class="simpleline simpleTable">
                            <b>JSON返回示例：</b>
                            <div class="prediv">
                                <pre>{
    &quot;reason&quot;: &quot;查询成功&quot;,
    &quot;result&quot;: {
        &quot;data&quot;: {
            &quot;realtime&quot;: {
                &quot;city_code&quot;: &quot;101210701&quot;,
                &quot;city_name&quot;: &quot;温州&quot;,     <font color='red'>/*城市*/</font>
                &quot;date&quot;: &quot;2014-10-15&quot;,  <font color='red'>/*日期*/</font>
                &quot;time&quot;: &quot;09:00:00&quot;,     <font color='red'>/*更新时间*/</font>
                &quot;week&quot;: 3,
                &quot;moon&quot;: &quot;九月廿二&quot;,
                &quot;dataUptime&quot;: 1413337811,
                &quot;weather&quot;: {    <font color='red'>/*当前实况天气*/</font>
                    &quot;temperature&quot;: &quot;19&quot;,     <font color='red'>/*温度*/</font>
                    &quot;humidity&quot;: &quot;54&quot;,     <font color='red'>/*湿度*/</font>
                    &quot;info&quot;: &quot;雾&quot;,
                    &quot;img&quot;: &quot;18&quot; <font color='red'>/*18是雾这种天气所对应的图片的ID，每种天气的图片需要您自己设计，或者请阅读
 https://www.juhe.cn/docs/api/id/39/aid/117*/</font>
                },
                &quot;wind&quot;: {
                    &quot;direct&quot;: &quot;北风&quot;,
                    &quot;power&quot;: &quot;1级&quot;,
                    &quot;offset&quot;: null,
                    &quot;windspeed&quot;: null
                }
            },
            &quot;life&quot;: {     <font color='red'>/*生活指数*/</font>
                &quot;date&quot;: &quot;2014-10-15&quot;,
                &quot;info&quot;: {
                    &quot;chuanyi&quot;: [     <font color='red'>/*穿衣指数*/</font>
                        &quot;较舒适&quot;,
                        &quot;建议着薄外套或牛仔衫裤等服装。年老体弱者宜着夹克衫、薄毛衣等。昼夜温差较大，注意适当增减衣服。&quot;
                    ],
                    &quot;ganmao&quot;: [    <font color='red'>/*感冒指数*/</font>
                        &quot;较易发&quot;,
                        &quot;昼夜温差较大，较易发生感冒，请适当增减衣服。体质较弱的朋友请注意防护。&quot;
                    ],
                    &quot;kongtiao&quot;: [   <font color='red'>/*空调指数*/</font>
                        &quot;较少开启&quot;,
                        &quot;您将感到很舒适，一般不需要开启空调。&quot;
                    ],
                    &quot;wuran&quot;: [     <font color='red'>/*污染指数*/</font>
                        &quot;良&quot;,
                        &quot;气象条件有利于空气污染物稀释、扩散和清除，可在室外正常活动。&quot;
                    ],
                    &quot;xiche&quot;: [     <font color='red'>/*洗车指数*/</font>
                        &quot;较适宜&quot;,
                        &quot;较适宜洗车，未来一天无雨，风力较小，擦洗一新的汽车至少能保持一天。&quot;
                    ],
                    &quot;yundong&quot;: [     <font color='red'>/*运动指数*/</font>
                        &quot;较适宜&quot;,
                        &quot;天气较好，但风力较大，推荐您进行室内运动，若在户外运动请注意防风。&quot;
                    ],
                    &quot;ziwaixian&quot;: [   <font color='red'>/*紫外线*/</font>
                        &quot;中等&quot;,
                        &quot;属中等强度紫外线辐射天气，外出时建议涂擦SPF高于15、PA+的防晒护肤品，戴帽子、太阳镜。&quot;
                    ]
                }
            },
            &quot;weather&quot;: [   <font color='red'>/*未来几天天气预报*/</font>
                {
                    &quot;date&quot;: &quot;2014-10-15&quot;,
                    &quot;info&quot;: {
                        &quot;day&quot;: [     <font color='red'>/*白天天气*/</font>
                            &quot;0&quot;,     <font color='red'>/*天气ID*/</font>
                            &quot;晴&quot;,     <font color='red'>/*天气*/</font>
                            &quot;24&quot;,     <font color='red'>/*高温*/</font>
                            &quot;东北风&quot;,     <font color='red'>/*风向*/</font>
                            &quot;3-4 级&quot;      <font color='red'>/*风力*/</font>
                        ],
                        &quot;night&quot;: [    <font color='red'>/*夜间天气*/</font>
                            &quot;0&quot;,
                            &quot;晴&quot;,
                            &quot;13&quot;,
                            &quot;东北风&quot;,
                            &quot;3-4 级&quot;
                        ]
                    },
                    &quot;week&quot;: &quot;三&quot;,
                    &quot;nongli&quot;: &quot;九月廿二&quot;
                },
                {
                    &quot;date&quot;: &quot;2014-10-16&quot;,
                    &quot;info&quot;: {
                        &quot;dawn&quot;: [
                            &quot;0&quot;,
                            &quot;晴&quot;,
                            &quot;13&quot;,
                            &quot;东北风&quot;,
                            &quot;3-4 级&quot;
                        ],
                        &quot;day&quot;: [
                            &quot;0&quot;,
                            &quot;晴&quot;,
                            &quot;25&quot;,
                            &quot;东北风&quot;,
                            &quot;3-4 级&quot;
                        ],
                        &quot;night&quot;: [
                            &quot;1&quot;,
                            &quot;多云&quot;,
                            &quot;15&quot;,
                            &quot;东北风&quot;,
                            &quot;3-4 级&quot;
                        ]
                    },
                    &quot;week&quot;: &quot;四&quot;,
                    &quot;nongli&quot;: &quot;九月廿三&quot;
                },
                {
                    &quot;date&quot;: &quot;2014-10-17&quot;,
                    &quot;info&quot;: {
                        &quot;dawn&quot;: [
                            &quot;1&quot;,
                            &quot;多云&quot;,
                            &quot;15&quot;,
                            &quot;东北风&quot;,
                            &quot;3-4 级&quot;
                        ],
                        &quot;day&quot;: [
                            &quot;1&quot;,
                            &quot;多云&quot;,
                            &quot;26&quot;,
                            &quot;东北风&quot;,
                            &quot;3-4 级&quot;
                        ],
                        &quot;night&quot;: [
                            &quot;1&quot;,
                            &quot;多云&quot;,
                            &quot;16&quot;,
                            &quot;东北风&quot;,
                            &quot;3-4 级&quot;
                        ]
                    },
                    &quot;week&quot;: &quot;五&quot;,
                    &quot;nongli&quot;: &quot;九月廿四&quot;
                },
                {
                    &quot;date&quot;: &quot;2014-10-18&quot;,
                    &quot;info&quot;: {
                        &quot;dawn&quot;: [
                            &quot;1&quot;,
                            &quot;多云&quot;,
                            &quot;16&quot;,
                            &quot;东北风&quot;,
                            &quot;3-4 级&quot;
                        ],
                        &quot;day&quot;: [
                            &quot;1&quot;,
                            &quot;多云&quot;,
                            &quot;26&quot;,
                            &quot;东风&quot;,
                            &quot;3-4 级&quot;
                        ],
                        &quot;night&quot;: [
                            &quot;1&quot;,
                            &quot;多云&quot;,
                            &quot;18&quot;,
                            &quot;东风&quot;,
                            &quot;3-4 级&quot;
                        ]
                    },
                    &quot;week&quot;: &quot;六&quot;,
                    &quot;nongli&quot;: &quot;九月廿五&quot;
                },
                {
                    &quot;date&quot;: &quot;2014-10-19&quot;,
                    &quot;info&quot;: {
                        &quot;dawn&quot;: [
                            &quot;1&quot;,
                            &quot;多云&quot;,
                            &quot;18&quot;,
                            &quot;东风&quot;,
                            &quot;3-4 级&quot;
                        ],
                        &quot;day&quot;: [
                            &quot;1&quot;,
                            &quot;多云&quot;,
                            &quot;27&quot;,
                            &quot;东风&quot;,
                            &quot;3-4 级&quot;
                        ],
                        &quot;night&quot;: [
                            &quot;1&quot;,
                            &quot;多云&quot;,
                            &quot;19&quot;,
                            &quot;东南风&quot;,
                            &quot;3-4 级&quot;
                        ]
                    },
                    &quot;week&quot;: &quot;日&quot;,
                    &quot;nongli&quot;: &quot;九月廿六&quot;
                },
                {
                    &quot;date&quot;: &quot;2014-10-20&quot;,
                    &quot;info&quot;: {
                        &quot;dawn&quot;: [
                            &quot;1&quot;,
                            &quot;多云&quot;,
                            &quot;19&quot;,
                            &quot;东南风&quot;,
                            &quot;3-4 级&quot;
                        ],
                        &quot;day&quot;: [
                            &quot;1&quot;,
                            &quot;多云&quot;,
                            &quot;27&quot;,
                            &quot;东南风&quot;,
                            &quot;3-4 级&quot;
                        ],
                        &quot;night&quot;: [
                            &quot;2&quot;,
                            &quot;阴&quot;,
                            &quot;18&quot;,
                            &quot;南风&quot;,
                            &quot;3-4 级&quot;
                        ]
                    },
                    &quot;week&quot;: &quot;一&quot;,
                    &quot;nongli&quot;: &quot;九月廿七&quot;
                },
                {
                    &quot;date&quot;: &quot;2014-10-21&quot;,
                    &quot;info&quot;: {
                        &quot;dawn&quot;: [
                            &quot;2&quot;,
                            &quot;阴&quot;,
                            &quot;18&quot;,
                            &quot;南风&quot;,
                            &quot;3-4 级&quot;
                        ],
                        &quot;day&quot;: [
                            &quot;1&quot;,
                            &quot;多云&quot;,
                            &quot;26&quot;,
                            &quot;东北风&quot;,
                            &quot;3-4 级&quot;
                        ],
                        &quot;night&quot;: [
                            &quot;2&quot;,
                            &quot;阴&quot;,
                            &quot;17&quot;,
                            &quot;&quot;,
                            &quot;微风&quot;
                        ]
                    },
                    &quot;week&quot;: &quot;二&quot;,
                    &quot;nongli&quot;: &quot;九月廿八&quot;
                }
            ],
            &quot;pm25&quot;: {    <font color='red'>/*PM2.5*/</font>
                &quot;key&quot;: &quot;Wenzhou&quot;,
                &quot;show_desc&quot;: 0,
                &quot;pm25&quot;: {
                    &quot;curPm&quot;: &quot;97&quot;,
                    &quot;pm25&quot;: &quot;72&quot;,
                    &quot;pm10&quot;: &quot;97&quot;,
                    &quot;level&quot;: 2,
                    &quot;quality&quot;: &quot;良&quot;,
                    &quot;des&quot;: &quot;可以接受的，除极少数对某种污染物特别敏感的人以外，对公众健康没有危害。&quot;
                },
                &quot;dateTime&quot;: &quot;2014年10月15日09时&quot;,
                &quot;cityName&quot;: &quot;温州&quot;
            },
            &quot;date&quot;: null,
            &quot;isForeign&quot;: 0
        }
    },
    &quot;error_code&quot;: 0
}</pre>
                            </div>
                        </div>
                                                                    </div>
                </div>

                <!--error-->
                <div class="docs_api_show">
                    <div class="simpleline simpleTable">
                        <b>服务级错误码参照(error_code)：</b>
                        <table class="api_table" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th width="20">&nbsp;</th>
                                <th width="200">错误码</th>
                                <th>说明</th>
                            </tr>
                                                          <tr>
                                <td >&nbsp;</td>
                                <td class="url">207301</td>
                                <td class="text">错误的查询城市名</td>
                                <!--<td class="url"></td>-->
                              </tr>
                                                            <tr>
                                <td >&nbsp;</td>
                                <td class="url">207302</td>
                                <td class="text">查询不到该城市的相关信息</td>
                                <!--<td class="url"></td>-->
                              </tr>
                                                            <tr>
                                <td >&nbsp;</td>
                                <td class="url">207303</td>
                                <td class="text">网络错误，请重试</td>
                                <!--<td class="url"></td>-->
                              </tr>
                                                      </table>
                    </div>
                    <div class="simpleline simpleTable">
                        <b>系统级错误码参照：</b>
                        <table class="api_table" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th width="20">&nbsp;</th>
                                <th width="200">错误码</th>
                                <th>说明</th>
                                <th width="150">旧版本（resultcode）</th>
                            </tr>
                                                          <tr>
                                <td >&nbsp;</td>
                                <td class="url">10001</td>
                                <td class="text">错误的请求KEY</td>
                                <td class="url">101</td>
                              </tr>
                                                            <tr>
                                <td >&nbsp;</td>
                                <td class="url">10002</td>
                                <td class="text">该KEY无请求权限</td>
                                <td class="url">102</td>
                              </tr>
                                                            <tr>
                                <td >&nbsp;</td>
                                <td class="url">10003</td>
                                <td class="text">KEY过期</td>
                                <td class="url">103</td>
                              </tr>
                                                            <tr>
                                <td >&nbsp;</td>
                                <td class="url">10004</td>
                                <td class="text">错误的OPENID</td>
                                <td class="url">104</td>
                              </tr>
                                                            <tr>
                                <td >&nbsp;</td>
                                <td class="url">10005</td>
                                <td class="text">应用未审核超时，请提交认证</td>
                                <td class="url">105</td>
                              </tr>
                                                            <tr>
                                <td >&nbsp;</td>
                                <td class="url">10007</td>
                                <td class="text">未知的请求源</td>
                                <td class="url">107</td>
                              </tr>
                                                            <tr>
                                <td >&nbsp;</td>
                                <td class="url">10008</td>
                                <td class="text">被禁止的IP</td>
                                <td class="url">108</td>
                              </tr>
                                                            <tr>
                                <td >&nbsp;</td>
                                <td class="url">10009</td>
                                <td class="text">被禁止的KEY</td>
                                <td class="url">109</td>
                              </tr>
                                                            <tr>
                                <td >&nbsp;</td>
                                <td class="url">10011</td>
                                <td class="text">当前IP请求超过限制</td>
                                <td class="url">111</td>
                              </tr>
                                                            <tr>
                                <td >&nbsp;</td>
                                <td class="url">10012</td>
                                <td class="text">请求超过次数限制</td>
                                <td class="url">112</td>
                              </tr>
                                                            <tr>
                                <td >&nbsp;</td>
                                <td class="url">10013</td>
                                <td class="text">测试KEY超过请求限制</td>
                                <td class="url">113</td>
                              </tr>
                                                            <tr>
                                <td >&nbsp;</td>
                                <td class="url">10014</td>
                                <td class="text">系统内部异常<font color=red>(调用充值类业务时，请务必联系客服或通过订单查询接口检测订单，避免造成损失)</font></td>
                                <td class="url">114</td>
                              </tr>
                                                            <tr>
                                <td >&nbsp;</td>
                                <td class="url">10020</td>
                                <td class="text">接口维护</td>
                                <td class="url">120</td>
                              </tr>
                                                            <tr>
                                <td >&nbsp;</td>
                                <td class="url">10021</td>
                                <td class="text">接口停用</td>
                                <td class="url">121</td>
                              </tr>
                                                      </table>
                    </div>
                    <div class="simpleline simpleTable">
                        <b>错误码格式说明（示例：200201）：</b>
                        <table class="api_table" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th width="20">&nbsp;</th>
                                <th width="200">2</th>
                                <th width="200">002</th>
                                <th>01</th>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>服务级错误（1为系统级错误）</td>
                                <td>服务模块代码(即数据ID)</td>
                                <td>具体错误代码</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!--price-->
                <div class="docs_api_show">
                                                                    <div class="simpleline simpleTable">
                            <b>《天气预报》资费说明：</b>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" class="api_table">
                                  <tr class="title">
                                    <th width="20">&nbsp;</th>
                                    <th width="200">名称</th>
                                    <th width="100">价格</th>
                                    <th width="100">次数</th>
                                    <th>说明</th>
                                  </tr>
                                  <tr>
                                    <td >&nbsp;</td>
                                    <td class="url" colspan="4">本数据接口免费使用</td>
                                  </tr>
                        </table>
                        </div>
                                                                <div class="simpleline simpleTable">
                        <b>为什么选择聚合数据？我们来做个比较!</b>
                        <table class="api_table" border="0" cellspacing="0" cellpadding="0">
                             <tr>
                                <td width="180">&nbsp;购买聚合数据的服务支出 </td>
                                <td>&lt;&lt;</td>
                                <td>服务器(600元/月)+带宽(100元/月)+技术人员(6000元/月)+...</td>
                              </tr>
                        </table>
                    </div>

                </div>

                <!--demo-->
                <div class="docs_api_show">

                    <div class="simpleline simpleTable">
                        <b>完整教学代码示例：</b>
                                                <table id="code_table" class="api_table" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th width="20">&nbsp;</th>
                                <th width="100">语言</th>
                                <th>标题</th>
                                <th width="120">提供者</th>
                                <th width="200">时间</th>
                            </tr>
                        </table>
                                            </div>

                    <div class="simpleline simpleTable">
                        <b>常见问题：</b>
                        <table id="code_table" class="api_table" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th width="20">&nbsp;</th>
                                <th width="200">内容</th>
                                <th>详细</th>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td class="url">常见问题:</td>
                                <td class="url"><a href="http://www.juhe.cn/qa/index/1467878592" class="blue" target="_blank">http://www.juhe.cn/qa/index/1467878592</a></td>
                            </tr>
                        </table>
                    </div>

                </div>

                <!--update-->
                                <!--
                <div class="docs_api_show">
                    <div class="simpleline simpleTable">
                        <b>更新动态：</b>
                        <table class="api_table" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <th width="20">&nbsp;</th>
                                <th width="350">内容</th>
                                <th>时间</th>
                            </tr>
                                                        <tr>
                                <td>&nbsp;</td>
                                <td>暂无该数据的更新记录！</td>
                                <td>&nbsp;</td>
                            </tr>
                                                    </table>
                    </div>
                </div> -->

                <!--other-->
                <div class="docs_api_show">
                    <div class="simpleline simpleTable">
                        <b>其他相关内容</b>
                        <table class="api_table" border="0" cellspacing="0" cellpadding="0">
                            <tr class="title">
                                <td width="40">&nbsp;</td>
                                <td width="200">内容</td>
                                <td>详细</td>
                            </tr>
                            <tr>
                                <td >&nbsp;</td>
                                <td class="text">接口测试:</td>
                                <td class="text"><a href="/box/index/id/73" class="blue" target="_blank">API测试工具</a></td>
                            </tr>
                            <tr>
                                <td >&nbsp;</td>
                                <td class="text">技术支持:</td>
                                <td class="url">info@juhe.cn</td>
                            </tr>
                            <tr>
                                <td >&nbsp;</td>
                                <td class="text">QQ交流群:</td>
                                <td class="url"><a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=99a9921f13d308198750305839c99a944ef21f06e6518cc328cdd16a1b0dec79">416149343</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=e17502cc91127bd7c14888136175bff3e5cc059133c55d93b0439d3d5f1cce47">197290285</a>(已满)
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <a target="_blank" class="blue" href="http://shang.qq.com/wpa/qunwpa?idkey=ebeea1a768390bdd129c9f1d094e1e98b398e02bfb02590948842a2032ec38b0">264591694</a>(已满)
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <a target="_blank" class="blue" href="http://shang.qq.com/wpa/qunwpa?idkey=d3659d3c1741d65eacf14b381033369ce099212e204ace93caf809747437f783">186225860</a>(已满)</td>
                            </tr>
                            <tr>
                                <td >&nbsp;</td>
                                <td class="text">联系电话:</td>
                                <td class="url">0512-62391880</td>
                            </tr>
                            <tr>
                                <td >&nbsp;</td>
                                <td class="text">在线客服QQ:</td>
                                <td class="url"><a href="http://crm2.qq.com/page/portalpage/wpa.php?uin=800076065&f=1&ty=1&aty=0&a=&from=6" target="_blank">800076065</a></td>
                            </tr>
                            <tr>
                                <td >&nbsp;</td>
                                <td class="text">商务合作QQ:</td>
                                <td class="url">603866358</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--right-->
        <div id="doc_api_right">
            <h3>推荐接口<span>/API</span></h3>
            <ul class="tuijianapi">
                                <li>
                    <a class="tuijianimg" href="/docs/api/id/34"><img src="/themes/images/data/new/a34.png" /></a>
                    <p class="apiname"><a href="/docs/api/id/34">水质量</a></p>
                    <p class="apides">流域查询水质量，监测站点查询水质量
</p>
                </li>
                                <li>
                    <a class="tuijianimg" href="/docs/api/id/39"><img src="/themes/images/data/new/a39.png" /></a>
                    <p class="apiname"><a href="/docs/api/id/39">全国天气预报</a></p>
                    <p class="apides">全国天气查询API</p>
                </li>
                                <li>
                    <a class="tuijianimg" href="/docs/api/id/228"><img src="/themes/images/data/new/a228.png" /></a>
                    <p class="apiname"><a href="/docs/api/id/228">灾害预警</a></p>
                    <p class="apides">查询气象台发布的灾害类型、级别、时间等预警信息</p>
                </li>
                                <li>
                    <a class="tuijianimg" href="/docs/api/id/224"><img src="/themes/images/data/new/a224.png" /></a>
                    <p class="apiname"><a href="/docs/api/id/224">城市污染查询</a></p>
                    <p class="apides">用于查询城市或附近的污染企业、污染物类型和污染物排放情况</p>
                </li>
                            </ul>
            <h3>活动推荐<span>/Activity</span></h3>
            <ul class="apiActivity">
                <!--<li>
                    <a href="https://www.juhe.cn/docs/api/id/54" target="_blank"><img src="/themes/v4/public/images/apiactivity2.png"/></a>
                </li>-->
                                <li>
                    <a href="https://free.juhe.cn" target="_blank" title="免费数据第二波"><img src="https://juheimgs.oss-cn-beijing.aliyuncs.com/banner/201606/57639730a1606.png" border="0"/></a>
                </li>
                            </ul>
        </div>
    </div>

<div class="clear"></div>
<footer class="width100_v4">
        <div class="width1200_v4 footerContent_v4 clearfix">
            <div class="footer1_v4">
                <div class="footerLogo"><a href="https://www.juhe.cn"><img width="238" height="33" src="/themes/v4/public/images/footerLogo.png" alt="聚合数据"/></a></div>
                <p>京 ICP 备 16034375 号ShareApi©版权所有</p>
                <p><a href="http://www.miitbeian.gov.cn/" target="_blank" style="color: #999;">苏ICP备14006450号-3</a></p>
                <div class="footerContact">400-8827-715</div>
            </div>
            <dl class="footerDl_v4">
                <dt>首页</dt>
                <dd><a href="/docs" rel="nofollow">API</a></dd>
                <dd><a href="/docs" rel="nofollow">价格</a></dd>
                <dd><a href="javascript:void(0);" rel="nofollow">活动</a></dd>
                <dd><a href="/contact" rel="nofollow">商务合作</a></dd>
                <!--<dd><a href="">企业服务</a></dd>-->
            </dl>
            <dl class="footerDl_v4">
                <dt>关于</dt>
                <dd><a href="/qa" rel="nofollow">问题&支持</a></dd>
                <dd><a href="https://juheimg.oss-cn-hangzhou.aliyuncs.com/docs/%E8%81%9A%E5%90%88%E6%95%B0%E6%8D%AEAPI%E7%94%B3%E8%AF%B7%E4%BD%BF%E7%94%A8%E6%B5%81%E7%A8%8B.pdf" rel="nofollow" target="_blank">新手引导</a></dd>
                <dd><a href="/contact" rel="nofollow">联系我们</a></dd>
                <dd><a href="/job" rel="nofollow">聚合招聘</a></dd>
                <dd><a href="/privacy" rel="nofollow">隐私政策</a></dd>
                <dd><a href="/legal" rel="nofollow">服务条款</a></dd>
                <dd><a href="/links" rel="nofollow">友情链接</a></dd>
                <dd><a href="/complaints" rel="nofollow">客户投诉</a></dd>
            </dl>
            <dl class="footerDl_v4" style="border-right: 1px solid #e7e7e7;">
                <dt>聚合工具</dt>
                <dd><a href="/box">聚盒子</a></dd>
                <dd><a href="https://www.juhe.cn/d/cellmap">聚合基站</a></dd>
                <dd><a href="http://www.wodiche.cn" target="_blank">车辆违章查询</a></dd>
                <dd><a href="http://lbs.juhe.cn">LBS聚合</a></dd>
                <dd><a href="http://tools.juhe.cn">聚合工具</a></dd>
                <dd><a href="https://code.juhe.cn">聚合代码</a></dd>
                <dd><a href="/foreign">国外API检索</a></dd>
            </dl>
            <div class="juheCode_v4">
                <img src="/themes/v4/public/images/juheCodeBg.png" alt="聚合数据微信"/>
                <p>关注官方微信</p>
            </div>
        </div>
</footer>
<style type="text/css">
#juhegoTop{height: 230px; width: 50px; position: fixed; _position: absolute; bottom: 66px; right: 20px; text-align: center; z-index:9;}
#juhegoTop a{display: block; height: 50px; width: 50px; background: url(/themes/v4/public/images/goTop.png) no-repeat;}
#juhegoTop li{position: relative; list-style: none; width: 50px; height: 50px;}
#tools_qq a{background-position: center -5px;}
#tools_contact{margin: 6px 0;}
#tools_contact a{background-position: center -65px;}
#tools_feedback a{background-position: center -125px;}
#tools_goTop a{background-position: center -185px;}
#tools_qq a:hover{background-position: center -245px;}
#tools_contact a:hover{background-position: center -305px;}
#tools_feedback a:hover{background-position: center -365px;}
#tools_goTop a:hover{background-position: center -425px;}
#juhegoTop span{display: none; width: 82px; height: 27px; padding-right:6px; line-height: 27px; background: url(/themes/v4/public/images/topTipsBg.png) no-repeat; font-size: 12px; color: #fff; font-family: "microsoft yahei"; text-align: center; position: absolute; top: 12px; right: 55px;}
#tools_goTop{display: none;margin-top: 6px;}
</style>
<ul id="juhegoTop" style="display:none">
	<li id="tools_qq">
		<a rel="nofollow" href="http://crm2.qq.com/page/portalpage/wpa.php?uin=800076065&f=1&ty=1&aty=0&a=&from=6" target="_blank"></a>
		<span>QQ客服</span>
	</li>
	<li id="tools_contact">
		<a rel="nofollow" href="https://www.juhe.cn/contact" target="_blank"></a>
		<span>联系我们</span>
	</li>
	<li id="tools_feedback">
		<a rel="nofollow" href="https://www.juhe.cn/qa" target="_blank"></a>
		<span>问题反馈</span>
	</li>
	<li id="tools_goTop">
		<a rel="nofollow" href="javascript:;"></a>
		<span>返回顶部</span>
	</li>
</ul>

<!-- activity xuanfu -->

<script type="text/javascript">
$(function(){

	$('#juhegoTop li a').mouseover(function(){
		$(this).next('span').fadeIn(300);
	}).mouseout(function(){
		$(this).next('span').hide();
	});

	//返回顶部
	$(window).scroll(function(){
		if ($(window).scrollTop() > 100 ){
			$("#tools_goTop").fadeIn(300);
			$('#tools_goTop span').hide();
		} else {
			$("#tools_goTop").fadeOut(300);
		};
	});

	$("#tools_goTop a").click(function(){
		$(window).scrollTop(0);
	});
});
</script>
<script type="text/javascript">
	var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
	document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F935d53e462220c223a1e7cbb7f16f1b9' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F5d12e2b4eed3b554ae941c0ac43c330a' type='text/javascript'%3E%3C/script%3E"));
</script>


</body>
</html>
<script type="text/javascript">
tabs(".tabul", "active", ".tabDiv");
//选项卡
function tabs(tabTit,on,tabCon){
    $(tabCon).each(function(){
      $(this).children().eq(0).show();
      });
    $(tabTit).each(function(){
      $(this).children().eq(0).addClass(on);
      });
    $(tabTit).children().click(function(){
        $(this).addClass(on).siblings().removeClass(on);
            var index = $(tabTit).children().index(this);
        $(tabCon).children().eq(index).show().siblings().hide();
    });
}
</script>
<script src="/themes/js/layer.min.js" type="text/javascript"></script>
<script type="text/javascript">
function xlogin(){
    $.layer({
            type: 2,
            shadeClose: true,
            title: false,
            closeBtn: [0, false],
            shade: [0.65, '#000'],
            border: [1,0.5,'#ccc'],
            //offset: ['40px',''],
            area: ['460px', '452px'],
            iframe: {src: '/login/mini'}
        });
}
function loginBack(obj){
    var url = $(".api_newbtn_apply").attr("data");
    layer.closeAll();
    window.location.href=url;
}

</script>
<script>
$(document).ready(function(){
    $("#favita").click(function(){
        var id = $(this).attr("data");
        $.post('/docs/dofav',{id:id},function(e){
            var obj = json_parse(e);
            var code = obj.code;
            if(code == '-2'){
                window.location.href='/login';
            }else if(code == '1'){
                var sta = obj.sta;
                if(sta =='1'){
                    $("#favita").removeClass("unfavit").addClass("favit");
                }else{
                    $("#favita").removeClass("favit").addClass("unfavit");
                }
            }
        })
    })

    var did = 73;
    $.getJSON("https://code.juhe.cn/api/docsByDid?callback=?", {
        "did" : did
      }, function(data) {
          var code = data.code;
          if(code == '1'){
              var list = data.list;
              var codehtml = '<tr class="title"><td width="40">&nbsp;</td><td width="100">语言</td><td>标题</td><td>提供者</td><td>时间</td></tr>';
              for(var j in list){
                  codehtml +='<tr>'+
                    '<td >&nbsp;</td>'+
                    '<td class="url">'+list[j].language+'</td>'+
                    '<td ><a href="'+list[j].url+'" class="blue" target="_blank">'+list[j].title+'</a></td>'+
                    '<td >'+list[j].nickname+'</td>'+
                    '<td >'+list[j].addtime+'</td>'+
                '</tr>';
              }
              $("#code_table").html(codehtml);
          }else{
              var codehtml = '<tr class="title"><td width="40">&nbsp;</td><td width="100">语言</td><td>标题</td><td>提供者</td><td>时间</td></tr>';
              codehtml +="<tr><td colspan='5' align='center'>暂无教学代码，小聚正在拼命添加中....</td></tr>";
              $("#code_table").html(codehtml);
          }
      });
})
</script>
