<?php
session_start();
require_once 'Log.php';
require_once '../Auth.php';



Auth::logout();
header('Location:/login.php');
die();
?>




