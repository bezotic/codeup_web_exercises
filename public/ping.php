<?php

require_once('../Input.php');

function pageController() {



	// if(!isset($_GET['counter']) && !isset($_GET['status'])) {
	// 	$_GET['counter'] = 0;
	// 	$_GET['status'] = "Start Over";
	// }
	// return $_GET;
	$counter = 0;
	$status = 'game over';

	// http://codeup.dev/pong.php?counter=1&Status=HIT
	if(Input::has('counter') && Input::has('status')) {
		 	$counter = Input::get('counter');
			$status =Input::get('status');


	}    // GET was an associative array. we have to return an array.
	return array(

		'counter'=>$counter,
		'status' => $status
	);
	
	
	

}
extract(pageController());

//escape($input);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ping</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<style>

	body {
		background-color: #f5ffd6;
	}

	h1 {
		text-align: center;
	}

	a {
		position:relative;
		left:615px;
		bottom:40px;
	}

	.ping {
		position:relative;
		right:70px;
		top:200px;
	}

</style>
</head>
<body>
<h1>Ping</h1>
<h1><?=$counter;?></h1>
<a class='hit' href="/pong.php?counter=<?=$counter+1;?>&status=HIT">HIT</a>
<a class='miss' href="/pong.php?counter=0&status=MISS">MISS</a>
<img src="/img/ping.jpeg" class="ping"></img>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script><link>
<script>
"use strict";



 





</script>	
</body>
</html>