<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="{{ asset('css/StylePerfil.css') }}">
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

<main class="profile-box">
    <div class="profile-info">
        <div class="profile-image">
            <span class="profile-initials">JI</span>
        </div>
        <div class="profile-details">
            <h2>Jesús Alejandro Iturrios Acuña</h2>
            <p>alejandro.iturrios97@gmail.com</p>
            <small>"Mi perfil" en Mercado Libre es el mismo que en Mercado Pago.</small>
        </div>
    </div>

    <div class="profile-actions">
        <div class="action-box">
            <h3>Tu información</h3>
            <p>Nombre elegido y datos para identificarte.</p>
            <span class="alert-icon">!</span>
        </div>
        <div class="action-box">
            <h3>Datos de tu cuenta</h3>
            <p>Datos que representan la cuenta en Mercado Libre y Mercado Pago.</p>
            <span class="success-icon">✔</span>
        </div>
        <div class="action-box">
            <h3>Seguridad</h3>
            <p>Tienes configuraciones pendientes.</p>
            <span class="alert-icon">!</span>
        </div>
        <div class="action-box">
            <h3>Meli+</h3>
            <p>Suscripción con beneficios en envíos, compras y entretenimiento.</p>
        </div>
        <div class="action-box">
            <h3>Tarjetas</h3>
            <p>Tarjetas guardadas en tu cuenta.</p>
        </div>
        <div class="action-box">
            <h3>Direcciones</h3>
            <p>Direcciones Guardadas en tu cuenta.</p>
        </div>
        <div class="action-box">
            <h3>Privacidad</h3>
            <p>Preferencia y control sobre el uso de tus datos.</p>
        </div>
        <div class="action-box">
            <h3>Comunicaciones</h3>
            <p>Elige que tipo de informacion quieres recibir.</p>
        </div>

    </div>
</main>
    </div>
    <script src="{{ asset('js/Perfil.js') }}"></script>
</body>
</html>
