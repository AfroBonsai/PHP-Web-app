<?PHP

echo '<h1>Detalle de ' . ($_GET["nombre"]) . '</h1>';
$id=($_GET["id"]);

?>

<form action="editarPlatoSubmit.php" method="post">
    
    <p>Nombre: <input type="text" name="nombre" /></p>
    <p>Email: <input type="text" name="email" /></p>
    <p>Contraseña: <input type="text" name="contraseña" /></p>
    <p>Acceso admin: <input type="number" name="accesoAdmin" /></p>

   <input type="hidden" name="id" value="<?php echo $id; ?>" />
    <p><input type="submit" value="Editar" class="button" /></p>
</form>