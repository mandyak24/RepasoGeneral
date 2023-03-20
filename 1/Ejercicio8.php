<?php
$altura = 5;

for ($i = $altura; $i >= 1; $i--) {
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
<!-- En este caso, lo que cambia es el primer bucle, que comienza con el valor de la altura y va disminuyendo en cada 
iteración ($i--). Además, en el segundo bucle se ha mantenido la misma lógica que en la pirámide con vértice 
hacia arriba, pero invertida para que los asteriscos estén en la parte inferior de la pirámide. -->