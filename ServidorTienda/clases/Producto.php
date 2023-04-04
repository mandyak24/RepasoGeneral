<?php 

class Producto{
    //Atributos de tipo protected para limitar el acceso a su contenido y a la vez permitir su herencia
    protected $ID;
    protected $Nombre;
    protected $Precio;

    //Metodos de tipo get
    public function getID(){ return $this->ID;}
    public function getNombre(){ return $this->Nombre;}
    public function getPrecio(){ return $this->Precio;}

    public function muestra(){
        print "<p>". $this->ID ."</p>";    
    }

    //Se le pasa un array obtenido de la tupla de la BD
    public function __construct($row){
        $this->ID = $row['ID'];
        $this->Nombre = $row['Nombre'];
        $this->Precio = $row['Precio'];
    
    }


}

