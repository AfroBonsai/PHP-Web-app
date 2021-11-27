<?php
    require '../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query('INSERT INTO usuario (nombre, email, contraseña, accesoAdmin) VALUES ("'.$_POST['nombre'].'",'. $_POST['email'].',"'. $_POST['contraseña'].',"'. $_POST['accesoAdmin'].'");');
    
    echo "<p> Usuario añadido con exito </p>";
    
    echo '<a href="./admin/mostrarUsuarios.php">Usuarios</a>'
?>