<?php
session_start();
include 'global/conexion.php';
include 'carrito.php';
include 'templates/header.php';
?>
<?php
//Verifica si el usuario está autenticado antes de permitirle acceder a la página de pago. 
//Si el usuario no está autenticado, puedes redirigirlo a la página de inicio de sesión
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

if (count($_SESSION['carrito']) == 0) {
    header('Location: index.php');
    exit();
}
?>
<?php 
if($_POST){
    $total=0;
    foreach ($_SESSION['carrito'] as $indice => $producto) {
        $total=$total+($producto['Precio']*$producto['Cantidad']);
    }
    echo "<h3>" .$total. "</h3>";
    
}
?>
<?php

$saldo_usuario =$_SESSION['Saldo']; // Consulta el saldo actual del usuario en la base de datos
if ($saldo_usuario < $total) {
    header('Location:perfil.php');
    exit();
}
?>

<form action="perfilUsuario.php" method="post">
    <input type="number" name="items" value="<?php echo count($_SESSION['carrito']); ?>">
    <input type="number" name="total" value="<?php echo $total; ?>" readonly>
    <button type="submit" name="btnAccion">Confirmar pago</button>
</form>

<?php 
include 'templates/footer.php';?>