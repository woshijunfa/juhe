<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="keywords" content="API数据，开发者数据定制，免费数据调用，聚合数据">
<meta name="description" content="提供30大类，100种以上基础数据API服务，国内最大的基础数据API服务提供商">
<link type="text/css" href="/themes/css/default.css" rel="stylesheet"/>
<!--<link type="text/css" href="/themes/css/v3/header.css" rel="stylesheet"/>-->
<script type="text/javascript" src="/themes/js/jquery.min.js"></script>
<link rel="shortcut icon" href="/favicon.ico" />
<title>简易开发指南Android v2.x-聚合数据SDK-首页</title>
<style>
/* CSS Document */
::selection {
background: #5dbaff;
color: #fff;
}
       
::-moz-selection {
background: #5dbaff;
color: #fff;
}
       
::-webkit-selection {
background: #5dbaff;
color: #fff;
}

.dev{ width:1200px; margin:0 auto; margin-top:10px; margin-bottom:50px;}
.dev .dev-category{ width:220px; float:left; }

.dev .dev-main{ width:960px; float:right; }


.dev .dev-category ul{ padding:0; margin:0;}
.dev .dev-category ul li { font-size:14px;line-height:40px;border-right:1px solid #FFF; border-left:1px solid #FFF; border-top:1px solid #FFF; background:url(/themes/images/jsdk/bgTitle1.png) left bottom repeat-x; border-bottom:1px solid #FFF; color:#666; text-indent:10px; margin-bottom:5px;}

.dev .dev-category ul li:hover{ background:#f9f8f7; border:1px solid #ededed}

.dev .dev-category ul li.sel{background:url(/themes/images/jsdk/repeatblue.png) left -34px no-repeat #f9f8f7; border:0; border-bottom:1px dotted #ededed; }

.dev .dev-category ul li a{ color:#666}

.dev .dev-category ul li.sel a{ color:#39C}

.applyInJuheBtn{ display:block; width:95%; margin:0 auto; height:35px; color:#FFF; background:#21a1ff; text-align:center; font-size:14px; line-height:35px;margin-top:50px; border-radius:2px;}
.searcha{ width:95%; margin:0 auto; border:1px solid #ededed; height:40px; line-height:40px; margin-bottom:20px; border-radius:2px;}
.searcha:hover{
	border-color:rgba(82,168,236,0.8);
	outline:0;
	outline:thin dotted \9;
	-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(82,168,236,0.6);
	-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(82,168,236,0.6);
	box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(82,168,236,0.6)
}
.searcha #keyword:focus{
	-webkit-box-shadow:none;
	-moz-box-shadow:none;
	box-shadow:none;
	border:none;
	outline:none;
}
.searcha #keyword{ 
	width:180px;  height:30px; line-height:30px; margin-top:4px;  text-indent:10px; 
	-webkit-box-shadow:none;
	-moz-box-shadow:none;
	box-shadow:none;
	border:none;
	outline:none;
}



.dev-main .dstitle{ 
		height:40px; line-height:40px; background:url(/themes/images/jsdk/rpbg.png) left top repeat-x;
		font-size:14px; font-weight:bold; color:#333;
		text-indent:20px;
		width:100%;
}
.dev-main .dsinfo{
	line-height:25px;
	padding-left:20px;
	padding-right:20px;
	color:#666;
}
.dev-main .dsinfo a{ color:#39C}

.paramsTable{ margin-top:20px;}
.paramsTable td{ border-top:1px solid #eeeeee; border-left:1px solid #eeeeee; height:35px;}

.paramsTable td.last{border-bottom:1px solid #eeeeee;}
.paramsTable td.right{ border-right:1px solid #eeeeee;}

.sdkBtn{ display:block; line-height:25px; text-align:center;background:#8dc11e; color:#FFF; width:110px; margin:5px 10px 5px 10px;}
.sdkBtnb{ display:block; line-height:25px; text-align:center;background:#5dbaff; color:#FFF; width:110px; margin:5px 10px 5px 10px;}

.api_table{ width:100%; font-family:"Courier New", Courier, monospace}
.api_table tr td { line-height:25px; border-bottom:1px dotted #CCCCCC; color:#666; font-family:"Courier New", Courier, monospace}
.api_table tr.title{  height:30px; line-height:30x; color:#333; font-weight:bold;}

.dsinfo pre { font-family:"Courier New", Courier, monospace}



.current_pos{ width:1200px; margin:0 auto; line-height:50px; color:#666; text-indent:2px;}
</style>

</head>

<body>
<script language="javascript">
$(document).ready(function(e) {
  $('.tools').mouseenter(function(){
		$('.menu .tools a').css('background', '#0087c0');
	}).mouseleave(function(){
		$('.menu .tools a').css('background', '#009fe3');
	});
	
	$('.tools .tool_select a').each(function(index){
		$(this).mouseover(function(){
			$(this).css('background','#0c81b2');
		}).mouseout(function(){
			$(this).css('background','#0087c0');
		});
	});
	
	$("input[name=q]").focus(function(){
		document.onkeydown = function(e){ 
			var ev = document.all ? window.event : e;
			if(ev.keyCode==13) {
				$("#juheapi_btn").click();
			}
		}
	})
	
	
	
	$("#juheapi_btn").click(function(){
		var q = $("input[name=q]").val();
		q=q.replace(/\//g,'');
		
		//$("#juheapi_search").css({background:"#FFFFFF"});
		if(q.length==''){
			//$("#juheapi_search").css({background:"#fae1dc"}).focus();
			$("#juheapi_search").focus();
			$("#juheapi_search").val('');
			return false;
		}
		
		var searchUrl = '/docs/s/q/%40q%40';
		searchUrl=searchUrl.replace(/%40q%40/,encodeURIComponent(q));
		window.location.href=searchUrl;
	})
});
function logout(){
	$.getJSON('/login/logout',function(obj){
		window.location.href='/';
	})
}
</script>
<link type="text/css" rel="stylesheet" href="/themes/v201502/css/header.css">
<!--header and menu start -->
	<div id="header">
		<div class="header">
			<h1 class="png_bg">聚合数据</h1>
			<ul class="clear">
            
            	                <li class="index_login"><a href="/login" title="登录聚合数据">登录</a></li>
				<li class="index_reg"><a href="/register" title="注册成为聚合会员">注册</a></li>
                				<li class="iphone"><a class="png_bg" href="http://m.shareapi.com">手机触屏版</a></li>
                
			</ul>
			<!--search api-->
            			<div id="juheapi_form">
				<label>搜索</label>
				<input  id="juheapi_search" style="border:0;" name="q" placeholder="输入想要查询的数据，比如：基站" autocomplete="off"/>
				<input id="juheapi_btn" type="button" value=""/>
			</div>
            		</div>
	</div>
	
	<div id="menu">
		<div class="menu">
			<ul class="clear">
				<li ><a href="/" title="聚合数据首页"><strong>首页</strong><span>Home</span></a></li>
				<li ><a href="/docs" title="数据接口"><strong>数据接口</strong><span>API</span></a></li>
                <li class="tools" style="zoom:1; z-index:999">
					<a href="javascript:void(0)"><strong>聚合工具</strong><span>Tools</span><em class="png_bg"></em></a>
					<div class="tool_select" >
						<a title="聚合工具" target="_blank" href="/box">聚盒子</a>
						<a title="基站查询" href="http://www.shareapi.com/d/cellmap/index.php">聚合基站</a>
						<a href="http://wz.shareapi.com"  title="全国车辆违章查询接口">车辆违章查询</a>
						<a title="LBS聚合" target="_blank" href="http://lbs.shareapi.com">LBS聚合</a>
						<a title="聚合工具" target="_blank" href="http://tools.shareapi.com">聚合工具</a>
						<a title="聚合软件" target="_blank" href="http://soft.shareapi.com">聚合软件</a>
						<a title="国外API检索" target="_blank" href="/foreign">国外API检索</a>
					</div>
				</li>
				
                <li style="border-right:1px solid #0091d0;"  ><a href="/docs" title="资费说明"><strong>资费问题</strong><span>Pricing</span></a></li>
				
			</ul>
		</div>
	</div>
	
	<!--<style type="text/css">
#alertAward{display: none;}
.alertAward{position:relative;font-family:"microsoft yahei"; border-radius: 8px; color:#333; font-size:12px;width: 550px; padding:20px 50px; height: 442px; background: url(http://img.shareapi.com/www/activity/201503/juhePrize.png) 30px 35px no-repeat;}
.alertInfo{padding:210px 0 0 0;}
.alertInfo h3{color: #f35353; font: bold 14px/24px "microsoft yahei";}
.alertInfo p{padding-bottom: 10px;}
#towCode{position: absolute; top: 50px; right: 50px;}
</style>
<script src="/themes/js/layer.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">

$(function(){
    $('#awardClick').click(function(){
        code_num($('#alertAward').html());
    });
});

function code_num(htmlCode){
    $.layer({
        type: 1,
        shadeClose: true,
        title: false,
        area: ['auto', 'auto'],
        border: [2, 1, '#fff'],
        shade: [0.75, '#000'],
        bgcolor: '#fff',
        closeBtn: [0, false],
        shift: 'top',
        page: {
            html: htmlCode
        }
    });
}
</script>

<div id="awardClick" style="position: fixed;_position:absolute; top: 300px; right: 0; width: 120px; cursor: pointer; z-index:2;">
	<img width="120px" src="http://img.shareapi.com/www/activity/201503/juhePrize.png"/>
</div>
<div id="alertAward">
	<div class="alertAward">
		<div class="alertInfo">
			<h3>抽奖方式</h3>
			<p>新用户关注聚合数据官方微博和微信</p>
			<h3>抽奖人数</h3>
			<p>即日起每周在两个平台共抽取十名新关注幸运用户。</p>
			<h3>奖品内容</h3>
			<p>蜗牛数据线 2名、U盘2名、笔记本6名。</p>
			<h3>领奖方式</h3>
			<p>后台留下地址和联系方式，人工寄出。</p>
			<h3 style="font-size: 12px;">PS：此活动将作为常期活动进行，欢迎大家踊跃参与！</h3>
		</div>
		<img id="towCode" src="http://img.shareapi.com/www/activity/201503/juheTwoCode.png"/>
	</div>
</div>
-->
	
	<script src="/themes/js/SuperSlide.js" type="text/javascript"></script>
	<script id="jsID" type="text/javascript">
		jQuery(".menu").slide({ 
			type:"menu",
			titCell:".tools",
			targetCell:".tool_select",
			effect:"slideDown",
			delayTime:300 ,
			triggerTime:0,
			returnDefault:true
		});
	</script>
<!--header and menu end -->
<div class="current_pos">您当前的位置：聚合数据SDK</div>
<div class="dev">
    	<div class="dev-category" id="dev-category">
        	<!--<div class="searcha">
            	<input type="text" id="keyword" placeholder="搜索"><img src="/themes/dev/images/searcha.png" border="0" align="abstop">
            </div>-->
			<ul>
    <li ><a href="/juhesdk/sdk">聚合数据SDK</a></li>
    <li ><a href="/juhesdk">概述</a></li>
    <li ><a href="/juhesdk/openid">获取密钥</a></li>
    <li id="devdocs">Android SDK 开发指南</li>
     <li class="sel"><a href="/juhesdk/adocs/v/2">&nbsp;└&nbsp; SDK v2.x</a></li>
    <li ><a href="/juhesdk/adocs">&nbsp;└&nbsp; SDK v1.x</a></li>
    <li id="devdocs">iOS SDK 开发指南</li>
    <li ><a href="/juhesdk/idocs/v/2">&nbsp;└&nbsp; SDK v2.x</a></li>
    <li ><a href="/juhesdk/wdocs">&nbsp;└&nbsp; SDK v1.x</a></li>
    <li id="devdocs">Windows Phone SDK 开发指南</li>
    <li ><a href="/juhesdk/wdocs/v/1">&nbsp;└&nbsp; SDK v1.x</a></li>
    <li ><a href="/juhesdk/update">更新日志</a></li>
    <li ><a href="/juhesdk/download">相关下载</a></li>
</ul>
<!--<script language="javascript" src="http://www.shareapi.com/themes/js/jquery.min.js"></script>-->
<script language="javascript">
$(document).ready(function(e) {
    $("#devdocs").click(function(){
		$(".subli").slideToggle();
	})
});
</script>
            
        </div>
        <div class="dev-main">
        	<div class="dstitle">Android SDK V2.0 简易开发指南</div>
            <div class="dsinfo">
            	该文档仅适用于Android版本聚合数据SDK，下面是简易的开发流程说明。详细问题您可以通过 <a href="/juhesdk/download">相关下载</a> 下载相应的文档、示例包、SDK。
          </div>
            
            <div class="dstitle" style="margin-top:30px;">一、开发工具</div>
            <div class="dsinfo">
            	Android开发工具有很多，开发者可根据自己的喜好进行选择。在此，我们推荐开发者使用Eclipse作为自己的开发工具，本套开发指南也是针对Eclipse开发环境下进行编写的。
            </div>
            
            <div class="dstitle" style="margin-top:30px;">二、工程配置</div>
            <div class="dsinfo">
            	将juhe_sdk_v_X_X.jar以及armeabi文件夹(内包含libJuheSDK_v_X_X.so)添加到工程中libs文件夹下,Android工程会自动将libs文件夹下的jar导入。<br/>
            </div>
            <div class="dsinfo">
            	通过以上两步操作后，您就可以正常使用短信验证SDK为您提供的全部功能了。<br/>
                <span style="color:#F63">注意：由于adt插件升级，若您使用Eclipse adt 22的话，需要对开发环境进行相应的设置，方法如下：<br/>
				1. 在Eclipse 中选中工程，右键选 Properties->Java Build Path->Order and Export 使 Android Private Libraries处于勾选状态；<br/>
				2. Project -> clean-> clean all</span>
            </div>
            
            <div class="dstitle" style="margin-top:30px;">三、调用SDK</div>
          <div class="dsinfo" >
            <strong>①</strong>：先通过聚合数据中心（<a href="http://www.shareapi.com/docs" target="_blank">http://www.shareapi.com/docs</a>）申请所需的数据服务。<br/>
            <strong>②</strong>：创建并配置工程（具体方法参见工程配置部分的介绍）；<br/>
			<strong>③</strong>：在AndroidManifest中添加开发密钥（OPENID）、所需权限等信息；密钥在个人中心->基本资料 页面获取。
			</div>
          <div class="dsinfo" style="text-indent:20px;">
            1、在application中添加开发密钥
          </div>
            <div class="dsinfo" style="background:url(/themes/images/jsdk/rpbg.png); width:90%; margin-left:20px; font-family:'Courier New', Courier, monospace">
              <p align="left"><span style="color:#393">&lt;meta-data</span>  <br>
              <span style="color:#393">android:</span><span style="color:#909">name</span>=<span style="color:#39C">&quot;com.thinkland.juheapi.openid&quot;</span>  </p>
        <span style="color:#393">android:value</span>=<span style="color:#39C">&quot;开发者OpenID&quot; /&gt;</span>
				<span style="color:#F00;">
                <br/>注意：<br/>
				a.	android:name中name的属性值不能修改，直接复制即可，修改后无法通过验证<br/>
				b.	android:value中value的属性“开发者OpenID”请在聚合会员中心查看<br/>
                </span>
			</div>
           <div class="dsinfo" style="text-indent:20px;">
            2、添加所需权限
          </div>
		  <div class="dsinfo" style="background:url(/themes/images/jsdk/rpbg.png); width:90%; margin-left:20px; font-family:'Courier New', Courier, monospace">
           <span style="color:#393">&lt;uses-permission android:</span><span style="color:#909">name</span>=<span style="color:#39C">&quot;android.permission.ACCESS_NETWORK_STATE&quot;</span> /&gt;  <br/>
            <span style="color:#393">&lt;uses-permission android:</span><span style="color:#909">name</span>=<span style="color:#39C">&quot;android.permission.INTERNET&quot;</span> /&gt;  <br/>
            <span style="color:#393">&lt;uses-permission android:</span><span style="color:#909">name</span>=<span style="color:#39C">&quot;android.permission.ACCESS_WIFI_STATE&quot;</span> /&gt;  <br/>
            <span style="color:#393">&lt;uses-permission android:</span><span style="color:#909">name</span>=<span style="color:#39C">&quot;android.permission.ACCESS_COARSE_LOCATION &quot;</span> /&gt;   <br/>
            <span style="color:#393">&lt;uses-permission android:</span><span style="color:#909">name</span>=<span style="color:#39C">&quot;android.permission.READ_PHONE_STATE&quot;</span> /&gt;   <br/>
	    </br>
            如下图所示：
          </div>
          <div class="dsinfo">
          	<img src="/themes/images/jsdk/v2_android_img_1.png" border="0">
          </div>
          <div class="dsinfo">
			<strong>④</strong>：在调用接口之前需要初始化聚合数据SDK,只需要初始化一次即可。需要在Application中调用初始化方法 
		  </div>
            <div class="dsinfo" style="background:url(/themes/images/jsdk/rpbg.png); width:90%; margin-left:20px; font-family:'Courier New', Courier, monospace">
              <p align="left"><strong>import</strong> com.thinkland.sdk.android.SDKInitializer; <br>
                <strong>import</strong> android.app.Application; </p>
              <p align="left"><strong>public</strong> <strong>class</strong> MyApplication <strong>extends</strong> Application { <br/>&nbsp;&nbsp;&nbsp;&nbsp;@Override <br>
                &nbsp;&nbsp;&nbsp;&nbsp;<strong>public</strong> <strong>void</strong> onCreate() { <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// <strong>TODO</strong> Auto-generated method stub <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>super</strong>.onCreate(); <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SDKInitializer.<em>initialize</em>(getApplicationContext()); <br>
                &nbsp;&nbsp;&nbsp;&nbsp;} </p>
}</div>
            
            
          <div class="dstitle" style="margin-top:30px;">四、查找调用接口的参数值</div>
                <div class="dsinfo">
                在聚合数据API官网上http://www.shareapi.com/docs查看接口，并得到调用接口必须的字段：API， APIID， Method，以及需要设置的参数调用对应接口。<br/>
                例：生活常用 -> IP地址 -> 根据IP/域名查询地址 <span style="color:#F00">(前提：已经在聚合平台申请了该数据服务)</span><br/><br/>
                </div>
                
                <div class="dsinfo">
               	  <span style="color:#390; line-height:30px; font-size:14px; font-weight:bold">api,api_id,method的获取如下图所示：</span>
                </div>
                <div class="dsinfo">
                <img src="/themes/images/jsdk/v2_ios_img_2.png" border="0">
                </div>
                
                <div class="dsinfo">
                	<span style="color:#390; line-height:30px; font-weight:bold">Param的获取方法：</span>
                </div>
          <div class="dsinfo">
                <img src="/themes/images/jsdk/v2_ios_img_3.png" border="0">
          </div>
          
          <div class="dstitle" style="margin-top:30px;">五、获取数据</div>
          <div class="dsinfo" style="background:url(/themes/images/jsdk/rpbg.png); width:90%; margin-left:20px; font-family:'Courier New', Courier, monospace">
            <p align="left">Parameters params = <strong>new</strong> Parameters(); <br>
              params.add(&quot;ip&quot;, &quot;www.shareapi.com&quot;); <br>
              params.add(&quot;dtype&quot;, &quot;xml&quot;); <br>
              JuheData.<em>executeWithAPI</em>(<strong>数据ID</strong>,  &quot;http://apis.shareapi.com/ip/ip2addr&quot;, JuheData.<strong><em>GET</em></strong>, params, <strong>new</strong> DataCallBack() { <br>
              @Override <br>
              <strong>public</strong> <strong>void</strong> resultLoaded(<strong>int</strong> err, String reason, String result) { <br>
              &nbsp;&nbsp;&nbsp;&nbsp;// <strong>TODO</strong> Auto-generated method stub <br>
              &nbsp;&nbsp;&nbsp;&nbsp;<strong>if</strong> (err == 0) { <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tv.setText(result); <br>
              &nbsp;&nbsp;&nbsp;&nbsp;} <strong>else</strong> { <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Toast.<em>makeText</em>(getApplicationContext(),  reason, Toast.<strong><em>LENGTH_SHORT</em></strong>).show(); <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} <br>
              } <br>
              });</p>
          </div>
          <div class="dsinfo" style="margin-top:30px; color:#F00">*详细文档及其他数据说明请通过 http://www.shareapi.com/docs 查阅。</div> 
          
          <div class="dstitle" style="margin-top:30px;">六、返回数据示例</div>
          <div class="dsinfo" style="background:url(/themes/images/jsdk/rpbg.png); width:90%; margin-left:20px; font-family:'Courier New', Courier, monospace">
            <p align="left">{<br>
              &quot;resultcode&quot;:&quot;200&quot;,<br>
              &quot;reason&quot;:&quot;Return  Successd!&quot;,<br>
              &quot;result&quot;:{<br>
              &quot;area&quot;:&quot;江苏省苏州市&quot;,<br>
              &quot;location&quot;:&quot;电信&quot;<br>
              }</p>
} </div> 
  </div>
        
        <div class="clearfix"></div>
</div>

<div class="clearfix"></div>
<div class="footer">
        <div class="fi">
        
<script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F5d12e2b4eed3b554ae941c0ac43c330a' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F0d9630c30ceb9d86c445d5efedea60f8' type='text/javascript'%3E%3C/script%3E"));
</script>

</div>
</body>
</html>
