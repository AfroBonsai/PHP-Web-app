<?php
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }
        
    echo '
        <div class="main flexColumn">
            <form class="form flexColumn" action="editarPlatoSubmit.php" method="post">
            <h1>Editar ' . ($_GET["titulo"]) . '</h1>
        ';

    $id=($_GET["id"]);
    $titulo=($_GET["titulo"]);
    $comensales=($_GET["comensales"]);

?>

        <label for="titulo">Título</label>
        <input type="text" name="titulo" value="<?php echo $titulo;?>" pattern="^[A-Za-z]{3,16}$" title="Min. 3 caracteres y solo admite letras" required/>
        <label for="comensales">Comensales</label>
        <input type="number" name="comensales" value="<?php echo $comensales;?>" min="1" max="9" required/>
        <label for="tipo">Tipo</label>
        <select name="tipo">
            <option value="Principal">Principal</option>
            <option value="Secundario">Secundario</option>
            <option value="Postre">Postre</option>   
        </select>
        <input type="hidden" name="id" value="<?php echo $id;?>" />
        <input type="submit" value="Editar" class="boton" />
        <a class="boton flex" href="./cartaPlatos.php">Atras</a>
    </form>
</div>