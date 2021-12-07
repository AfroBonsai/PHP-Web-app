<?php 
   
    include '../header.php';

    //Conexion con base de datos
    require '../../database/db_connect.php';
    $mysqli = conectar();
    $email = $_POST['email'];

    // Consulta
    $resultado = $mysqli->query("SELECT contrasena FROM usuario WHERE email='$email'");
    $reg=$resultado->fetch_assoc();

    echo '
        <div class="main d-flex justify-content-center text-center align-items-center bgmain">
            <div class="shadow-lg p-3 mb-5 border  rounded">
                <h1>Contraseña de ' . ($_POST["email"]) . '</h1>
                <p>Contraseña: '.$reg['contrasena'].'</p>
                <a class="btn btn-info btn-sm mt-2 flex peq rounded-pill w-15" href="../../index.php">atras</a>
            </div>
        </div>
        ';

?>
