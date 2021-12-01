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
        <div class="main flex">
            <div class="form flexColumn">
                <h1>Carta de Platos</h1>
                <table>
                    <tr>
                        <th>Ver Detalles</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
            ';
    while ($reg = $resultado->fetch_assoc()) {
        echo '
            <tr>
                <td><a href="./detallesPlato.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '">' . $reg['titulo'] . '</a></td>
                <td><a class="boton flex peq" href="./editarPlato.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '&comensales=' . $reg['comensales'] . '"> EDITAR</a></td>
                <td><a class="boton flex peq" href="./eliminarPlato.php?id=' . $reg['id'] .'"> ELIMINAR</a></td>
            </tr>
            ';
    }
    echo '
            </table>
            <a class="boton flex" href="./crearPlato.php">Crear plato</a>
        </div>
    </div>';



?>