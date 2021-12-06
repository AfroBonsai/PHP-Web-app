<?php

    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }
    
?>

    <div class="main d-flex justify-content-center text-center align-items-center bgmain">
        <form class=" form shadow-lg p-3 mb-5 border rounded" action="añadirIngrediente.php" method="post">
            <h1 class="p-3">Añadir Ingrediente</h1>
            <div>
            <label for="nombre">Nombre</label>
            </div>
            <div class="p-3">
            <input type="text" name="nombre" />
            </div>
            <div  class="p-3">
            <label for="cantidad">Cantidad</label>
            </div>
            <div>
            <input type="number" name="cantidad" />
            </div>
            <div class="pt-4">        
            <input type="submit" value="Crear" class="boton btn-primary btn-sm rounded-pill w-25"/>
            <a class="boton btn-info btn-sm rounded-pill w-25" href="./mostrarIngrediente.php">Atrás</a>
            </div>
        </form>
    </div>
</body>
</html>