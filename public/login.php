<?php



// starts session or finds a session
// allows us to use session super global
session_start();
require_once('../Auth.php');
require_once('../Input.php');



//variables for login check
$username = 'monkey';
$password = 'phonics';


//checking $_POST superglobal for input to check for login
$attemptedUsername = Input::has('username') ?(Input::get('username')): "";
$attemptedPassword = Input::has('password') ?(Input::get('password')): "";

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
    <title>Login Form</title>
</head>
<body>
    <form method="POST">
        <label for "username">username</label>
        <input  id="username" type="text" name="username"><br>
        <label for "password">Password</label>
        <input id="password" type="password" name="password"><br>
        <input type="submit">
    </form>



    
</body>
</html>



