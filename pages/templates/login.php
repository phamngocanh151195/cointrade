<!DOCTYPE html>
<html lang="en">
<head>
        <title><?php echo $pageTitle ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo CSS ?>/login.css">
</head>
<body>
        <form class="form form--login framed" id="login" onsubmit = "return submitLoginForm ()" method = "POST">
    <input id="username" type="text" placeholder="Username" class="input input--top" name="username" />
    <input type="password" placeholder="Password" class="input" name="password" />
    <input type="submit" value="Log in" class="input input--submit" />
    
    <a href="<?php echo MAIN_URL ?>/signup"><label for="toggle--signup" class="text text--small text--centered">New? <b>Sign up</b></label></a>
    <a href="<?php echo MAIN_URL ?>/home"><label for="toggle--signup" class="text text--small text--centered"><b>Home</b></label></a>
  </form>
  <div class="fullscreen-bg"></div>

        <script src="<?php echo JS ?>/jquery.min.js"></script>
        <script type="text/javascript">
            var MAIN_URL = '<?php echo MAIN_URL ?>';
        </script>
        <script src="<?php echo JS ?>/login_signup.js"></script>

</body>
</html>
