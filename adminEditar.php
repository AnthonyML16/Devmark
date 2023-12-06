<?php 
session_start(); 
if (!$_SESSION['autentificado']) {
    header('location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Outfit Fashion</title>

    <?php require("view/estilos.php"); ?>
</head>

<body>

    <header>
        <div class="nav container">
            <!-- Logo -->
            <a href="index.php" class="logo">
                <img src="img/logo.jpeg" alt="">
            </a>
            <!-- Navbar links -->
            <ul class="navbar">
                <li><a href="admin.php?#productos" class="active">Productos</a></li>
            </ul>
            <!-- Icons -->
            <div class="nav-icons">
                <a href="admin.php" class="user"><i class="bx bxs-user"></i></a>
                <i class="bx bx-menu" id="menu-icon"></i>
            </div>
        </div>
    </header>

    <section id="productos">
        <div class=" container">
            <div class="home-text" style="padding-top: 3rem;">
                <h1>Actualizar Producto</h1>
            </div>
        </div>
        <div class="home-container2 container" style="padding-top: 0rem;">
            <div class="details">
                <div class="listaProductos">
                    <?php
                    require("model/m_productos.php");

                    if (isset($_REQUEST['actualizar'])) {
                        $idp = $_REQUEST['actualizar'];
                        $nom = $_REQUEST['nom'];
                        $des = $_REQUEST['des'];
                        $pre = $_REQUEST['pre'];
                        $sto = $_REQUEST['sto'];
                        $cat = $_REQUEST['cat'];
                        $ent = $_REQUEST['ent'];

                        $rpta = ActualizarProducto($idp, $nom, $des, $pre, $sto, $cat, $ent);
                        if ($rpta == "SI") {
                    ?>
                            <script type="text/javascript">
                                alert("Se actualizó correctamente");
                                location.href = "admin.php"
                            </script>
                    <?php
                        }
                    }

                    $idProducto = $_REQUEST['producto'];

                    $producto = ConsultarProducto($idProducto);

                    foreach ($producto as $key => $value) {
                        $Nombre = $value['Nombre'];
                        $Descripcion = $value['Descripcion'];
                        $Precio = $value['Precio'];
                        $Stock = $value['Stock'];
                        $Categoria = $value['Categoria'];
                        $entrada = $value['entrada'];

                        if ($entrada == "Nuevo") {
                            $e1 = "selected";
                        } else {
                            $e1 = "";
                        }
                        if ($entrada == "Anterior") {
                            $e0 = "selected";
                        } else {
                            $e0 = "";
                        }
                    }
                    ?>

                    <form action="adminEditar.php" method="post">
                        <div>
                            <div class="columna">
                                <input type="text" name="nom" class="form-control" placeholder="Nombre" aria-label="Nombre" value="<?php echo $Nombre ?>" required>
                            </div>
                            <div class="columna">
                                <input type="text" name="des" class="form-control" placeholder="Descripción" aria-label="Descripcion" value="<?php echo $Descripcion ?>" required>
                            </div>
                            <div class="columna">
                                <input type="text" name="pre" class="form-control" placeholder="Precio" aria-label="Precio" value="<?php echo $Precio ?>" required>
                            </div>
                            <div class="columna">
                                <input type="text" name="sto" class="form-control" placeholder="Stock" aria-label="Stock" value="<?php echo $Stock ?>" required>
                            </div>
                            <div class="columna">
                                <input type="text" name="cat" class="form-control" placeholder="Categoría" aria-label="Categoria" value="<?php echo $Categoria ?>" required>
                            </div>
                            <div class="columna">
                                <input type="text" class="form-control" placeholder="Entrada" aria-label="Entrada" value="<?php echo $entrada ?>" required>
                            </div>
                            <div class="columna">
                                <button type="submit" name="actualizar" class="btn btn-primary" value="<?php echo $idProducto; ?>">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require("view/footer.php"); ?>

    <!-- Js -->
    <script src="js/main.js"></script>
</body>

</html>