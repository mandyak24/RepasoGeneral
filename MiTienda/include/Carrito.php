<?php

include_once "include/Producto.php";
include_once "include/Carrito.php";
include_once "include/DB.php";

class Carrito{

    private $productos = array();


    public function agregarProducto($id, $nombre, $precio, $cantidad) {
        
        // Comprueba si el producto ya está en la cesta
        if (array_key_exists($id, $this->productos)) {
          // Actualiza la cantidad si ya existe
          $this->productos[$id]['cantidad'] += $cantidad;
        } else {
          // Agrega un nuevo producto
          $this->productos[$id] = array(
            'nombre_producto' => $nombre,
            'precio' => $precio,
            'cantidad' => $cantidad
          );
        }
      }

      public function getCoste(){
        $coste = 0;
        foreach($this->productos as $producto){
          $coste += $producto['precio'] * $producto['cantidad'];
        }
        return $coste;
      }
    

        public function vaciarCarrito() {
         $this->productos = array(); // Vacía el array de productos
            return true; // Devuelve verdadero si se vació correctamente
        
        }


        public function guardarCarrito() {
        // Guarda la cesta en la sesión
        $_SESSION['carrito'] = $this->productos;
        }


        public function cargarCarrito() {
        // Carga la cesta desde la sesión   
        $this->productos = $_SESSION['carrito'];
        }

        public function muestraCarrito() {
        // Muestra el contenido de la cesta
            foreach($this->productos as $id => $producto) {
             echo $producto['nombre_producto'] . ' ' . $producto['precio'] . '€ ' . $producto['cantidad'] . ' unidades<br>';
            }
        }


}


