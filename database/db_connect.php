<?php
function conectar(){
    //conexion con la base de datos

$mysqli = new mysqli ("eu-cdbr-west-01.cleardb.com:3306", "b1c66af0b95655", "0182c2e6", "heroku_aa142db5d8feb81"); 
//Control de errores
if ($mysqli->connect_errno) {
echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") "
. $mysqli->connect_error;
}
return $mysqli;
}

?>
