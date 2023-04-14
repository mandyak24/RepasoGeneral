<?php
//Clase que interactua con la base de datos.
class DB
{
    //Atributos 
    public $host;
    public $user;
    public $dbname;
    public $password;

    //Atributo para la conexion
    public $conexion;

    //Metodo constructor
    public function __construct()
    {
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->dbname = "tiendaservidor";
        $this->conexion = new mysqli($this->host, $this->user, $this->password, $this->dbname);

        if ($this->conexion->connect_errno) {
            die("Error al conectar con la base de datos: " . $this->conexion->connect_error);
        }
    }

    //Metodo para ejecutar consultas
    public function ejecutarConsulta($sql)
    {
        $resultado = $this->conexion->query($sql);
        if (!$resultado) {
            die("Error al ejecutar la consulta: " . $this->conexion->error);
        }
        return $resultado;
    }

    //Metodo para cerrar la conexion
    public function __destruct()
    {
        $this->conexion = null;
    }

    //Metodo para obtener todos los productos de la BD
    public function obtenerProductos()
    {
        $sql = "SELECT * FROM tiendaproductos";
        $resultado = $this->ejecutarConsulta($sql);
        $productos = array();
        while ($fila = $resultado->fetch_assoc()) {
            $producto = array(
                "ID" => $fila['ID'],
                "Nombre" => $fila['Nombre'],
                "Precio" => $fila['Precio'],
                "Cantidad" => $fila['Cantidad']
            );
            array_push($productos, $producto);
        }
        $resultado->free();
        return $productos;
    }


    //Se le pasa el id del producto y devuelve un array con los datos del producto
    public function obtenerProducto($id)
    {
        $sql = "SELECT * FROM tiendaproductos WHERE ID=$id";

        $resultado = $this->ejecutarConsulta($sql);
        $fila = $resultado->fetch_assoc();
        if (!$fila) {
            return null;
        }
        $producto = array(
            "ID" => $fila['ID'],
            "Nombre" => $fila['Nombre'],
            "Precio" => $fila['Precio'],
            "Cantidad" => $fila['Cantidad']
        );
        $resultado->free();
        return $producto;
    }

    //Funcion para login de usuarios
    public function verificarUsuario($usuario, $password)
    {
        $usuario = $this->conexion->real_escape_string($usuario);
        $password = $this->conexion->real_escape_string($password);

        $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";

        $resultado = $this->ejecutarConsulta($sql);


        $loginValido = $resultado->num_rows > 0;
        if ($loginValido) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                setcookie("ultimaConexion", date("Y-m-d H:i:s"), time() + 86400);
                session_start();
            }
            //$_SESSION['ID']=$resultado['ID'];
            //Añadiendolo a sesion podemos acceder al saldo desde cualquier pagina en la que este iniciada la sesión.
            ///$_SESSION['Saldo']=$resultado['Saldo'];
            return true;
        } else {
            echo "<script>alert('Usuario o contraseña incorrectos')</script>";
            return false;
        }

    }
}
