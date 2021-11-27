<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/index.css">
  <title>Document</title>
</head>

<body>
  <div class="Header">
    <?php
    echo '<a class="boton" href="http://localhost/dev/PHP-WEB-APP/pages/cartaPlatos.php">
  <button class="asd" type="button">Carta Platos</button>
  </a>';
    echo '<a class="boton" href="http://localhost/dev/PHP-WEB-APP/pages/login.php">
  <button class="asd" type="button">Login</button>
  </a>';
    echo '<a  class="boton" href="http://localhost/dev/PHP-WEB-APP/pages/perfilUsuario.php">
  <button class="asd" type="button">Perfil</button>
  </a>';
    echo '<a class="boton" href="http://localhost/dev/PHP-WEB-APP/pages/registroUsuario.php">
  <button class="asd" type="button">Registro</button>
  </a>';
    ?>
    </div>
    <div class="oro"></div>
    <div class="asd">
      <?php
     echo '<form action="./pages/perfilUsuario.php" method="post">
        <p>Email: <input type="text" name="Email" /></p>
        <p>Contraseña: <input type="password" name="Contraseña" /></p>
        <p><input type="submit" value="Login"/></p>
        </form>';
      ?>
      </div>


        <?php

        ?>
</body>

</html>