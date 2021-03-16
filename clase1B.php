<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--
    $_GET enlaces y form, la información
    viaja a través de la url

    $_POST form, la información es invisible
-->
    <a href="clase1C.php?dato=libros&anio=1998&autor=Pando">Visitar sitio</a>
    <br><br>
    <!-- <form action="clase1C.php" method="get"> -->
    <!-- <form action="clase1C.php" method="post"> -->
    <form action="clase1B.php" method="post">
        <input type="text" name="signo" placeholder="Escribe tu signo zodiacal">
        <input type="text" name="mes" placeholder="Mes de nacimiento">
        <input type="submit" value="Enviar Datos" name="enviar">
    </form>
    <hr>
    <?php
    if(isset($_POST['enviar'])){
        echo "Tu signo es ".$_POST['signo']." pues nacieste en: ".$_POST['mes'];
    }
    /*
    crear un formulario que solicite dos números (salario y bono), devolver el total con un incremento del 5%
    */
    ?>
</body>

</html>