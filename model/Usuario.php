<?php
class Usuario{
    private $id;
    private $nombre;
    private $pass;

    public function __construct($nombre, $pass){ 
        $this->nombre = ""; 
        $this->pass = "";
    }

    public function getId(){
        return $this->id;
    }


    public function setId($id){
        $this->id = $id;

        return $this;
    }


    public function getContraseña(){
        return $this->pass;
    }


    public function setContraseña($pass){
        $this->pass = $pass;

        return $this;
    }

   
    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;

        return $this;
    }
}

?>