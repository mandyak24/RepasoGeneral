<?php
include "menuPrincipal.php";

#crear variable de sesion carrito si no existe  
if(!isset($_SESSION['carrito'])){
    
    $_SESSION['carrito'] = array();

}
$mensaje='';

//SE ESTABLECEN LAS CANTIDADES SEGUN EL PRODUCTO SELECCIONADO (name en el formulario)
$productosSubmit = array("producto1", "producto2", "producto3", "producto4", "producto5", "producto6", "producto7", "producto8","producto9");                       
    foreach ($productosSubmit as $producto) {
        if(isset($_POST[$producto])){

            $_SESSION['id_producto']=$_POST['id_producto'];
            $_SESSION['cantidad']=$_POST['cantidad'];
            $_SESSION['nombre']=$_POST['nombre'];
            $_SESSION['precio']=$_POST['precio'];
 
#añadir los datos anteriores como fila en la tabla carrito de la base de datos
$conn=conectar();

// Recuperar los datos de la sesión
$id_producto = $_SESSION['id_producto'];
$nombre_producto = $_SESSION['nombre'];
$precio = $_SESSION['precio'];
$cantidad = $_SESSION['cantidad'];


// Verificar si ya existe un registro con este ID de producto en la tabla de carrito
$sql = "SELECT * FROM carrito WHERE id_producto = $id_producto";
$resultado = mysqli_query($conn, $sql);

// Si el registro ya existe, actualizar la cantidad
if (mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_assoc($resultado);
    $cantidad_existente = $fila['cantidad'];
    $cantidad_nueva = $cantidad_existente + $cantidad;

    $sql = "UPDATE carrito SET cantidad = $cantidad_nueva WHERE id_producto = $id_producto";
    mysqli_query($conn, $sql);
} else {
    // Si el registro no existe, insertar un nuevo registro
    $sql = "INSERT INTO carrito (id_producto,nombre_producto,precio,cantidad) VALUES ($id_producto,'$nombre_producto', '$precio', $cantidad_producto)";
    mysqli_query($conn, $sql);
}

#establecer mensaje de notificación
$mensaje = "Producto añadido al carrito.";

    }
}

  $conn=conectar();

?>

<div style="color:lightred;" class="mensaje"><?php echo $mensaje;?></div>
