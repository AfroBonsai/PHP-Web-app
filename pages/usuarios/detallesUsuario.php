<?php 
   
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }

    echo '
        <div class="main flex">
            <div class="form flexColumn">
                <h1>Detalle de ' . ($_GET["nombre"]) . '</h1>
    ';

    //Conexion con base de datos
    require '../../database/db_connect.php';
    $mysqli = conectar();

    // Consulta
    $resultado = $mysqli->query("SELECT * FROM Usuario WHERE id=".$_GET["id"]);
    $reg=$resultado->fetch_assoc();

    //Muestra Datos

    echo '
                <ul>
                    <li>Id: '.$reg['id'].'</li>
                    <li>Nombre: '.$reg['nombre'].'</li>
                    <li>Email: '.$reg['email'].'</li>
                    <li>Admin: '.$reg['accesoAdmin'].'</li>
                </ul>
                <a class="boton flex" href="./mostrarUsuarios.php">atras</a>
            </div>
        </div>
        ';

?>