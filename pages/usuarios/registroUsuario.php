<?php
include '../header.php';
?>

        <div class="main d-flex justify-content-center text-center align-items-center">
            <form class="border" action="registro.php" method="post">
                <h1>Registrarse</h1>
                <input class="d-flex justify-content-center text-center align-items-center" type="text" name="nombre" placeholder="Nombre" pattern="^[A-Za-z0-9]{3,16}$" title="Min. 3 caracteres y solo admite letras y numeros" required/>
                <input class="d-flex justify-content-center text-center align-items-center" type="email" name="email" placeholder="Email" required/>
                <input class="d-flex justify-content-center text-center align-items-center" type="password" name="contraseña" placeholder="Contraseña" pattern="^.{4,20}$" title="Min. 4 caracteres" required/>
                <input type="submit" value="Registrar" class="btn btn-secondary btn-sm mt-2 flex peq"/>
                <a class="btn btn-primary btn-sm mt-2 flex peq" href="../../index.php">Volver</a>
            </form>  
        </div>
    </body>
</html>