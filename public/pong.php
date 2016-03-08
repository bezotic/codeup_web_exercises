<?php

function pageController() {
	if(!isset($_GET['counter']) && !isset($_GET['status'])) {
		$_GET['counter'] = 0;
		$_GET['status'] = "Start Over";
	}
	return $_GET;
	
	

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
		background-color: #f5ffd6;
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
<h1><?=$counter?></h1>
<a class='hit' href="/ping.php?counter=<?=$counter+1;?> & Status=HIT ">HIT</a>
<a class='miss' href="/ping.php?counter=0&status=MISS">MISS</a>
<img src="/img/pong.jpeg" class="pong"></img>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script><link>
<script>
"use strict";


 $(".miss").click(function(){
          $(".ping").hide()



  })





</script>
	
</body>
</html>