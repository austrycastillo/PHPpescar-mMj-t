<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="usuario" placeholder="Escribe el usuario">
        <input type="text" name="clave" placeholder="Escribe el password">
        <input type="submit" value="Acceder al sistema">
    </form>
    <?php
    class Login
    {
        private $user;
        private $pass;
        public function __construct($user = null, $pass = null)
        {
            $this->user = $user;
            $this->pass = $pass;
        }
        public function setUser($user)
        {
            $this->user = $user;
        }
        public function setPass($pass)
        {
            $this->pass = $pass;
        }
        public function acceder($userC, $passC)
        {
            if ($this->user == $userC && $this->pass == $passC) {
                echo "Bienvenido ;) ";
            } else {
                echo "Datos incorrectos!!! no puede acceder ;(";
            }
        }
    }

    if (isset($_POST['usuario'])) {
        //son del form
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        //son los correctos de bd
        $userC = "admin";
        $passC = "abc123";
        $objeto = new Login($usuario, $clave);
        $objeto->acceder($userC, $passC);
    }
    ?>
</body>

</html>
<?php
// date_default_timezone_set('America/Argentina/Buenos_Aires');
// echo date("d-m-y H:i:s");
// echo "<hr>";
// $fecha = new DateTime();
// echo $fecha->format("d-m-y");
