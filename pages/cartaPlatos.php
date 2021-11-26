<?php

//conexión con la base de datos

require '../database/db_connect.php';
$mysqli = conectar();

//consulta bbdd
$resultado = $mysqli->query("SELECT id, titulo FROM plato");

//Imprime el resultado
echo '<ol>';
while ($reg = $resultado->fetch_assoc()) {
    echo '<li>';
    echo '<a href="http://localhost/php-dev/PHP-Web-app/pages/detallesPlato.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '">' . $reg['titulo'] . '</a>';
    echo '<a class="boton" href="http://localhost/php-dev/PHP-Web-app/pages/eliminar.php?id=' . $reg['id'] .'"> ELIMINAR</a>';
    echo '<a class="boton" href="http://localhost/php-dev/PHP-Web-app/pages/editarPlato.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '"> EDITAR</a>';
    echo '</li>';
}
echo '</ol>';

echo '<a href="./crearPlato.html">
<button>Crear plato</button>
</a>';


?>