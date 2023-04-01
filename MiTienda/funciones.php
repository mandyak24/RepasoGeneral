<?php

require_once 'Conexion.php';
//Todas las funciones -CRUD (Create, Read, Update, Delete)

function obtenerProductosEnCarrito(){
    $conexion = new Conexion();
    $pdo = $conexion->getConnection();

    $pdo = DatabaseConnnection::getConnection();
    $stmt = $pdo->query('SELECT * FROM productos');
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $productos;
}