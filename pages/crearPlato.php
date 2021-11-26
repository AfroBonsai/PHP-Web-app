<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="plato.php" method="post">
        <p>Nombre plato: <input type="text" name="titulo" /></p>
        <p>Número comensales: <input type="number" name="comensales" /></p>
        <p>Tipo plato: <select  name="Tipo plato">
            <option value="1">Principal</option>
            <option value="2">Secundario</option>
            <option value="3">Postre</option></select>
        </p>
        <style>.button{cursor: pointer}</style>
        <p><input type="submit" value="Crear" class="button"/></p>
    </form>
</body>
</html>


<!---------- PHP ENDPOINTS CREACIÓN PLATOS ------------>

<?php

$mysqli->query("INSERT INTO plato (titulo, comensales, tipo) VALUES (".$_POST['titulo'].",". $_POST['comensales'].",". $_POST['tipo'].");");

?>