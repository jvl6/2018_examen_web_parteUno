<?php

require_once("../model/Data.php");

$nombre = $_REQUEST["username"];
$pass = $_REQUEST["password"];


$d = new Data();

$usuario = $d->getUsuario($nombre,$pass);

if ($usuario != null){

    session_start();
    $_SESSION["username"]=$nombre;

    header("location: ../view/inicio.php");
}else{
    echo "<script>
    alert('Error de autentificación. Puede que su usuario y/o contraseña esten incorrectos');
    </script>";
    header("../index.php");

}

/*if($usuario != null){
    session_start();
    $usuario = $_SESSION["username"]=$usuario->getNick();

    echo "$usuario";

    //header("location: ../view/inicio.php");
}else{
    echo "<h1>ELSE</h1>";
    //header("location: ../view/index.php?m=1");
}

*/