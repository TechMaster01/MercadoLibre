<!DOCTYPE html>
<html lang="en">
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>*nombre del producto*</title>
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
    <!-- Navbar espacio (opcional si ya está incluido en el layout) -->

    <!-- Contenedor principal -->
    <div class="row mt-4">
        <!-- Columna izquierda: imágenes y detalles del producto -->
        <div class="col-md-7">
            <!-- Ruta de navegación (breadcrumb) -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Hogar</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cámaras de Seguridad</li>
                </ol>
            </nav>

            <!-- Galería de imágenes -->
            <div class="product-images">
                <div class="main-image mb-3">
                    <img src="/path/to/main-image.jpg" alt="Producto" class="img-fluid">
                </div>
                <div class="thumbnail-images d-flex">
                    <img src="/path/to/image1.jpg" alt="Miniatura 1" class="img-thumbnail me-2">
                    <img src="/path/to/image2.jpg" alt="Miniatura 2" class="img-thumbnail me-2">
                    <img src="/path/to/image3.jpg" alt="Miniatura 3" class="img-thumbnail">
                </div>
            </div>
        </div>

        <!-- Columna derecha: información del producto -->
        <div class="col-md-5">
            <h1 class="product-title">NombreProducto</h1>
            <h2 class="product-price">Precio</h2>
            <p class="text-muted">IVA incluido</p>

            <!-- Opciones del producto -->
            <div class="product-options mb-3">
                <label for="color-select" class="form-label">Color:</label>
                <select id="color-select" class="form-select">
                    <option value="black">Negro</option>
                    <option value="white">Blanco</option>
                </select>
            </div>

            <!-- Stock disponible -->
            <p>Stock disponible: <strong>cantidadStock</strong></p>

            <!-- Botones de compra -->
            <div class="product-buttons mb-3">
                <button class="btn btn-primary btn-lg w-100 mb-2">Comprar ahora</button>
                <button class="btn btn-outline-secondary btn-lg w-100">Agregar al carrito</button>
            </div>

            <!-- Información del vendedor -->
            <div class="seller-info">
                <p>Vendido por: <strong>Nombre del Vendedor</strong></p>
                <p>VentasHechas</p>
                <button class="btn btn-outline-info">Agregar a lista</button>
            </div>
        </div>
    </div>

    <!-- Productos relacionados -->
    <div class="row mt-5">
        <h3 class="mb-3">Productos relacionados</h3>
        <div class="col-md-3">
            <div class="card">
                <img src="/path/to/related-product1.jpg" class="card-img-top" alt="Producto relacionado 1">
                <div class="card-body">
                    <h5 class="card-title">precioRelacionado</h5>
                    <p class="card-text">nombre Relacionado</p>
                </div>
            </div>
        </div>
        <!-- Repite el bloque para más productos -->
    </div>

    <!-- Productos del vendedor -->
    <div class="row mt-5">
        <h3 class="mb-3">Productos del vendedor</h3>
        <div class="col-md-3">
            <div class="card">
                <img src="/path/to/seller-product1.jpg" class="card-img-top" alt="Producto del vendedor 1">
                <div class="card-body">
                    <h5 class="card-title">$821</h5>
                    <p class="card-text">Filtro Purificador</p>
                </div>
            </div>
        </div>
        <!-- Repite el bloque para más productos -->
    </div>
</div>
</body>
</html>