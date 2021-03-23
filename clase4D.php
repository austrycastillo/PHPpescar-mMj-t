<?php
// $numero = $_POST['numero'];
// function mostrarSecuencia($numero)
// {

//     for ($i = $numero; $i <= $numero + 20; $i++) {
//         echo $i . "<br>";
//     }
// }
// mostrarSecuencia($numero);
//algunas funciones de php
$dato="lo que sea";
echo strtoupper($dato);//convertir a mayúscula
$dato="OTRO TEXTO";
echo strtolower($dato);//convertir a minúscula
$dato ="tercer texto";
echo ucfirst($dato);//convertir primera letra de una cadena
$dato ="cuarto texto";
echo ucwords($dato);//convertir primera letra de cada palabra
$dato ="quinto texto";
echo substr($dato,7,5);//extraer parte de una cadena
$dato=20.3;
echo "<hr>";
echo ceil($dato);//redondea hacia arriba
$dato=20.9;
echo floor($dato);//redondea hacia abajo
$dato=20.3;
echo round($dato);//redondea
$dato=20;
if(is_integer($dato)){echo "si es entero";}
//is_double, is_string is_numeric
//trim elimina espacios en blancos, ltrim, rtrim
$dato=652364523.52362;
echo number_format($dato,2,',','.');