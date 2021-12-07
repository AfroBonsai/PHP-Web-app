<?php
include '../header.php';
?>

<div class="container-fluid main d-flex justify-content-center text-center align-items-center bgmain">
  <form class="form group col-lg-12 d-flex justify-content-center align-items-center " action="login.php" method="post" class="generalLogin">
    <div class=" border p-5 border shadow-lg p-5 mb-5 rounded">
    <div>
    <h1 class="fw-bold tex-center py-5">Bienvenidos</h1>
    </div>
    <label for="Email" class="form-label p-1 ">Correo electrónico</label>
    <div>
    <input type="text" class="form-control-sm" aria-label="Email" aria-describedby="basic-addon1" name="email" placeholder="Email">
    </div> 
    <div>
    <label for="password" class="form-label p-1">Password</label>
    </div> 
    <div>
    <input type="password" class="form-control-sm "  name="contrasena" placeholder="contraseña">
    </div> 
    <div class="pt-3">
    <input type="submit" class="btn btn-info btn-sm mt-2 rounded-pill w-75 " value="Login" class="boton" />
    </div>
    </div>
    </div>
</div>
</body>
</html>