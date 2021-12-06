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
            <div class="form flexColumn border">
                <h1>Lista Ingredientes</h1>
                <table class="border">
                    <tr class="border">
                        <th class="border">Ingrediente</th>
                        <th  class="border">Cantidad</th>
                        <th  class="border">Editar</th>
                        <th  class="border">Eliminar</th>
                    </tr>
            ';
    while ($reg = $resultado->fetch_assoc()) {
        echo '
            <tr>
                <td  class="border"><p>' . $reg['nombre'] . '</p></td>
                <td  class="border"><p>' . $reg['cantidad'] . '</p></td>
                <td><a class="btn btn-secondary btn-sm mt-2 flex peq border" href="./editarIngrediente.php?id=' . $reg['id'] . '&nombre=' . $reg['nombre'] . '&cantidad=' . $reg['cantidad'] . '"> EDITAR</a></td>
                <td><a class="btn btn-secondary btn-sm mt-2 flex peq border-secondary" href="./eliminarIngrediente.php?id=' . $reg['id'] .'"> ELIMINAR</a></td>
            </tr>
            ';
    }
    echo '
            </table>
            <a class="btn btn-primary btn-sm mt-2 flex peq" href="./crearIngrediente.php">Crear ingrediente</a>
        </div>
    </div>';

//<td><a href="./detallesPlato.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '">' . $reg['titulo'] . '</a></td>

?>