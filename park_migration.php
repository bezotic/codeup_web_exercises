<?php 

define('DB_HOST','127.0.0.1' );

define('DB_NAME', 'parks_db');

define('DB_USER', 'parks_user');

define('DB_PASS', 'password');

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
    PRIMARY KEY (national_parks_id)
)';

$dbc-> exec($createTable);
