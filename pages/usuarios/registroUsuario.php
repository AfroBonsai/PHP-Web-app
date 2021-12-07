<?php
include '../header.php';
?>

        <div class="main d-flex justify-content-center bgmain text-center align-items-center">
            <form class="border shadow-lg p-5 mb-5 rounded" action="registro.php" method="post">
                <h1 class="p-3">Registrarse</h1>
                <div class="p-3">
                <input class="form-control-sm" type="text" name="nombre" placeholder="Nombre" pattern="^[A-Za-z0-9]{3,16}$" title="Min. 3 caracteres y solo admite letras y numeros" required/>
                </div>
                <div class="p-3">
                <input class="form-control-sm" type="email" name="email" placeholder="Email" required/>
                </div>
                <div class="p-3">
                <input class="form-control-sm" type="password" name="contraseña" placeholder="Contraseña" pattern="^.{4,20}$" title="Min. 4 caracteres" required/>
                </div>
                <input type="submit" value="Registrar" class="btn btn-secondary btn-sm mt-2 flex peq"/>
                <a class="btn btn-info btn-sm mt-2 flex peq" href="../../index.php">Volver</a>
            </form>  
        </div>
    </body>
</html>