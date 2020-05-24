
<!DOCTYPE html>
<html>
<head>
    <title>登录</title>
    <link rel="stylesheet" href="/static/css/style.css"  media="all">
    <script src="/static/js/jquery3.4.1.js"></script>
    <script type="text/javascript" src="/static/layer/layer.js"></script>
</head>
<body style="background: #1E9FFF;">
<div style="position: absolute;left: 50%;top:50%;width: 480px;margin-left: -240px;margin-top:-200px;">
    <div style="background-color: #ffffff;padding: 20px;border-radius: 4px;box-shadow: 5px 5px 20px #444444;">
        <div class="phpcn-form">
            @csrf
            <div class="phpcn-form-item" style="color: gray;">
                <h2>XPCMS 后台管理系统</h2>
            </div>
            <hr>
            <div class="phpcn-form-item">
                <label class="phpcn-form-lable">用户名</label>
                <div class="phpcn-input-block">
                    <input type="text" class="phpcn-input" id="username">
                </div>
            </div>
            <div class="phpcn-form-item">
                <label class="phpcn-form-lable">密&nbsp;&nbsp;&nbsp;&nbsp;码</label>
                <div class="phpcn-input-block">
                    <input type="password" class="phpcn-input" id="password">
                </div>
            </div>
            <div class="phpcn-form-item">
                <label class="phpcn-form-lable">验证码</label>
                <div class="phpcn-input-block">
                    <input type="text" class="phpcn-input" id="verifycode">
                </div>
                <img src="/admins/account/captcha" id="captcha" style="border: 1px solid #cdcdcd;cursor:pointer;" onclick="reload_captcha()">
            </div>
            <div class="phpcn-form-item">
                <div class="phpcn-input-block">
                    <button class="phpcn-button"  style="text-align: right;" onclick="dologin()">登录</button>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
<script>
   $('input').keydown(function (e) {
       if (e.keyCode == 13) {
           dologin();
       }
   });

    function reload_captcha() {
        $('#captcha').attr('src','/admins/account/captcha?rand='+Math.random());
    }

    function dologin() {
        var data = new Object();
        data.username = $.trim($('#username').val());
        data.pwd = $.trim($('#password').val());
        data.verifycode = $.trim($('#verifycode').val());
        data._token = $('input[name="_token"]').val();

        if (data.username == '') {
            return layer.alert('用户名不能为空',{icon:2});
        }

        if (data.pwd == '') {
            return layer.alert('密码不能为空',{icon:2});
         }
        if (data.verifycode == '') {
            return layer.alert('验证码不能为空',{icon:2});
        }

        $.post('/admins/account/dologin',data,function (res) {
            if (res.code > 0) {
                return layer.alert(res.msg,{icon:5});
            }
            layer.msg(res.msg,{icon:1});
            setTimeout(function () {
                window.location.href='/admins/home/index';
            },1000)

        },'json')

    }

</script>

</html>