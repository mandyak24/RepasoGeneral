<?php

$base = 9; // número de asteriscos de la base
$altura = ceil($base / 2); // altura de la pirámide

// imprimir la pirámide
for ($i = 1; $i <= $altura; $i++) {
    for ($j = 1; $j <= $base; $j++) {
        if ($j >= $altura - $i + 1 && $j <= $altura + $i - 1) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;"; //se están utilizando dos espacios en blanco &nbsp;&nbsp; 
        }
    }
    echo "<br>";
}

?>

<!-- &nbsp; se utiliza para imprimir espacios en blanco visibles en la salida HTML -->
<!-- Se utiliza un bucle for anidado para recorrer las filas y las columnas de la pirámide. -->
<!-- El bucle exterior se ejecuta $altura veces, que es la altura de la pirámide. En cada iteración, 
se imprime una fila de la pirámide. El bucle interior se ejecuta $base veces, que es el ancho máximo de la 
pirámide. En cada iteración, se decide si se debe imprimir un asterisco o un espacio en blanco en esa posición.
La condición if dentro del bucle interior comprueba si la posición actual ($j) está dentro del rango de posiciones 
donde se deben imprimir asteriscos para la fila actual ($i). Si es así, se imprime un asterisco. Si no, se imprime 
un espacio en blanco. -->