<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Más vendidos</title>
</head>
<body>
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
        <a href="{{ route('meliplus') }}" class="btnMeliplus">
        <img src="img/meliplusnavbarbtn.jpg" alt="SUSCRÍBETE A MELI+ POR 49.90 PESOS">
        </a>
    </div>

    <!-- Navegación -->
    <div class="nav-bar">
        <a href="#">Categorías</a>
        <a href="#">Ofertas</a>
        <a href="{{ route('favoritos') }}historial">Historial</a>
        <a href="#">Supermercado</a>
        <a href="#">Moda</a>
        <a href="{{ route('mercadoplay') }}">Mercado Play</a>
        <a href="{{ route('publicar') }}">Vender</a>
        <a href="{{ route('ayuda') }}">Ayuda</a>

    <!-- opciones usuario -->
    <div class="opciones-usuarios">
        <a href="{{ route('perfil.usuario') }}">
        <img src="{{ asset('images/user-icon.png') }}" alt="Usuario"> Agustin
        </a>
        <a href="{{ route('miscompras') }}">Mis compras</a>
        <a href="{{ route('favoritos') }}">Favoritos</a>
        <a href="#"><img src="{{ asset('images/cart-icon.png') }}" alt="Carrito"></a>
        </div>
    </div>
</div>

<div class="mas-vendidos">
    <h2>CELULARES Y TELEFONÍA</h2>
    <a href="#" class="ver-mas">Ver más</a>
    <div class="productos">
        <div class="producto">
            <img src="img/audifonos.jpg" alt="Audífonos">
            <span class="etiqueta">1º MÁS VENDIDO</span>
            <div class="precio">
                <span class="precio-antiguo">$298</span>
                <span class="precio-actual">$184.76</span>
                <span class="descuento">38% OFF</span>
            </div>
            <span class="envio">FULL</span>
            <p>Audífonos in-ear inalámbricos 1Hora AUT20</p>
        </div>

        <div class="producto">
            <img src="img/funda.jpg" alt="Funda de celular">
            <span class="etiqueta">2º MÁS VENDIDO</span>
            <div class="precio">
                <span class="precio-antiguo">$266</span>
                <span class="precio-actual">$158.12</span>
                <span class="descuento">41% OFF</span>
            </div>
            <span class="envio">FULL</span>
            <p>Audífono In-ear Bluetooth Oem para iPhone Android</p>
        </div>

        <div class="producto">
            <img src="img/telefono.jpg" alt="telefono">
            <span class="etiqueta">3º MÁS VENDIDO</span>
            <div class="precio">
                <span class="precio-antiguo">$399</span>
                <span class="precio-actual">$155.61</span>
                <span class="descuento">60% OFF</span>
            </div>
            <span class="envio">FULL</span>
            <p>Funda para iPhone con MagSafe Uso Rudo</p>
        </div>

        <div class="producto">
            <img src="img/telefono2.jpg" alt="telefono2">
            <span class="etiqueta">5º MÁS VENDIDO</span>
            <div class="precio">
                <span class="precio-antiguo">$3,452</span>
                <span class="precio-actual">$2,542.62</span>
                <span class="descuento">26% OFF</span>
            </div>
            <span class="envio">FULL</span>
            <p>PocoPhone Poco M5s Dual SIM 256 GB Gris 8 GB RAM</p>
        </div>
    </div>
</div>
</body>
</html>