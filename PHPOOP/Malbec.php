<?php
class Malbec extends Vino{
    private $hierba;
    public function __construct($color = null, $aroma = null, $maridaje = null, $sabor = null,$hierba = null)
    {
        Vino::__construct($color,$aroma,$maridaje,$sabor);
        $this->hierba = $hierba;
    }
    public function catar(){
        echo "Catando un malbec<br>";
        Vino::catar();
        echo "<br>además tiene de hierbas: $this->hierba";
    }
}