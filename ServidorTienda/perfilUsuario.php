    <?php 
    include("global/conexion.php");
    include("carrito.php");
    include("templates/header.php");
    ?>

   <?php 
          
            $id_usuario = $_SESSION['ID'];

            $consulta_saldo = $pdo->prepare("SELECT Saldo,Usuario FROM usuarios WHERE id = :id_usuario");
            $consulta_saldo->bindParam(':id_usuario', $id_usuario);
            $consulta_saldo->execute();
            $saldo = $consulta_saldo->fetchColumn();
            $usuario = $consulta_saldo->fetchColumn();


            echo "<h3>Saldo actual:  $saldo ."&euro;";

    ?> 

  <?php  include("templates/footer.php");?>
