<?php
// inicia la sesión
session_start();
// comprueba si el usuario está logueado
if(!isset($_SESSION["usuario"])){
    header("Location:login.php?redirigido=true");
}
// incluye el archivo de conexión a la base de datos
require "conn.php";
// consulta a la base de datos
$conn=conectar();

$sql = "SELECT * FROM productos  ORDER BY id_producto ASC";
$resultado = mysqli_query($conn, $sql);

// Crea un array vacío para almacenar los productos
$productos = array();

// Recorre los resultados de la consulta SQL
while ($fila = mysqli_fetch_assoc($resultado)) {
    // Crea un nuevo elemento de array para el producto
    $producto = array();

    // Agrega la información del producto en un array asociativo
    $producto['nombre'] = $fila['nombre_producto'];
    $producto['precio'] = $fila['precio'];
    $producto['stock'] = $fila['stock'];
    // Usa el id del producto como clave del elemento de array
    $productos[$fila['id_producto']] = $producto;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
<header>
<!-- MENU DE NAVEGACION -->
  <nav>
    <ul class="menu">
      <li class="left"><?php echo "Bienvenid@ <strong>".$_SESSION["usuario"] ."</strong>";?> </li>
      <li><a href="carrito.php"><span class="material-symbols-outlined">shopping_bag</span></a></li>
      <li><a href="menuPrincipal.php">Menu Productos</a></li>
      <li class="right"><a href="logout.php">Cerrar sesion</a></li>
    </ul>
  </nav>
</header>

<!-- MENU PRODUCTOS -->
<!-- PLACAS BASE -->
<div class="grid-container">
  <div class="grid-item">
    <img src="img/1.jpg">
    <p><?php echo $productos[1]['nombre']; ?></p>
    <p><?php echo $productos[1]['precio'] ." &#8364;"; ?></p>
      <form method="POST" action="agregar_carrito.php">
        <input type="hidden" name="id_producto" value="1">
        <input type="hidden" name="nombre" value="<?php echo $productos[1]['nombre']; ?>">
        <input type="hidden" name="precio" value="<?php echo $productos[1]['precio']; ?>">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" min="1" max="<?php echo $productos[1]['stock']?>"><br>
        <button type="submit" name="producto1">Añadir al carrito</button>
      </form>
  </div>
  
  <div class="grid-item">
    <img src="img/2.jpg">
    <p><?php echo $productos[2]['nombre']; ?></p>
    <p><?php echo $productos[2]['precio'] ." &#8364;"; ?></p>
      <form method="POST" action="agregar_carrito.php">
        <input type="hidden" name="id_producto" value="2">
        <input type="hidden" name="nombre" value="<?php echo $productos[2]['nombre']; ?>">
        <input type="hidden" name="precio" value="<?php echo $productos[2]['precio']; ?>">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" min="1" max="<?php echo $productos[2]['stock']?>"><br>
        <button type="submit" name="producto2">Añadir al carrito</button>
      </form>
  </div>
  <div class="grid-item">
    <img src="img/3.jpg">
    <p><?php echo $productos[3]['nombre']; ?></p>
    <p><?php echo $productos[3]['precio'] ." &#8364;"; ?></p>
    <form method="POST" action="agregar_carrito.php">
      <input type="hidden" name="id_producto" value="3">
      <input type="hidden" name="nombre" value="<?php echo $productos[3]['nombre']; ?>">
      <input type="hidden" name="precio" value="<?php echo $productos[3]['precio']; ?>">
      <label for="cantidad">Cantidad:</label>
      <input type="number" name="cantidad" id="cantidad" min="1" max="<?php echo $productos[3]['stock']?>"><br>
      <button type="submit" name="producto3">Añadir al carrito</button>
    </form>
  </div>
  <!-- PROCESADORES -->
  <div class="grid-item">
    <img src="img/4.jpg">
    <p><?php echo $productos[4]['nombre']; ?></p>
    <p><?php echo $productos[4]['precio'] ." &#8364;"; ?></p>
    <form method="POST" action="agregar_carrito.php">
      <input type="hidden" name="id_producto" value="4">
      <input type="hidden" name="nombre" value="<?php echo $productos[4]['nombre']; ?>">
      <input type="hidden" name="precio" value="<?php echo $productos[4]['precio']; ?>">
      <label for="cantidad">Cantidad:</label>
      <input type="number" name="cantidad" min="1" max="<?php echo $productos[4]['stock']?>"><br>
      <button type="submit" name="producto4">Añadir al carrito</button>
    </form>
  </div>
  <div class="grid-item">
    <img src="img/5.jpg">
    <p><?php echo $productos[5]['nombre']; ?></p>
    <p><?php echo $productos[5]['precio'] ." &#8364;"; ?></p>
    <form method="POST" action="agregar_carrito.php">
      <input type="hidden" name="id_producto" value="5">
      <input type="hidden" name="nombre" value="<?php echo $productos[5]['nombre']; ?>">
      <input type="hidden" name="precio" value="<?php echo $productos[5]['precio']; ?>">
      <label for="cantidad">Cantidad:</label>
      <input type="number" name="cantidad" min="1" max="<?php echo $productos[5]['stock']?>"><br>
      <button type="submit" name="producto5">Añadir al carrito</button>
    </form>
  </div>
  <div class="grid-item">
    <img src="img/6.jpg">
    <p><?php echo $productos[6]['nombre']; ?></p>
    <p><?php echo $productos[6]['precio'] ." &#8364;"; ?></p>
    <form method="POST" action="agregar_carrito.php">
      <input type="hidden" name="id_producto" value="6">
      <input type="hidden" name="nombre" value="<?php echo $productos[6]['nombre']; ?>">
      <input type="hidden" name="precio" value="<?php echo $productos[6]['precio']; ?>">
      <label for="cantidad">Cantidad:</label>
      <input type="number" name="cantidad" min="1" max="<?php echo $productos[6]['stock']?>"><br>
      <button type="submit" name="producto6">Añadir al carrito</button>
    </form>
  </div>
  <!-- RAM -->
  <div class="grid-item">
    <img src="img/7.jpg">
    <p><?php echo $productos[7]['nombre']; ?></p>
    <p><?php echo $productos[7]['precio'] ." &#8364;"; ?></p>
    <form method="POST" action="agregar_carrito.php">
      <input type="hidden" name="id_producto" value="7">
      <input type="hidden" name="nombre" value="<?php echo $productos[7]['nombre']; ?>">
      <input type="hidden" name="precio" value="<?php echo $productos[7]['precio']; ?>">
      <label for="cantidad">Cantidad:</label>
      <input type="number" name="cantidad" min="1" max="<?php echo $productos[7]['stock']?>"><br>
      <button type="submit" name="producto7">Añadir al carrito</button>
    </form>
  </div>
  <div class="grid-item">
    <img src="img/8.jpg">
    <p><?php echo $productos[8]['nombre']; ?></p>
    <p><?php echo $productos[8]['precio'] ." &#8364;"; ?></p>
    <form method="POST" action="agregar_carrito.php">
    <input type="hidden" name="id_producto" value="8">
      <input type="hidden" name="nombre" value="<?php echo $productos[8]['nombre']; ?>">
      <input type="hidden" name="precio" value="<?php echo $productos[8]['precio']; ?>">
    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" min="1" max="<?php echo $productos[8]['stock']?>"><br>
    <button type="submit" name="producto8">Añadir al carrito</button>
    </form>
  </div>
  <div class="grid-item">
    <img src="img/9.jpg">
    <p><?php echo $productos[9]['nombre']; ?></p>
    <p><?php echo $productos[9]['precio'] ." &#8364;"; ?></p>
    <form method="POST" action="agregar_carrito.php">
    <input type="hidden" name="id_producto" value="9">
      <input type="hidden" name="nombre" value="<?php echo $productos[9]['nombre']; ?>">
      <input type="hidden" name="precio" value="<?php echo $productos[9]['precio']; ?>">
    <label for="cantidad">Cantidad:</label>
    <input type="number" name="cantidad" min="1" max="<?php echo $productos[9]['stock']?>"><br>
    <button type="submit" name="producto9">Añadir al carrito</button>
    </form>
  </div>
</div>
</body>
</html>
