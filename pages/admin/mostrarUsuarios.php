<?php

//conexión con la base de datos

require '../../database/db_connect.php';
$mysqli = conectar();

//consulta bbdd
$resultado = $mysqli->query("SELECT id, nombre FROM usuario");

//Imprime el resultado
echo '<ol>';
while ($reg = $resultado->fetch_assoc()) {
    echo '<li>';
    echo '<a href="http://localhost/dev/PHP-Web-app/pages/perfilUsuario.php?id=' . $reg['id'] . '&nombre=' . $reg['nombre'] . '">' . $reg['nombre'] . '</a>';
    echo '</li>';
}
echo '</ol>';