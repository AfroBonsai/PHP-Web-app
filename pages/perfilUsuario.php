<?php

//conexión con la base de datos

require '../database/db_connect.php';
$mysqli = conectar();

$resultado = $mysqli->query('SELECT * FROM usuario WHERE email = "'. $_POST["Email"].'";');


// 'SELECT * FROM usuario WHERE nombre = "' .  $_POST["usuario"] .  '";'
$login = $resultado->fetch_assoc();

 echo'te has logeado con exito';
 echo'<a href="http://localhost/dev/PHP-WEB-APP/pages/perfilUsuario.php">Ir a Perfil</a>';
?>