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
  
        <div class="header-logo">
            <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.22.5/mercadolibre/logo__large_plus.png" alt="Mercado Libre">
        </div>

    
        <div class="search-bar">
            <input type="text" class="form-control" placeholder="Buscar productos, marcas y más...">
        </div>
        <a href="{{ route('meliplus') }}" class="btnMeliplus">
        <img src="img/meliplusnavbarbtn.jpg" alt="SUSCRÍBETE A MELI+ POR 49.90 PESOS">
        </a>
    </div>


    <div class="nav-bar">
        <a href="#">Categorías</a>
        <a href="#">Ofertas</a>
        <a href="{{ route('favoritos') }}historial">Historial</a>
        <a href="#">Supermercado</a>
        <a href="#">Moda</a>
        <a href="{{ route('mercadoplay') }}">Mercado Play</a>
        <a href="{{ route('publicar') }}">Vender</a>
        <a href="{{ route('ayuda') }}">Ayuda</a>


        <div class="opciones-usuarios">
            <a href="#">
                <img src="user-icon.png" alt="Usuario"> <span id="user-name">Cargando...</span>
            </a>
            <a href="#">Mis compras</a>
            <a href="#">Favoritos</a>
            <a href="#"><img src="cart-icon.png" alt="Carrito"></a>
        </div>
    </div>
</div>


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
 
                <div class="tab-pane fade show active" id="favorites" role="tabpanel" aria-labelledby="favorites-tab">
                    <div id="favorites-container">
                        <p>Cargando favoritos...</p>
                    </div>
                </div>

           
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
    <script>
    // Función para obtener los favoritos
    async function getFavorites() {
        try {
   
            const response = await fetch('http://127.0.0.1:8000/api/favoritos');
            
            if (!response.ok) {
                throw new Error('Error al obtener los favoritos');
            }

           
            const data = await response.json();

 
            renderFavorites(data);
        } catch (error) {
            console.error('Error:', error);
            document.getElementById('favorites-container').innerHTML = '<p>Error al cargar los favoritos.</p>';
        }
    }

 
    function renderFavorites(data) {
        const favoritesContainer = document.getElementById('favorites-container');
        
        if (data && data.items && data.items.length > 0) {
          
            favoritesContainer.innerHTML = '';

            data.items.forEach(item => {
                const favoriteHTML = `
                    <div class="favorite-item">
                        <img src="${item.thumbnail}" alt="${item.title}" class="favorite-item-image">
                        <div class="favorite-item-details">
                            <h5>${item.title}</h5>
                            <p>Precio: $${item.price}</p>
                            <button class="btn btn-danger" onclick="removeFavorite('${item.id}')">Eliminar</button>
                        </div>
                    </div>
                `;
                favoritesContainer.innerHTML += favoriteHTML;
            });
        } else {
            favoritesContainer.innerHTML = '<p>No tienes productos favoritos.</p>';
        }
    }

    function removeFavorite(itemId) {
        console.log('Eliminar favorito con ID:', itemId);
        alert(`Producto con ID: ${itemId} eliminado de tus favoritos.`);
        getFavorites();
    }


    document.addEventListener('DOMContentLoaded', getFavorites);
</script>

</script>
</body>
</html>
