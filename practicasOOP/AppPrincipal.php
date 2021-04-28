<?php

include_once("FiguraGeometrica.php");
include_once("Cuadrado.php");
include_once("Triangulo.php");
include_once("Pentagono.php");

/*
Las clases abstractas no pueden ser instanciadas
*/
// $F1 = new FiguraGeometrica("cuadrado",4);
// $F1->calcularArea();
// $F2 = new Cuadrado();
// $F2 ->setColor("verde");
// echo "Figura ".$F2->getColor()."<br>";
// $F2->setLado(20);
// $F2 -> calcularArea();
// $F2 ->setLongLado(20);
// $F2->calcularPerimetro();

// $F3 = new Triangulo("amarillo",12, 100, 40);
// echo "Figura ".$F3->getColor()."<br>";
// // $F3->setBase(50);
// // $F3->setAltura(20);
// $F3 ->calcularArea();
// //$F3 ->setLongLado(100);
// //echo $F3 -> getLongLado();
// $F3->calcularPerimetro();
//$objeto = new Pentagono();
Pentagono::saludarPentagono();


