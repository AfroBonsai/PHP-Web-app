<?php
    include '../header.php';

    //Conexion con base de datos
    require '../../database/db_connect.php';
    
    $mysqli = conectar();
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $accesoAdmin = $_POST['accesoAdmin'];
    
    // Consulta
    $mysqli->query("UPDATE usuario SET nombre = '$nombre', email = '$email', accesoAdmin = '$accesoAdmin' WHERE id='$id'");

    echo '<div class="main d-flex justify-content-center text-center align-items-center bgmain"><h2 class="error">Usuario editado con éxito</h2><a class="btn-info btn-sm rounded-pill w-15" href="./mostrarUsuarios.php">Volver</a></div>';

?>