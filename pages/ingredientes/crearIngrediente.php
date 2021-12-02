<?php

    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }
    
?>

    <div class="main flex">
        <form class=" form flexColumn" action="añadirIngrediente.php" method="post">
            <h1>Añadir Ingrediente</h1>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" />
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" />           
            <input type="submit" value="Crear" class="boton flex"/>
            <a class="boton flex" href="./mostrarIngrediente.php">Atrás</a>
        </form>
    </div>
</body>
</html>