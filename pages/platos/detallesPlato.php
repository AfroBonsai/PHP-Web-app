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
    
    <div class="main flexColumn d-flex justify-content-center text-center align-items-center shadow-lg p-3 mb-5 bg-white rounded">
        <div class="form flexColumn bgmain p-5 flex justify-content-center text-center align-items-center bg-dark shadow-lg p-3 mb-5 bg-white rounded">
            <h1>Detalle de ' . ($_GET["titulo"]) . '</h1> 
                <ul class="p-5">
                    <li class="p-2">Identificador: '.$reg['id'].'</li>
                    <li class="p-2">Nombre del plato: '.$reg['titulo'].'</li>
                    <li class="p-2">Numero de comensales: '.$reg['comensales'].'</li>
                    <li class="p-2">Tipo de Plato: '.$reg['tipo'].'</li>
                </ul>
                                
                
                
                <a class="btn btn-primary rounded-pill btn-sm mt-2 flex peq" href="./cartaPlatos.php">atras</a>
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