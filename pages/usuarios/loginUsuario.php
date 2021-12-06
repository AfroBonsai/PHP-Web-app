<?php
include '../header.php';
?>

<div class="container-fluid main d-flex justify-content-center text-center align-items-center">
  <form class="form group col-lg-12 d-flex justify-content-center align-items-center" action="login.php" method="post" class="generalLogin">
    <div class=" border bgmain p-5 rounded">
    <div>
    <h1 class="fw-bold tex-center py-5">Bienvenidos</h1>
    </div>
    <label for="Email" class="form-label">Correo electrónico</label> 
    <input type="text" class="form-control-sm" aria-label="Email" aria-describedby="basic-addon1" name="email" placeholder="Email">
    <label for="password" class="form-label">Password</label> 
    <input type="password" class="form-control-sm "  name="contraseña" placeholder="contraseña">
    <div>
    <input type="submit" class="btn btn-info btn-sm mt-2 rounded-pill" value="Login" class="boton" />
    </div>
    </div>
    </div>
    </div>
</div>
</body>
</html>