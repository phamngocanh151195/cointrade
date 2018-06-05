<!DOCTYPE html>
<html lang="en">
<head>
        <title><?php echo $pageTitle ?></title>
        <link rel="icon" href="http://icons.iconarchive.com/icons/froyoshark/enkel/512/Bitcoin-icon.png" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo CSS ?>/login.css">
</head>
<body>
        <form class="form form--login framed" id="signup" onsubmit = "return submitSignupForm ()" method = "POST" action="<?php echo MAIN_URL ?>/home">
            <input type="text" placeholder="Name" class="input input--top" name="name" />
            <input id="username" type="text" placeholder="Username" class="input" name="username" />
            <input type="password" placeholder="Password" class="input" name="password" />
            <input type="submit" value="Sign Up" class="input input--submit" />
            <a href="<?php echo MAIN_URL ?>/login"><label for="toggle--signup" class="text text--small text--centered"><b style="font-size: 17px;">Login</b></label></a>
    <a href="<?php echo MAIN_URL ?>/home"><label for="toggle--signup" class="text text--small text--centered"><b style="font-size: 20px;">Home</b></label></a>
            
        </form>
        <div class="fullscreen-bg"></div>

        <script type="text/javascript">
            var MAIN_URL = '<?php echo MAIN_URL ?>';
        </script>

        <script src="<?php echo JS ?>/jquery.min.js"></script>
        <script src="<?php echo JS ?>/login_signup.js"></script>

</body>
</html>
