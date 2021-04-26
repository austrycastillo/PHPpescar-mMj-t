<?php
class Cuadrado extends FiguraGeometrica{
    private $lado;
    public function setLado($lado){
        $this->lado = $lado;
    }
    public function getLado(){
        return $this->lado;
    }
    public function calcularArea()
    {
        parent::calcularArea();
        echo  $this->lado * $this->lado;
    } 
}