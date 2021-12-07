<?php
    include '../header.php';

    //Conexion con base de datos
    require '../../database/db_connect.php';
    $mysqli = conectar();

    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $id = $_POST['id'];

    // Consulta
    $mysqli->query("UPDATE ingrediente SET nombre = '$nombre', cantidad = '$cantidad' WHERE id='$id'");

    echo '<div class="main d-flex justify-content-center text-center align-items-center bgmain"><h2 class="error">Ingrediente editado con éxito</h2><a class="btn-primary btn-sm rounded-pill w-15" href="./mostrarIngrediente.php">Volver</a></div>';

?>