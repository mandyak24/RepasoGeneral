<?php
 //array bidimensional asociativo
$liga=array(

    'Real Madrid'=> array(
        'puntos'=>"86",
        'posicion'=>"1"
    ),
    'Barcelona'=>array(
        'puntos'=>"73",
        'posicion'=>"2"
    ),
    'Atletico de Madrid'=>array(
        'puntos'=>"71",
        'posicion'=>"3"
    ),
    'Sevilla'=>array(
        'puntos'=>"70",
        'posicion'=>"4"
    ),
    'Real Betis'=>array(
        'puntos'=>"65",
        'posicion'=>"5"
    ),
    'Real Sociedad'=>array(
        'puntos'=>"62",
        'posicion'=>"6"
    ),
    'Villareal'=>array(
        'puntos'=>"59",
        'posicion'=>"7"
    ),
    'Atletic Club'=>array(
        'puntos'=>"55",
        'posicion'=>"8"
    ),
    'Valencia'=>array(
        'puntos'=>"48",
        'posicion'=>"9"
    ),
    'Osasuna'=>array(
        'puntos'=>"47",
        'posicion'=>"10"
    ),
);

// Utilizando los bucles que necesites muestra en pantalla los nombres de los equipos, los
// puntos y la posición de los equipos que terminaron en las tres primeras posiciones de la
// liga.

echo "Equipos en las tres primeras posiciones: <br>";

foreach ($liga as $nombre => $equipo) { //Si la posicion es igual o menor a 3 muestra nombre, puntos y posicion
    if($equipo['posicion']<=3){
        echo "Nombre: " .$nombre. " -Puntos: " .$equipo['puntos']. " - Posicion: " .$equipo['posicion']. "<br>";

    }
}


