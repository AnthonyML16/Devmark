<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Outfit Fashion</title>

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
        <div class="home-container2 container" style="padding-top: 2rem;">
            <div class="details">
                <div class="listaProductos">
                    <div class="home-text" style="padding-top: 1rem;">
                        <h1>Iniciar sesión</h1>
                    </div>
                    <form action="autentificacion.php" method="post">
                        <div>
                            <div class="columna">
                                <input type="text" name="usr" class="form-control" placeholder="Usuario" required>
                            </div>
                            <div class="columna">
                                <input type="text" name="pas" class="form-control" placeholder="Contraseña" required>
                            </div>
                            <div class="columna">
                                <button type="submit" name="ingresar" class="btn btn-primary">Ingresar</button>
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