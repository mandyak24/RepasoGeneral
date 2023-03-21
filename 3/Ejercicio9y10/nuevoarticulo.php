<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Articulo</title>
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

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre"/><br>
    <label for="imagen">Imagen:</label>
    <input type="file" name="imagen" accept="image/jpeg,image/png"><br><br>

    <input type="submit" name="subir" value="Subir archivo">
</form>
    
<?php 
if(isset($_POST['subir'])){
$nombre=$_POST['nombre'];
$imagen=$_FILES['imagen']['name'];
$ruta="img/" .$imagen;
move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
}
?>

<?php if(isset($_POST['subir'])) { ?>
  <p>Nombre del producto: <?php echo $nombre; ?></p>
  <img src="<?php echo $ruta; ?>" alt="Imagen del producto">
<?php } ?>

</body>
</html>