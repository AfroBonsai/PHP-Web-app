<?php  
    include '../header.php';
    // Solo se permite el ingreso con el inicio de sesion.
    // Si el usuario no se ha logueado se le regresa al inicio.
    if (!isset($_SESSION['loggedin'])) {
        header('Location: ../../index.php');
        exit; }
?>

    <div class="main flex d-flex justify-content-center text-center align-items-center shadow-lg p-5 mb-5 bg-white rounded bgmain">
        <div class="form flexColumn border shadow-lg p-3 mb-5 rounded">
            <H1 class="p-3">Bienvenidx <?=$_SESSION['nombre']?></H1>
            <p  class="p-3">Tu id de usuario: <?=$_SESSION['id']?></p>
            <p  class="p-3">Tu correo: <?=$_SESSION['email']?></p>
            <p  class="p-3">Tu Contraseña: <?=$_SESSION['contrasena']?></p>
            <a class="btn btn-info btn-sm mt-2 flex peq rounded-pill"href='logout.php'>Cerrar Sesión</a>
        </div>
    </div>
    
</body>
</html>