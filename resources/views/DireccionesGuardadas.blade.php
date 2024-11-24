<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/StyleDirecciones.css') }}">
    <title>Mis datos</title>
</head>
<body>
    <header class="navbar">
        <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.21.4/mercadolibre/logo__large_plus.png" alt="Mercado Libre Logo">
        <div class="search-bar">
            <input type="text" placeholder="Buscar productos, marcas y más...">
    </header>

    <section class="banner">
        <div class="navbar-links">
            <div class="menu">
                <button class="menu-button" onclick="toggleDropdown()">Categorías</button>
                <div class="dropdown" id="dropdownMenu">
                    <div class=""></div>
                    <a href="#">Vehículos</a>
                    <a href="#">Supermercado</a>
                    <a href="#">Tecnología</a>
                    <a href="#">Electrodomésticos</a>
                    <a href="#">Hogar y Muebles</a>
                    <a href="#">Moda</a>
                    <a href="#">Deportes y Fitness</a>
                    <a href="#">Herramientas</a>
                    <a href="#">Construcción</a>
                    <a href="#">Industrias y Oficinas</a>
                    <a href="#">Accesorios para Vehículos</a>
                    <a href="#">Juegos y Juguetes</a>
                    <a href="#">Bebés</a>
                    <a href="#">Salud y Equipamiento Médico</a>
                    <a href="#">Belleza y Cuidado Personal</a>
                    <a href="#">Inmuebles</a>
                    <a href="#">Compra Internacional</a>
                    <a href="#">Productos Sustentables</a>
                    <a href="#">Más Vendidos</a>
                    <a href="#">Tiendas Oficiales</a>
                    <a href="#">Ver Más Categorias</a>
                </div>
            <a href="#">Ofertas</a>
            <a href="#">Historial</a>
            <a href="#">Supermercado</a>
            <a href="#">Moda</a>
            <a href="#">Mercado Play</a>
            <a href="#">Vender</a>
            <a href="#">Ayuda</a>
        </div>
    </section>
    <div class="container">
        <nav class="sidebar">
            <ul>
                <li>Mi cuenta</li>
                <li>Compras</li>
                <li>Ventas</li>
                <li>Créditos</li>
                <li>Suscripciones</li>
                <li>Mi perfil</li>
                <li>Configuración</li>
            </ul>
        </nav>

        <main class="main-content">
            <h1>Direcciones</h1>
            <div class="address-box">
                <div class="address-info">
                    <p><strong>Calle Domingo Rubí SN 0</strong></p>
                    <p>Código postal 80378 - Sinaloa - Navolato</p>
                    <p>Jesús Alejandro Iturrios Acuña - 6671457258</p>
                </div>
                
                <div class="address-actions">
                    <a href="#">Editar datos y horarios del lugar</a>
                </div>
            </div>

            <div class="add-address">
                <a href="#">Agregar dirección</a>
            </div>
            
        </main>
    </div>
    <script src="{{ asset('js/Menu.js') }}"></script>
</body>
</html>
