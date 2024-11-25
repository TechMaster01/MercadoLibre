<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/LoginEstilos.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Libre</title>
    <div class="banner">
        <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.22.5/mercadolibre/logo__large_plus.png" alt="Mercado Libre Logo" width="200">
    </div>
</head>
<body>
    <div class="login-container">
        <h2>E‑mail, teléfono o usuario</h2>
        <form id="loginForm">
            <input type="email" id="email" placeholder="Correo electrónico o usuario" required>
            <input type="password" id="password" placeholder="Contraseña" required>
            <a href="http://127.0.0.1:8000/home">
            <button type="submit">Iniciar sesión</button>
            </a>
            <div class="login-container2">
            <a href="http://127.0.0.1:8000/registro">
            <button type="button">Crear cuenta</button>
            </a>
            </div>
            <a href="#">¿Olvidaste tu contraseña?</a>
        </form>
        
        <div id="responseMessage"></div>

        <div class="social-login">
            <button>
                <img src="https://img.icons8.com/color/48/000000/google-logo.png" style="display: block; margin: 0 auto;">
                Iniciar sesión con Google
            </button>
        </div>
    </div>
</body>
<script src="{{ asset('js/Login.js') }}"></script>
</html>
