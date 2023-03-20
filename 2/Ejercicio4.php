<?php

// Escribir un programa PHP que muestre en pantalla números aleatorios entre 1 y 500 hasta
// que aparezca un múltiplo de 7. Al terminar el programa se mostrará el mensaje “Fin de
// programa”

do{

   $numero=rand(1,500);
   echo  $numero . " ";

}while($numero%7!=0);
echo "Fin de programa";

?>