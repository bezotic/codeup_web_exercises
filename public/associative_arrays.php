<?php


$author1 = ['first_name' => 'Thomas' , 'last_name' => 'Pynchon'];
$author2 = ['first_name' => 'Jorge' , 'last_name' => 'Louis Borges'];
$author3 = ['first_name' => 'Juan' , 'last_name' => 'Rulfo'];
$author4 = ['first_name' => 'Jorge' , 'last_name' => 'Louis Borges'];
$author5 = ['first_name' => 'Julio' , 'last_name' => 'Cortazar'];

$book1 = [
	'title' => 'Gravity\'s Rainbow',
	'author' => $author1,
	
];


$book2 = [
	'title' => 'the Aleph and other stories',
	'author' => $author2,
	
];


$book3 = [
	'title' => 'Pedro Parramo',
	'author' => $author3,
	
];


$book4 = [
	'title' => 'Labyrinths',
	'author' => $author4,
	
];


$book5 = [
	'title' => 'Blow-Up',
	'author' => $author5,
	
];





$books = [
'book1' => $book1,
'book2' => $book2,
'book3' => $book3,
'book4' => $book4,
'book5' => $book5,



];

print_r($books);