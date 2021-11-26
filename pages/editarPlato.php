<?PHP

echo '<h1>Detalle de ' . ($_GET["titulo"]) . '</h1>';

?>

<form action="editarPlatoSubmit.php" method="post">
    <p>Nombre plato: <input type="text" name="titulo" /></p>
    <p>Número comensales: <input type="number" name="comensales" /></p>
    <p>Tipo plato: <select name="tipo">
            <option value="1">Principal</option>
            <option value="2">Secundario</option>
            <option value="3">Postre</option>
        </select>
    </p>
    <p><input type="submit" value="Editar" class="button" /></p>
</form>