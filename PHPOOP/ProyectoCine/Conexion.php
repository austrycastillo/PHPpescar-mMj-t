<?php
class Conexion{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname= "experimentosoop";
    protected $conexion;
    public function Conexion(){
        try{
           $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->pass); 
           $this->conexion->beginTransaction();//inicia
           echo "Me conecto 😜";
           $this->conexion->commit();//confirmar
           return $this->conexion;
        }catch(PDOException $e){
            if($this->conexion){
                $this->conexion->rollBack();//revierte
            }
            echo "Error de conexión ☠<br>".$e->getMessage();
        }
    }
}

new Conexion();