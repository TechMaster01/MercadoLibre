<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Mercado Libre</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="logo-container">
        <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.22.5/mercadolibre/logo__large_plus.png" alt="Mercado Libre">
    </div>
    <div class="container registro-container">
                <div class="card card-registro">
                    <div class="header-registro">Crea tu cuenta</div>
                    <div class="card-body body-registro">
                        <form id="registroForm">
                            <div class="form-group">
                                <label for="name">Elige tu nombre</label>
                                <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Elige Apellidos</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Ingresa tus apellidos">
                            </div>
                            <div class="form-group">
                                <label for="email">Agrega tu e-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="Ingresa tu email">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Valida tu teléfono</label>
                                <input type="tel" class="form-control" id="telefono" placeholder="Ingresa tu teléfono">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" placeholder="Crea una contraseña">
                            </div>
                            <div class="form-group">
                                <label for="confirm-password">Confirmar contraseña</label>
                                <input type="password" class="form-control" id="confirm-password" placeholder="Confirma tu contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                        </form>
                        <div id="responseMessage" class="text-center mt-3"></div>
                        <div class="text-center mt-3">
                            <a href="#">¿Ya tienes una cuenta? Inicia sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/registro.js') }}"></script>
</body>
</html>