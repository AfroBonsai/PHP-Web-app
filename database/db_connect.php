
<!-- mysql://b1c66af0b95655:0182c2e6@eu-cdbr-west-01.cleardb.com/heroku_aa142db5d8feb81?reconnect=true -->

<?php
function conectar(){
//Conexion con base de datos
$mysqli = new mysqli("eu-cdbr-west-01.cleardb.com:3306", "b1c66af0b95655","0182c2e6", "heroku_aa142db5d8feb81");
if ($mysqli->connect_errno) {
    echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;
}
?>

<!--  
$url = parse_url(getenv("mysql://b1c66af0b95655:0182c2e6@eu-cdbr-west-01.cleardb.com/heroku_aa142db5d8feb81?reconnect=true"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
-->


<!-- $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db); -->


<!--
function conectar(){
    //conexion con la base de datos

$mysqli = new mysqli ("eu-cdbr-west-01.cleardb.com:3306", "b1c66af0b95655", "0182c2e6", "heroku_aa142db5d8feb81"); 
//Control de errores   eu-cdbr-west-01.cleardb.com         b1c66af0b95655    0182c2e6    heroku_aa142db5d8feb81
if ($mysqli->connect_errno) {
echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") "
. $mysqli->connect_error;
}
return $mysqli;
}


-->