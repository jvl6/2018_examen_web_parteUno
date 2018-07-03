<?php
require_once("../model/Data.php");

$user = $_REQUEST["user"];
$pass = $_REQUEST["pass"];
$location = $_REQUEST["location"];

$dat = new Data();

$ok = $dat->lookupUser($user, $pass);

if($ok == null){
    header("location:".$location);
} else {
    session_start();
    $_SESSION['login'] = $ok->getNombreUsuario();
    header("location:".$location);
}
?>