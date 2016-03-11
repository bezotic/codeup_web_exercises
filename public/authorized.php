<?php
require_once 'Log.php';
require_once '../Auth.php';
require_once '../Input.php';
// starts session or finds a session
// allows us to use session super global
session_start();
// variable to hold username if they were logged in
// if user has not logged in, will redirect them to the login page.
if(!Auth::check()) {
	 header('Location: http://codeup.dev/login.php');
	  die(); 
}

$username=Auth::user();



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Authorized</title>
</head>
<body>
	<h1>Hello <?= $username; ?></h1>
	<a href="/logout.php">Logout</a>
	
</body>
</html>