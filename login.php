<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Cointrade Login </title>
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
  <form class="form form--login framed" id="login" onsubmit = "return login()" method = "POST">
    <input type="text" placeholder="Username" class="input input--top" name="username" />
    <input type="password" placeholder="Password" class="input" name="password" />
    <input type="submit" value="Log in" class="input input--submit" />
    
    <a href="register.php"><label for="toggle--signup" class="text text--small text--centered">New? <b>Sign up</b></label></a>
  </form>
  <div class="fullscreen-bg"></div>
    <script src="js/jquery.min.js"></script>    
    <script src="js/login_signup.js"></script>
</body>

</html>
