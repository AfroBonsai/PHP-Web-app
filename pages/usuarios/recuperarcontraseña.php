<?php
include '../header.php';
?>

<div class="main flex d-flex justify-content-center text-center align-items-center bgmain">
  <form class="form flexColumn border shadow-lg p-5 mb-5 rounded p-5 " action="recuperar.php" method="post">
    <h1 class="p-5">Login</h1>
    <input class="form-control-sm" type="text" name="email" placeholder="email">
    <input type="submit" value="Recuperar" class="btn btn-primary btn-sm  flex peq rounded" />
  </form>
</div>
</html>