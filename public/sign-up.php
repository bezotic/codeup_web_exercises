<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/practice.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
	<title>Practice</title>
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/practice.html">About Me </a></li>
        <li><a href="/sign-up.html">Sign Up!</a></li>
		    <li><a href="/contact.html">Contact</a></li>
      </ul>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="jumbotron cash2">
  	<form form method="POST" action="/sign-up.php"class="navbar-form" role="search">
    		<div class="form-group">
      <section>
      		<input type="text" id="username" class="sign-up" name="username" placeholder="Enter your username">
  			<br>
  			<input type="password" id="password" class="sign-up" name="password" placeholder="Enter your Password">
  			<br>
    		</div>
    		<br>
    		<button type="submit" class="btn btn-default">Login</button>
    		<br>
    		<button type="submit" class="btn btn-default">Sign Up!</button>
  	</form>
  	<br>
</div>  

	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>	
</body>
</html>