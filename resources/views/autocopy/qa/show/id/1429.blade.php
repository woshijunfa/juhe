<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="银行卡三元素校验和银行卡四元素校验的收费疑问">
<meta name="description" content="银行卡三元素校验和银行卡四元素校验的收费疑问">
<link rel="stylesheet" type="text/css" href="/themes/v4/public/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="/themes/v4/public/css/headFooter.css"/>
<link type="text/css" rel="stylesheet" href="/themes/css/prettify.css">
<title>银行卡三元素校验和银行卡四元素校验的收费疑问-聚合数据</title>
<script type="text/javascript" src="/themes/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="/themes/js/xheditor-1.1.14-zh-cn.min.js"></script>
<script type="text/javascript" src="/themes/js/ubb.min.js"></script>
<script type="text/javascript" src="/themes/js/jquery.form.js"></script>
<script type="text/javascript" src="/themes/js/json.parse.js"></script>
<script type="text/javascript" src="/themes/js/prettify.js"></script>
<script type="text/javascript">
$(pageInit);
function pageInit()
{
    var plugins={
        Code:{c:'btnCode',t:'插入代码',h:1,e:function(){
            var _this=this;
            var htmlCode='<div><select id="xheCodeType"><option value="html">HTML/XML</option><option value="js">Javascript</option><option value="css">CSS</option><option value="php">PHP</option><option value="java">Java</option><option value="py">Python</option><option value="pl">Perl</option><option value="rb">Ruby</option><option value="cs">C#</option><option value="c">C++/C</option><option value="vb">VB/ASP</option><option value="">其它</option></select></div><div><textarea id="xheCodeValue" wrap="soft" spellcheck="false" style="width:300px;height:100px;" /></div><div style="text-align:right;"><input type="button" id="xheSave" value="确定" /></div>';         var jCode=$(htmlCode),jType=$('#xheCodeType',jCode),jValue=$('#xheCodeValue',jCode),jSave=$('#xheSave',jCode);
            jSave.click(function(){
                _this.loadBookmark();
                _this.pasteText('[code='+jType.val()+']\r\n'+jValue.val()+'\r\n[/code]');
                _this.hidePanel();
                return false;
            });
            _this.saveBookmark();
            _this.showDialog(jCode);
        }},
    };
    $('#elm1').xheditor({plugins:plugins,skin:"nostyle",cleanPaste:3,tools:'Bold,Italic,FontColor,BackColor,Code,Cut,Copy,Pastetext',showBlocktag:false,forcePtag:false,beforeSetSource:ubb2html,beforeGetSource:html2ubb,shortcuts:{'ctrl+enter':submitForm}});
}


function submitForm(){$('#frmDemo').submit();}

$(document).ready(function(){
    $("#answerBtn").click(function(){

        var des  = $("#elm1").val();

        var vercode = $("#vercode").val();



        if(des.length <10){
            alert('亲，回答过于简短!');
            $("#elm1").focus();
        }else if(vercode ==''){
            $("#vercode-t").html('<font color="red">请输入验证码</font>');
            $("#vercode").focus();
        }else{
            $("#frmDemo").ajaxSubmit(function(e){
                $("#vercodeImg").attr("src","/vercode/index/_t/"+Math.random());
                var obj = json_parse(e);
                var code = obj.code;
                if(code =='1'){
                    alert(obj.info);
                    window.location.reload();
                }else{
                    alert(obj.info);
                }
            })
        }

    })
})
</script>

<style>
.btnCode {
    background-position:2px 2px;
}
</style>
</head>

<body>
<header class="width100_v4">
        <div class="width1200_v4">
            <div id="headerTop_v4">
                <h1><a href="/"><img src="/themes/v4/public/images/logo.png" alt="聚合数据" /></a></h1>
                <div class="search_v4">
                    <input type="text" id="searchText_v4" name="q" placeholder="输入需要查询的问题关键字，例如：天气" />
                    <input type="button" id="searchBtn_v4" value="搜索" />
                    <!--
                    <p class="hotWord_v4">
                        <a class="active" href="/docs/s/q/%E8%BF%9D%E7%AB%A0">违章查询</a>
                        <a href="/docs/s/q/%E8%AF%9D%E8%B4%B9">话费充值</a>
                        <a href="/docs/s/q/%E5%9F%BA%E7%AB%99">基站</a>
                        <a href="/docs/s/q/%E6%9C%BA%E7%A5%A8">机票</a>
                        <a href="/docs/s/q/%E7%81%AB%E8%BD%A6">火车</a>
                        <a href="/docs/s/q/%E5%A4%A9%E6%B0%94">天气预报</a>
                    </p>
                    -->
                </div>
                <div class="userCenter_v4">
                
                                    <a style="color: #03c5ff;" href="/login" rel="nofollow">登录</a>
                    <a style="color: #ff9445;" href="/register" rel="nofollow">注册</a>
                                
                <p class="line_v4"></p>
                </div>
            </div>
            <nav class="clearfix">
                <a href="/">首页</a>
                <!--<a href="">企业服务</a>
                <a href="">聚合国际造型</a>-->
            </nav>
        </div>
    </header>
    <script type="text/javascript">
        var loginOutUrl = '/login/logout';
        var juheIndex = '/';
    </script>
    <script src="/themes/v4/public/js/common.js"></script>

