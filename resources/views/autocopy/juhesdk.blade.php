<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="keywords" content="API数据，开发者数据定制，免费数据调用，聚合数据">
<meta name="description" content="提供30大类，100种以上基础数据API服务，国内最大的基础数据API服务提供商">
<link type="text/css" href="/themes/css/default.css" rel="stylesheet"/>
<script type="text/javascript" src="/themes/js/jquery.min.js"></script>
<!--<link type="text/css" href="/themes/css/v3/header.css" rel="stylesheet"/>-->
<link rel="shortcut icon" href="/favicon.ico" />
<title>聚合数据SDK-首页</title>
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
                				<li class="iphone"><a class="png_bg" href="http://m.juhe.cn">手机触屏版</a></li>
                
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
						<a title="基站查询" href="http://www.juhe.cn/d/cellmap/index.php">聚合基站</a>
						<a href="http://wz.juhe.cn"  title="全国车辆违章查询接口">车辆违章查询</a>
						<a title="LBS聚合" target="_blank" href="http://lbs.juhe.cn">LBS聚合</a>
						<a title="聚合工具" target="_blank" href="http://tools.juhe.cn">聚合工具</a>
						<a title="聚合软件" target="_blank" href="http://soft.juhe.cn">聚合软件</a>
						<a title="国外API检索" target="_blank" href="/foreign">国外API检索</a>
					</div>
				</li>
				
                <li style="border-right:1px solid #0091d0;"  ><a href="/docs" title="资费说明"><strong>资费问题</strong><span>Pricing</span></a></li>
				
			</ul>
		</div>
	</div>
	
	<!--<style type="text/css">
#alertAward{display: none;}
.alertAward{position:relative;font-family:"microsoft yahei"; border-radius: 8px; color:#333; font-size:12px;width: 550px; padding:20px 50px; height: 442px; background: url(http://img.juhe.cn/www/activity/201503/juhePrize.png) 30px 35px no-repeat;}
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
	<img width="120px" src="http://img.juhe.cn/www/activity/201503/juhePrize.png"/>
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
		<img id="towCode" src="http://img.juhe.cn/www/activity/201503/juheTwoCode.png"/>
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
    <li class="sel"><a href="/juhesdk">概述</a></li>
    <li ><a href="/juhesdk/openid">获取密钥</a></li>
    <li id="devdocs">Android SDK 开发指南</li>
     <li ><a href="/juhesdk/adocs/v/2">&nbsp;└&nbsp; SDK v2.x</a></li>
    <li ><a href="/juhesdk/adocs">&nbsp;└&nbsp; SDK v1.x</a></li>
    <li id="devdocs">iOS SDK 开发指南</li>
    <li ><a href="/juhesdk/idocs/v/2">&nbsp;└&nbsp; SDK v2.x</a></li>
    <li ><a href="/juhesdk/wdocs">&nbsp;└&nbsp; SDK v1.x</a></li>
    <li id="devdocs">Windows Phone SDK 开发指南</li>
    <li ><a href="/juhesdk/wdocs/v/1">&nbsp;└&nbsp; SDK v1.x</a></li>
    <li ><a href="/juhesdk/update">更新日志</a></li>
    <li ><a href="/juhesdk/download">相关下载</a></li>
</ul>
<!--<script language="javascript" src="http://www.juhe.cn/themes/js/jquery.min.js"></script>-->
<script language="javascript">
$(document).ready(function(e) {
    $("#devdocs").click(function(){
		$(".subli").slideToggle();
	})
});
</script>
            
        </div>
        <div class="dev-main">
        	<div class="dstitle">聚合数据SDK简介</div>
            <div class="dsinfo">
            聚合数据SDK是一套基于Android/iOS开发的程序接口，目前已有Android、iOS版本，其他版本陆续添加中。开发者可以使用该套SDK开发适用于Android/iOS系统移动设备的应用，通过调用SDK接口，您可以轻松的访问聚合的<strong>所有数据和服务</strong>，构建功能丰富、交互性强的应用程序</br>
            该SDK集成了平台上的大部分数据服务（除电商SDK、比价SDK、定位SDK外）,开发者只需使用聚合SDK即可调用已经申请的数据，无需再针对不同数据编写程序，更方便用户快速开发。<br/>
            针对使用聚合SDK的用户，还将获得每种数据服务每日最多<strong>10000</strong>次免费的请求次数，详细的赠送次数请参考对应的接口文档或 <a href="http://www.juhe.cn/docs" target="_blank">资费说明>></a> 。<br/>
            在您使用聚合数据SDK之前，请先阅读 <a href="http://www.juhe.cn/legal" target="_blank">聚合数据API使用条款</a> 。
            </div>
            
            <div class="dstitle" style="margin-top:30px;">聚合数据SDK较Restful接口的优势？</div>
            <div class="dsinfo" style="font-size:14px; color:#F30">
            1.集成平台所有数据服务，不用再针对不同数据编写程序。<br/>
            2.享有每日最多<strong>10000</strong>次免费的请求次数，大大减少数据调用支出费用。<br/>
            2.所有数据每日10000次赠送总价值为7908元，即每日最多可为您节省￥<strong>7908</strong>。
            </div>
            
            <div class="dstitle" style="margin-top:30px;">聚合数据SDK每日赠送说明</div>
            <div class="dsinfo">
            例如：IP地址查询接口，日赠送10000次，单客户端日上限50次<br/>
            说明：通过聚合数据SDK调用IP地址查询API，可以每日获得10000次的免费请求（每日初始化），但每个客户端每日不能超过50次，如客户端日超过50次，将从剩余付费次数中扣除相应超出的次数。<br/>
            如果日赠送的10000次剩余次数为0，则将转为扣除付费剩余次数，直到次数为0，将不能再请求数据。
            </div>
            
            <div class="dsinfo" style="margin-top:30px;">
            <img src="/themes/images/201408/juhesdk.png" border="0">
            </div>
            
        </div>
        
        <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="footer">
        <div class="fi">
        <a  href="http://img.juhe.cn/docs/%E8%81%9A%E5%90%88%E6%95%B0%E6%8D%AEAPI%E7%94%B3%E8%AF%B7%E4%BD%BF%E7%94%A8%E6%B5%81%E7%A8%8B.pdf" target="_blank" title="新手指引" rel="nofollow">新手指引</a><a href="/privacy" target="_blank" title="隐私政策" rel="nofollow">隐私政策</a><a href="/legal" target="_blank" title="服务条款" rel="nofollow">服务条款</a><a href="/login" rel="nofollow">加入我们</a><a href="/job" rel="nofollow">聚合招聘</a><a href="http://www.juhe.cn/links" rel="nofollow">友情链接</a><a href="/contact" rel="nofollow">联系我们</a><a>京 ICP 备 16034375 号ShareApi©版权所有</a><a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">&nbsp;苏ICP备14006450号-3</a>|&nbsp;增值电信业务经营许可证：<a href="http://jscainfo.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">苏B2-20140496</a></div>
        
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
