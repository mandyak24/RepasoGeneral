<?php
// inicia la sesión
session_start();
// comprueba si el usuario está logueado
if(!isset($_SESSION["usuario"])){
    header("Location:login.php?redirigido=true");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido/a</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
<!-- Cabecera -->
<header>
  <nav>
    <ul class="menu">
      <li class="left"><?php echo "Bienvenid@ <strong>".$_SESSION["usuario"] ."</strong>";?> </li>
      <li><a href="carrito.php"><span class="material-symbols-outlined">shopping_bag</span></a></li>
      <li><a href="menuPrincipal.php">Menu Productos</a></li>
      <li><a href="perfil.php">Perfil</a></li>
      <li class="right"><a href="logout.php">Cerrar sesion</a></li>
    </ul>
  </nav>
</header>
<!-- Menu de productos -->
<div class="grid-container">
<?php 
  require_once 'Conexion.php';
  require_once 'include/Producto.php';
  $producto=new Producto();
  $productos=$producto->verProductos();
  foreach ($productos as $producto) {

   ?>
    <div class="grid-item">
      <img src="img/<?php echo $producto['id_producto'];?>.jpg">
      <p><?php echo $producto['nombre_producto']; ?></p>
      <p><?php echo $producto['precio']. " &#8364;"; ?></p>
      
      <form method="POST" action="./carrito.php">
        <input type="hidden" name="id_producto" value="<?php echo $producto['id_producto']; ?>">
        <input type="hidden" name="nombre_producto" value="<?php echo $producto['nombre_producto']; ?>">
        <input type="hidden" name="precio" value="<?php echo $producto['precio']; ?>">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" min="1" max="<?php echo $producto['stock']; ?>"><br>
        <button type="submit" name="carrito">Añadir al carrito</button>
      </form>
      </div>
  <?php } ?>
</div>
</body>
</html>