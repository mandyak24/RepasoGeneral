<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:lightslategray;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
           
        }
    </style>
</head>
<body>
        <!-- FORMULARIO DE AÑADIR CONTACTO -->
        <h1>Agenda de contactos</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label>Nombre:<input type="text" name="nombre"/></label><br>
        <label>Telefono:<input type="text" name="telefono"/></label>
        <label>Tipo de teléfono:</label>
		<label><input type="checkbox" name="tipo" value="fijo">Fijo</label>
		<label><input type="checkbox" name="tipo" value="movil">Móvil</label><br>
        <label for="email">Correo electronico:<input type="email" id="email" name="email"/></label><br>
        <label for="fecha">Fecha nacimiento:<input type="date" id="fecha" name="fecha"/></label><br>
        <button type="submit" name="enviar">Guardar</button>
        <button type="submit" name="resetear">Resetear</button>
        <button type="submit" name="contactos">Ver contactos</button>
    </form>
<!-- 
Crear una pequeña agenda a través de un formulario que recoja los siguientes datos de
contactos: Nombre, teléfono (se debe seleccionar el tipo, fijo o móvil, a través de un
control checkbox), correo electrónico y fecha de nacimiento. A través de un botón se irán
añadiendo los contactos, mostrando el servidor un mensaje sobre la ejecución del
proceso. En caso de producirse un error se mostrará de nuevo el formulario remarcando
el campo incorrecto. Un segundo botón debe permitir resetear la información de todos los
campos. Por último, otro botón permitirá visualizar en pantalla todos los contactos dados
de alta en la agenda. -->
<?php
session_start();
//Si se ha enviado el formulario de añadir contacto
    if((isset($_POST['enviar']))){

    //Recogemos los datos del formulario
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $tipoTelefono=$_POST['tipo'];
    $email=$_POST['email'];
    $fechaNacimiento=$_POST['fecha'];

    //Validamos los datos
    $errores=array();
    // Validar nombre
    if(empty($nombre)){
        $errores['nombre']="El nombre es obligatorio";
    }
    // Validar telefono
    if(empty($telefono)){
        $errores['telefono'] = "El teléfono es obligatorio";
    }else if(!preg_match("/^[0-9]{9}$/", $telefono)){
        $errores['telefono'] = "El teléfono debe tener 9 digitos";
    }
    //Validar email
    if(empty($email)){
        $errores['email'] = "El correo electrónico es obligatorio";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = "El correo electrónico no es válido";
    }
    //Validar fecha
    if(empty($fechaNacimiento)) {
        $errores['fecha'] = "La fecha de nacimiento es obligatoria";
    } else {
        $fecha_actual = date("Y-m-d");
        if($fechaNacimiento > $fecha_actual) {
            $errores['fecha'] = "La fecha de nacimiento no puede ser posterior a la fecha actual";
        }
    }

    //Si no hay errores, añadimos el contacto
    if(empty($errores)){
        // Creamos el array de contactos si no existe
        if(!isset($_SESSION['contactos'])) {
            $_SESSION['contactos'] = array();
        }
        
        // Añadimos el contacto al array
        $contacto = array(
            "nombre" => $nombre,
            "telefono" => $telefono,
            "tipo" => $tipoTelefono,
            "email" => $email,
            "fecha" => $fechaNacimiento
                );
        array_push($_SESSION['contactos'], $contacto);
        // Mostramos un mensaje de éxito
        echo "<p>Contacto añadido correctamente</p>";

    }else{
        //Mostramos el formulario con errores
        echo "<ul>";
        foreach($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
        }


    }
    //Si se resetea el formulario. RESETEAR
    if(isset($_POST['resetear'])){
        $_POST=array();
    }
 
    //Si se quiere ver los contactos existentes
    if(isset($_POST['contactos'])){
        if(isset($_SESSION['contactos'])) {
            echo "CONTACTOS GUARDADOS:<br>";
            echo "<ul>";
            foreach($_SESSION['contactos'] as $contacto) {
                echo "<li>Nombre: ".$contacto['nombre']." 
                - Teléfono: ".$contacto['telefono']." (".$contacto['tipo'].") 
                - Correo electrónico: ".$contacto['email']." 
                - Fecha de nacimiento: ".$contacto['fecha']."</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No hay contactos en la agenda</p>";
        }

    }
?>

</body>
</html>