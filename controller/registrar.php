<?php
require_once("../model/Data.php");

$nombre = $_REQUEST["name"];
$pass = $_REQUEST["passwordsignup"];

$d = new Data();

$d->registrar($nombre,$pass);

header("location: ../index.php");