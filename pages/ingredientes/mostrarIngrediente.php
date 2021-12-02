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
        <div class="main flex">
            <div class="form flexColumn">
                <h1>Lista Ingredientes</h1>
                <table>
                    <tr>
                        <th>Ingrediente</th>
                        <th>Cantidad</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
            ';
    while ($reg = $resultado->fetch_assoc()) {
        echo '
            <tr>
                <td><p>' . $reg['nombre'] . '</p></td>
                <td><p>' . $reg['cantidad'] . '</p></td>
                <td><a class="boton flex peq" href="./editarIngrediente.php?id=' . $reg['id'] . '&nombre=' . $reg['nombre'] . '&cantidad=' . $reg['cantidad'] . '"> EDITAR</a></td>
                <td><a class="boton flex peq" href="./eliminarIngrediente.php?id=' . $reg['id'] .'"> ELIMINAR</a></td>
            </tr>
            ';
    }
    echo '
            </table>
            <a class="boton flex" href="./crearIngrediente.php">Crear ingrediente</a>
        </div>
    </div>';

//<td><a href="./detallesPlato.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '">' . $reg['titulo'] . '</a></td>

?>