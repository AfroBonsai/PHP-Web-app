<?php
    include '../header.php';
    //conexión con la base de datos

    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }

    require '../../database/db_connect.php';
    $mysqli = conectar();

    //consulta bbdd
    $resultado = $mysqli->query("SELECT id, nombre, email, accesoAdmin FROM usuario");

    //Imprime el resultado
    echo '
        <div class="main flex">
            <div class="form flexColumn">
                <h1>Lista de Usuarios</h1>
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
                    <td><a href="./detallesUsuario.php?id=' . $reg['id'] . '&nombre=' . $reg['nombre'] . '">' . $reg['nombre'] . '</a></td>
                    <td><a class="boton flex peq" href="./editarUsuario.php?id=' . $reg['id'] . '&nombre=' . $reg['nombre'] . '&email=' . $reg['email'] . '&accesoAdmin=' . $reg['accesoAdmin'] . '">editar</a></td>
                    <td><a class="boton flex peq" href="./eliminarUsuario.php?id=' . $reg['id'] .'">eliminar</a></td>
                </tr>
            ';
    }
    echo '
        </table>
        <a class="boton flex" href="./añadirUsuario.php">Añadir Usuario</a>
    </div>
    ';

?>