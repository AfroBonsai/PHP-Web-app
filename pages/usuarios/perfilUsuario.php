<?php  
    include '../header.php';
    // Solo se permite el ingreso con el inicio de sesion.
    // Si el usuario no se ha logueado se le regresa al inicio.
    if (!isset($_SESSION['loggedin'])) {
        header('Location: ../../index.php');
        exit; }
?>

    <div class="main flex d-flex justify-content-center text-center align-items-center shadow-lg p-3 mb-5 bg-white rounded">
        <div class="form flexColumn border bgmain p-5 rounded">
            <H1>Bienvenidx <?=$_SESSION['nombre']?></H1>
            <p>Tu id de usuario: <?=$_SESSION['id']?></p>
            <p>Tu correo: <?=$_SESSION['email']?></p>
            <p>Tu Contraseña: <?=$_SESSION['contraseña']?></p>
            <a class="btn btn-primary btn-sm mt-2 flex peq rounded-pill"href='logout.php'>Cerrar Sesión</a>
        </div>
    </div>
    
</body>
</html>