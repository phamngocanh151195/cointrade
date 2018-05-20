
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="css/login.css" rel="stylesheet">
    <script>
    function submitLoginForm() {
        console.log('hello');
        alert($('#login').serialize());
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
  <form class="form form--login framed" id="login" onsubmit = "return submitLoginForm()" method = "POST">
    <input type="text" placeholder="Username" class="input input--top" name="username" />
    <input type="password" placeholder="Password" class="input" name="password" />
    <input type="submit" value="Log in" class="input input--submit" />
    
    <a href="register.php"><label for="toggle--signup" class="text text--small text--centered">New? <b>Sign up</b></label></a>
  </form>
  <div class="fullscreen-bg"></div>
</body>
</html>

