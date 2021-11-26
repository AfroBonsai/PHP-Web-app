<?php

echo '<h1> Detalles receta ' . ($_GET["titulo"]) . '</h1>';


require '../database/db_connect.php';
$mysqli = conectar();

//consulta bbdd
$resultado = $mysqli->query("SELECT * FROM plato WHERE id=".$_GET["id"]);

$reg=$resultado->fetch_assoc();

echo '<ul>';

echo '<li>Identificador: '.$reg['id'].'</li>';
echo '<li>Nombre de plato: '.$reg['titulo'].'</li>';
echo '<li>Numero de comensales: '.$reg['comensales'].'</li>';
echo '<li>Tipo de plato'.$reg['tipo'].'</li>';

echo '</ul>';


echo '<a href="../index.php">
<style>button{cursor: pointer}</style>
<button type="button">Volver</button>
</a>';

?>

