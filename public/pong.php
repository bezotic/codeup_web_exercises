<?php
require_once('../Input.php');

function pageController() {

	$counter = 0;
	$status = 'game over';

	if(Input::has('counter') && Input::has('status')) {
		 	$counter = Input::get('counter');
			$status =Input::get('status');
	}

	return array(

		'counter'=>$counter,
		'status' => $status
	);
	

}
extract(pageController());


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pong</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<style>

	body {
		background-color: #ffeedd;
	}

	h1 {
		text-align: center;
	}

	a {
		position:relative;
		left:615px;
		bottom:-0px;
	}

	.pong {
		position:relative;
		top:100px;
		left:970px;

	}

</style>
</head>
<body>
<h1>Pong</h1>
<h1><?=$counter;?></h1>
<a class='hit' href="/ping.php?counter=<?=$counter+1;?>&status=HIT">HIT</a>
<a class='miss' href="/ping.php?counter=0&status=MISS">MISS</a>
<img src="/img/pong.jpeg" class="pong"></img>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script><link>
<script>
"use strict";







</script>
	
</body>
</html>