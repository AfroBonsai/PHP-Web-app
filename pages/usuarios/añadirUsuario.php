<?php
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }
?>

        <div class="main d-flex justify-content-center text-center align-items-center bgmain">
            <form class="form flexColumn border shadow-lg p-3 mb-5 rounded" action="añadir.php" method="post">
                <h1>Añadir Usuario</h1>
                <div>
                <label for="nombre">Nombre</label>
                </div>
                <div>
                <input type="text" name="nombre" placeholder="Nombre" pattern="^[A-Za-z0-9]{3,16}$" title="Min. 3 caracteres y solo admite letras y numeros" required/>
                </div>
                <div>
                <label for="email">Email</label>
                </div>
                <input type="email" name="email" placeholder="Email" required/>
                <div>
                <label for="contrasena">Contraseña</label>
                </div>
                <div>
                <input type="password" name="contraseña" placeholder="Contraseña" pattern="^.{8,20}$" title="Min. 8 caracteres" required/>
                </div>
                <div class="pt-2">
                <label for="admin">Tipo de Usuario</label>
                </div>
                <select type="number" name="accesoAdmin">
                    <option value="0">Usuario</option>
                    <option value="1">Admin</option>
                </select>
                <div class="pt-3
                ">
                <input class="btn btn-primary btn-sm rounded-pill" type="submit" value="Registrar" class="boton"/>
                <a class="btn btn-info btn-sm rounded-pill w-50 " href="./mostrarUsuarios.php">Volver</a>
            </form>  
        </div>
    </body>
</html>