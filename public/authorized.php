<?php
require_once('../Auth.php');
require_once('functions.php');
// starts session or finds a session
// allows us to use session super global
session_start();
// variable to hold username if they were logged in
$username = (isset($_SESSION['LOGGED_IN_USER']) ) ? $_SESSION['LOGGED_IN_USER'] : "";
// if user has not logged in, will redirect them to the login page.
if(!isset($_SESSION['LOGGED_IN_USER']) || $_SESSION['LOGGED_IN_USER'] == "") {
	 header('Location: http://codeup.dev/login.php');
	  die(); 
}





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