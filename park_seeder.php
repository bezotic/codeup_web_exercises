<?php 


require 'config.php';


$parks = [

['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47,389.67],
['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47,389.67],
['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47,389.67],
['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47,389.67],
['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47,389.67],
['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47,389.67],
['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47,389.67],
['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47,389.67],
['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47,389.67],
['name' => 'Acadia' , 'location' =>'Maine' ,'city' => 'Maine' , 'date_established' => '1919-12-02' , 'area_in_acres'=> 47,389.67],

];


foreach ($parks as $park) {
	$sql = "INSERT INTO national_parks (name, location, city, date_established, area_in_acres)
		VALUES ('{$park['name']}', '{$park['location']}', '{$park['city']}', '{$park['date_established']}', {$park['area_in_acres']})";

	$dbc-> exec($sql);

}


