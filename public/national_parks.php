<?php 

require_once '../config.php';
require_once '../input.php';

$stmt = $dbc->query('SELECT * FROM national_parks');
$parks = $stmt->fetchALL(PDO::FETCH_ASSOC);



		





	$page1 = 1;
	$page2= 2;
	$page3= 3;

	$limit= 4;


	$offset1 =($page1 * $limit)-$limit;
	$offset2 =($page2 * $limit)-$limit;
	$offset3 =($page3 * $limit)-$limit;
	

	$var = Input::has('page')? Input::get('page') : 1;


	switch ($var) {

    case 1:
  
    $stmt = $dbc->query("SELECT * FROM national_parks LIMIT $limit OFFSET $offset1");

 
    $parks = $stmt->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2:
        
    $stmt = $dbc->query("SELECT * FROM national_parks LIMIT $limit OFFSET $offset2");


    $parks = $stmt->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:
         
    $stmt = $dbc->query("SELECT * FROM national_parks LIMIT $limit OFFSET $offset3");

    $parks = $stmt->fetchAll(PDO::FETCH_ASSOC);
        break;
   
    default:
}	







?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>National Parks</title>
</head>
<body>
	 <?php foreach($parks as $park): ?>
    <h2><?=$park['name'] ?><h2>
    <h3><?=$park['location'] ?><h3>
    <h3><?=$park['date_established'] ?><h3>
    <h3><?=$park['area_in_acres'] ?><h3>
    <?php endforeach; ?>
	
	<a href="national_parks.php?=page=<?=$page1;?>">page 1</a><br>
  
         
    <a href="national_parks.php?page=<?=$page2;?>">page 2</a><br>


    <a href="national_parks.php?page=<?=$page3;?>">page 3</a><br>

	
</body>
</html>

