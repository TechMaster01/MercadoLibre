<!DOCTYPE html>
<html lang="en">
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>                         
<body>

<!-- header -->
<div class="header">

<div class="header-top">
        <!-- Logo -->
        <div class="header-logo">
            <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.22.5/mercadolibre/logo__large_plus.png" alt="Mercado Libre">
        </div>

        <!-- barra de budsqueda -->
        <div class="search-bar">
            <input type="text" class="form-control" placeholder="Buscar productos, marcas y más...">
        </div>
        <a href="meliPlus.php" class="btnMeliplus">
        <img src="img/meliplusnavbarbtn.jpg" alt="SUSCRÍBETE A MELI+ POR 49.90 PESOS">
        </a>
    </div>

    <!-- Navegación -->
    <div class="nav-bar">
        <a href="#">Categorías</a>
        <a href="#">Ofertas</a>
        <a href="historialNavegacion.php">Historial</a>
        <a href="#">Supermercado</a>
        <a href="#">Moda</a>
        <a href="mercadoPlay.php">Mercado Play</a>
        <a href="publicar.php">Vender</a>
        <a href="ayuda.php">Ayuda</a>

    <!-- opciones usuario -->
    <div class="opciones-usuarios">
        <a href="perfil-de-usuario.php">
        <img src="{{ asset('images/user-icon.png') }}" alt="Usuario"> Agustin
        </a>
        <a href="misCompras.php">Mis compras</a>
        <a href="favoritos.php">Favoritos</a>
        <a href="#"><img src="{{ asset('images/cart-icon.png') }}" alt="Carrito"></a>
        </div>

    </div>
</div>

<div class="historial">
    <h2>Tu historial</h2>

    <div class="contenido-historial">
        <p>Aún no viste publicaciones.</p>
        <p><a href="#">¡Empieza a descubrir todo lo que tenemos para ti!</a></p>
    </div>
</div>

</body>
</html>