<?php

    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }
    
?>

    <div class="main d-flex justify-content-center text-center align-items-center bgmain">
        <form class=" form flexColumn shadow-lg p-5 mb-5 border  rounded " action="añadirPlato.php" method="post">
            <h1 class="p-5">Añadir Plato</h1>
            <div>
            <label for="titulo">Nombre</label>
            </div>
            <div class="p-3">
            <input type="text" name="titulo" pattern="^[A-Za-z0-9 ]{3,40}$" title="Min. 3 caracteres y solo admite letras" required/>
            </div>
            <div>
            <label for="comensales"  class="p-3">Comensales</label>
            </div>
            <div>
            <input type="number" name="comensales" min="1"max="9" required />
            </div>
            <div>
            <label for="tipo" class="pt-2">Tipo</label>
            </div>
            <div class="p-3">
            <select name="tipo">
                <option value="Principal">Principal</option>
                <option value="Secundario">Secundario</option>
                <option value="Postre">Postre</option>
            </select>
            </div>
            <div class="p-3">
            <input type="submit" value="Crear" class="btn-primary btn-sm rounded-pill w-25"/>
            </div>
            <div class="p-3">
            <a class="btn-info btn-sm rounded-pill w-15" href="./cartaPlatos.php">Volver</a>
            </div>
        
        </form>
    </div>
</body>
</html>