<?php  
    include '../header.php';
    // Solo se permite el ingreso con el inicio de sesion.
    // Si el usuario no se ha logueado se le regresa al inicio.
    if (!isset($_SESSION['loggedin'])) {
        header('Location: ../../index.php');
        exit; }
?>

    <div class="main flex">
        <div class="form flexColumn">
            <H1>Bienvenidx <?=$_SESSION['nombre']?></H1>
            <p>Tu id de usuario: <?=$_SESSION['id']?></p>
            <p>Tu correo: <?=$_SESSION['email']?></p>
            <p>Tu Contraseña: <?=$_SESSION['contraseña']?></p>
            <a class="boton flex"href='logout.php'>Cerrar Sesión</a>
        </div>
    </div>
    
</body>
</html>