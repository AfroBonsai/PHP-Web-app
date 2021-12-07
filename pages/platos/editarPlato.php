<?php
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }
        
    echo '
        <div class="main d-flex justify-content-center text-center align-items-center bgmain">
            <form class="form flexColumn border shadow-lg p-3 mb-5  rounded " action="editarPlatoSubmit.php" method="post">
            <h1 class="p-5">Editar ' . ($_GET["titulo"]) . '</h1>
        ';

    $id=($_GET["id"]);
    $titulo=($_GET["titulo"]);
    $comensales=($_GET["comensales"]);

?>
        <div class="justify-content-center text-center align-items-center">
        <label for="titulo">Título</label>
        </div>
        <div class="pt-3">
        <input class="form-control-sm  justify-content-center text-center align-items-center" type="text" name="titulo" value="<?php echo $titulo;?>" pattern="^[A-Za-z0-9 ]{3,40}$" title="Min. 3 caracteres y solo admite letras" required/>
        </div>
        <div class="pt-3">
        <label for="comensales">Comensales</label>
        </div>
        <div class="pt-3">
        <input class="form-control-sm" type="number" name="comensales" value="<?php echo $comensales;?>" min="1" max="9" required/>
        </div>
        <div class="pt-3">
        <label for="tipo">Tipo</label>
        </div>
        <div class="pt-3">
        <select name="tipo">
            <option value="Principal">Principal</option>
            <option value="Secundario">Secundario</option>
            <option value="Postre">Postre</option>   
        </select>
        </div>
        <div class="pt-3">
        <input type="hidden" name="id" value="<?php echo $id;?>" />
        </div>
        <div class="p-5">
        <input type="submit" value="Editar" class="btn-primary btn-sm rounded-pill w-50" />
        </div>
        <a class="btn-info btn-sm rounded-pill w-15" href="./cartaPlatos.php">Atras</a>
    </form>
</div>