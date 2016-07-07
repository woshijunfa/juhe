<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>聚合数据-找回密码</title>
<link rel="stylesheet" type="text/css" href="/themes/v5/public/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="/themes/v5/public/css/regstyle.css"/>
</head>
<body>
    <div class="registerContent">
        <div class="registerMain">
            <div class="regLogo"></div>
            <div class="regDiv">
                <form action="/forget/sendEmail" id="sendEmail" method="post" class="regForm borderRadius" onSubmit="return false;">
                    <div class="title">
                        <h3>通过邮箱找回</h3>
                        <p class="have"><a href="/forget">通过手机号码找回<i></i></a></p>
                    </div>
                    <div class="inputDiv">
                        <input type="email" class="regInput" id= "emailId" name="email" placeholder="请输入注册时使用的邮箱" tabindex="1" />
                        <p class="errorTips"><i></i><em></em></p>
                    </div>
                    <div class="inputDiv">
                        <button type="button" class="regBtn">找回密码</button>
                    </div>
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
            //bind keyCode=13 Event
            document.onkeydown = function(e){
                var ev = document.all ? window.event : e;
                if(ev.keyCode==13) {

                    $(".regBtn").click();

                }
            }
            $('.regBtn').click(function(){

                var email = $("#emailId").val().trim();

                $(".regBtn").html('发送中...').prop('disabled',true);
                $('.errorTips').find('em').html('');
                $('.errorTips').hide();

                if( email == ''){
                    showError( '输入的邮箱',$('#emailId') );
                }else if( !isEmail(email) ){
                    showError( '输入的邮箱格式不正确',$('#emailId') );
                }else{//基础验证通过
                    $("#sendEmail").ajaxSubmit(function(e){
                        var obj=json_parse(e);
                        var code=obj.code;
                        var info = obj.info;

                        if(code=='1'){
                            window.location.href = obj.acturl;
                        }else{
                            showError( info,$('#emailId') );
                            $(".regBtn").html('找回密码').prop('disabled',false);
                        }

                    })
                }
            });
        });
        function showError(msg,selector)
        {
            selector.parent().find('.errorTips').find('em').html(msg)
            selector.parent().find('.errorTips').fadeIn();
            $(".regBtn").html('找回密码').prop('disabled',false);
            selector.focus();
            return false;
        }

    </script>
</body>
</html>
