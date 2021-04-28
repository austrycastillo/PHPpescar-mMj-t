<?php
abstract class FiguraGeometrica
{
    private $color;
    private $longLado;
    public function __construct($color = null, $longLado = null)
    {
        $this->color = $color;
        $this->longLado = $longLado;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    
    public function getColor()
    {
        return $this->color;
    }
    public function setLongLado($longLado)
    {
        $this->longLado = $longLado;
    }
    
    public function getLongLado()
    {
        return $this->longLado;
    }
   
    public function calcularArea()
    {
        echo "Calculando área por favor espere...<br>";
    }
    public function calcularPerimetro()
    {
        echo "Calculando Perímetro en 3,2,1...<br>";


    }
}
