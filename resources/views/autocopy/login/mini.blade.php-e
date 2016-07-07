<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="UTF-8">
<title>聚合数据-登陆</title>
<link rel="stylesheet" type="text/css" href="/themes/v5/public/css/reset.css"/>
<!--<link rel="stylesheet" type="text/css" href="../../../public/css/regstyle.css"/>-->
<style type="text/css">
.regDiv a{color: #03c5ff;}
.registerMain{box-shadow: 0 0 4px rgba(0,0,0,0.3); width: 460px; height: 449px; overflow: hidden; font-size: 14px; margin: 0 auto; border-top: 3px solid #03c5ff; border-radius: 2px;}
.regForm{width: 340px; padding: 40px 60px 30px;height: 340px; overflow: hidden; color: #909090; background: #fff; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px;}
.borderRadius{border-radius: 2px;padding-top: 36px;}
.inputDiv{padding-bottom: 20px; position: relative;}
.inputDiv .regInput{width: 320px; height: 30px; line-height: 30px; padding: 5px 10px; color: #606060; border: 1px solid #e7e7e7; border-radius: 2px; font-family: inherit;font-size: 14px;}
.inputDiv .regInput:focus{border: 1px solid #b3b3b3;}
.regBtn{width: 100%; height: 42px; margin-top: 20px; font-size: 14px; border: 0 none; background: #02c5ff; color: #fff; letter-spacing: 1px; border-radius: 2px;}
.regBtn:hover{background: #04bff7;}
.have{text-align: right; height: 20px; line-height: 20px; padding-top: 16px;}
.have i{height: 20px; padding: 0 10px;background: url(/themes/v5/public/images/loginIcon.png) -52px -37px no-repeat;}

.regInput::-webkit-input-placeholder {
    color:#d3d3d3;
}
.regInput:-moz-placeholder {
    color:#d3d3d3;
}
.regInput::-moz-placeholder {
    color:#d3d3d3;
}
.regInput:-ms-input-placeholder {
    color:#d3d3d3;
}
.errorTips{display: none; color: #fe514a; height: 20px; line-height: 20px; position: relative; top: 5px;}
.errorTips i,.sysError i{padding: 0 9px;background: url(/themes/v5/public/images/loginIcon.png) -32px -36px no-repeat;}
.errorTips em,.sysError em{font-style: normal; }
.getCode{padding-bottom: 12px;}
.getCode .regInput{width: 210px; border-top-right-radius: 0; border-bottom-right-radius: 0; z-index: 3; position: relative;}
.getCode img{position: absolute; right: 30px; top:2px; height: 42px; border: 0; background: #f7f7f7; border-top-right-radius: 2px; border-bottom-right-radius: 2px; color: #909090;}
.getCode .getImg{position: absolute; right: 5px; top: 11px; width: 19px; height: 21px; background: url(/themes/v5/public/images/loginIcon.png) -2px -33px no-repeat;}
.forgetA{height: 16px; line-height: 16px; text-align: right; padding-bottom: 10px;}
.xTitle{padding: 22px 30px 0; height: 20px; line-height: 20px; position: relative;}
.xTitle h4{color: #606060; font-size: 16px;}
.xTitle .closeA{position: absolute; right: 32px; top: 19px; width: 24px; height: 26px; color: #909090;font-size: 26px; line-height: 26px;text-align: center;}
.errorTips{display:none}<!--初始化时,隐藏错误信息-->
.sysError{color:#fe514a;font-size: 12px;height: 20px; line-height: 20px; position: relative; top:-5px;}
.sysError a{color: #03c5ff;}
</style>
</head>
<body>
    <div class="registerMain">
        <div class="regDiv">
            <div class="xTitle">
                <h4 class="emailTitle">账号登录</h4>
                <a class="closeA" href="javascript:;">×</a>
            </div>
            <form action="/login/login" id="login_form" method="post" class="regForm" onSubmit="return false;">
                <div class="inputDiv">
                    <input type="tel" class="regInput" name="username" id="username" value="" placeholder="用户名/手机号/邮箱" tabindex="2" />
                    <p class="errorTips"><i></i><em></em></p>
                </div>
                <div class="inputDiv">
                    <input type="type" class="regInput" name="password" id="password" placeholder="密码" tabindex="4" />
                    <p class="errorTips"><i></i><em></em></p>
                </div>
                <div class="inputDiv getCode loginListCode" style="display:none">
                    <input type="text" class="regInput" name="captcha" id="captcha" value="" placeholder="验证码" tabindex="3" />
                    <img src="/vercode?1467876464" id="vercodeImg" alt="" />
                    <a href="javascript:;" class="getImg"  id="captchaimg" >&nbsp;</a>
                    <p class="errorTips"><i></i><em></em></p>
                </div>
                <div class="sysError" style="display:none; color:#fe514a;">
                    <label></label>
                    <span><i></i><em></em></span>
                </div>
                <div class="forgetA">
                    <a href="/forget" target="_blank">忘记密码？</a>
                </div>
                <div class="inputDiv">
                    <input type="button" class="regBtn" id="loginBtn" value="登录" style="letter-spacing: 3px;">
                    <p class="have">还没有聚合账号，<a href="/register" target="_blank">立即注册</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="/themes/v5/public/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/themes/v5/public/js/layer/layer.js" type="text/javascript" charset="utf-8"></script>
<script src="/themes/v5/public/js/json.parse.js" type="text/javascript" charset="utf-8"></script>
<script src="/themes/v5/public/js/jquery.form.js" type="text/javascript" charset="utf-8"></script>
<script src="/themes/v5/public/js/regPublic.js" type="text/javascript" charset="utf-8"></script>

    <script src="/themes/v5/public/js/regPublic.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#password').focus(function(){
                $(this).attr('type','password');
            });
            var captcha = "0";

            $('.closeA').click(function(){
                parent.window.layer.closeAll();
            })

            $("#loginBtn").click(function(){
                $('.sysError').css('display','none');
                $('.errorTips').css('display','none');
                $("#loginBtn").val('登录中...').prop("disabled",true);
                var username = $("#username").val();
                var userpass = $("#password").val();
                var captcha = $("#captcha").val();

                username = $.trim(username);
                userpass = $.trim(userpass);
                captcha = $.trim(captcha);

                if(username.length <5){
                    showError('请输入正确格式的用户名!',$("#username"));
                }
                else if(userpass.length <6){
                    showError('请输入正确格式的密码!',$("#password"));
                }
                else if($(".loginListCode").css('display')=='block' && captcha == ''){
                    showError('请输入正确的验证码',$("#captcha"));
                }
                else
                {
                    $("#login_form").ajaxSubmit(function(e){
                        var obj  = json_parse(e);
                        var code = obj.code;
                        //当用户登录错误且次数超过3次,显示验证码
                        if(code != '1' && $(".loginListCode").css('display')=='none' && obj.errcount>2)
                        {
                            $(".loginListCode").css('display','block');
                        }

                        if(code == '1')
                        {
                            if(typeof(parent.loginBack) != 'undefined'){
                                parent.loginBack(obj);
                            }else{
                                window.location.href = '/account';
                            }
                        }else
                        {
                            if(code == '-1'){
                                $('.sysError').show().find('em').html(obj.info);
                            }else if(code == '-4'){
                                if(!isEmail(obj.email))
                                {
                                    var info ='账户未激活且未绑定邮箱,'+'<a href="http://crm2.qq.com/page/portalpage/wpa.php?uin=800076065&f=1&ty=1&aty=0&a=&from=6" target="_blank">联系客服</a>';
                                }
                                else
                                {
                                    var info = obj.info+'或&nbsp;<a id="resendEmail" href="javascript:;" username="'+obj.username+'" email="'+obj.email+'">重新发送邮件</a>';
                                }
                                $('.sysError').show().find('em').html(info);
                            }else if(code == '-6'){
                                $(".loginListCode").css('display','block');
                                showError(obj.info,$("#captcha"));
                            }else if(code == '-3'){
                                showError(obj.info,$("#username "));
                            }else{
                                var errcount = obj.errcount;
                                if(errcount>2){
                                    $(".loginListCode").css('display','block');
                                }
                                $('.sysError').show().find('em').html(obj.info);
                            }

                            if($(".loginListCode").css('display')=='block')
                            {
                                $("#captchaimg").click();
                            }

                            $("#loginBtn").val('登录').prop("disabled",false);
                            return false;
                        }
                    });
                }

            });

            $("#captchaimg").click(function(){
                $("#vercodeImg").attr('src','/vercode?'+new Date().getTime());
            });

            $(".sysError").on('click','#resendEmail',function(){
                layer.closeAll();
                layer.load(1);
                var username = $(this).attr('username').trim();
                var email = $(this).attr('email').trim();
                if(username.length < 5 && !isEmail(email))
                {
                    layer.msg('用户信息有误,请联系管理员',{icon:2,time:'3000',shade:0.3,shadeClose:true});
                    return false;
                }
                else
                {
                    $.post('/register/resendEmail',{username:username,email:email},function(e){
                        var obj = json_parse(e);
                        if(obj.code=='1' ){
                            window.parent.location.href = obj.acturl;
                        }
                        else
                        {
                            layer.closeAll()
                            layer.msg(obj.info,{icon:2,time:'3000',shade:0.3,shadeClose:true});
                        }
                    })
                }
            })
            //bind keyCode=13 Event
            document.onkeydown = function(e){
                var ev = document.all ? window.event : e;
                if(ev.keyCode==13) {

                    $("#loginBtn").click(); return false;

                }
            }
        })

        //错误显示
        function showError(msg,selector)
        {
            selector.parent().find('.errorTips').find('em').html(msg)
            selector.parent().find('.errorTips').fadeIn();
            $("#loginBtn").val('登录').prop('disabled',false);
        }
    </script>
</body>
</html>
