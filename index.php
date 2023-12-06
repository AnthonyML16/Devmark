<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outfit Fashion</title>

    <?php require("view/estilos.php"); ?>
</head>

<body>
    <!-- Navbar -->
    <?php require("view/navbar.php"); ?>

    <!-- Inicio -->
    <section class="home" id="inicio">
        <div class="home-container container">
            <div class="home-text">
                <h1>Estilo en cada detalle <br> moda en cada prenda</h1>
                <p>Moda que refleja tu personalidad, <br> en cada prenda, en cada momento.</p>
                <a href="#productos" class="btn">Ver productos</a>
            </div>
            <div class="home-img">
                <img src="img/logo.jpeg" alt="logo Outfit Fashion">
            </div>
        </div>
    </section>


    <!-- Nuevos -->
    <section class="new" id="nuevos">
        <div class="heading">
            <h1>Nuevos <span>Ingresos</span></h1>
        </div>
        <div class="shop-container container">
            <?php
            require("model/m_productos.php");

            $productosNuevos = ListarProductosNuevos();

            $n = 0;
            foreach ($productosNuevos as $key => $value) {
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
                    <img src="img/new1.png" alt="">
                    <h2><?php echo $Nombre; ?></h2>
                    <span><?php echo "S/. " . $Precio; ?></span>
                    <a href="#"><i class='bx bx-info-square'></i></a>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- Productos -->
    <section class="shop" id="productos">
        <div class="heading">
            <h1><span>Shop</span> Now</h1>
        </div>
        <div class="shop-container container">
        <?php
            /* require("model/m_productos.php"); */

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
                    <img src="img/new1.png" alt="">
                    <h2><?php echo $Nombre; ?></h2>
                    <span><?php echo "S/. " . $Precio; ?></span>
                    <a href="#"><i class="bx bx-cart-alt"></i></a>
                </div>
            <?php } ?>
        </div>
    </section>


    <!-- Suscribirse -->
    <section class="newsletter container">
        <div class="heading">
            <h1>Suscribete a nuestro boletín</h1>
        </div>
        <form action="">
            <input type="email" name="" id="" placeholder="Ingresa tu correo" class="email-box" required>
            <input type="submit" value="Suscribete" class="btn">
        </form>
    </section>

    <!-- Footer -->
    <?php require("view/footer.php"); ?>

    <!-- Js -->
    <script src="js/main.js"></script>
</body>

</html>