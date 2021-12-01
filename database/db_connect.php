<?php
function conectar(){
    //conexion con la base de datos

$mysqli = new mysqli ("localhost:3306", "root", "root", "restaurante"); 
//Control de errores
if ($mysqli->connect_errno) {
echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") "
. $mysqli->connect_error;
}
return $mysqli;
}

?>