<?php
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }
?>

        <div class="main flex">
            <form class=" form flexColumn" action="añadir.php" method="post">
                <h1>Añadir Usuario</h1>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre" pattern="^[A-Za-z0-9]{3,16}$" title="Min. 3 caracteres y solo admite letras y numeros" required/>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" required/>
                <label for="contraseña">Contraseña</label>
                <input type="password" name="contraseña" placeholder="Contraseña" pattern="^.{4,20}$" title="Min. 4 caracteres" required/>
                <label for="admin">Tipo de Usuario</label>
                <select type="number" name="accesoAdmin">
                    <option value="0">Usuario</option>
                    <option value="1">Admin</option>
                </select>
                <input type="submit" value="Registrar" class="boton"/>
                <a class="boton flex" href="./mostrarUsuarios.php">Volver</a>
            </form>  
        </div>
    </body>
</html>