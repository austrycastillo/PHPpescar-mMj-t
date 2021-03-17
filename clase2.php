<?php
/*
if(condición){
    ...instrucciones..
}else{
    ...instrucciones..
}

if(condición){
    ...instrucciones..
}else if(condición){
    ...instrucciones..
}else if(condición){
    ...instrucciones..
}else{
    ...instrucciones...
}

if(condición){
    if(condición){
        ...instrucciones
    }
}else{
    ...instrucciones..
}
*/
$num = 1;
if ($num > 10) {
    echo $num . " Es mayor a 10";
} else if ($num < 10) {
    echo $num . " es menor a 10";
} else {
    echo $num . " es igual a 10";
}
/*
crear form solicitando un número y determinar si tiene 1,2,3 o 4 cifras
*/
?>
<h2>Ejercicio cantidad de cifras</h2>
<form action="" method="post">
    <input type="text" name="numero" placeholder="Escribe un número">
    <button>Consultar</button>
</form>
<?php
if (isset($_POST['numero'])) {
    $num = $_POST['numero'];
    if ($num > 0 && $num < 10) {
        echo "<strong>Tiene una cifra</strong>";
    } else if ($num >= 10 && $num < 100) {
        echo "<strong>Tiene dos cifras</strong>";
    } else if ($num >= 100 && $num < 1000) {
        echo "<strong>Tiene tres cifras</strong>";
    } else if ($num >= 1000 && $num < 10000) {
        echo "<strong>Tiene cuatro cifras</strong>";
    } else {
        echo "<strong style='color:red'>No corresponde con el programa</strong>";
    }
}
/*
form para ingresar a un boliche (entre 18 y 25)
si tenemos 22 nos dan una bebida gratis,
si no podemos pasar informar la razón
*/
?>
<hr>
<h2>Ejercicio boliche</h2>
<form action="" method="get">
    <input type="text" name="edad" placeholder="Dime tu edad">
    <button>Intentar ingresar al boliche</button>
</form>
<?php
if (isset($_GET['edad'])) {
    $edad = $_GET['edad'];
    if ($edad >= 18 && $edad <= 25) {
        echo "Bienvenid@ ;)";
        if ($edad == 22) {
            echo "<br>Tienes una bebida gratis!";
        }
    } else {
        echo "No puedes pasar ;(";
        if ($edad < 18) {
            echo "<br>por edad menor a lo permitido";
        } else {
            echo "<br>por viejito";
        }
    }
}
