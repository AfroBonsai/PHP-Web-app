<?php 

//Conexion con base de datos
require '../database/db_connect.php';
$mysqli = conectar();

$titulo = $_POST['titulo'];
$comensales = $_POST['comensales'];
$tipo = $_POST['tipo'];
$id = $_POST['id'];

// Consulta
$mysqli->query("UPDATE plato SET titulo = '$titulo', comensales = '$comensales', tipo = '$tipo' WHERE id='$id'");

echo "<p> Plato editado con exito </p>";

echo '<a href="./cartaPlatos.php">atras</a>'

?>