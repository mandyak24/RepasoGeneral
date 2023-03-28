<?php

#convertir las variables para la conexion con la BD en constantes   
define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "tiendaservidor");

function conectar(){
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
    
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    return $conn;
}
?>








