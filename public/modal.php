<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>modal</title>
</head>
<body>
<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    
Create a new file called park_migration.php. In that file:

Set up the connection parameters for parks_db and parks_user.

Require db_connect.php

Use exec() to delete a table named national_parks using DROP TABLE IF EXISTS.

After the DROP TABLE command, add another exec() to create the table national_parks with the following fields:

id (primary key, auto increment)

name

location

date_established (date)

area_in_acres (double)

Run this file using php park_migration.php.

Create a ne
    </div>
  </div>
</div>

<!-- Small modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>



		
	
</body>
</html>