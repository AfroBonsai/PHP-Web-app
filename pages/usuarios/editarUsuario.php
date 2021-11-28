<?php
    
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
            header('Location: ../../index.php');    
        }

    echo '
        <div class="main flexColumn">
            <form class="form flexColumn" action="editar.php" method="post">
            <h1>Editar ' . ($_GET["nombre"]) . '</h1>
        ';
    $id=($_GET["id"]);
    $nombre=($_GET["nombre"]);
    $email=($_GET["email"]);
    $accesoAdmin=($_GET["accesoAdmin"]);


?>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?php echo $nombre;?>" pattern="^[A-Za-z]{3,16}$" title="Min. 3 caracteres y solo admite letras" required/>
        <label for="email">Email</label>
        <input type="email" name="email" value="<?php echo $email;?>" required/>
        <label for="accesoAdmin">Admin</label>
        <select name="accesoAdmin">
            <option value="0">Usuario</option>
            <option value="1">Admin</option>  
        </select>
        <input type="hidden" name="id" value="<?php echo $id;?>" />
        <input type="submit" value="Editar" class="boton" />
        <a class="boton flex" href="./mostrarUsuarios.php">Atras</a>
    </form>
</div>