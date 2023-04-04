<?php
$dsn="mysql:host=localhost;dbname=tiendaservidor";
$usuario="root";
$contrasena="";

try{
    $bd = new PDO($dsn,$usuario,$contrasena);
    $bd=null;
}catch(PDOException $e){
    echo "Error: (".$e->getMessage().") al abrir la base de datos:
    " . $e->getMessage();
}
//Si quieres  mantener la conexion permanente utiliza
//la opcion PDO::ATTR_PERSISTENT en el constructor de PDO

