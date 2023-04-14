<?php 

include('include/DB.php');
$conexion=new DB();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="busqueda.php" method="post">
        <label>Buscar: <input type="text" name="buscar"></label>
        <input type="submit" name="enviando" value="Dale!">
    
</body>
</html>