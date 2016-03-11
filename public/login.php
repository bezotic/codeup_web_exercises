<?php



// starts session or finds a session
// allows us to use session super global
session_start();
require_once '../Auth.php';
require_once '../Input.php';


if(Auth::check()) {
	header('Location:/authorized.php');
	die();
}



//variables for login check


$username = 'monkey';
$password = 'phonics';


//checking $_POST superglobal for input to check for login
$attemptedUsername = Input::has('username') ?(Input::get('username')): "";
$attemptedPassword = Input::has('password') ?(Input::get('password')): "";


Auth::attempt($attemptedUsername, $attemptedPassword);
	if(Auth::check()) {
		header('Location:/authorized.php');
		die();
	}





// checking if "LOGGED_IN_USER" key isset
//and if it has a value
//telling me if they are logged in and don't need to be here
if(isset($_SESSION['LOGGED_IN_USER']) && $_SESSION['LOGGED_IN_USER'] != ""){
	//header redirects to another page
	 header('Location: http://codeup.dev/authorized.php');
	  die(); //use die or code will keep running on the server. use die after header redirects.
// checking to see if both values match the correct login information
// doing this to login user if correct information is logged in.
}elseif($username == $attemptedUsername && $password == $attemptedPassword) {
		//create a session key
		$_SESSION['LOGGED_IN_USER'] = $username;
		header('Location: http://codeup.dev/authorized.php');
		die();
		// save value as the username

// if user put in wrong information.
// prevents message from showing when user submitted nothing or first time loading.
} else if($attemptedUsername != '' || $attemptedPassword != '') {
	echo "unsuccessful login attempt";
}










?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Droid+Sans:700' rel='stylesheet' type='text/css'>
    <title>Login Form</title>
</head>
	<style>
		form {
		 position: relative;
    	top: 200px;
    	left: 40%;
    	opacity:0.8;
		}

		.submit {
			position: relative;
    		left: 40px;
    		top: 5px;

		}

		h1 {
			text-align: center;

		}

		body {
			min-height: 100%;
    		background:
			url("/img/tokyo.jpeg");
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			font-family: 'Droid Sans', sans-serif;
		}
		



	</style>
<body>
	<?php include_once 'navbar.php'; ?> 
	<h1>Welcome User. WE OWN YOU</h1>
    <form method="POST">
        <label for "username"></label>
        <input  id="username" type="text" placeholder="Enter your username" name="username"><br>
        <label for "password"></label>
        <input id="password" type="password" placeholder="Enter your password" name="password"><br>
        <input class='submit' type="submit">
    </form>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src = "../js/bootstrap.min.js"></script>  
</body>
</html>



