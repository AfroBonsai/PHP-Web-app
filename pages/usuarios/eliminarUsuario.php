<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query("DELETE FROM usuario WHERE id=".$_GET["id"]);

    echo '<div class="main d-flex justify-content-center text-center align-items-center bgmain"><h2 class="error">Usuario eliminado con éxito</h2><a class="btn-info btn-sm rounded-pill w-15" href="./mostrarUsuarios.php">Volver</a></div>';

?>