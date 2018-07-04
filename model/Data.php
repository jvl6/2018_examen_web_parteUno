<?php
require_once("Conexion.php");
require_once("Usuario.php");

class Data{
    private $con;

    public function __construct(){
        $this->con = new Conexion("exam1");
    }

    public function registrar($nombre,$pass){
        $query = "INSERT INTO usuario VALUES(NULL, '$nombre','$pass');";
 
        $this->ejecutarQuery($query);

    }


    public function ejecutarQuery($query){

        $this->con->conectar();
        $this->con->ejecutar($query);
        $this->con->desconectar();
        
    }

    public function getUsuario($nombre, $pass){
        $this->con->conectar();
        $rs = $this->con->ejecutar("SELECT * FROM usuario WHERE nombre='$nombre' and pass = '$pass';");

        $usuario = null;

        while($reg = $rs->fetch_array()){
            $usuario = new Usuario($reg[0], $reg[1], $reg[2]);
        }

        $this->con->desconectar();

        return $usuario;
    }


}
