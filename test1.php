
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

    <form id="login" onsubmit="return submitLoginForm()" method="POST">
             <input class="form-control" type="text" name="username" value="tuan"/>
                <input class="form-control" type="password" name="password" value="123456"/>
            <input type="submit" class="btn" value="Đăng nhập"/>
    </form>
</body>
</html>

