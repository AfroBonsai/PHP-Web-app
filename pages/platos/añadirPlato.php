<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query('INSERT INTO plato (titulo, comensales, tipo) VALUES ("'.$_POST['titulo'].'",'
    . $_POST['comensales'].',"'. $_POST['tipo'].'");');

    echo '<div class="main flexColumn"><h2 class="error">Plato Añadido con éxito</h2><a class="boton flex" href="./cartaPlatos.php">Volver</a></div>';
    
?>