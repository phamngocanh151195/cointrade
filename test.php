<? php

<!DOCTYPE html>
<html lang="en">
<head>
        <title>Login V1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        <form id="login" onsubmit = "return submitLoginForm()" method = "POST">
            <input id="email1" type="text" name="username" value="tuan">
            <input id="password1" type="password" name="password" placeholder="Password" value="123456">
            <input type="submit" name="submit"  value='Ckick em di'>
        </form>

        <script src="js/jquery.min.js"></script>

        <script>
                function submitLoginForm() {
	            console.log('hello');
	            $.ajax({
	                url: 'http://45.119.82.176:8000/login/user/',
	                type: "post",
	                data: $('#login').serialize(),
	                contentType: 'application/json',
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
</body>
</html>
