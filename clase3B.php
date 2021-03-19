<?php

//var_dump($acceso);
// echo $acceso[0]['usuario'];
?>
<form action="" method="post">
    Usuario: <input type="text" name="usuario"><br>
    Clave: <input type="text" name="clave"><br>
    <button>Acceder al sistema</button>
</form>
<?php
if (isset($_POST['usuario'])) {
    $acceso = [
        [
            'usuario' => 'admin',
            'clave' => '123'
        ],
        [
            'usuario' => 'sol',
            'clave' => '456'
        ],
        [
            'usuario' => 'luna',
            'clave' => '789'
        ],
    ];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $result = false;
    foreach ($acceso as $valor) {
        if ($valor['usuario'] == $usuario && $valor['clave'] == $clave) {
            $result = true;
            break;
        }
    }
    if ($result) {
        echo 'Bienvenido!';
    } else {
        echo 'Datos incorrectos';
    }
}
