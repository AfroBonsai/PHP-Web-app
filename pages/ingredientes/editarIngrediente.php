<?php
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }
        
    echo '
        <div class="main flexColumn">
            <form class="form flexColumn" action="editarIngredienteSubmit.php" method="post">
            <h1>Editar ' . ($_GET["nombre"]) . '</h1>
        ';

    $id=($_GET["id"]);
    $nombre=($_GET["nombre"]);
    $cantidad=($_GET["cantidad"]);

?>
        <label for="nombre">Ingrediente</label>
        <input type="text" name="nombre" value="<?php echo $nombre;?>" pattern="^[A-Za-z0-9 ]{3,30}$" title="Min. 3 caracteres y sin caracteres especiales" required/>
        <label for="cantidad">Cantidad</label>
        <input type="number" name="cantidad" value="<?php echo $cantidad;?>" min="1" required/>
        <input type="hidden" name="id" value="<?php echo $id;?>" />
        <input type="submit" value="Editar" class="boton" />
        <a class="boton flex" href="./mostrarIngrediente.php">Volver</a>
    </form>
</div>