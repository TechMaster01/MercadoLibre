<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/ayuda.css') }}">
    <title>Mis datos</title>
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
    <main>
        <h2>Agregar un nuevo domicilio</h2>
        <p>Llena los campos a continuación para agregar un domicilio a tu cuenta:</p>    

        
        <form action="/guardar-domicilio" method="POST" class="mt-4">
            @csrf 

            <input type="hidden" id="id_usuario" name="id_usuario" value="1">   
            <div>
                <label for="nombre_completo">Nombre Completo:</label>
                <input type="text" id="nombre_completo" name="nombre_completo" maxlength="255" required>
            </div>
            <div>
                <label for="codigo_postal">Código Postal:</label>
                <input type="text" id="codigo_postal" name="codigo_postal" maxlength="5" required>
            </div>
            <div>
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" required>
            </div>
            <div>
                <label for="municipio">Municipio:</label>
                <input type="text" id="municipio" name="municipio" required>
            </div>
            <div>
                <label for="colonia">Colonia:</label>
                <input type="text" id="colonia" name="colonia" required>
            </div>
            <div>
                <label for="calle">Calle:</label>
                <input type="text" id="calle" name="calle" required>
            </div>
            <div>
                <label for="numero_exterior">Número Exterior:</label>
                <input type="text" id="numero_exterior" name="numero_exterior" required>
            </div>
            <div>
                <label for="numero_interior">Número Interior:</label>
                <input type="text" id="numero_interior" name="numero_interior" required>
            </div>
            <div>
                <label for="calle_1">Calle 1:</label>
                <input type="text" id="calle_1" name="calle_1" required>
            </div>
            <div>
                <label for="calle_2">Calle 2:</label>
                <input type="text" id="calle_2" name="calle_2" required>
            </div>
            <div>
                <label for="contacto">Contacto:</label>
                <input type="text" id="contacto" name="contacto" maxlength="10" required>
            </div>
            <div>
                <label for="indicaciones">Indicaciones:</label>
                <textarea id="indicaciones" name="indicaciones" maxlength="255" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

        <h3>Direcciones guardadas</h3>
        <div id="lista-direcciones"></div>
    </main>
</div> 

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/Direcciones.js') }}"></script>

</body>
</html>
