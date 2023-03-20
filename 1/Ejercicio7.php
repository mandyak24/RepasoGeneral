<?php
$altura = 5;

for ($i = 1; $i <= $altura; $i++) {
    for ($j = $altura - $i; $j > 0; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= ($i * 2) - 1; $j++) {
        if ($i == $altura || $j == 1 || $j == ($i * 2) - 1) {
            echo "*&nbsp;";
        } else {
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
?>
 <!-- el segundo bucle anidado se encarga de imprimir la parte central de la pirámide. Si la fila actual es la última 
 ($i == $altura) o si estamos en la primera posición ($j == 1) o en la última posición ($j == ($i * 2) - 1) 
 de la fila actual,entonces se imprimirá un asterisco (*) seguido de un espacio en blanco (&nbsp;), 
 para formar los bordes de la pirámide. De lo contrario,se imprimirán tres espacios en blanco (&nbsp;&nbsp;&nbsp;), 
 para dejar hueca la parte central de la pirámide. -->