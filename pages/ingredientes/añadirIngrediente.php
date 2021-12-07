<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query('INSERT INTO ingrediente (nombre, cantidad) VALUES ("'.$_POST['nombre'].'",'. $_POST['cantidad'].');');

    echo '<div class="main flexColumn d-flex justify-content-center text-center align-items-center bgmain"><h2 class="error">Ingrediente añadido con éxito</h2><a class="btn-primary btn-sm rounded-pill w-15" href="./mostrarIngrediente.php">Volver</a></div>';
    
?>