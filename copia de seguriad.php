<?php 
    include '../header.php';
    

    //Conexion con base de datos
    require '../../database/db_connect.php';
    $mysqli = conectar();

    // Consulta
    $resPlato = $mysqli->query("SELECT * FROM plato WHERE id=".$_GET["id"]);

    $resIngrediente = $mysqli->query("SELECT ingrediente.*, plato_ingrediente.PlatoId, plato_ingrediente.IngredienteId JOIN plato_ingrediente ON plato_ingrediente.IngredienteId= PlatoId=".$_GET["id"]);
 
    $resPlatoIngrediente = $mysqli->query("SELECT
    plato.id,
    plato.titulo,
    ingrediente.id
    ingrediente.nombre
    FROM plato
    JOIN plato_ingrediente
    ON plato.id = plato_ingrediente.PlatoId
    JOIN ingrediente
    ON ingrediente.id = plato_ingrediente.IngredienteId");


    $regPlato=$resPlato->fetch_assoc();

    $regPlatoIngrediente=$resPlatoIngrediente->fetch_assoc();

    $regIngrediente=$resIngrediente->fetch_assoc();
 
    //Muestra Datos

    echo '
    <div class="main flexColumn">
        <div class="form flexColumn">
            <h1>Detalle de ' . ($_GET["titulo"]) . '</h1> 
                <ul>
                    <li>Identificador: '.$regPlato['id'].'</li>
                    <li>Nombre del plato: '.$regPlato['titulo'].'</li>
                    <li>Numero de comensales: '.$regPlato['comensales'].'</li>
                    <li>Tipo de Plato: '.$regPlato['tipo'].'</li>
                </ul>
                <a class="boton flex" href="./cartaPlatos.php">atras</a>
            </div>
            
            <div class="form flexColumn">
            <h1>Detalle de id tabla ing-plat ' . ($_GET["id"]) . '</h1> 
                <ul>
                    <li>Identificador: '.$regIngrediente['id'].'</li>
                    <li>PlatoId: '.$regIngrediente['PlatoId'].'</li>
                    <li>IngredienteId: '.$regIngrediente['IngredienteId'].'</li>
                </ul>
                <a class="boton flex" href="./cartaPlatos.php">Volver</a>
            </div>

            <div class="form flexColumn">
            <h1>Detalle de id tabla ing-plat ' . ($_GET["id"]) . '</h1> 
                <ul>
                    <li>Identificador: '.$resPlatoIngrediente['id'].'</li>
                    <li>PlatoId: '.$resPlatoIngrediente['PlatoId'].'</li>
                    <li>IngredienteId: '.$resPlatoIngrediente['IngredienteId'].'</li>
                </ul>
                <a class="boton flex" href="./cartaPlatos.php">Volver</a>
            </div>


        </div>
        ';
