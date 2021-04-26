<?php
// class Cantante
// {
//     private $nombre;
//     private $edad;
//     public function __construct($nombre = null, $edad = null)
//     {
//         $this->nombre = $nombre;
//         $this->edad = $edad;
//     }
//     public function setNombre($nombre)
//     {
//         $this->nombre = $nombre;
//     }
//     public function setEdad($edad)
//     {
//         $this->edad = $edad;
//     }
//     public function getNombre()
//     {
//         return $this->nombre;
//     }
//     public function getEdad()
//     {
//         return $this->edad;
//     }
// }

// $obj1 = new Cantante("Xuxa", 58);
// echo "El cantante de nombre: ".$obj1->getNombre().", edad: ".$obj1->getEdad();
// $obj2 = new Cantante();
// $obj2->setNombre("Ricardo Montaner");
// $obj2->setEdad(63);
// echo "<hr>El cantante de nombre: ".$obj2->getNombre().", edad: ".$obj2->getEdad();


class Padre{
    private $nombre;
    public function __construct($nombre=null)
    {
        $this->nombre = $nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function mostrar(){
        echo "Hola ".$this->nombre;
    }
}

class Hijo extends Padre{
    private $deporteFavorito;
    public function setDeporteFavorito($deporteFavorito){
        $this->deporteFavorito = $deporteFavorito;
    }
    public function getDeporteFavorito(){
        return $this->deporteFavorito;
    }
    public function mostrar()
    {
        parent::mostrar();
        echo "<br>Soy mostrando..."; 
    }
}
class Nieto extends Hijo{

}

$p = new Padre();
$p->setNombre("Juan");
$p->mostrar();
echo "<hr>";
$h = new Hijo();
$h->setNombre("Samuel");
$h->mostrar();
$h->setDeporteFavorito("natación");
echo "Deporte favorito: ".$h->getDeporteFavorito();
echo "<hr>";
$h = new Nieto();
$h->setNombre("Fifi");
$h->mostrar();
