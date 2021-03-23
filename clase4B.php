<?php
/*include: incluye uno o varios archivos: por error warning
y sigue ejecutando el código
require: incluye uno o varios archivos: por error fatal
y detiene ejecutar
include_once: incluye una sola vez el archivo: por error warning
y sigue ejecutando el código
require_once: incluye una sola vez el archivo: 
por error fatal y detiene ejecutar
*/
// echo "<b>Soy el secundario</b><hr>";
// require_once ("clase4.php");
// require_once ("clase4.php");
// require_once ("clase4.php");
// include_once ("clase4.php");
// include_once ("clase4.php");
// require ("clase4.php");
// require ("clase4.php");
//include ("clase4.php");
//include ("clase4.php");
// echo "<hr>terminando el archivo secundario";

//funciones propias

function saludar()
{
    echo "Holaaaaaaaa";
}
function saludar2()
{
    $saludo = "Hola 2";
    return $saludo;
}
function saludar3($nombre)
{
    echo "Hola " . $nombre;
}
function sumar($a, $b, $c)
{
    $sumar = $a + $b + $c;
    return $sumar;
}
function saludar4($nombre = "Fulanito")
{
    echo "Hola " . $nombre;
}
// saludar();
// echo "<br>";
// echo "<br>" . saludar2();
// saludar3("Filomena");
// echo sumar(10, 20, 30);
//saludar4("Ana");
$nombre= "Emanuel";
saludar4($nombre);
/*
realizar un form para un sistema 
debemos loguearnos
*/