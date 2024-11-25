<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favoritos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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

<!-- Contenido de la página de Favoritos -->
<div class="container">
    <aside class="sidebar">
        <nav>
            <ul>
                <li>Compras</li>
                <li>Ventas</li>
                <li>Créditos</li>
                <li>Suscripciones</li>
                <li>Bio libre</li>
                <li>Facturación</li>
                <li>Mi perfil</li>
                <li>Configuración</li>
            </ul>
        </nav>
    </aside>

    <main class="favorites-section">
        <div class="favorites-tabs">
            <ul class="nav nav-tabs" id="favoritesTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="favorites-tab" data-bs-toggle="tab" href="#favorites" role="tab" aria-controls="favorites" aria-selected="true">Favoritos</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="lists-tab" data-bs-toggle="tab" href="#lists" role="tab" aria-controls="lists" aria-selected="false">Listas</a>
                </li>
            </ul>

            <div class="tab-content" id="favoritesTabContent">
                <!-- Contenido de Favoritos -->
                <div class="tab-pane fade show active" id="favorites" role="tabpanel" aria-labelledby="favorites-tab">
                    <div id="favorites-container">
                        <p>Cargando favoritos...</p>
                    </div>
                </div>

                <!-- Contenido de Listas -->
                <div class="tab-pane fade" id="lists" role="tabpanel" aria-labelledby="lists-tab">
                    <div class="empty-lists">
                        <span class="list-icon">📋</span>
                        <p>Empieza a crear listas con tus productos favoritos</p>
                        <p>Organiza y agrupa los productos favoritos como prefieras.</p>
                    </div>
                    <button class="btn btn-secondary">Crear nueva lista</button>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    async function fetchFavorites() {
        const favoritesContainer = document.getElementById('favorites-container');

        try {
            // Realiza una solicitud GET a la API
            const response = await fetch(' '); // Cambia esta URL según tu API
            const data = await response.json();

            if (response.ok) {
                if (data.favoritos && data.favoritos.length > 0) {
                    // Renderiza los productos favoritos
                    favoritesContainer.innerHTML = data.favoritos.map(producto => `
                        <div class="favorite-item">
                            <img src="${producto.imagen}" alt="${producto.nombre}" class="favorite-img">
                            <div>
                                <p><strong>${producto.nombre}</strong></p>
                                <p>Precio: ${producto.precio}</p>
                            </div>
                        </div>
                    `).join('');
                } else {
                    favoritesContainer.innerHTML = `
                        <div class="empty-favorites">
                            <span class="heart-icon">❤️</span>
                            <p>No tienes productos favoritos.</p>
                        </div>
                    `;
                }
            } else {
                favoritesContainer.innerHTML = `<p>Error: ${data.message || 'No se pudieron cargar los datos.'}</p>`;
            }
        } catch (error) {
            console.error('Error al obtener los favoritos:', error);
            favoritesContainer.innerHTML = '<p>Error al conectar con el servidor.</p>';
        }
    }

    // Llama a la función al cargar la página
    document.addEventListener('DOMContentLoaded', fetchFavorites);
</script>
</body>
</html>
