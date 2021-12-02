<?php

    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }
    
?>

    <div class="main flex">
        <form class=" form flexColumn" action="añadirPlato.php" method="post">
            <h1>Añadir Plato</h1>
            <label for="titulo">Nombre</label>
            <input type="text" name="titulo" pattern="^[A-Za-z0-9 ]{3,40}$" title="Min. 3 caracteres y solo admite letras" required/>
            <label for="comensales">Comensales</label>
            <input type="number" name="comensales" min="1"max="9" required />
            <label for="tipo">Tipo</label>
            <select name="tipo">
                <option value="Principal">Principal</option>
                <option value="Secundario">Secundario</option>
                <option value="Postre">Postre</option>
            </select>
            <input type="submit" value="Crear" class="boton flex"/>
            <a class="boton flex" href="./cartaPlatos.php">Volver</a>
        </form>
    </div>
</body>
</html>