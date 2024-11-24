<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dispositivos vinculados</title>
    <link rel="stylesheet" href="{{ asset('css/StyleDesvincularDis.css') }}">
</head>
<body>
    <header class="navbar">
        <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.21.4/mercadolibre/logo__large_plus.png" alt="Mercado Libre Logo">
    </header>
    <div class="container">
        <header>
            <h1>Dispositivos vinculados</h1>
            <p>Hay 2 dispositivos que accedieron a tu cuenta en los últimos 6 meses.</p>
            <p><strong>Si no reconoces algún dispositivo</strong>, te recomendamos desvincularlo para mantener tu cuenta segura.</p>
        </header>
        
        <div class="device-list">
            <div class="device">
                <div class="device-info">
                    <p><strong>Windows 10</strong></p>
                    <p>Edge &bull; Este dispositivo</p>
                </div>
            </div>
            <div class="device">
                <div class="device-info">
                    <p><strong>Samsung Galaxy A54 5G</strong></p>
                    <p>App de Mercado Libre &bull; Hace 12 días</p>
                    <button class="unlink-button">Desvincular</button>
                </div>
            </div>
        </div>

        <footer>
            <button class="unlink-all-button">Desvincular todos los dispositivos</button>
        </footer>
    </div>
    <script src="DesvincularDispositivos.js" defer></script>
</body>
</html>
