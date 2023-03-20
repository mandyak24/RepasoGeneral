<?php

// Crear un array unidimensional con 100 números aleatorios entre 1 y 100. Mostrar el array
// en forma de tabla HTML de 10 filas x 10 columnas y sombrear en color azul claro
// (lightblue) los números repetidos.
// Sugerencia: Utilizar la función de PHP array_count_values() para ver los números repetidos.


// Crear array unidimensional con 100 números aleatorios entre 1 y 100
$numeros=array();
for ($i=0; $i <100 ; $i++) { 
    $numeros[]=rand(1,100);
}

// Obtener los números repetidos utilizando la función array_count_values()
$contados=array_count_values($numeros); //esto resulta en un nuevo array con las veces que se repite cada numero
$repetidos=array_keys(array_filter($contados, function($contar){
    return $contar>1; 
    //los almacena en el array $repetidos
})); 

//array_keys devuelve las claves, numéricas y string, del array input
//array_filter() para filtrar los elementos de $contados y encontrar aquellos que tienen un valor mayor a 1. Los índices de estos elementos filtrados se almacenan en el array $repetidos.
//Este código encuentra los números que aparecen más de una vez en el array $numeros y los devuelve en el array $repetidos.

//Mostrar el array en forma de tabla HTML de 10x10

echo "<table border=1 cellpadding='10'>";
for ($i=0; $i < 10; $i++) { 
    echo "<tr>";
    for ($j=0; $j <10 ; $j++) { 
        $index=$i*10+$j;
        $numero=$numeros[$index];
        if(in_array($numero, $repetidos)){
            echo "<td style='background-color:lightblue;'>$numero</td>";
        }else{
            echo "<td>$numero</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

?>