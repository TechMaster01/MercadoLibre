<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Email - Mercado Libre</title>
    <link rel="stylesheet" href="{{ asset('css/StyleCambiarC.css') }}">
</head>
<body>
    <header class="header">
        <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.18.1/mercadolibre/logo__small.png" alt="Mercado Libre Logo" class="logo">
    </header>
    
    <main class="content">
        <div class="email-box">
            <h2>Ingresa tu e-mail</h2>
            <p>Te enviaremos un código de verificación para confirmar que tienes acceso a tu e-mail.</p>
            <input type="email" placeholder="Ingresa tu email" class="email-input">
            <button class="submit-btn" disabled>Continuar</button>
        </div>
    </main>
    <script src="{{ asset('js/IngresarC.js') }}"></script>
</body>
</html>