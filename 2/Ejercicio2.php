<!-- Ejercicio 2
Usando los dos siguientes arrays: $ar1 = array (4,12,-5,8,13,-9,0,3); $ar2 = array
(1,-2,3,-6,4,12,-7,-8); Se debe calcular la media aritmética de cada uno y, posteriormente
separados por ":", mostrar los números de cada array que sean superiores a esa media.
Con algo mayor de dificultad (tras lograr la funcionalidad básica) probar a que el resultado
que se muestre no lleve ":" en la primera aparición ni al final y sí en el resto.
El resultado se verá así: -->


<?php

$ar1 = array(4,12,-5,8,13,-9,0,3);
$ar2 = array(1,-2,3,-6,4,12,-7,-8);

$media1=array_sum($ar1)/count($ar1);
$media2=array_sum($ar2)/count($ar2);
$contador=0;
$contador2=0;
$contador3=0;
$contador4=0;

echo "Media 1 =" .$media1. '<br>';

for ($i=0; $i <count($ar1) ; $i++) { 
    if($ar1[$i]>$media1){
        $contador++;
       
    }
}

// se usa un condicional if para verificar si el elemento actual es mayor que la media 
// y, si es así, se aumenta otro contador ($contador2 y $contador4) y se muestra el elemento. 
// Si hay más elementos por mostrar, se agrega un separador ":".

for ($i=0; $i <count($ar1) ; $i++) { 
    if($ar1[$i]>$media1){
        $contador2++;
        if($contador2 !==$contador){
            echo $ar1[$i]. ':';

        }else{
            echo $ar1[$i];
        }
       
    }
}

echo "<br> Media 2 =" .$media2. '<br>';

for ($i=0; $i <count($ar2) ; $i++) { 
    if($ar2[$i]>$media2){
        $contador3++;
       
    }
}

for ($i=0; $i <count($ar2) ; $i++) { 
    if($ar2[$i]>$media2){
        $contador4++;
        if($contador3 !==$contador4){
            echo $ar2[$i]. ':';

        }else{
            echo $ar2[$i];
        }
       
    }
}