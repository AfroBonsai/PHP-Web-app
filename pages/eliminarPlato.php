<?php
    require '../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query("DELETE FROM plato WHERE id=".$_GET["id"]);

    echo "<p> Plato eliminado con exito </p>";

    echo '<a href="./cartaPlatos.php">Atras</a>';

?>