<?php
require_once 'Conexion.php' ;

class Producto extends Conexion{

    protected $id_producto;
    protected $nombre;
    protected $precio;
    protected $stock;

        //Método constructor (estado inicial de los productos en la BD)
        // public function __construct($row){
        //     $this->id_producto = $row['id_producto'];
        //     $this->nombre = $row['nombre_producto'];
        //     $this->precio = $row['precio'];
        //     $this->stock = $row['stock'];
        // }
    
    //Getters (no necesitamos cambiar los valores, no necesitamos setters)
    public function getId()
    {
        return $this->id_producto;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
    public function getStock()
    {
        return $this->stock;
    }

    //Método para mostrar los datos del producto
    public function muestra()
    {
        echo "ID: " . $this->id_producto . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Precio: " . $this->precio . "<br>";
        echo "Stock: " . $this->stock . "<br>";
    }



    public function verProductos(){
        $pdo=$this->getConnection();
        $stmt =$pdo->query('SELECT * FROM productos');
        $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $productos;
    }

    
    public function verProducto($id){
        try{
            $pdo = $this->getConnection();
            $stmt =$pdo->query('SELECT * FROM productos WHERE id_producto='.$id);
            $producto=$stmt->fetch(PDO::FETCH_ASSOC);
            return $producto;
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }

}
