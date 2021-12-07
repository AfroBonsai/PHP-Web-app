<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query('INSERT INTO plato (titulo, comensales, tipo) VALUES ("'.$_POST['titulo'].'",'
    . $_POST['comensales'].',"'. $_POST['tipo'].'");');

    echo '<div class="main d-flex justify-content-center text-center align-items-center bgmain"><h2 class="error">Plato Añadido con éxito</h2><a class="btn-primary btn-sm rounded-pill w-15" href="./cartaPlatos.php">Volver</a></div>';
?>