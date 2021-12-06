<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query("DELETE FROM ingrediente WHERE id=".$_GET["id"]);

    echo '<div class="main d-flex justify-content-center text-center align-items-center bgmain"><h2 class="error">Ingrediente eliminado con éxito</h2><a class="btn-primary btn-sm rounded-pill w-15" href="./mostrarIngrediente.php">Volver</a></div>';

?>