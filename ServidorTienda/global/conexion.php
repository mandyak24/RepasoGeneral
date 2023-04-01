<?php 
define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("PASSWORD","");
define("BD","tiendaservidor");


try{
    $servidor="mysql:dbname=".BD.";host=".SERVIDOR;
    $pdo=new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
}catch(PDOException $e){
   // echo "<script>alert('Error...')</script>";
}
