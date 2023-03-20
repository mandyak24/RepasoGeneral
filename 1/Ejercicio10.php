<!-- Ejercicio 10
Escribir un programa que genere en cada ejecución una tirada de Yahtzee! indicando un
resumen de las jugadas posibles y cuál es la recomendada.
El juego de Yahtzee! emplea 5 dados de 6 caras y las combinaciones posibles son:
● 3 de una clase: Debes obtener tres dados iguales. Sumas la puntuación de todos
esos dados.
● 4 de una clase: Debes obtener cuatro dados iguales. Sumas la puntuación de todos
los dados.
● Full: Debes obtener tres dados de una clase y dos de otra. Por ejemplo, tres de 1 y
dos de 5. Esta jugada vale 25 puntos.
● Escalera pequeña: Debes obtener cuatro dados consecutivos. Por ejemplo: 1, 2, 3 y
4 o 3, 4, 5 y 6. Esta jugada vale 30 puntos.
● Escalera grande: Debes obtener cinco dados consecutivos. Por ejemplo: 1, 2, 3, 4 y
5 o 2, 3, 4, 5 y 6. Esta jugada vale 40 puntos.
● Yahtzee: Debes obtener cinco dados iguales de la misma clase. Esta jugada vale 50
puntos. -->
<h1> YAHTZEE GAME </h1>
<?php 

//Tirada:

$dado=array();

for ($i=0; $i <5 ; $i++) { 
   $dado[$i]=rand(1,6);
}

sort($dado);

echo "Tirada: ";
foreach($dado as $value){
    echo $value . " ";
}

//Comprobar resultados:

$combinaciones = array(  //clave => valor
    "3 de una clase" => false, //3 numeros iguales
    "4 de una clase" => false, //4 numeros iguales
    "Full" => false, //3 dados iguales y 2 iguales
    "Escalera pequeña" => false, //4 consecutivos
    "Escalera grande" => false, //5 consecutivos
    "Yahtzee" => false //5 iguales
);

// Contar ocurrencias de cada número
$ocurrencias = array_count_values($dado); // cuenta las veces que se repite un numero en un array
$tres = false;
$dos = false;
if($cantidad=3){
    $tres=true;

}
if($cantidad=2){
    $dos=true;
}
print_r($ocurrencias);
// Verificar combinaciones posibles
foreach ($ocurrencias as $numero => $cantidad) {
        
      
        if ($tres && $dos) {
            $combinaciones["Full"] = true;
         }elseif($tres){
            $combinaciones["3 de una clase"] = true;
        }
        if ($cantidad >= 4) {
            $combinaciones["4 de una clase"] = true;
        }
    if (in_array($numero, array(1, 2, 3, 4, 5)) && in_array($numero + 1, array(1, 2, 3, 4, 5)) && in_array($numero + 2, array(1, 2, 3, 4, 5)) && in_array($numero + 3, array(1, 2, 3, 4, 5))) {
        $combinaciones["Escalera pequeña"] = true;
    }
    if (in_array($numero, array(1, 2, 3, 4)) && in_array($numero + 1, array(1, 2, 3, 4)) && in_array($numero + 2, array(1, 2, 3, 4)) && in_array($numero + 3, array(1, 2, 3, 4)) && in_array($numero + 4, array(1, 2, 3, 4))) {
        $combinaciones["Escalera grande"] = true;
    }
    if ($cantidad == 5) {
        $combinaciones["Yahtzee"] = true;
    }
}

// Calcular puntuación

$puntuacion = 0;

if ($combinaciones["Yahtzee"]) {
    $puntuacion = 50;
} elseif ($combinaciones["Escalera grande"]) {
    $puntuacion = 40;
} elseif ($combinaciones["Full"]) {
    $puntuacion = 25;
} elseif ($combinaciones["Escalera pequeña"]) {
    $puntuacion = 30;
} elseif ($combinaciones["4 de una clase"]) {
    $puntuacion = array_sum($dado);
} elseif ($combinaciones["3 de una clase"]) {
    // Buscar la primera ocurrencia de un número que aparezca 3 veces
    $puntuacion = array_sum($dado);
}

echo "<br>Puntuación: " . $puntuacion;