<?php
require_once("Conexion.php");
require_once("Usuario.php");

Class Data{
    private $con;

    public function __construct()
    {
        $this->con = new Conexion("bd_feria");
    }

    public function registerUser($user, $pass)
    {
        $query = "INSERT INTO usuario VALUES(NULL, '$user', '$pass')";
        $this->con->conectar();
        $this->con->ejecutar($query);
        $this->con->desconectar();
    }

    public function lookupUser($user, $pass)
    {
        $query = "SELECT * FROM usuario WHERE nombreUsuario = '$user' AND pass = '$pass'";
        $this->con->conectar();
        $rs = $this->con->ejecutar($query);
        $u = null;

        while($reg = $rs->fetch_array()){
            $u = new Usuario($reg[0], $reg[1], $reg[2]);
        }

        $this->con->desconectar();
        return $u;
    }
}
?>