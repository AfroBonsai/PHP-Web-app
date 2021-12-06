<?php
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }

//conexión con la base de datos

    require '../../database/db_connect.php';
    $mysqli = conectar();

    //consulta bbdd
    $resultado = $mysqli->query("SELECT id, titulo, comensales FROM plato");

    //Imprime el resultado
    echo '
        <div class="main d-flex justify-content-center text-center align-items-center">
            <div class="form flexColumn border w-auto p-3 flex justify-content-center text-center align-items-center">
                <h1 class="text-center">Carta de Platos</h1>
                <table class=" d-flex justify-content-center text-center align-items-center">
                    <tr class="border">
                        <th class="border">Ver Detalles</th>
                        <th class="border">Editar</th>
                        <th class="border">Eliminar</th>
                    </tr>
            ';
    while ($reg = $resultado->fetch_assoc()) {
        
        echo '
            <tr class="border text-center">
                <td><a href="./detallesPlato.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '">' . $reg['titulo'] . '</a></td>
                <td><a class="btn btn-secondary btn-sm mt-2 flex peq" href="./editarPlato.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '&comensales=' . $reg['comensales'] . '"> EDITAR</a></td>
                <td><a class="btn btn-secondary btn-sm mt-2 flex peq" href="./eliminarPlato.php?id=' . $reg['id'] .'"> ELIMINAR</a></td>
            </tr>
            ';
    }
    echo '
            </table>
            <a class="btn btn-primary btn-sm btn-block flex" href="./crearPlato.php">Crear plato</a>
        </div>
    </div>';



?>