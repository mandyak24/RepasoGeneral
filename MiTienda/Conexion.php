<?php
class Conexion {
    private $host ="localhost";
    private $username ="root";
    private $password ="";
    private $database ="tiendaservidor";
    private $connection;

    public function __construct() {
        $dsn ="mysql:host={$this->host};dbname={$this->database};charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        try {
            $this->connection = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function getConnection() {
        return $this->connection;
    }

    public function closeConnection() {
        $this->connection = null;
    }

    //Funcion para hacer login y verificar si el usuario existe
    public function verificarUsuario($usuario, $contrasena) {
        $sql = "SELECT * FROM usuarios WHERE usuario = ? AND password = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([$usuario, $contrasena]);
        $row=$stmt->fetch();
        if($row){
            return true;
        }else{
            return false;
        }
    }
}

// require_once 'Conexion.php';
// Después de incluir el archivo, puedes crear una instancia de la clase Conexion y llamar al método getConnection() para obtener la conexión a la base de datos. Por ejemplo:
// $conexion = new Conexion();
// $pdo = $conexion->getConnection();
// La variable $pdo ahora contiene la conexión a la base de datos y puedes utilizarla para ejecutar consultas y otras operaciones de base de datos.

