<?php
abstract class FiguraGeometrica
{
    private $color;
    public function __construct($color = null)
    {
        $this->color = $color;
        
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    
    public function getColor()
    {
        return $this->color;
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
