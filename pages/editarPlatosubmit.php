<?php 

//Conexion con base de datos
require './bbdd/db_connect.php';
$mysqli = conectar();

// Consulta
$mysqli->query('UPDATE plato SET titulo="'.$_POST["titulo"].'", comensales="'.$_POST["comensales"].
'", tipo="'.$_POST["tipo"].' WHERE id='.$_GET["id"].';');

echo '<a href="http://localhost/php-dev/menu/index.php">atras</a>'

?>