<?php
    include '../header.php';

    require '../../database/db_connect.php';
    
    $mysqli = conectar();

    if ($_POST['nombre'] !== "" && $_POST['email'] !== "" && $_POST['contrasena'] !== "") {
        $mysqli->query('INSERT INTO usuario (nombre, email, contrasena) VALUES ("'.$_POST['nombre'].'","'. $_POST['email'].'","'. $_POST['contrasena'].'");');
        echo '<div class="main flexColumn"><h2 class="error">Usuario Registrado con éxito</h2><a class="boton flex" href="../../index.php">Volver</a></div>';
    } else {
        echo '<div class="main flexColumn"><h2 class="error">Por favor rellene todos los campos</h2><a class="boton flex" href="./registroUsuario.php">Volver</a></div>';
    }
    

?>