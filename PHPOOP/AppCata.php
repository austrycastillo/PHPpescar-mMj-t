<?php
include_once("Vino.php");
include_once("Malbec.php");
include_once("Sauvignon.php");
include_once("Cabernet.php");
//probamos con la superclase
// $copa1 = new Vino();
// $copa1->setAroma("Frutal");
// $copa1->catar();
// echo "<hr>";
// $copa2 = new Vino("vino alto","frutal","carnes blancas y rojas","boca redonda");
// $copa2 ->catar();
//probamos con las subclases
$copa3 = new Malbec("medio alto","frutal berries","carner rojas y blancas","boca redonda y acidez media","clavo de olor y tabaco");
$copa3 -> catar();
echo "<hr>";
$copa4 = new Malbec("uno","dos");
$copa4->catar();
echo "<hr>";
$copa5 = new Sauvignon("baja","vegetal y frutal","ensaladas y pescados","muy fresco con acidez alto","100ml");
echo $copa5->getTamanio()."<br>";
$copa5->catar();
echo "<hr>";
$copa6 = new Cabernet();
$copa6->setColor("alto intenso");
$copa6->setMaridaje("Carnes rojas, pastas, quesos fuertes");
$copa6->setSabor("acidez alta");
$copa6->setAroma("Vegetal y madera");
$copa6->catar();