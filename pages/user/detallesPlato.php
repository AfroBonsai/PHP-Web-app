<?php 
    include '../header.php';

    //Conexion con base de datos
    require '../../database/db_connect.php';
    $mysqli = conectar();

    // Consulta
    $res = $mysqli->query("SELECT * FROM plato WHERE id=".$_GET["id"]);
    $reg=$res->fetch_assoc();

    //Muestra Datos
    echo '
        <div class="main bgmain d-flex justify-content-center text-center align-items-center">
            <div class="border rounded p-5  shadow-lg rounded">
                <h1 class="p-2" >Detalle de ' . ($_GET["titulo"]) . '</h1>
                <ul>
                    <li class="p-2">Identificador: '.$reg['id'].'</li>
                    <li class="p-2">Nombre del plato: '.$reg['titulo'].'</li>
                    <li class="p-2">Numero de comensales: '.$reg['comensales'].'</li>
                    <li class="p-2">Tipo de Plato: '.$reg['tipo'].'</li>
                </ul>
                <a class="btn btn-info w-50 rounded-pill btn-sm mt-2 flex peq" href="./cartaPlatos.php">atras</a>
            </div>
        </div>
        ';
