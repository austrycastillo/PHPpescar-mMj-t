<?php
abstract class Vino
{
    public $color;
    public $aroma;
    public $maridaje;
    public $sabor;
    public function __construct($color = null, $aroma = null, $maridaje = null, $sabor = null)
    {
        $this->color = $color;
        $this->aroma = $aroma;
        $this->maridaje = $maridaje;
        $this->sabor = $sabor;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function setAroma($aroma){
        $this->aroma = $aroma;
    }
    public function setMaridaje($maridaje){
        $this->maridaje = $maridaje;
    }
    public function setSabor($sabor){
        $this->sabor = $sabor;
    }
    public function getColor(){
        return $this->color;
    }
    public function getAroma(){
        return $this->aroma;
    }
    public function getMaridaje(){
        return $this->maridaje;
    }
    public function getSabor(){
        return $this->color;
    }
    public function catar(){
        echo "La bodega tiene copas de vino, con aroma $this->aroma, color". $this->getColor().", sabor $this->sabor y maridaje $this->maridaje";
    }
}
