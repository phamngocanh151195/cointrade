<?php
    if (!$temp) {
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title><?php echo $pageTitle ?></title>
    <link rel="icon" href="http://icons.iconarchive.com/icons/froyoshark/enkel/512/Bitcoin-icon.png" />
    <!-- Bootstrap -->
    <link href="<?php echo CSS ?>/bootstrap.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="<?php echo CSS ?>/style.css" rel="stylesheet">
    <link href="<?php echo CSS ?>/profile.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="<?php echo CSS ?>/font-awesome.min.css" rel="stylesheet">
    <!-- Fontello CSS -->
    <link href="<?php echo CSS ?>/fontello.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <script src="<?php echo JS ?>/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo JS ?>/bootstrap.min.js"></script>
    <script src="<?php echo JS ?>/menumaker.js"></script>
    <script src="<?php echo JS ?>/return-to-top.js"></script>
    <script src="<?php echo JS ?>/login_signup.js"></script>
    <script src="<?php echo JS ?>/canvasjs.min.js"></script>
    <script src="<?php echo JS ?>/particles.min.js"></script>
</head>

<body>
    <!-- header-section-->
    <div class="header-wrapper fixed-top header-collapse">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="logo"> <a href="<?php echo MAIN_URL ?>/home"><img src="<?php echo IMG ?>/logo.png" alt=""> </a> </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-12">
                    <!-- navigations-->
                    <div class="navigation">
                        <div id="navigation">
                            <ul>
                                <li class="active"><a href="<?php echo MAIN_URL ?>/exchange">Exchange</a></li>
                                <li><a href="<?php echo MAIN_URL ?>/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.navigations-->
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 d-none d-xl-block d-lg-block">
                    <div class="header-quick-info">
                        <a id="login_button" href="<?php echo MAIN_URL ?>/login" class="btn btn-white btn-xs mr-1">Login</a>
                        <a id="signup_button" href="<?php echo MAIN_URL ?>/signup" class="btn btn-default btn-xs">Sign up</a>
                        <a id="profile_button" href="<?php echo MAIN_URL ?>/profile" class="profile"><img  id="profile_img" src="http://androidvoyage.com/images/avatar/avatar-05.png" style="border-radius: 50%; width: 50px;" title=""/></a>
                        <a id="logouta" href="javascript:void(0)" onclick="logout_click()"><span id="logout"  style="cursor: pointer; color: white;">Logout</span>  </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. header-section-->
    <!-- page-header -->
    <div class="page-header" style="height: 100px;">
    </div>
    <!-- /.page-header-->
<?php  }  ?>