<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');
        body{
            
            background:radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
            font-family: 'Cabin', sans-serif;
            text-align: center;
        }

    </style>
</head>
<body>
<?php 
    if(isset($_GET['usuario'])){
        $usuario=$_GET['usuario'];
        echo "Bienvenido $usuario<br>";
        echo "<a href='nuevoarticulo.php'>Nuevo articulo</a>";
    }else{
        echo "Error: Usuario no especificado";
    }
?>
    
</body>
</html>



