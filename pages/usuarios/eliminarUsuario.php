<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query("DELETE FROM usuario WHERE id=".$_GET["id"]);

    echo '<div class="main flexColumn"><h2 class="error">Usuario eliminado con éxito</h2><a class="boton flex" href="./mostrarUsuarios.php">Volver</a></div>';

?>