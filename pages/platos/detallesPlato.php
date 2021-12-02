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
    
    <div class="main flexColumn">
        <div class="form flexColumn">
            <h1>Detalle de ' . ($_GET["titulo"]) . '</h1> 
                <ul>
                    <li>Identificador: '.$reg['id'].'</li>
                    <li>Nombre del plato: '.$reg['titulo'].'</li>
                    <li>Numero de comensales: '.$reg['comensales'].'</li>
                    <li>Tipo de Plato: '.$reg['tipo'].'</li>
                </ul>
                                
                
                
                <a class="boton flex" href="./cartaPlatos.php">atras</a>
            </div>

        </div>
        ';


// FUNCIONES EN PRUEBAS


       // var_dump($reg);
      
    
/*
$id = $_GET['id'];
    $res = $mysqli->query("SELECT
    plato.id, plato.titulo, plato.comensales, plato.tipo,
    ingrediente.id, ingrediente.nombre, ingrediente.cantidad
    FROM plato
    JOIN plato_ingrediente
    ON plato.id = plato_ingrediente.PlatoId
    JOIN ingrediente
    ON ingrediente.id = plato_ingrediente.IngredienteId
    WHERE $id = plato.id");







<table>
                <thead>
                  <tr>
                    <th>Ingredientes</th>
                    <th>Cantidad</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>                    
                    <td>' . $reg['nombre'] . '</td>
                    <td>' . $reg['cantidad'] . '</td>
                  </tr>
                </tbody>
                </table>*/