<?php 
   
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }
    
    //Conexion con base de datos
    require '../../database/db_connect.php';
    $mysqli = conectar();

    // Consulta
    $resultado = $mysqli->query("SELECT * FROM usuario WHERE id=".$_GET["id"]);
    $reg=$resultado->fetch_assoc();

    //Muestra Datos

    echo '   
        <div class="main bgmain d-flex justify-content-center text-center align-items-center">
            <div class="form flexColumn border shadow-lg p-5 mb-5 rounded">
                <h1>Detalle de ' . ($_GET["nombre"]) . '</h1>   
                <ul class="justify-content-center text-center">
                    <li class="p-2">Id: '.$reg['id'].'</li>
                    <li class="p-2">Nombre: '.$reg['nombre'].'</li>
                    <li class="p-2">Email: '.$reg['email'].'</li>
                    <li class="p-3">Admin: '.$reg['accesoAdmin'].'</li>
                </ul>
                <a class="btn-info btn-sm rounded-pill w-50" href="./mostrarUsuarios.php">atras</a>
            </div>
        </div>
        ';
?>