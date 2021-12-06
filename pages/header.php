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
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="http://localhost:80/dev/PHP-Web-app/styles/index.css">
            <title>Php-Web-App</title>
          </head>

          <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark header" aria-label="Tenth navbar example">
              <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-controls="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-md-center" id="collapse">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="http://localhost:80/dev/PHP-Web-app/pages/user/recuperarContraseña.php">Recuperar Contraseña</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost:80/dev/PHP-Web-app/pages/user/registroUsuario.php">Registro</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
      ';

    } else if ($_SESSION['accesoAdmin'] === 0) {

      echo '
          <!DOCTYPE html>
          <html lang="en">

          <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="http://localhost:80/dev/PHP-Web-app/styles/index.css">
            <title>Document</title>
          </head>

          <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark header" aria-label="Tenth navbar example">
              <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-controls="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-md-center" id="collapse">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="http://localhost:80/dev/PHP-Web-app/pages/user/cartaPlatos.php">Carta</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost:80/dev/PHP-Web-app/pages/usuarios/perfilUsuario.php">Perfil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost:80/dev/PHP-Web-app/pages/usuarios/logout.php">Logout</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            ';
            
    } else {

      echo '
            <!DOCTYPE html>
            <html lang="en">

            <head>
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
              <link rel="stylesheet" href="http://localhost:80/dev/PHP-Web-app/styles/index.css">
              <title>Document</title>
            </head>

            <body>
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark header" aria-label="Tenth navbar example">
              <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-controls="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-md-center" id="collapse">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="http://localhost:80/dev/PHP-Web-app/pages/platos/cartaPlatos.php">Carta</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost:80/dev/PHP-Web-app/pages/usuarios/mostrarUsuarios.php">Usuarios</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost:80/dev/PHP-Web-app/pages/ingredientes/mostrarIngrediente.php">Ingredientes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost:80/dev/PHP-Web-app/pages/usuarios/perfilUsuario.php">Perfil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost:80/dev/PHP-Web-app/pages/usuarios/logout.php">Logout</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
      ';

    }

?>