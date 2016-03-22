<?php 


require 'config.php';

$dbc->exec('TRUNCATE national_parks');


$parks = [

['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47389.67 , 'img' => '/img/Acadia.jpg' , 'description' => 'awesome!'],
['name' => 'American Samoa' , 'location' =>'Samoa' ,'city' => 'Samoa' , 'date_established' => '1988-10-31' , 'area_in_acres'=> 9000.00 , 'img' => '/img/american-samoa.jpg' , 'description' => 'awesome!'],
['name' => 'Arches' , 'location' =>'Arches' ,'city' => 'Utah' , 'date_established' => '1929-12-04' , 'area_in_acres'=> 76518.98 , 'img' => '/img/arches.jpg' , 'description' => 'awesome!'],
['name' => 'Badlands' , 'location' =>'Badlands' ,'city' => 'South Dakota' , 'date_established' => '1978-10-11' , 'area_in_acres'=> 242755.94 , 'img' => '/img/badlands.jpg' , 'description' => 'awesome!'],
['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47389.67 , 'img' => '/img/Acadia.jpg' , 'description' => 'awesome!'],
['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47389.67 , 'img' => '/img/Acadia.jpg' , 'description' => 'awesome!'],
['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47389.67 , 'img' => '/img/Acadia.jpg' , 'description' => 'awesome!'],
['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47389.67 , 'img' => '/img/Acadia.jpg' , 'description' => 'awesome!'],
['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47389.67 , 'img' => '/img/Acadia.jpg' , 'description' => 'awesome!'],
['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47389.67 , 'img' => '/img/Acadia.jpg' , 'description' => 'awesome!'],

];

	$sql = "INSERT INTO national_parks (name, location, city, date_established, area_in_acres, img, description)
		VALUES (:name, :location, :city, :date_established, :area_in_acres , :img , :description)";

		$stmt = $dbc->prepare($sql);

foreach ($parks as $park) {
 
	  $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);	
	  $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);	
	  $stmt->bindValue(':city', $park['city'], PDO::PARAM_STR);	
	  $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);	
	  $stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);	
	  $stmt->bindValue(':img', $park['img'], PDO::PARAM_STR);
	  $stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);	

	$stmt->execute();

}


