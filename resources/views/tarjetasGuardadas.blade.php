<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/perfil.css')}}">
    <title>Tarjetas</title>
</head>
<body>
<div class="header">
    <div class="header-top">
        <!-- Logo -->
        <div class="header-logo">
            <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.22.5/mercadolibre/logo__large_plus.png" alt="Mercado Libre">
        </div>

        <!-- Barra de búsqueda -->
        <div class="search-bar">
            <input type="text" class="form-control" placeholder="Buscar productos, marcas y más...">
        </div>
    </div>

    <!-- Navegación -->
    <div class="nav-bar">
        <a href="#">Categorías</a>
        <a href="#">Ofertas</a>
        <a href="#">Historial</a>
        <a href="#">Supermercado</a>
        <a href="#">Moda</a>
        <a href="#">Mercado Play</a>
        <a href="#">Vender</a>
        <a href="#">Ayuda</a>

    <!-- opciones usuario -->
    <div class="opciones-usuarios">
        <a href="#">
        <img src="{{ asset('images/user-icon.png') }}" alt="Usuario"> Agustin
        </a>
        <a href="#">Mis compras</a>
        <a href="#">Favoritos</a>
        <a href="#"><img src="{{ asset('images/cart-icon.png') }}" alt="Carrito"></a>
        </div>

    </div>
</div>

<div class="container-fluid">
    <!-- Menú lateral -->

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
            <li>Facturación</li>
            <li>Mi perfil</li>
            <li class="dropdown">Configuración
                <ul class="submenu">
                    <li>Mis marcas</li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Contenido central -->
    <main>
        
            
            <div Class="infoSeccion">
            </div>
            
        <div class="profile-options">
        <h2 Style="font-size: 17px; font-weight: bold;">Tarjetas</h2>

            
            <div class="profile-option">
                <p>Aquí va una tarjeta guardada</p>               
            </div>
        </div>
    </main>
</div>
<script src="{{ asset('js/app.js')}}"></script>
</body>
</html>