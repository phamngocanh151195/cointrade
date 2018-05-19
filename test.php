<? php

session_start();
error_reporting(E_ERROR | E_PARSE);
$__pattern = '/cointrade';
$__page = str_replace($__pattern.'/', '', $_SERVER['REQUEST_URI']);

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE');

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
	if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

	if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
		header("Access-Control-Allow-Headers:{$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

	exit(0);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST)) {
    $_POST = json_decode(file_get_contents('php://input'), true);
}


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<form id="login" onsubmit = "ahihe()" method = "POST">
            <input id="email1" type="text" name="username">
            <input id="password1" type="password" name="password" placeholder="Password">
            <input type="submit" name="submit"  value='Ckick em di'>
        </form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
	<script src="js/login_signup.js"></script>

</body>
</html>
