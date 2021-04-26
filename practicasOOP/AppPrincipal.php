<?php

include_once("FiguraGeometrica.php");
include_once("Cuadrado.php");
/*
Las clases abstractas no pueden ser instanciadas
*/
// $F1 = new FiguraGeometrica("cuadrado",4);
// $F1->calcularArea();
$F2 = new Cuadrado();
$F2->setLado(20);
$F2 -> calcularArea();