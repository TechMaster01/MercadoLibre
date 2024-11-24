<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/ayuda.css')}}">
</head>
<body>

<header class="header">
    <div class="logo-container">
        <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.22.5/mercadolibre/logo__large_plus.png" alt="Logo" class="logo">
    </div>
    <nav class="navbar">
        <span class="user-name">Agustín</span>
        <span class="help-link">Ayuda</span>
    </nav>
</header>


<div class="help-container">
    <h2>¿Con qué podemos ayudarte?</h2>
    <div class="search-container">
        <input type="text" placeholder="Buscar en Ayuda" class="search-input">
        <button class="search-button">Buscar</button>
    </div>
    
    <div class="help-section">
        <h3>Compras</h3>
        <div class="help-item">
            <h4>Administrar y cancelar compras</h4>
            <p>Pagar, seguir envíos, modificar o cancelar compras.</p>
        </div>
        <div class="help-item">
            <h4>Devoluciones y reembolsos</h4>
            <p>Devolver un producto o consultar por reintegros de dinero de una compra.</p>
        </div>
        <div class="help-item">
            <h4>Preguntas frecuentes sobre compras</h4>
            <p>Resuelve tus dudas sobre compras aquí.</p>
        </div>
    </div>

    <div class="help-section">
        <h3>Ventas</h3>
        <div class="help-item">
            <h4>Reputación, ventas y envíos</h4>
            <p>Reclamar por tu reputación, consultar por un envío, pago o devolución.</p>
        </div>
        <div class="help-item">
            <h4>Administrar publicaciones</h4>
            <p>Mejorar la calidad, modificar, eliminar o resolver problemas.</p>
        </div>
        <div class="help-item">
            <h4>Preguntas frecuentes sobre ventas</h4>
            <p>Resuelve tus dudas sobre ventas aquí.</p>
        </div>
    </div>

    <div class="help-section">
        <h3>Ayuda sobre tu cuenta</h3>
        <div class="help-item">
            <h4>Configuración de mi cuenta</h4>
            <p>Gestiona la configuración de tu cuenta aquí.</p>
        </div>
        <div class="help-item">
            <h4>Seguridad y acceso a la cuenta</h4>
            <p>Asegura el acceso a tu cuenta aquí.</p>
        </div>
    </div>

    <div class="help-section">
        <h3>Ayuda sobre tu cuenta</h3>
        <div class="help-item">
            <h4>Configuración de mi cuenta</h4>
            <p>Gestiona la configuración de tu cuenta aquí.</p>
        </div>
        <div class="help-item">
            <h4>Seguridad y acceso a la cuenta</h4>
            <p>Asegura el acceso a tu cuenta aquí.</p>
        </div>
    </div>

    <div class="help-footer">
        <h3>¿Necesitas más ayuda?</h3>
        <button class="contact-button">Contáctanos</button>
    </div>
</div>

</body>
</html>