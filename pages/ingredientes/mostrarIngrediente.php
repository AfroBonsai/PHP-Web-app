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
        <div class="main flex d-flex justify-content-center text-center align-items-center">
            <div class="form flexColumn border bgmain p-5 shadow-lg mb-5 bg-white rounded">
                <h1>Lista Ingredientes</h1>
                <table class="p-5">
                    <tr>
                        <th class="p-2">Ingrediente</th>
                        <th class="p-2">Cantidad</th>
                        <th class="p-2">Editar</th>
                        <th class="p-2">Eliminar</th>
                    </tr>
            ';
    while ($reg = $resultado->fetch_assoc()) {
        echo '
            <tr  class="p-2">
                <td  class="p-2"><p>' . $reg['nombre'] . '</p></td>
                <td  class="p-2"><p>' . $reg['cantidad'] . '</p></td>
                <td  class="p-2"><a class="btn btn-secondary btn-sm mt-2 flex peq" href="./editarIngrediente.php?id=' . $reg['id'] . '&nombre=' . $reg['nombre'] . '&cantidad=' . $reg['cantidad'] . '"> EDITAR</a></td>
                <td  class="p-2"><a class="btn btn-secondary btn-sm mt-2 flex peq" href="./eliminarIngrediente.php?id=' . $reg['id'] .'"> ELIMINAR</a></td>
            </tr>
            ';
    }
    echo '
            </table >
            <a class="btn btn-primary btn-sm mt-2 flex peq rounded-pill" href="./crearIngrediente.php">Crear ingrediente</a>
        </div>
    </div>';

//<td><a href="./detallesPlato.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '">' . $reg['titulo'] . '</a></td>

?>