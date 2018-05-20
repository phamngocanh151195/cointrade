
<? php

<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    function submitLoginForm() {
        console.log('hello');
    $.ajax({
                url: 'http://45.119.82.176:8000/login/user/',
                type: "post",
                data: $('#login').serialize(),
                success: function (response) {
                    console.log(response);
                    if (("token" in response) == false) {
                    } else {
                        __token = response.token;
                        localStorage.setItem("token" , __token);
                        localStorage.setItem("login_time" , Math.floor(Date.now() / 1000));
                        console.log(__token);
                        window.location.href = 'https://google.com/';
                    }
                },
                error: function (a, b, c) {
                   alert(JSON.stringify(a));
                }
            });
    }
    </script>
</head>
<body>
    <div class="col-lg-2"></div>

<div class="col-lg-8 no-padding" style="margin:15px 0">
    <h4 class="with-border page-title show">Đăng nhập</h4>
    <form id="login" onsubmit="return submitLoginForm()" method="POST" style="margin-top:15px">
        <div class="form-group">
            <div class="col-lg-3 control-label">Tên đăng nhập </div>
            <div class="col-lg-9">
                <input class="form-control" type="text" name="username" value="tuan"/>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-3 control-label">Mật khẩu </div>
            <div class="col-lg-9">
                <input class="form-control" type="password" name="password" value="123456"/>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="form-group">
            <div class="col-lg-3 control-label">Đăng nhập với tư cách</div>
            <div class="col-lg-3">
                <label><input name="type" type="radio" checked value="mod"> Mod</label>
            </div>
            <div class="col-lg-3">
                <label><input name="type" type="radio" value="smod"> Smod</label>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="add-form-submit form-one-button center">
            <input type="submit" class="btn" value="Đăng nhập"/>
        </div>
    </form>
</div>

<div class="col-lg-2"></div>
<div class="clearfix"></div>
</body>
</html>

