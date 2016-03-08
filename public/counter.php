<?php

function pageController() {
	if(!isset($_GET['counter'])) {
		$_GET['counter'] = 0;
	}
	return $_GET;

}
extract(pageController());


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Counter</title>
</head>
<body>
<h1><?=$counter?></h1>
<a href="/counter.php?counter= <?=$counter+1;?>">Up</a>
<a href="/counter.php?counter= <?=$counter-1;?>">Down</a>
	
</body>
</html>