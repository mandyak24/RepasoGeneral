<?php

// Definir el tipo de conversión deseado (por defecto es de euros a dólares)
$conversion = 'euro_dolar';

// Comprobar si se ha especificado un tipo de conversión distinto en la URL
if (isset($_GET['conversion'])) {
    $conversion = $_GET['conversion'];
}

// Definir las tasas de cambio
$tasa_dolar = 1.18;
$tasa_yen = 129.52;

// Definir la cantidad a convertir (por defecto son 100 euros)
$cantidad = 100;

// Comprobar si se ha especificado una cantidad distinta en la URL
if (isset($_GET['cantidad'])) {
    $cantidad = $_GET['cantidad'];
}

// Realizar la conversión deseada
if ($conversion == 'euro_dolar') {
    $resultado = round($cantidad * $tasa_dolar,2);
    $moneda_origen = 'euros';
    $moneda_destino = 'dólares';
} elseif ($conversion == 'dolar_euro') {
    $resultado = round($cantidad / $tasa_dolar,2);
    $moneda_origen = 'dólares';
    $moneda_destino = 'euros';
} elseif ($conversion == 'euro_yen') {
    $resultado = round($cantidad * $tasa_yen,2);
    $moneda_origen = 'euros';
    $moneda_destino = 'yenes';
} elseif ($conversion == 'yen_euro') {
    $resultado = round($cantidad / $tasa_yen,2);
    $moneda_origen = 'yenes';
    $moneda_destino = 'euros';
}

// Mostrar el resultado de la conversión
echo '<p>' . $cantidad . ' ' . $moneda_origen . ' son ' . $resultado . ' ' . $moneda_destino . '</p>';

// Ofrecer enlaces para realizar otras conversiones
echo '<p><a href="?conversion=euro_dolar&cantidad=' . $cantidad . '">Convertir de euros a dólares</a></p>';
echo '<p><a href="?conversion=dolar_euro&cantidad=' . $cantidad . '">Convertir de dólares a euros</a></p>';
echo '<p><a href="?conversion=euro_yen&cantidad=' . $cantidad . '">Convertir de euros a yenes</a></p>';
echo '<p><a href="?conversion=yen_euro&cantidad=' . $cantidad . '">Convertir de yenes a euros</a></p>';

?>

<!-- En el código anterior, la línea if (isset($_GET['cantidad'])) { $cantidad = $_GET['cantidad']; } 
comprueba si el parámetro cantidad está presente en la URL. Si lo está, se asigna el valor del 
parámetro a la variable $cantidad.Esto permite que la cantidad a convertir se especifique en la 
URL del script, en lugar de estar fija en el código. Por ejemplo, si accedes a 
http://localhost/conversor.php?conversion=euro_dolar&cantidad=50, 
el script se ejecutará con una conversión de 50 euros a dólares en lugar de la cantidad 
predeterminada de 100 euros.La función isset() comprueba si una variable está definida y 
no es nula. En este caso, comprueba si el parámetro cantidad está presente en la URL. 
Si lo está, la línea siguiente asigna el valor del parámetro a la variable $cantidad. 
Si el parámetro no está presente, la variable $cantidad mantendrá su valor predeterminado. -->