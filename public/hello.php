<?php

echo "hello World\n";

define('MY_NAME','Richard');
echo 'MY_NAME' .PHP_EOL;



//$number = array(1,2,3,4,5);

// var_dump($number);

// print_r($number);

$name = ['first_name' => 'Richard', 'last_name' => 'De Los Santos'];
print_r($name);

$number =[1,2,3,4,5];

print_r($number);

echo $number[3] .PHP_EOL;

$person1 = [
	'first_name' => 'Richard',
	'last_name' => 'De Los Santos',
	'email' => 'blahblah@yahoo.com',
	'phone' => '210-210-2102',
];

$person2 = [
	'first_name' => 'Raymundo',
	'last_name' => 'De Los Santos',
	'email' => 'blahblah@yahoo.com',
	'phone' => '210-210-2102',
];

$person3 = [
	'first_name' => 'Ramiro',
	'last_name' => 'De Los Santos',
	'email' => 'blahblah@yahoo.com',
	'phone' => '210-210-2102',
];


$people = [
	'person1' =>[$person1],
	'person2' =>[$person2],
	'person3' =>[$person3],

];

print_r($people);


