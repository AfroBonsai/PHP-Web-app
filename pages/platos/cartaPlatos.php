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
            <div class="form flexColumn bgmain p-5 flex justify-content-center text-center align-items-center bg-dark shadow-lg p-3 mb-5 bg-white rounded">
                <h1 class="text-center">Carta de Platos</h1>
                <table class=" d-flex justify-content-center text-center align-items-center pb-4">
                    <tr m-3>
                        <th>Ver Detalles</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
            ';
    while ($reg = $resultado->fetch_assoc()) {
        
        echo '
            <tr class="text-center">
                <td><a href="./detallesPlato.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '">' . $reg['titulo'] . '</a></td>
                <td class="p-3"><a class="btn btn-secondary btn-sm mt-2 flex peq" href="./editarPlato.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '&comensales=' . $reg['comensales'] . '"> EDITAR</a></td>
                <td><a class="btn btn-secondary btn-sm mt-2  flex peq" href="./eliminarPlato.php?id=' . $reg['id'] .'"> ELIMINAR</a></td>
            </tr>
            ';
    }
    echo '
            </table>
            <a class="btn btn-primary btn-sm btn-block flex " href="./crearPlato.php">Crear plato</a>
        </div>
    </div>';



?>