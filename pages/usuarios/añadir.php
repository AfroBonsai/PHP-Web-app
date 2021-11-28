<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query('INSERT INTO usuario (nombre, email, contraseña, accesoAdmin) VALUES ("'.$_POST['nombre'].'","'. $_POST['email'].'","'. $_POST['contraseña'].'",'. $_POST['accesoAdmin'].');');

    echo '<div class="main flexColumn"><h2 class="error">Usuario Añadido con éxito</h2><a class="boton flex" href="./mostrarUsuarios.php">Volver</a></div>';
    
?>