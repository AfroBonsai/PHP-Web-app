<?php
    include '../header.php';

    //Conexion con base de datos
    require '../../database/db_connect.php';
    $mysqli = conectar();

    $titulo = $_POST['titulo'];
    $comensales = $_POST['comensales'];
    $tipo = $_POST['tipo'];
    $id = $_POST['id'];

    // Consulta
    $mysqli->query("UPDATE plato SET titulo = '$titulo', comensales = '$comensales', tipo = '$tipo' WHERE id='$id'");

    echo '<div class="main flexColumn"><h2 class="error">Plato editado con éxito</h2><a class="boton flex" href="./cartaPlatos.php">Volver</a></div>';

?>