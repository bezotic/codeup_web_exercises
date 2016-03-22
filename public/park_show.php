<?php

require_once '../config.php';
require_once '../input.php';


	$stmt = $dbc->query('SELECT * FROM national_parks');
	$parks = $stmt->fetchALL(PDO::FETCH_ASSOC);



?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Park Content</title>
</head>
<body>
		
	
	
</body>
</html>