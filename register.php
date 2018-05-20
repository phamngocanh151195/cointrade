<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Cointrade SignUp </title>
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
  <form class="form form--login framed" id="signup" method = "POST" onsubmit="return Signup()">
    <input id="name" type="text" placeholder="Name" class="input input--top" name="name" />
    <input id="username" type="text" placeholder="Username" class="input" name="username" />
    <input id="password" type="password" placeholder="Password" class="input" name="password" />
    <input id="Submit" type="submit" value="Sign Up" class="input input--submit" />
  </form>
  <div class="fullscreen-bg"></div>
    <script src="js/jquery.min.js"></script>    
    <script src="js/login_signup.js"></script>
</body>

</html>
