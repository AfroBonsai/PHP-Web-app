<?php

//conexión con la base de datos

require './database/db_connect.php';
$mysqli = conectar();

//consulta bbdd
$resultado = $mysqli->query("SELECT id, titulo FROM plato");


//Imprime el resultado
echo '<ol>';
while ($reg = $resultado->fetch_assoc()) {
    echo '<li>';
    echo '<a href="http://localhost/dev/PHP-Web-app/pages/detallesPlato.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '">' . $reg['titulo'] . '</a>';
    echo '</li>';
}
echo '</ol>';

echo '<a href="localhost/dev/PHP-Web-app/pages/crearPlato.html">
<style>button{cursor: pointer}</style>
<button>Crear plato</button>
</a>';


?>