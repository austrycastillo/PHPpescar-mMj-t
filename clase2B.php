<?php
/*
switch(variable a evaluar){
    case valor1:
        ..instrucciones..
        break;
    case valor2:
        ..instrucciones..
        break;
    default:
        ...instrucciones..
        break;
}
*/
$ficha = 200;
switch ($ficha) {
    case 100:
        echo "Tienes acceso a los autitos chocadores";
        break;
    case 200:
        echo "Tienes acceso a la montaña rusa";
        break;
    case 300:
        echo "Tienes acceso a la Noria";
        break;
    case 400:
        echo "Tienes acceso a la casa del terror";
        break;
    default:
        echo "Debes recargar";
        break;
}

echo "<hr><h2>while</h2>";
/*
while(condición){
    ...instruciones
    ajuste
}
*/
$n = 1;
while ($n <= 10) {
    echo $n . " - Hola<br>";
    $n++; //$n = $n + 1;
}
//n = 11
//impr = Hola Hola 
echo "<hr><h2>do while</h2>";
/*
do{
    ..instrucciones
    ajuste
}while(condición);
*/
$b = 1;
do {
    echo $b;
    $b++;
} while ($b <= 10);
echo "<hr><h2>for</h2>";
/*
for(inicio;condición;ajuste){
    ...instrucciones...
}
*/
$i=0;
for ($i = 1; $i <= 10; $i++) {
    echo "<br>El número ".$i;
}
/*
form dos número: uno para iniciar 
y uno para finalizar 
*/
