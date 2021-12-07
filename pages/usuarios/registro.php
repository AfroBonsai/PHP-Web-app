<?php
    include '../header.php';

    require '../../database/db_connect.php';
    
    $mysqli = conectar();

    if ($_POST['nombre'] !== "" && $_POST['email'] !== "" && $_POST['contrasena'] !== "") {
        $mysqli->query('INSERT INTO usuario (nombre, email, contrasena) VALUES ("'.$_POST['nombre'].'","'. $_POST['email'].'","'. $_POST['contrasena'].'");');
        echo '<div class="main d-flex justify-content-center bgmain text-center align-items-center"><h2>Usuario Registrado con éxito</h2><a class="btn btn-info btn-sm mt-2 flex peq rounded-pill w-15" href="../../index.php">Volver</a></div>';
    } else {
        echo '<div class="main d-flex justify-content-center bgmain text-center align-items-center"><h2>Por favor rellene todos los campos</h2><a class="btn btn-info btn-sm mt-2 flex peq rounded-pill w-15" href="./registroUsuario.php">Volver</a></div>';
    }
    

?>