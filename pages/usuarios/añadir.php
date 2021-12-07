<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query('INSERT INTO usuario (nombre, email, contrasena, accesoAdmin) VALUES ("'.$_POST['nombre'].'","'. $_POST['email'].'","'. $_POST['contrasena'].'",'. $_POST['accesoAdmin'].');');

    echo '<div class="main d-flex justify-content-center text-center align-items-center bgmain"><h2 class="error">Usuario Añadido con éxito.</h2><a class="btn-info btn-sm rounded-pill w-15" href="./mostrarUsuarios.php">Volver</a></div>';
    
?>