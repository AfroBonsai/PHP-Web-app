<?php

echo '<h1> Detalles usuario ' . ($_GET["nombre"]) . '</h1>';


require '../database/db_connect.php';
$mysqli = conectar();

//consulta bbdd
$resultado = $mysqli->query("SELECT * FROM usuario WHERE id=".$_GET["id"]);

$reg=$resultado->fetch_assoc();

echo '<ul>';

echo '<li>Identificador: '.$reg['id'].'</li>';
echo '<li>Nombre: '.$reg['nombre'].'</li>';
echo '<li>Correo: '.$reg['email'].'</li>';
echo '<li>Contraseña: '.$reg['contraseña'].'</li>';

echo '</ul>';


echo '<a href="../pages/admin/mostrarUsuarios.php">
<style>button{cursor: pointer}</style>
<button type="button">Volver</button>
</a>';

?>