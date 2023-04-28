<?php
echo "<h1>Prueba de cifrado. Cesar y Vi</h1>";
require_once 'Cesar.php'; //importar la clase Cesar
require_once 'Vignere.php'; //importar la clase Vignere

$mensaje="MEGUSTAPHP"; //mensaje a cifrar

$cesar=new Cesar(); //crear una instancia de la clase Cesar
$cifrado=$cesar->cifrarMensaje($mensaje); //llamar al método cifrarMensaje de la clase Cesar

echo "Mensaje original: " . $mensaje . "<br>"; //imprimir el mensaje original
echo "Output que deberia dar: " . "O G I W U V C R J R" . "<br>";
echo $cifrado . "<br>"; //imprimir el mensaje cifrado


$mensajeVignere="MEGUSTAPROGRAMAR"; //mensaje a cifrar
$clave="PHP"; //clave para cifrar

$vignere=new Vignere(); //crear una instancia de la clase Vignere
$cifradoVignere=$vignere->cifrarMensaje($mensajeVignere,$clave); //llamar al método cifrarMensaje de la clase Vignere

echo "Mensaje original: " . $mensajeVignere . "<br>"; //imprimir el mensaje original
echo "Output que deberia dar: " . "B L V J Z I P W G D N G P T P G" . "<br>";
echo $cifradoVignere; //imprimir el mensaje cifrado



?>