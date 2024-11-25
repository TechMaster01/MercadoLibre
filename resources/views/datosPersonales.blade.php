<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/perfil.css')}}">
    <title>Datos personales</title>
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

    <!-- Contenido central -->
    <main>
        <p class="direccion">Mi perfil > Información personal > Datos personales</p>
        <div class="infoSeccion">
            <h2>Datos personales</h2>
            <div id="profile-info">
                <!-- Aquí se renderizarán los datos -->
                <p>Cargando información...</p>
            </div>
        </div>
    </main>
</div>

<script>
    async function fetchProfileData() {
        const profileInfoContainer = document.getElementById('profile-info');
        const userNameElement = document.getElementById('user-name');

        try {
            // Realiza una solicitud GET a la API
            const response = await fetch(' '); // Cambia la URL por la de tu API
            const data = await response.json();

            if (response.ok) {
                // Renderiza los datos en la página
                userNameElement.textContent = data.nombre_completo || 'Usuario';
                profileInfoContainer.innerHTML = `
                    <p>Nombre y apellido: ${data.nombre_completo || 'No especificado'}</p>
                    <p>Correo electrónico: ${data.email || 'No especificado'}</p>
                    <p>Teléfono: ${data.telefono || 'No especificado'}</p>
                    <p>Dirección: ${data.direccion || 'No especificada'}</p>
                `;
            } else {
                profileInfoContainer.innerHTML = `<p>Error: ${data.message || 'No se pudieron cargar los datos.'}</p>`;
            }
        } catch (error) {
            console.error('Error al obtener datos del perfil:', error);
            profileInfoContainer.innerHTML = '<p>Error al conectar con el servidor.</p>';
        }
    }

    // Llama a la función para cargar los datos al cargar la página
    document.addEventListener('DOMContentLoaded', fetchProfileData);
</script>
</body>
</html>
