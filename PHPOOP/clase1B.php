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
        Nombre: <br><input type="text" name="nombre" value="<?=$_GET['nombre']; ?>"><br>
        Apellido:<br> <input type="text" name="apellido"><br>
        Dni: <br><input type="number" name="dni"><br>
        Correo:<br> <input type="email" name="correo"><br><br>
        <button>Registrarme</button>
    </form>
    <?php
    class Musico
    {
        public $nombre = null;
        public $apellido = null;
        public $dni = null;
        public $correo = null;
        public function __construct(array $datos)
        {
            $this->nombre =  isset($datos['nombre']) ? $datos['nombre'] : '';
            $this->apellido =  isset($datos['apellido']) ? $datos['apellido'] : '';
            $this->dni =  isset($datos['dni']) ? $datos['dni'] : '';
            $this->correo =  isset($datos['correo']) ? $datos['correo'] : '';
        }
        public function guardar()
        {
            if (empty($this->nombre)) {
                throw new Exception("El nombre no puede estar vacío");
            }
            if (empty($this->apellido)) {
                throw new Exception("El apellido no puede estar vacío");
            }
            if (empty($this->dni)) {
                throw new Exception("El dni no puede estar vacío");
            }
            if (empty($this->correo)) {
                throw new Exception("El correo no puede estar vacío");
            }
            echo "aquí haría el proceso de guardar";
        }
    }
    if (isset($_POST['nombre'])) {
        try {
            echo "<p>Iniciando....</p>";
            $m = new Musico($_POST);
            $m->guardar();
            echo "<p>Usted ha sido registrado correctamente</p>";
        } catch (Exception $e) {
            echo "<p>Se produjo un error</p>";
            echo "<p>{$e->getMessage()}</p>";
        } finally {
            echo "<p>Finalizando el programa</p>";
        }
    }
    ?>
</body>

</html>