<!-- Partiendo de la frase: “Programa siempre tu código como si el tipo que va a tener que
mantenerlo en el futuro fuera un violento psicópata que sabe dónde vives, (Martin
Goldin)”.
Utiliza las funciones de string y/o arrays que quieras, para mostrar en pantalla:
Sugerencia: Las funciones str_count_words(), str_replace(), strst()r, implode(), rtrim(), trim(), ltrim(),
preg_match_all() te servirán para el desarrollo de este ejercicio. -->

<?php

$frase="Programa siempre tu codigo como si el tipo que va a tener que
mantenerlo en el futuro fuera un violento psicopata que sabe donde vives,(Martin
Goldin)";

//1-El número de palabras que contiene la frase.
$uno=str_word_count($frase); //cuenta las palabras de la frase (cuidado con los acentos)
echo "La frase contiene " . $uno . " palabras";
//2-La cuarta palabra de la frase.
echo "<br>";
$dos=explode(' ', $frase); // explode() sirve para dividir la frase por palabras en un array
echo "La cuarta palabra de la frase es : " .$dos[3];
//3-Número de veces que aparece la palabra “que”.
echo "<br>";
$palabra="que";
$veces=substr_count($frase,$palabra);
echo "La palabra '".$palabra."' se repite ".$veces." veces en la cadena.";
//4-La posición donde aparece la palabra psicópata.
echo "<br>";
$palabra="psicopata";
$posicion = strpos($frase, $palabra);
echo "La palabra '".$palabra."' aparece por primera vez en la posición ".$posicion." de la cadena.";
//5-Sustituye la palabra “Programa” por “Comenta”
echo "<br>";
$palabra_a_reemplazar = "Programa";
$nueva_palabra = "Comenta";
$nueva_cadena = str_replace($palabra_a_reemplazar, $nueva_palabra, $frase);
echo "La nueva cadena es: ".$nueva_cadena;
//6- Número de palabras que comienzan por “fu”.
echo "<br>";
$contador = 0;
$palabras = explode(' ', $frase);
foreach ($palabras as $palabra) {
    if (substr($palabra, 0, 2) == "fu") {
        $contador++;
    }
}
echo "Hay ".$contador." palabras que comienzan por 'fu' en la cadena.";
//7- Todas las palabras que comienzan por la letra “s”.
echo "<br>";

$palabras = explode(' ', $frase);
$palabras_que_comienzan_con_s = array();
foreach ($palabras as $palabra) {
    if (substr($palabra, 0, 1) == "s") {
        array_push($palabras_que_comienzan_con_s, $palabra);
    }
}
echo "Las palabras que comienzan por 's' en la cadena son: ";
foreach ($palabras_que_comienzan_con_s as $palabra) {
    echo $palabra.", ";
}
//8- El nombre del autor de la frase.
echo "<br>";

?>