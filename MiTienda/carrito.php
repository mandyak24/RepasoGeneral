<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de pago</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

#imagen de cada producto del carrito
<?php
    if (isset($_SESSION['carrito'])) {
        $carrito = $_SESSION['carrito'];
        foreach($carrito as $producto){
            echo "<img src='img/" . $producto['id_producto'] . ".jpg' width='100px' height='100px'>";
        }
    }
?>
<?php 

function calcularTotal($carrito){
    $total = 0;
    foreach($carrito as $producto){
        $total += $producto['precio'] * $producto['cantidad'];
    }
    return $total;
}

?> 

<?php
    $total = calcularTotal($_SESSION['carrito']);

    echo "Total: $total €";


?>

<?php
    if (isset($_SESSION['carrito'])) {
        $carrito = $_SESSION['carrito'];
        foreach($carrito as $producto){
            echo $producto['nombre'] . " - " . $producto['precio'] . "€ - " . $producto['cantidad'] . " unidades<br>";
        }
    }
?>


<?php
    if (isset($_SESSION['carrito'])) {
        $carrito = $_SESSION['carrito'];
        if (count($carrito) > 0) {
            echo "<a href='comprar.php'>Comprar</a>";
        }
    }
?>

<?php
    if (isset($_SESSION['carrito'])) {
        $carrito = $_SESSION['carrito'];
        if (count($carrito) > 0) {
            echo "<a href='vaciar_carrito.php'>Vaciar carrito</a>";
        }
    }
?>


<?php
    if (isset($_SESSION['carrito'])) {
        $carrito = $_SESSION['carrito'];
        if (count($carrito) > 0) {
            echo "<a href='eliminar_producto.php'>Eliminar producto</a>";
        }
    }
?>


<?php
    if (isset($_SESSION['carrito'])) {
        $carrito = $_SESSION['carrito'];
        if (count($carrito) > 0) {
            echo "<a href='tienda.php'>Volver a la tienda</a>";
        }
    }
?>




    
</body>
</html>
