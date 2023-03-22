<?php

// Definir un array de productos con id, nombre y precio
$productos = array(
    1 => array(
        'nombre' => 'MSI MPG B55 GAMING PLUS',
        'precio' => 100.5
    ),
    2 => array(
        'nombre' => 'Otro producto',
        'precio' => 50.0
    ),
    3 => array(
        'nombre' => 'Otro producto',
        'precio' => 50.0
    ),
    4 => array(
        'nombre' => 'Otro producto',
        'precio' => 50.0
    ),
    5 => array(
        'nombre' => 'Otro producto',
        'precio' => 50.0
    ),
    6 => array(
        'nombre' => 'Otro producto',
        'precio' => 50.0
    ),
    7 => array(
        'nombre' => 'Otro producto',
        'precio' => 50.0
    ),
    8 => array(
        'nombre' => 'Otro producto',
        'precio' => 50.0
    ),
    9 => array(
        'nombre' => 'Otro producto',
        'precio' => 50.0
    ),
    // Agregar más productos aquí
);

// Recorrer los productos con un bucle
foreach($productos as $id => $producto){
    if(isset($_POST[$id])){
        $nombre = $producto['nombre'];
        $cantidad = $_POST['cantidad'];
        $precio = $producto['precio'];

        echo "Nombre Producto: " .$nombre ."<br>";
        echo "Precio: " .$precio ."<br>";
        echo "Cantidad " .$cantidad ."<br>";
        // Realizar otras acciones con los datos del producto
        break; // Salir del bucle después de encontrar el producto
    }
}
?>
