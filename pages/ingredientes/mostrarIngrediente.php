<?php
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }

//conexión con la base de datos

    require '../../database/db_connect.php';
    $mysqli = conectar();

    //consulta bbdd
    $resultado = $mysqli->query("SELECT id, nombre, cantidad FROM ingrediente");

    //Imprime el resultado
    echo '
        <div class="main bgmain flex d-flex justify-content-center text-center align-items-center">
            <div class="form flexColumn border p-5 shadow-lg mb-5 rounded">
                <h1 class="p-5">Lista Ingredientes</h1>
                <table class="p-5">
                    <tr>
                        <th class="p-3">Ingrediente</th>
                        <th class="p-3">Cantidad</th>
                        <th class="p-3">Editar</th>
                        <th class="p-3">Eliminar</th>
                    </tr>
            ';
    while ($reg = $resultado->fetch_assoc()) {
        echo '
            <tr  class="p-2">
                <td  class="p-2"><p>' . $reg['nombre'] . '</p></td>
                <td  class="p-2"><p>' . $reg['cantidad'] . '</p></td>
                <td><a class="btn btn-secondary btn-sm  flex peq" href="./editarIngrediente.php?id=' . $reg['id'] . '&nombre=' . $reg['nombre'] . '&cantidad=' . $reg['cantidad'] . '"> EDITAR</a></td>
                <td><a class="btn btn-secondary btn-sm  flex peq" href="./eliminarIngrediente.php?id=' . $reg['id'] .'"> ELIMINAR</a></td>
            </tr>
            ';
    }
    echo '
            </table>
            <a class="btn btn-primary btn-sm mt-4 flex peq rounded-pill" href="./crearIngrediente.php">Crear ingrediente</a>
        </div>
    </div>';

//<td><a href="./detallesPlato.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '">' . $reg['titulo'] . '</a></td>

?>