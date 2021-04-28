<?php
class Triangulo extends FiguraGeometrica
{
    private $base;
    private $altura;
    public function __construct($color = null, $longLado = null, $base = null, $altura = null)
    {
        parent::__construct($color, $longLado);
        $this->base = $base;
        $this->altura = $altura;
    }
    public function setBase($base)
    {
        $this->base = $base;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function getBase($base)
    {
        return $this->base;
    }
    public function getAltura($altura)
    {
        return $this->altura;
    }
    public function calcularArea()
    {
        parent::calcularArea();
        echo "El área del triángulos es " . (($this->base * $this->altura) / 2) . "<br>";
    }
    public function calcularPerimetro()
    {
        parent::calcularPerimetro();
        echo "El perímetro es: " . ($this->getLongLado() * 3) . "<hr>";
    }
}
