<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/VerificacionCorreo.css') }}">
    <title>Verificación de Código de Correo</title>
</head>
<body>
    <div class="banner">
        <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.22.5/mercadolibre/logo__large_plus.png" alt="Mercado Libre Logo" width="200">
    </div>
    
    <div class="container">
        <div class="verification-container">
            <h3>INICIO DE SESIÓN</h3>
            <h2>Ingresa el código que te enviamos por e-mail</h2>
            <p>Es un código de 6 dígitos enviado a alejandro.iturrios97@gmail.com.</p>
    
            <div class="user-info">
                <img src=" " alt=" ">
                <span>alejandro.iturrios97@gmail.com</span>
                <a href="#">Cambiar cuenta</a>
            </div>
        </div>

        <div class="verification-container2">
            <h2>Ingresa el código</h2>
            <div class="code-inputs">
                <input type="text" maxlength="1" class="code-input" autofocus>
                <input type="text" maxlength="1" class="code-input">
                <input type="text" maxlength="1" class="code-input">
                <input type="text" maxlength="1" class="code-input">
                <input type="text" maxlength="1" class="code-input">
                <input type="text" maxlength="1" class="code-input">
            </div>
            <button class="resend-button">Reenviar código</button>
            <button class="btn" id="confirm-btn" disabled>Confirmar código</button>

            <a class="help-link" href="#">Necesito ayuda</a>
        </div>
    </div>

    <script>
        const inputs = document.querySelectorAll('.code-input');
        const confirmBtn = document.getElementById('confirm-btn');

        inputs.forEach((input, index) => {
            input.addEventListener('input', (e) => {
                if (e.target.value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
                checkCode();
            });
        });

        function checkCode() {
            const code = Array.from(inputs).map(input => input.value).join('');
            confirmBtn.disabled = code.length < 6;
        }
    </script>
</body>
</html>
