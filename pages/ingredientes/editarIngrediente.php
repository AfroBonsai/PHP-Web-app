<?php
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }
        
    echo '
        <div class="main d-flex justify-content-center text-center align-items-center bgmain">
            <form class="shadow-lg p-3 mb-5 border  rounded " action="editarIngredienteSubmit.php" method="post">
            <h1 class="p-3">Editar ' . ($_GET["nombre"]) . '</h1>
        ';

    $id=($_GET["id"]);
    $nombre=($_GET["nombre"]);
    $cantidad=($_GET["cantidad"]);

?>       
        <div>
        <label for="nombre">Ingrediente</label>
        </div>
        <div class="p-3">
        <input type="text" name="nombre" value="<?php echo $nombre;?>" pattern="^[A-Za-z0-9 ]{3,30}$" title="Min. 3 caracteres y sin caracteres especiales" required/>
        </div>
        <div>
        <label for="cantidad">Cantidad</label>
        </div>
        <div>
        <input type="number" name="cantidad" value="<?php echo $cantidad;?>" min="1" required/>
        </div>
        <div>
        <input type="hidden" name="id" value="<?php echo $id;?>" />
        </div>
        <div  class="p-5">
        <input type="submit" value="Editar" class="btn-primary btn-sm rounded-pill w-20" />
        <a class="btn-info btn-sm rounded-pill w-15" href="./mostrarIngrediente.php">Volver</a>
        </div>
    </form>
</div>