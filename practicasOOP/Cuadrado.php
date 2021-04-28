<?php
class Cuadrado extends FiguraGeometrica
{
    private $lado;
    public function setLado($lado)
    {
        $this->lado = $lado;
    }
    public function getLado()
    {
        return $this->lado;
    }
    public function calcularArea()
    {
        parent::calcularArea();
        echo  "El área del cuadrado es " . $this->lado * $this->lado."<br>" ;
    }
    public function calcularPerimetro()
    {
        parent::calcularPerimetro();
        echo "El perímetro es: ".($this->getLongLado() * 4). "<hr>";
    }
}
