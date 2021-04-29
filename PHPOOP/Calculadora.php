<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>
	<form action="" method="POST">
		<label>Numero1</label>
		<input type="number" name="Numero1"><br>
		<label>Numero2</label>
		<input type="number" name="Numero2"><br>
		<label>Operacion a realizar</label>
			<select name="operacion">
				<option value="s">Suma</option>
				<option value="r">Resta</option>
				<option value="m">Multiplicacion</option>
				<option value="d">Division</option>
			</select>
			<br>
		<input type="submit" name="enviar">
	</form>
<?php

abstract class Operacion{

	protected $num1;
	protected $num2;
	protected $resultado;
	public function __construct($num1 = null,$num2 = null)
            {
                $this->num1 = $num1;
                $this->num2 = $num2;
            }
	public function Calcular(){
		echo $this->resultado;
	}

}
class Suma extends Operacion{
	$this->resultado=$this->num1+$this->num2;
}
class Resta extends Operacion{
	$this->resultado=$this->num1-$this->num2;
}
class Multiplicacion extends Operacion{
	$this->resultado=$this->num1*$this->num2;
}
class Division extends Operacion{
	$this->resultado=$this->num1/$this->num2;
}


if (isset($_POST['enviar'])) {
	$n1=$_POST['Numero1'];
	$n2=$_POST['Numero2'];

	try{
		"<p>Iniciando...</p>";

		switch ($_POST['operacion']) {
			case 's':
				$obj= new Suma ($n1,$n2);

				break;
			case 'r':
				$obj= new Resta ($n1,$n2);

				break;
			case 'm':
				$obj= new Multiplicacion($n1,$n2);

				break;
			case 'd':
				$obj= new Division($n1,$n2);

				break;
		}
		$obj->calcular();
	}
	catch(Exception$e){
		echo"<p> Se produjo un error</p>";
        echo"<p> {$e->getMessage()}</p>";
	}
	finally{
		echo "<p>Finaliza el programa</p>";
	}
}

?>
</body>
</html>

