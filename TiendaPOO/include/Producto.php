<?php
// Las instancias de esta clase representan los productos que se venden en la tienda.
class Producto extends DB
{

    //Atributos
    private $ID;
    private $Nombre;
    private $Precio;
    private $Cantidad;


    //Constructor
    public function __construct($id)
    {
        //Llamamos al ObtenerProducto de la clase DB
        $producto = DB::obtenerProducto($id);

        $this->ID = $producto['ID'];
        $this->Nombre = $producto['Nombre'];
        $this->Precio = $producto['Precio'];
        $this->Cantidad = $producto['Cantidad'];
    }


    //Getters
    public function getId()
    {
        return $this->ID;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }
    public function getPrecio()
    {
        return $this->Precio;
    }
    public function getCantidad()
    {
        return $this->Cantidad;
    }
}
