<?php
// $numeros[0] = 20;
// $numeros[1] = 30;
// $numeros[2] = 10;
// $numeros[3] = 80;

// $numeros[] = 20;
// $numeros[] = 30;
// $numeros[] = 10;
// $numeros[] = 80;

// $numeros[20] = 20;
// $numeros[11] = 30;
// $numeros[2] = 10;
// $numeros[42] = 80;

// $moneda["Espana"] = "Euro";
// $moneda["Suiza"] = "Franco";
// $moneda["USA"] = "Dolar";
// $moneda["Argentina"]="Pesos";

//clave valor (arreglo asociativo)
// $paciente = array(
//     "nombre" => "Juan",
//     "edad" => 18,
//     "correo" => "j@correo.com"
// );
// $productos =[
//     "nombre"=>"shampoo",
//     "precio"=>100
// ];
// var_dump($paciente);
// echo "<hr>";
// print_r($paciente);
// $tam = count($numeros);
// for ($i = 0; $i < $tam; $i++) {
//     echo $numeros[$i] . "<br>";
// }
// foreach($paciente as $valor){
//     echo $valor." - ";
// }
// foreach ($paciente as $indice => $valor) {
//     echo $indice.": ".$valor . " <br> ";
// }

//multidimencionales
// $color[0][0] = "Azul";
// $color[0][1] = "Negro";
// $color[1][0] = "Verde";
// $color[1][1] = "Amarillo";
// $color[2][0] = "Rosado";
// $color[2][1] = "Blanco";
// echo $color[2][1];
// $animal = array(
//     array("perro","gato"),
//     array("asno","gallina"),
//     array("cocodrilo","conejo")
// );
// $animal =[
//     [],
//     [],
//     []
// ];
// echo $animal[2][1];
// $comidas[0][0][0] = "empanadas";
// $comidas[0][0][1] = "asado";
// $comidas[0][0][2] = "arepa";
// $comidas[1][0][0] = "ensalada";
// $comidas[1][0][1] = "locro";
// $comidas[1][0][2] = "arroz";

// $agenda = [
//     'Andrea' => '4523650',
//     'Carlos'=>''
// ];
// $agenda['Sebastian'] = '845236';
// var_dump($agenda);
// if(isset($agenda['Andrea'])){
//     echo "Si existe el contacto Andrea";
// }
// $x= array_search('45250',$agenda);
// if($x){
//     echo "Si existe en ".$x;
// }else{
//     echo "No existe";
// }

// $valores = [1, 2, 3, 4];
// array_push($valores,5);//agrega al final del arreglo

// //array_pop elimina al final
// array_shift($valores);
// var_dump($valores);//elimina al principio
//array_unshift($valores,0); //agregar al principio
$alumnos = "Leonel,Sebastian,Jonathan,Ana";
print_r(explode(",", $alumnos));//de cadena a arreglos
$juguetes = ["pelota","autos","peluche"];
echo implode(" - ",$juguetes);//de arreglo a cadena
//sort,asort
