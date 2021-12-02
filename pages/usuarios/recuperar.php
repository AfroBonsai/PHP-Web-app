<?php 
   
    include '../header.php';

    //Conexion con base de datos
    require '../../database/db_connect.php';
    $mysqli = conectar();
    $email = $_POST['email'];

    // Consulta
    $resultado = $mysqli->query("SELECT contraseña FROM usuario WHERE email='$email'");
    $reg=$resultado->fetch_assoc();

    echo '
        <div class="main flex">
            <div class="form flexColumn">
                <h1>Contraseña de ' . ($_POST["email"]) . '</h1>
                <p>Contraseña: '.$reg['contraseña'].'</p>
                <a class="boton flex" href="../../index.php">atras</a>
            </div>
        </div>
        ';

?>
