<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query('INSERT INTO ingrediente (nombre, cantidad) VALUES ("'.$_POST['nombre'].'",'. $_POST['cantidad'].');');

    echo '<div class="main flexColumn"><h2 class="error">Ingrediente añadido con éxito</h2><a class="boton flex" href="./mostrarIngrediente.php">Volver</a></div>';
    
?>