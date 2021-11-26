<?php
    require '../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query('INSERT INTO plato (titulo, comensales, tipo) VALUES ("'.$_POST['titulo'].'",'
    . $_POST['comensales'].',"'. $_POST['tipo'].'");');

    echo "<p> Plato añadido con exito </p>";

    echo '<a href="../pages/cartaPlatos.php">Atras</a>'

?>