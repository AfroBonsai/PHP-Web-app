<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query("DELETE FROM ingrediente WHERE id=".$_GET["id"]);

    echo '<div class="main flexColumn"><h2 class="error">Ingrediente eliminado con éxito</h2><a class="boton flex" href="./mostrarIngrediente.php">Volver</a></div>';

?>