<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/ayuda.css')}}">

    <title>Publicar</title>
</head>
<body>
<div class="body-publicar">
<header class="header">
    <div class="logo-container">
        <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.22.5/mercadolibre/logo__large_plus.png" alt="Logo" class="logo">
    </div>
    <nav class="navbar">
        <span class="user-name">Agustín</span>
        <span class="help-link">Ayuda</span>
    </nav>
</header>

<div class="container">
        <h1>¡Hola! Antes que nada cuéntanos, ¿qué vas a publicar?</h1>
        
        <div class="button-container">
            <div class="button-item">
                <img src="img/icono-produtos.png" alt="Productos">
                <span>Productos</span>
            </div>
            <div class="button-item">
                <img src="img/icono-vehiculos.png" alt="Vehículos">
                <span>Vehículos</span>
            </div>
            <div class="button-item">
                <img src="img/icono-inmuebles.png" alt="Inmuebles">
                <span>Inmuebles</span>
            </div>
            <div class="button-item">
                <img src="img/icono-servicios.png" alt="Servicios">
                <span>Servicios</span>
            </div>
        </div>

        <p class="mass-upload">
            Para subir muchos productos, puedes <a href="#">ir al Publicador masivo</a>
        </p>
    </div>
    
</body>
</html>