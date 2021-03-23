<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Acceso al sistema blimblim</h1>
    <form action="" method="post">
        <input type="text" name="usuario" placeholder="Escribe tu usuario">
        <input type="password" name="clave" placeholder="Escribe tu clave">
        <input type="submit" value="Conectar al sistema" name="boton">

    </form>
    <?php
    if (isset($_POST['usuario'])) {
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        function conectar($user, $pass)
        {
            if ($user == "admin" && $pass == 123) {
                //header("location:nombredearchivo");
                echo "<b style='color:green'>Bienvenido al sistema<b>";
            } else {
                echo "<b style='color:red'>No puede acceder<b>";
            }
        }
        conectar($usuario, $clave);
    }
    /*
    solicitar al usuario un número
    y mostra una secuencia a partir de ese número
    hasta 20 números más
    */
    ?>
    <form action="clase4D.php" method="post">
        <input type="number" name="numero" placeholder="Escribe un número">
        <button name="boton">Mostrar secuencia</button>
    </form>
   
   
</body>

</html>