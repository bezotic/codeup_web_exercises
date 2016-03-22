<?php 

require_once '../config.php';
require_once '../Input.php';





		


$limit  = 4;
$offset = 0;
$page = 1;

if(Input::has('page')) {
	$page = Input::get('page');
	$offset = ($limit * $page)-$limit;
}
if($_SERVER['REQUEST_METHOD']== "POST"){
	$input = userInput();
}

$stmt = $dbc->prepare("SELECT * FROM national_parks limit :limit offset :offset");
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();


$parks  = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt   = $dbc->prepare("SELECT COUNT(*) FROM national_parks");
$stmt->execute();
$parksTable  = $stmt->fetchColumn();
	

$pages = $parksTable / $limit;

function userInput() {
	if (Input::has('description') && Input::has('description') != '') {
		$description =Input::get('description');
	} else {
		echo "no dice";
		return;
	}	
	if (Input::has('national_parks_id')) {
		$nationalId= Input::get('national_parks_id');
	   } else {
	   	echo "unsuccessful";
	   	return;
	   }

	   $insert = "UPDATE national_parks SET description =:description WHERE national_parks_id = :parkID";
	   $stmt = $dbc->prepare($insert);
	   $stmt->bindValue(':description', $description, PDO::PARAM_STR);
	   	   $stmt->bindValue(':parkID', $nationalId, PDO::PARAM_STR);
	   $stmt->execute();	

}	


	



?>

<!DOCTYPE html>
<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/national_parks.css">
        <meta charset="utf-8">
        <title>Parks Index</title>
    </head>
    <body>
         <?php foreach ($parks as $park): ?>
            <h1> <a href="?park_id=<?=$park['national_parks_id'] ?>"> <?= $park['name']?></a>
            </h1>
            <h3><?= $park['location']?></h3>
            <h3><?= $park['date_established']?></h3>
             <h3><?= $park['area_in_acres']?></h3>
           <form method = 'POST'>
             <div class="form-group">
			 	 <label for='description'>description:</label><textarea class="form-control" name='description' rows="5" id="comment"></textarea>
			 	 <input type='hidden' name='national_parks_id' value="<?=$park['national_parks_id'] ?>">
			 	<input class='submit' type="submit">
			 </div>
		   </form>
             <div class='line'>
      		 </div>
         <?php endforeach; ?>
         <?php if ($page<= $pages) { ?>
              <a class='links' href="national_parks.php?page=<?=$page + 1 ?>">Next</a>
         <?php } ?>
          <?php if ($page > 1) { ?>
             <a class= 'links'href="national_parks.php?page=<?=$page - 1 ?>">Previous</a>
         <?php } ?>
    </body>
</html>