<div class="main">
    <div class="left">
        <div class="info">银行卡三元素校验和银行卡四元素校验的收费疑问</div>
        <div class="qades">
            关于银行卡三元素校验和银行卡四元素校验等接口的收费问题<br /><br />请问此类接口是每成功调用扣费还是验证成功扣费？
        </div>
        <div class="qatags">
                        </div>

        <div class="qabases">
               <a class="iviews"></a>
                    <a>30次浏览</a>
                                        <a class="itime"></a>
                    <a>21小时前</a>
                    <a class="iauthor"></a>
                    <a>ho****</a>
        </div>
        <div class="qabase" style="text-align:right;"><a href="#qaubb">我来回答</a></div>

        <div class="info">1个回答</div>
                <div class="answerbox" style="background:#f9f9f9">
                        <div class="answerhtml">你好：<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;既不是调用扣费也不是验证成功扣费，而是获取有效校验结果扣费，即：<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.校验结果为符合<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.校验结果为不符合<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;才会扣费。<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;而网络错误，异常，参数不合法等情况不收费。</div>
            <!--<div class="aubaseinfo">1楼：已回答&nbsp;07-07&nbsp;&nbsp;&nbsp;&nbsp;作者：fa****</div>-->
             <div class="aubaseinfo">
                        <a class="itime"></a>
                        <a>33分钟前</a>
                        <a class="iauthor"></a>
                        <a>fa****</a>
            </div>
        </div>
        
        <div class="info">你的回答</div>
                <div class="qaubb" id="qaubb">
            <div class="tinfo">如果您可以回答这问题，请在下方输入您的解答哦！</div>
            <div class="unlogin">
                请<a href="javascript:xlogin();" title="登录聚合">登录</a>后回答此问题。
            </div>
        </div>
        
        <div class="info">相关问题</div>
                <div class="qabox">
            <div class="qaleft">
                <div class="recount">1</div>

            </div>
            <div class="qaright">
                <div class="qa_base">
                    <a class="iviews"></a>
                    <a>30次浏览</a>
                                        <a class="itags"></a>
                    <a>银行卡校验,银行卡验证,银行卡</a>
                                        <a class="itime"></a>
                    <a>21小时前</a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
                <div class="qabox">
            <div class="qaleft">
                <div class="recount">2</div>

            </div>
            <div class="qaright">
                <div class="qa_base">
                    <a class="iviews"></a>
                    <a>41次浏览</a>
                                        <a class="itime"></a>
                    <a>1天前</a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
                <div class="qabox">
            <div class="qaleft">
                <div class="recount">1</div>

            </div>
            <div class="qaright">
                <div class="qa_base">
                    <a class="iviews"></a>
                    <a>60次浏览</a>
                                        <a class="itags"></a>
                    <a>充值不成功</a>
                                        <a class="itime"></a>
                    <a>4天前</a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
                <div class="qabox">
            <div class="qaleft">
                <div class="recount">1</div>

            </div>
            <div class="qaright">
                <div class="qa_base">
                    <a class="iviews"></a>
                    <a>73次浏览</a>
                                        <a class="itime"></a>
                    <a>27天前</a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
                <div class="qabox">
            <div class="qaleft">
                <div class="recount">1</div>

            </div>
            <div class="qaright">
                <div class="qa_base">
                    <a class="iviews"></a>
                    <a>92次浏览</a>
                                        <a class="itime"></a>
                    <a>28天前</a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        
    </div>
    <div class="right">
        <div class="category">
            <ul>

                <li>所有分类问题</li>
                
            </ul>
        </div>

        <div class="hot_tags_title">
        热门标签
        </div>

      <div class="hot_tags">
        	<ul>
                
            </ul>
</div>

    </div>
    <div class="clear"></div>
</div>

<div class="ftline"></div>

<footer class="width100_v4">
        <div class="width1200_v4 footerContent_v4 clearfix">
            <div class="footer1_v4">
                <div class="footerLogo"><a href="https://www.juhe.cn"><img width="238" height="33" src="/themes/v4/public/images/footerLogo.png" alt="聚合数据"/></a></div>
                <p>京 ICP 备 16034375 号ShareApi©版权所有</p>
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
<script type="text/javascript">prettyPrint();</script>
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
    layer.closeAll();
    window.location.reload();
}
</script>
