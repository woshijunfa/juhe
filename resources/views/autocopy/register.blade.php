<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>分享数据-手机号码注册</title>
<link rel="stylesheet" type="text/css" href="/themes/v5/public/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="/themes/v5/public/css/regstyle.css"/>
<script src="//cdn.shareapi.com/common/baidu.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<div class="registerContent">
		<div class="registerMain">
			<div class="regLogo"><a href="/"><img src="/themes/v5/public/images/reglogo.png"></a></div>
			<div class="regDiv">
				<div class="tabReg clearfix">
					<a class="active" href="javascript:;">手机号注册</a>
					<a href="/register/email">邮箱注册</a>
				</div>
				<form name="registerForm" id='registerForm' action="/register/registProcess" method="post" class="regForm" autocomplete="off"   onSubmit="return false;">
					<div class="inputDiv">
						<input type="text" class="regInput" name="username" value="" id="username" placeholder="用户名（6-24位字母数字）" autocomplete="off" tabindex="1" />
						<p class="errorTips"><i></i><em></em></p>
					</div>
					<div class="inputDiv">
						<input type="tel" class="regInput" name="mobilephone" value=""  id="mobilephone" placeholder="手机号码" autocomplete="off" tabindex="2" />
						<p class="errorTips"><i></i><em></em></p>
					</div>
					<div class="inputDiv getCode">
						<input type="text" class="regInput" name="codeNum" value=""  id="codeNum" placeholder="验证码" autocomplete="off" tabindex="3" />
						<button class="getCodea smsbtn" type="button">获取验证码</button>
                        <p class="errorTips"><i></i><em></em></p>
					</div>
					<div class="inputDiv">
						<input type="text" class="regInput" name="password" value=""  id="password" placeholder="密码（不少于8位）" autocomplete="off" tabindex="4" />
						<p class="errorTips"><i></i><em></em></p>
					</div>
					<div class="inputDiv">
						<label><input type="checkbox" name="isRead"  value="1" checked="checked" id="checkedd" />&nbsp;&nbsp;我已阅读并接受<a href="#">《分享用户服务协议》</a></label>
						<p class="errorTips" id="checkedTips"><i></i><em></em></p>
					</div>
                    <div class="inputDiv">
                        <p class="errorTips" id="sysError"><i></i><em></em></p>
                    </div>
					<div class="inputDiv">
						<input style="letter-spacing: 4px;" type="button" class="regBtn" value="注册">
						<p class="have">已有分享账号，<a target="_blank" href="/login">直接登录<i></i></a></p>
					</div>
                    <input type="hidden" name="JUHE_TOKEN" value="B46435D86A1E4B9E2EFB3E2CEF9DF9344280FF2C"> 
				</form>
			</div>
		</div>
	</div>
    <script src="/themes/v5/public/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/themes/v5/public/js/layer/layer.js" type="text/javascript" charset="utf-8"></script>
<script src="/themes/v5/public/js/json.parse.js" type="text/javascript" charset="utf-8"></script>
<script src="/themes/v5/public/js/jquery.form.js" type="text/javascript" charset="utf-8"></script>
<script src="/themes/v5/public/js/regPublic.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
$(function(){
    $('#password').focus(function(){
        $(this).attr('type','password');
    });
    //bind keyCode=13 Event
    document.onkeydown = function(e){

        var ev = document.all ? window.event : e;
        if(ev.keyCode==13) {

            $(".regBtn").click();

        }
    }
    $('.regBtn').click(function(){

        var userName = $("#username").val();
        var mobilephone = $("#mobilephone").val();
        var userPass = $("#password").val();
        var codeNum = $("#codeNum").val();

        userName = $.trim(userName);
        mobilephone = $.trim(mobilephone);
        userPass = $.trim(userPass);

        $(".regBtn").val('注册中...').prop('disabled',true);
        $('.errorTips').find('em').html('');
        $('.errorTips').hide();


        if( !isRegisterUserName(userName) ){
            showError( '用户名格式不正确',$('#username') );
        }else if( !isPhone(mobilephone) ){
            showError( '手机号码格式不正确',$('#mobilephone') );
        }else if( codeNum == '' ){
            showError( '验证码不正确',$('#codeNum') );
        }else if( userPass.length < 8 ){
            showError( '密码不能少于8位',$('#password') );
        }else if( !$('#checkedd').is(":checked") ){
            $('#checkedTips').find('em').html('请接受分享用户服务协议');
            $('#checkedTips').fadeIn();
            $(".regBtn").val('注册').removeAttr('disabled');
            return false;
        }else{//基础验证通过
            $("#registerForm").ajaxSubmit(function(e){
                var obj=json_parse(e);
                var code=obj.code;
                var info = obj.info;

                if(code == '1'){
                    layer.msg(info, {icon: 1,time: 1500}, function(){});
                    setTimeout(function(){window.location.href='/login/index/status/success'},"1500");
                }
                else
                {
                    if(code=='-1'){
                        showError( info,$('#username') );
                    }else if(code =='-2'){
                        showError( info,$('#mobilephone') );
                    }else if(code =='-3'){
                        showError( info,$('#codeNum') );
                    }else if(code =='-4'){
                        showError( info,$('#password') );
                    }else if(code == '-100'){
                        showError( info,$('#sysError') );
                    }
                    $(".regBtn").val('注册').prop('disabled',false);
                }

            })
        }
    });
    // 点击发送短信按钮时
    $(".smsbtn").click(function(){
        $('.errorTips').find('em').html('');
        $('.errorTips').hide();
        $(".smsbtn").prop("disabled",true);
        var mobilephone = $("#mobilephone").val().trim();
        var username = $("#username").val().trim();
        if(!isRegisterUserName(username))
        {
            showError( '请填写正确的用户名',$('#username') );
            $(".smsbtn").prop("disabled",false);
        }else  if(!isPhone(mobilephone)){
            showError('错误的手机号码',$('#mobilephone'))
            $(".smsbtn").prop("disabled",false);
        }else{
            $(".smsbtn").html("验证码发送...").prop("disabled",true);
            $.post('/register/sendsms',{mobile:mobilephone,username:username,JUHE_TOKEN:$(":input[name='JUHE_TOKEN']").val()},function(e){
                var o = json_parse(e);
                if(o.code=='1' ){
                    resetSmsBtn(120);
                }else
                {
                    if(o.code=='-4')//用户名验证
                    {
                        showError(o.info,$('#username'))
                    }else if(o.code=='-1')//手机号错误或被用过
                    {
                        showError(o.info,$('#mobilephone'))
                    }
                    else if(o.code=='-3')//手机号错误或被用过
                    {
                        showError(o.info,$('#codeNum'))
                    }
                    else if(o.code=='-100' || o.code=='-2')
                    {//出现系统级别错误单独显示
                        showError(o.info,$('#sysError'))
                    }
                    $(".smsbtn").html("获取验证码").prop("disabled",false);
                }
            })
        }
    })
});

function showError(msg,selector)
{
    selector.parent().find('.errorTips').find('em').html(msg)
    selector.parent().find('.errorTips').fadeIn();
    $(".regBtn").val('注册').prop('disabled',false);
    selector.focus();
}
// 重置短信发送按钮
function resetSmsBtn(index){
    var init = setInterval(function(){
        index--;
        if(index<=0){
            clearInterval(init);
            $(".smsbtn").html("获取验证码").css({"background":"#2AABE4"}).prop("disabled",false);
        }else{
            $(".smsbtn").html("重新发送("+index+")").prop("disabled",true);
        }
    },1000)

}

</script>
</body>
</html>
