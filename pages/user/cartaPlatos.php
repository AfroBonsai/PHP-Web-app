<?php
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] !== 0) ) {
            header('Location: ../../index.php');    
        }

//conexión con la base de datos

    require '../../database/db_connect.php';
    $mysqli = conectar();

    //consulta bbdd
    $resultado = $mysqli->query("SELECT id, titulo FROM plato");

    //Imprime el resultado
    echo '
        <div class="main d-flex justify-content-center text-center align-items-center">
            <div class="form bgmain p-5 border rounded">
                <ol>
        ';
    while ($reg = $resultado->fetch_assoc()) {
        echo '
                <li class="border-bottom p-5 d-flex justify-content-center text-center align-items-center">
                    <a href="./detallesPlato.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '">' . $reg['titulo'] . '</a>
                </li>
                ';
    }
    echo '
                </ol>
            </div>
        </div>
        ';



?>