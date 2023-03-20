<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3-Formularios</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
  $colorFondo="";
  $colorFuente="";
  $cursiva="";
  $negrita="";

  if(isset($_POST['enviar'])){
      $colorFondo =$_POST['colorFondo'];
      $colorFuente =$_POST['colorFuente'];
      $cursiva = isset($_POST['cursiva']) ? $_POST['cursiva'] : ""; //operacion ternaria
      //Si el valor de $_POST['cursiva'] existe toma el valor, ? si no existe toma el valor de cadena vacia
      $negrita = isset($_POST['negrita']) ? $_POST['negrita'] : "";
  }
  ?>

<body class="<?php echo $colorFondo?> <?php echo $colorFuente?> <?php echo $cursiva?> <?php echo $negrita?>">

        
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <label>Elige color de fondo</label>
    <select name="colorFondo">
        <option value="amarillo">Amarillo</option>
        <option value="verde">>Verde</option>
        <option value="rosa">Rosa</option>
        <option value="azul">Azul</option>
    </select><br>
    <label>Elige el color de la fuente</label>
    <select name="colorFuente">
        <option value="naranja">Naranja</option>
        <option value="morado">Morado</option>
        <option value="negro">Negro</option>
        <option value="rojo">Rojo</option>
    </select><br>
    <label>Modifica la fuente</label>
    <label><input type="checkbox" value="negrita" name="negrita">Negrita</label>
    <label><input type="checkbox" value="cursiva" name="cursiva">Cursiva</label><br>
    <input type="submit" name="enviar" />
</form>


</body>

</html>