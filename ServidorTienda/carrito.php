<?php
session_start();
$mensaje="";

if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){

        case 'Agregar':
            if(is_numeric($_POST['ID'])){
                $ID = $_POST['ID'];
                $mensaje.="OK ID correcto".$ID."<br/>";
            }else{
                $mensaje.="Upss... ID incorrecto ".$ID."<br/>";
                break;
            }
            if(is_string($_POST['Nombre'])){
                $Nombre = $_POST['Nombre'];
                $mensaje.="OK Nombre correcto".$Nombre."<br/>";
            }else{
                $mensaje.="Upss... Nombre incorrecto ".$Nombre."<br/>";
                break;
            }
            if(is_numeric($_POST['Precio'])){
                $Precio = $_POST['Precio'];
                $mensaje.="<br> OK Precio correcto ".$Precio."<br/>";
            }
            else{
                $mensaje.="Upss... Precio incorrecto ".$Precio." euros"."<br/>";
                break;
            }
            if(is_numeric($_POST['Cantidad'])){
                $Cantidad = $_POST['Cantidad'];
                $mensaje.="OK Cantidad correcta ".$Cantidad." uds"."<br/>";
            }
            else{
                $mensaje.="Upss... Cantidad incorrecto ".$Cantidad."<br/>";
                break;
        
            }
            if(!isset($_SESSION['carrito'])){
                $producto=array(
                    'ID'=>$ID,
                    'Nombre'=>$Nombre,
                    'Precio'=>$Precio,
                    'Cantidad'=>$Cantidad
                );
                $_SESSION['carrito'][0]=$producto;
                $mensaje="Producto agregado al carrito";
            }else{
                $idProductos=array_column($_SESSION['carrito'],"ID");
                if(in_array($ID,$idProductos)){
                    echo "<script>alert('El producto ya ha sido seleccionado...');</script>";
                    $mensaje="";
                    
                }else{

                }
                $NumeroProductos=count($_SESSION['carrito']);
                $producto=array(
                    'ID'=>$ID,
                    'Nombre'=>$Nombre,
                    'Precio'=>$Precio,
                    'Cantidad'=>$Cantidad
                );
                $_SESSION['carrito'][$NumeroProductos]=$producto;
                $mensaje="Producto agregado al carrito";
            }
           // $mensaje=print_r($_SESSION,true);
            $mensaje="Producto agregado al carrito";
            break;
            case "Eliminar":
                if(is_numeric($_POST['ID'])){
                    $ID = $_POST['ID'];
                    foreach($_SESSION['carrito'] as $indice=>$producto){ //Recorre todos los productos del carrito
                        if($producto['ID']==$ID){
                            unset($_SESSION['carrito'][$indice]);
                            $_SESSION['carrito']=array_values($_SESSION["carrito"]); 
                            echo "<script>alert('Elemento borrado');</script>";
                        }
                    }

                }

            break;
        }
}
