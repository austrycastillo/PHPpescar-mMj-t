<?php
class Sauvignon extends Vino{
    private $tamanio;
    public function __construct($color = null, $aroma = null, $maridaje = null, $sabor = null,$tamanio=null)
    {
        parent::__construct($color,$aroma,$maridaje,$sabor);
        $this->tamanio = $tamanio;
    }
    
    public function catar(){
        echo "Catando un Sauvignon<br>";
        parent::catar();
        echo "<br>además tiene tamaño $this->tamanio";
    }

    public function getTamanio()
    {
        return $this->tamanio;
    }

    
    public function setTamanio($tamanio)
    {
        $this->tamanio = $tamanio;

       
    }
}