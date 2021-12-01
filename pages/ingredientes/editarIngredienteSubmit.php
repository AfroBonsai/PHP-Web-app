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

    echo '<div class="main flexColumn"><h2 class="error">Ingrediente editado con éxito</h2><a class="boton flex" href="./mostrarIngrediente.php">Volver</a></div>';

?>