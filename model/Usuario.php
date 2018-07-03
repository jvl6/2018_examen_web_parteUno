<?php
class Usuario{
    private $id;
    private $nombreUsuario;
    private $pass;

    function __construct($id, $nombreUsuario, $pass)
    {
        $this->id = $id;
        $this->nombreUsuario = $nombreUsuario;
        $this->pass = $pass;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    public function getPass()
    {
        return $this->pass;
    }
}
?>