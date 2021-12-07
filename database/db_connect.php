<?php
function conectar(){
    //conexion con la base de datos

$mysqli = new mysqli ("192.168.0.22:3306", "remote", "2pro456X", "restaurante"); 
//Control de errores
if ($mysqli->connect_errno) {
echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") "
. $mysqli->connect_error;
}
return $mysqli;
}

?>