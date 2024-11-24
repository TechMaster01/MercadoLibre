<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Libre México</title>
    <link rel="stylesheet" href="{{ asset('css/StyleHome.css') }}">
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
    
    <section class="carousel">
        <div class="carousel-container">
            <div class="carousel-item">
                <img src=" " alt="Oferta 1">
            </div>
            <div class="carousel-item">
                <img src=" " alt="Oferta 2">
            </div>
            <div class="carousel-item">
                <img src=" " alt="Oferta 3">
            </div>
            <div class="carousel-item">
                <img src=" " alt="Oferta 4">
            </div>
            <div class="carousel-item">
                <img src=" " alt="Oferta 5">
            </div>
        </div>
        <button class="carousel-button prev" onclick="moveCarousel(-1)">&#10094;</button>
        <button class="carousel-button next" onclick="moveCarousel(1)">&#10095;</button>
    </section>
    
    <section class="quick-links">
        <div class="link">
            <img src="https://http2.mlstatic.com/frontend-assets/homes-palpatine/dynamic-access-desktop/new-buyer.svg" alt="Envío gratis">
            <p>Envío gratis</p>
        </div>
        <div class="link">
            <img src="https://http2.mlstatic.com/frontend-assets/homes-palpatine/dynamic-access-desktop/registration-da.svg" alt="Ingresa a tu cuenta">
            <p>Ingresa a tu cuenta</p>
        </div>
        <div class="link">
            <img src="https://http2.mlstatic.com/frontend-assets/homes-palpatine/dynamic-access-desktop/location.svg" alt="Ubicación">
            <p>Ingresa tu ubicación</p>
        </div>
        <div class="link">
            <img src="https://http2.mlstatic.com/frontend-assets/homes-palpatine/dynamic-access-desktop/low-price-product.svg" alt="Menos de $500">
            <p>Menos de $500</p>
        </div>
        <div class="link">
            <img src="https://http2.mlstatic.com/frontend-assets/homes-palpatine/dynamic-access-desktop/top-sale.svg" alt="Más vendidos">
            <p>Más vendidos</p>
        </div>
        <div class="link">
            <img src="https://http2.mlstatic.com/frontend-assets/homes-palpatine/dynamic-access-desktop/buy-protected.svg" alt="Compra protegida">
            <p>Compra protegida</p>
        </div>
    </section>

     <!-- Footer -->
     <footer class="footer">
        <div class="features">
            <div class="feature">
                <img src="https://http2.mlstatic.com/storage/homes-korriban/assets/images/ecosystem/payment.svg" alt="Icono de Pago">
                <h3>Elige cómo pagar</h3>
                <p>Puedes pagar con tarjeta, débito, efectivo o con Meses sin Tarjeta.</p>
                <a href="#">Cómo pagar con Mercado Pago</a>
            </div>
            <div class="feature">
                <img src="https://http2.mlstatic.com/storage/homes-korriban/assets/images/ecosystem/shipping.svg" alt="Icono de Envío Gratis">
                <h3>Envío gratis por ser tu primera compra</h3>
                <p>Aprovecha este beneficio en millones de productos.</p>
            </div>
            <div class="feature">
                <img src="https://http2.mlstatic.com/storage/homes-korriban/assets/images/ecosystem/protected.svg" alt="Icono de Seguridad">
                <h3>Seguridad, de principio a fin</h3>
                <p>¿No te gusta? ¡Devuélvelo! En Mercado Libre, siempre estás protegido.</p>
                <a href="#">Cómo te protegemos</a>
            </div>
        </div>


        <div class="popular-products">
            <h3>Productos más buscados</h3>
            <a href="#">Aire Acondicionado</a> - 
            <a href="#">Airpods</a> - 
            <a href="#">Apple Tv</a> - 
            <a href="#">Bicicleta</a> - 
            <a href="#">Computadora</a> - 
            <a href="#">Estufa</a> - 
            <a href="#">Impresora</a> - 
            <a href="#">Iphone 12</a> - 
            <a href="#">Playstation 5</a> - 
            <a href="#">Nintendo Switch</a> - 
            <a href="#">Samsung Galaxy</a> - 
            <a href="#">Xbox Series X</a>
        </div>

        
        <div class="links">
            <a href="#">Trabaja con nosotros</a>
            <a href="#">Términos y condiciones</a>
            <a href="#">Promociones</a>
            <a href="#">Accesibilidad</a>
            <a href="#">Ayuda</a>
            <a href="#">Hot Sale</a>
            <a href="#">Programa de Afiliados</a>
        </div>
    </footer>
    <script src="{{ asset('js/Menu.js') }}"></script>
    <script src="{{ asset('js/CarruselHome.js') }}"></script>
</body>
</html>