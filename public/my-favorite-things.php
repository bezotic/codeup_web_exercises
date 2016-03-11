<?php






function pageController() {
	$things = ['Basketball', 'Pizza', 'Sleeping', 'Lurking', 'frying food'];
	$data = [
		'items' => $things
	];
	
	return $data;


}


extract(pageController());
var_dump($items);




$things = ['Basketball', 'Pizza', 'Sleeping', 'Lurking', 'frying food'];




?>
<style>
 body {
 	background-color: papayawhip;
 }


</style>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Favorite Things</title>
</head>
<body>
<h1>My Favorite Things</h1>

<?php foreach($items as $item) : ?>
	<ul><li><?= $item; ?></ul></li>
<?php endforeach; ?>	
	
</body>
</html>