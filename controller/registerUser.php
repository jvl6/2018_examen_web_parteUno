<?php
require_once("../model/Data.php");

$user = $_REQUEST["user"];
$pass = $_REQUEST["pass"];
$location = $_REQUEST["location"];

$dat = new Data();

$dat->registerUser($user, $pass);

header("location:".$location);
?>