<?php
include "DB.php";
include "Producto.php";
class CestaCompra extends Producto{

    protected $productos = array();

    public function __construct(){
        if(isset($_SESSION['carrito'])){
            $this->productos = $_SESSION['carrito'];
        }
    }

    public function nuevoArticulo($id){
        if(isset($this->productos[$id])){
            $this->productos[$id]++;
        }else{
            $this->productos[$id] = 1;
        }
    }

    public function get_Productos(){
        return $this->productos;
    }

    public function get_Coste(){
       
        $coste = 0;
        foreach($this->productos as $id => $cantidad){
            $producto = new Producto($id);
            $coste += $producto->getPrecio() * $cantidad;
        }
        return $coste;
    }

    public function vacioCarro(){
       if(empty($this->productos)){
           return true;
         }else{ 
              return false;
        }
    }

    public function guardarCarrito(){
        $_SESSION['carrito'] = $this->productos;

    }

    public function cargar_Carrito(){
        $this->productos = $_SESSION['carrito'];
    }

    public function muestra(){
        foreach($this->productos as $id => $cantidad){
            $producto = new Producto($id);
            echo $producto->getNombre() . " - " . $producto->getPrecio() . " &euro; - " . $cantidad . " uds. <br>";
        }
    }
}
?>