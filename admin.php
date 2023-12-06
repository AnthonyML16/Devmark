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
                <h1>Lista de productos</h1>
            </div>
        </div>
        <?php
        require("model/m_productos.php");

        if (isset($_REQUEST['editar'])) {
            $idProducto = $_REQUEST['editar'];
        ?>
            <script type="text/javascript">
                location.href = "adminEditar.php?producto=<?php echo $idProducto; ?>"
            </script>
            <?php
        } else if (isset($_REQUEST['eliminar'])) {
            $idProducto = $_REQUEST['eliminar'];
            $rpta = EliminarProducto($idProducto);
            if ($rpta == "SI") {
            ?>
                <script type="text/javascript">
                    alert("Eliminado correctamente");
                </script>
        <?php
            }
        }
        ?>
        <div class="home-container2 container" style="padding-top: 0rem;">
            <div class="details">
                <div class="listaProductos">
                    <form action="admin.php" method="post">
                        <table>
                            <thead>
                                <tr>
                                    <td>Nombre</td>
                                    <td>Precio</td>
                                    <td>Stock</td>
                                    <td>Categoría</td>
                                    <td>Editar</td>
                                    <td>Eliminar</td>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $productos = ListarProductos();

                                $n = 0;
                                foreach ($productos as $key => $value) {
                                    $n++;
                                    $idProducto = $value['idProducto'];
                                    $Nombre = $value['Nombre'];
                                    $Descripcion = $value['Descripcion'];
                                    $Precio = $value['Precio'];
                                    $Stock = $value['Stock'];
                                    $Categoria = $value['Categoria'];
                                    $entrada = $value['entrada'];
                                ?>
                                    <div class="box">
                                        <tr>
                                            <td><?php echo $Nombre; ?></td>
                                            <td><?php echo "S/. " . $Precio; ?></td>
                                            <td><?php echo $Stock; ?></td>
                                            <td><?php echo $Categoria; ?></td>
                                            <td>
                                                <button name="editar" type="submit" value="<?php echo $idProducto; ?>" class="btn-edit">Editar</button>
                                            </td>
                                            <td>
                                                <button name="eliminar" type="submit" value="<?php echo $idProducto; ?>" class="btn-delete" onclick="return confirm('¿Está seguro de eliminar?');">Eliminar</button>
                                            </td>
                                        </tr>
                                    </div>
                                <?php } ?>
                            </tbody>
                        </table>
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