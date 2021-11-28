<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query("DELETE FROM plato WHERE id=".$_GET["id"]);

    echo '<div class="main flexColumn"><h2 class="error">Plato eliminado con éxito</h2><a class="boton flex" href="./cartaPlatos.php">Volver</a></div>';

?>