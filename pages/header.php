<?php
session_start();
if (!isset($_SESSION['accesoAdmin'])) {

  echo '
            <!DOCTYPE html>
            <html lang="en">

            <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="http://aadg-api-restaurante.herokuapp.com/styles/index.css">
              <title>Document</title>
            </head>

            <body>
              <div class="header flex">
                <a class="boton flex" href="http://aadg-api-restaurante.herokuapp.com/pages/usuarios/registroUsuario.php">Registrarse</a>
              </div>
              <div class="oro"></div>
            </body>
            ';
} else if ($_SESSION['accesoAdmin'] === 0) {

  echo '
            <!DOCTYPE html>
            <html lang="en">

            <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="http://aadg-api-restaurante.herokuapp.com/styles/index.css">
              <title>Document</title>
            </head>

            <body>
              <div class="header flex">
                <a class="boton flex" href="http://aadg-api-restaurante.herokuapp.com/pages/user/cartaPlatos.php">Carta</a>
                <a class="boton flex"href="http://aadg-api-restaurante.herokuapp.com/pages/usuarios/perfilUsuario.php">Perfil</a>
                <a class="boton flex"href="http://aadg-api-restaurante.herokuapp.com/pages/usuarios/logout.php">Cerrar Sesión</a>
              </div>
              <div class="oro"></div>
            </body>
            ';
} else {

  echo '
            <!DOCTYPE html>
            <html lang="en">

            <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link rel="stylesheet" href="http://aadg-api-restaurante.herokuapp.com/styles/index.css">
              <title>Document</title>
            </head>

            <body>
              <div class="header flex">
                <a class="boton flex" href="http://aadg-api-restaurante.herokuapp.com/pages/ingredientes/mostrarIngrediente.php">Ingredientes</a>
                <a class="boton flex" href="http://aadg-api-restaurante.herokuapp.com/pages/platos/cartaPlatos.php">Platos</a>
                <a class="boton flex" href="http://aadg-api-restaurante.herokuapp.com/pages/usuarios/mostrarUsuarios.php">Usuarios</a>
                <a class="boton flex"href="http://aadg-api-restaurante.herokuapp.com/pages/usuarios/perfilUsuario.php">Perfil</a>
                <a class="boton flex"href="http://aadg-api-restaurante.herokuapp.com/pages/usuarios/logout.php">Cerrar Sesión</a>
              </div>
              <div class="oro"></div>
            </body>
            ';
}
