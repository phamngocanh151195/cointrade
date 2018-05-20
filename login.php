<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Cointrade HTML Website Template - Sign in Page </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Fontello CSS -->
    <link rel="stylesheet" type="text/css" href="css/fontello.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
</head>

<body class="bg-primary pdt100">
    <div class="content">
        <div class="container">
            <div class="row">
                <!-- login-form -->
                <div class="offset-xl-3 col-xl-6 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12 ">
                    <div class="login-form">
                        <h2 class="text-center mb30">Sign in to CoinTrade</h2>
                        <form id="login" onsubmit="return ahihe()" method="POST">
                            <div class="form-group">
                                <label class="control-label sr-only" for="email"></label>
                                <input id="email1" type="text"  name="username" placeholder="Email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label sr-only" for="password"></label>
                                <input id="password1" type="password" name="password" placeholder="create password" class="form-control" required>
                            </div>
                            <span>
                                <input id="box1" type="checkbox" class="with-font">
                                <label for="box1">Keep me signed in on this computer</label>
                          </span>
                            <input type="submit" class="btn btn-default btn-lg  btn-block mt20" value="Signin">
                        </form>
                    </div>
                    <p class="text-white">Not a member? <a href="register.php" class="text-yellow">Sign up</a><span class="pull-right"><a href="index.php" class="text-white">Back to Home</a> </span></p>
                </div>
                <!-- /.login-form -->
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    
    <script src="js/login_signup.js"></script>
</body>

</html>
