<?php

function conectar(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tiendaservidor";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    return $conn;
}

?>