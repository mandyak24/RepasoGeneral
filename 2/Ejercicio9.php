<?php
//Array de empleados de dos dimensiones ,1ª dimension : codigo el resto es 2ª dimension
$empleados = array(
    "CE1234" => array(
        "nombre" => "Juan",
        "edad" => 35,
        "salario" => 2500
    ),
    "CE5678" => array(
        "nombre" => "María",
        "edad" => 28,
        "salario" => 1800
    ),
    "CE9012" => array(
        "nombre" => "Pedro",
        "edad" => 42,
        "salario" => 200
    )
);
//Funcion que calcula el nuevo salario:
//parámetros el nombre, la edad y el salario de un empleado,
// y calcula un nuevo salario para esa persona en base a su situación:
function calcularNuevoSalario($codigo,$nombre, $edad, $salario,&$empleados) {
    $nuevoSalario = $salario;
    if ($salario < 1000) {
        if ($edad < 30) {
            $nuevoSalario = 1500;
          } elseif ($edad >= 30 && $edad<=45) {
            $nuevoSalario = $salario * 1.03;
          } elseif($edad>45) {
            $nuevoSalario = $salario * 1.15;
          }
      
      }elseif($salario>=1000 && $salario<=2000){
        if($edad<=45){
            $nuevoSalario=$salario*1.1;
        }elseif($edad>45){
            $nuevoSalario=$salario*1.04;
        }
      }else{
        echo "Su salario es superior a 2000 euros y se mantiene igual :  " .$salario ." euros";
      }
      
      //Si el salario ha cambiado (es distinto) se establece el nuevo salario:
      if($nuevoSalario!=$salario){
        $empleados[$codigo]["salario"]=$nuevoSalario;
        echo "El salario de $nombre ha cambiado de $salario a $nuevoSalario euros\n";
      }
    }
    
    //LLAMA A LA FUNCION PERLICA!!! QUE SE TE OLVIDA :)
   calcularNuevoSalario("CE9012", "Pedro", 42,200, $empleados);
  
  ?>