<?php 

echo '<h1>Detalle de ' . ($_GET["titulo"]) . '</h1>';

//Conexion con base de datos
require '../database/db_connect.php';
$mysqli = conectar();

// Consulta
$resultado = $mysqli->query("SELECT * FROM plato WHERE id=".$_GET["id"]);
$reg=$resultado->fetch_assoc();

//Muestra Datos
echo '<ul>';
echo '<li>Identificador: '.$reg['id'].'</li>';
echo '<li>Nombre del plato: '.$reg['titulo'].'</li>';
echo '<li>Numero de comensales: '.$reg['comensales'].'</li>';
echo '<li>Tipo de Plato: '.$reg['tipo'].'</li>';
echo '</ul>';

echo '<a href="./cartaPlatos.php">atras</a>'

echo '<a href="../index.php">
<style>button{cursor: pointer}</style>
<button type="button">Volver</button>
</a>';

?>
