<?php
include '../header.php';
?>

<div class="main flex">
  <form class="form flexColumn" action="login.php" method="post">
    <h1>Login</h1>
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="contraseña" placeholder="contraseña">
    <input type="submit" value="Login" class="boton" />
  </form>
</div>
</html>