<?PHP

echo '<h1>Detalle de ' . ($_GET["titulo"]) . '</h1>';
$id=($_GET["id"]);

?>

<form action="editarPlatoSubmit.php" method="post">
    
    <p>Nombre plato: <input type="text" name="titulo" /></p>
    <p>Número comensales: <input type="number" name="comensales" /></p>
    <p>Tipo plato: <select name="tipo">
            <option value="Principal">Principal</option>
            <option value="Secundario">Secundario</option>
            <option value="Postre">Postre</option>   
        </select>
    </p>
   <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <p><input type="submit" value="Editar" class="button" /></p>
</form>