<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre elegido - Mercado Libre</title>
    <link rel="stylesheet" href="{{ asset('css/StyleCambiarN.css') }}">
    <script src="Menu.js"></script>
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
    
    <main class="content">
        <div class="form-box">
            <h1>¿Cómo quieres que te llamemos?</h1>
            <p>Verán el nombre que elijas todas las personas que interactúen contigo en Mercado Libre y Mercado Pago.</p>
            <p>Solo usaremos el nombre que figura en tu documento de identidad si es necesario por motivos legales.</p>

            <form>
                <div class="input-group">
                    <label for="nombre">Nombre elegido</label>
                    <input type="text" id="nombre" placeholder="Ingresa tu nombre">
                </div>

                <div class="input-group">
                    <label for="apellido">Apellido elegido</label>
                    <input type="text" id="apellido" placeholder="Ingresa tu apellido">
                </div>

                <button type="submit" class="submit-btn">Guardar</button>
            </form>
        </div>
    </main>
    <script src="{{ asset('js/Menu.js') }}"></script>
</body>
</html>