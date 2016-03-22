<?php 



require 'db_connect.php';


echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";




$dropTable = 'DROP TABLE IF EXISTS national_parks';

$dbc->exec($dropTable);


$createTable = 'CREATE TABLE national_parks (
    national_parks_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(300) NOT NULL,
    location VARCHAR(300) NOT NULL,
    city  VARCHAR(300) NOT NULL,
    date_established date,
    area_in_acres double,
    img VARCHAR(50) NOT NULL,
    description TEXT NOT NULL,
    PRIMARY KEY (national_parks_id)
)';

$dbc-> exec($createTable);
