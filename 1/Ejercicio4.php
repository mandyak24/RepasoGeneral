<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4-Circulo</title>
</head>
<style>
    .circulo{
       
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background-color: rgb(<?php echo rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255); ?>);
        position:absolute;
        left: 50%;
    }
    h3{
        position: relative;
        left: 50%;
    }
    
</style>
<body>
    <h3>Color:rgb(<?php echo rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255); ?>)</h3>
    <div class="circulo"></div>
</body>
</html>