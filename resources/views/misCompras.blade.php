<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis compras</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
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

    <!-- menu de "mi cuenta" (solo para la vista, falta pulir) -->
    <div class="container">
        <nav class="sidebar">
        <h2 class="sidebar-nombre">Mi cuenta</h2>
        <ul>
            <li class="dropdown">Compras
                <ul class="submenu">
                    <li>Compras</li>
                    <li>Preguntas</li>
                    <li>Opiniones</li>
                    <li>Favoritos</li>
                    <li>Búsquedas guardadas</li>
                </ul>
            </li>
            <li class="dropdown">Ventas
                <ul class="submenu">
                    <li>Resumen</li>
                    <li>Novedades</li>
                    <li>Publicaciones</li>
                    <li>Publicidad</li>
                    <li>Mi página</li>
                    <li>Preguntas</li>
                    <li>Ventas</li>
                    <li>Métricas</li>
                    <li>Reputación</li>
                    <li>Preferencias de ventas</li>
                    <li>Centro de vendedores</li>
                    <li>Vehículos e inmuebles</li>
                </ul>
            </li>
            <li>Créditos</li>
            <li>Suscripciones</li>
            <li>Bio libre</li>
            <li>Facturación</li>
            <li>Mi perfil</li>
            <li class="dropdown">Configuración
                <ul class="submenu">
                    <li>Mis marcas</li>
                </ul>
            </li>
        </ul>
    </nav>

        <main class="purchases-section">
        <h2>Compras</h2>
    <div class="purchase-container">
        <!-- compras vacías (por ahora solo para el diseño) -->
        <div class="empty-purchases">
            <img src="" alt="Sin compras">
            <p>Aún no has realizado ninguna compra</p>
            <p>Explora nuestros productos y encuentra lo que necesitas</p>
            <button class="btn btn-explorar">Explorar productos</button>
        </div>
        
        
    </div>
        </main>
        
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>