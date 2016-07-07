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
                <form action="/forget/mobileValidate" id="sendsms" method="post" class="regForm borderRadius" onSubmit="return false;">
                    <div class="title">
                        <h3>通过手机号找回</h3>
                        <p class="have"><a href="/forget/email">通过邮箱找回<i></i></a></p>
                    </div>
                    <div class="inputDiv">
                        <input type="tel" class="regInput" name="mobilephone" id="mobilephone" placeholder="手机号" tabindex="1" />
                        <p class="errorTips"><i></i><em></em></p>
                    </div>
                    <div class="inputDiv getCode">
                        <input type="text" class="regInput" name="codeNum" id="codeNum" placeholder="验证码" tabindex="2" />
                        <button class="getCodea smsbtn" type="button">获取验证码</button>
                        <p class="errorTips"><i></i><em></em></p>
                    </div>
                    <div class="inputDiv">
                        <p class="errorTips" id="sysError"><i></i><em></em></p>
                    </div>
                    <div class="inputDiv">
                        <button type="button" class="regBtn">找回密码</button>
                    </div>
                    <input type="hidden" name="JUHE_TOKEN" value="ED8F5BD9BEE83FC2EA04853B52B5D82AF14D9627"> 
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

                var mobilephone = $("#mobilephone").val();
                mobilephone = $.trim(mobilephone);

                $('.errorTips').find('em').html('');
                $('.errorTips').hide();

                if( !isPhone(mobilephone) ){
                    showError( '手机号格式不正确',$('#mobilephone') );
                }else{//基础验证通过
                    $(".regBtn").html('找回中...').prop('disabled',true);
                    $("#sendsms").ajaxSubmit(function(e){
                        var obj=json_parse(e);
                        var code=obj.code;
                        var info = obj.info;

                        if(code == '1'){
                            window.location.href = obj.acturl;
                        }
                        else
                        {
                            if(code=='-1'){
                                showError( info,$('#mobilephone') );
                            }else if(code =='-2' || code=='-3'){
                                showError( info,$('#codeNum') );
                            }else if(code=='-100')//手机号错误或被用过
                            {
                                showError(info,$('#sysError'))
                            }
                            $(".regBtn").html('找回密码').prop('disabled',false);
                        }

                    })
                }
            });

            // 点击发送短信按钮时
            $(".smsbtn").click(function(){
                $('.errorTips').find('em').html('');
                $('.errorTips').hide();
                var mobilephone = $("#mobilephone").val();
                if(isPhone(mobilephone)){
                    $(".smsbtn").html("验证码发送...").prop("disabled",true);

                    $.post('/forget/sendsms',{mobile:mobilephone,JUHE_TOKEN:$(":input[name='JUHE_TOKEN']").val()},function(e){
                        var o = json_parse(e);

                        if(o.code=='1' ){
                            resetSmsBtn(120);
                        }
                        else
                        {
                            if(o.code=='-1')//手机号错误或被用过
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
                }else{
                    showError('错误的手机号码',$('#mobilephone'))
                    $(".smsbtn").prop("disabled",false);
                }
            })
        });
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
        function showError(msg,selector)
        {
            selector.parent().find('.errorTips').find('em').html(msg)
            selector.parent().find('.errorTips').fadeIn();
            selector.focus();
            return false;
        }

    </script>
</body>
</html>
