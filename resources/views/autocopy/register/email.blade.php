<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>分享数据-邮箱注册</title>
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
                    <!-- <a href="/register">手机号注册</a> -->
                    <!-- <a class="active" href="javascript:;">邮箱注册</a> -->
                </div>
                <form action="/register/registProcess" id="registerForm" method="post" class="regForm" autocomplete="off" onSubmit="return false;">
                    <div class="inputDiv" style="text-align:center;font-size:140%;">
                        <span class="active" >用户注册</span>
                    </div>
                    <div class="inputDiv">
                        <input type="text" class="regInput" name="username" id="username" placeholder="用户名（6-24位字母数字）" autocomplete="off" />
                        <p class="errorTips"><i></i><em></em></p>
                    </div>
                    <div class="inputDiv">
                        <input type="email" class="regInput" name="email" id="email" autocomplete="off" placeholder="你的常用邮箱" />
                        {{csrf_field()}}
                        <p class="errorTips"><i></i><em></em></p>
                    </div>
                    <div class="inputDiv">
                        <input type="text" class="regInput" name="password" id="password" placeholder="密码（不少于8位）" autocomplete="off" />
                        <p class="errorTips"><i></i><em></em></p>
                    </div>
                    <div class="inputDiv">
                        <label><input type="checkbox" name="isRead" value="1" id="checkedd" checked="checked" />&nbsp;&nbsp;我已阅读并接受<a href="#">《分享用户服务协议》</a></label>
                        <p class="errorTips" id="checkedTips"><i></i><em></em></p>
                    </div>
                    <div class="inputDiv">
                        <p class="errorTips" id="sysError"><i></i><em></em></p>
                    </div>
                    <div class="inputDiv">
                        <input style="letter-spacing: 4px;" type="button" class="regBtn" value="注册">
                        <p class="have">已有分享账号，<a target="_blank" href="/login">直接登录<i></i></a></p>
                    </div>
                    <input type="hidden" name="JUHE_TOKEN" value="9499F5C193C5531524F89FC59605B3CDFF211894"> 
                </form>
            </div>
        </div>
    </div>
</body>
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
            var email = $("#email").val();
            var userPass = $("#password").val();

            userName = $.trim(userName);
            userPass = $.trim(userPass);

            $(".regBtn").val('注册中...').prop('disabled',true);
            $('.errorTips').find('em').html('');
            $('.errorTips').hide();

            if( !isRegisterUserName(userName) ){
                showError( '用户名格式不正确',$('#username') );
            }else if( !isEmail(email) ){
                showError( '邮箱格式不正确',$('#email') );
            }else if( userPass.length < 8 ){
                showError( '密码不能少于8位',$('#password') );
            }else if( !$('#checkedd').is(":checked") ){
                showError( '请接受分享用户服务协议',$('#checkedTips') );
            }else{//基础验证通过
                $("#registerForm").ajaxSubmit(function(e){
                    var obj=json_parse(e);
                    var code=obj.code;
                    var info = obj.info;

                    if(code=='1'){
                        window.location.href=obj.acturl;
                    }
                    else
                    {
                        if(code =='-2'){
                            showError( info,$('#email') );
                        }else if(code =='-4'){
                            showError( info,$('#password') );
                        }else if(code == '-100'){
                            showError( info,$('#sysError') );
                        }else if(code == '-1'){
                            showError( info,$('#username') );
                        }
                        $(".regBtn").val('注册').prop('disabled',false);
                    }
                })
            }
        });
    });

    function showError(msg,selector)
    {
        selector.parent().find('.errorTips').find('em').html(msg)
        selector.parent().find('.errorTips').fadeIn();
        $(".regBtn").val('注册').prop('disabled',false);
        selector.focus();
        return false;
    }

</script>
</html>
