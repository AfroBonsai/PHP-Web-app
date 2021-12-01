<?php
include '../header.php';
?>

        <div class="main flex">
            <form class=" form flexColumn" action="registro.php" method="post">
                <h1>Registrarse</h1>
                <input type="text" name="nombre" placeholder="Nombre" pattern="^[A-Za-z0-9]{3,16}$" title="Min. 3 caracteres y solo admite letras y numeros" required/>
                <input type="email" name="email" placeholder="Email" required/>
                <input type="password" name="contraseña" placeholder="Contraseña" pattern="^.{4,20}$" title="Min. 4 caracteres" required/>
                <input type="submit" value="Registrar" class="boton"/>
                <a class="boton flex" href="../../index.php">Volver</a>
            </form>  
        </div>
    </body>
</html>