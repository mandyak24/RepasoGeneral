<!-- Escribe un programa PHP que permita al usuario introducir las temperaturas máximas y
mínimas de las ciudades de Madrid, Barcelona, Sevilla y Bilbao (por ese orden) para cada
uno de los meses del año. Se creará un array que sirva para rellenar dinámicamente con
valores por defecto los elementos del formulario. Las temperaturas pueden tener valores
decimales. Al enviar el formulario, el programa mostrará una tabla con los nombres de las
ciudades ordenadas alfabéticamente y los datos correspondientes a la temperatura
máxima, mínima y temperatura media del año en cada ciudad. -->

<form>
    <label>Madrid:</label><br>
    <input type="text" name="min" value="Temperatura minima"><br>
    <input type="text" name="max" value="Temperatura maxima">

    <br><label>Barcelona:</label><br>
    <input type="text" name="min" value="Temperatura minima"><br>
    <input type="text" name="max" value="Temperatura maxima">

    <br><label>Sevilla:</label><br>
    <input type="text" name="min" value="Temperatura minima"><br>
    <input type="text" name="max" value="Temperatura maxima">

    <br><label>Bilbao:</label><br>
    <input type="text" name="min" value="Temperatura minima"><br>
    <input type="text" name="max" value="Temperatura maxima"><br>

    <input type="submit" name="enviar" value="Registrar">
</form>

<?php

//Array de ciudades y meses
$ciudades=array("Madrid","Barcelona","Sevilla","Bilbao");
$meses=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
//Creamos un array para rellenar dinamicamente el formulario
$temperaturas=array();
foreach($ciudades as $ciudad){
    foreach($meses as $mes){
        $temperaturas[$ciudad][$mes]["maxima"]="";
        $temperaturas[$ciudad][$mes]["minima"]="";
    }
}

?>



