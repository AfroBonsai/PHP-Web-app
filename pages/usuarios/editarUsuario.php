<?php
    
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }

    echo '
        <div class="main d-flex justify-content-center text-center align-items-center bgmain">
            <form class="shadow-lg p-3 mb-5 border  rounded" action="editar.php" method="post">
            <h1  class="p-3">Editar ' . ($_GET["nombre"]) . '</h1>
        ';
    $id=($_GET["id"]);
    $nombre=($_GET["nombre"]);
    $email=($_GET["email"]);
    $accesoAdmin=($_GET["accesoAdmin"]);


?>
        <div >
        <label for="nombre">Nombre</label>
        </div>
        <div class="p-3">
        <input type="text" class="rounded" name="nombre" value="<?php echo $nombre;?>" pattern="^[A-Za-z]{3,16}$" title="Min. 3 caracteres y solo admite letras" required/>
        </div>
        <div>
        <label for="email">Email</label>
        </div>
        <div class="p-3">
        <input type="email" name="email" class="rounded" value="<?php echo $email;?>" required/>
        </div>
        <div>
        <label for="accesoAdmin">Admin</label>
        </div>
        <div>
        <select name="accesoAdmin">
            <option value="0">Usuario</option>
            <option value="1">Admin</option>  
        </select>
        </div>
        <div class="p-5">
        <input type="hidden" name="id" value="<?php echo $id;?>" />
        <input type="submit" value="Editar" class="btn-primary btn-sm rounded-pill w-15" />
        <a class="btn-info btn-sm rounded-pill w-15" href="./mostrarUsuarios.php">Atras</a>
        </div>
    </form>
</div>