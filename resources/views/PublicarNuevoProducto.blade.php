<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/ayuda.css')}}">

    <title>Publicar</title>
</head>
<body>



<header class="header">
    <div class="logo-container">
        <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.22.5/mercadolibre/logo__large_plus.png" alt="Logo" class="logo">
    </div>
    <nav class="navbar">
        <span class="user-name">usuario</span>
        <span class="help-link">Ayuda</span>
    </nav>
</header>



<main class="main-container">
        <section class="form-header">
            <h1>Completa los datos del producto</h1>
        </section>

        <section class="form-container">
            <h3>Características principales</h3>
            <p>Completa estos datos con las especificaciones del fabricante.</p>

            <div class="info-box">
                <span>ℹ</span>
                <p>Puedes usar la caja o el envase del producto para consultar la información.</p>
            </div>

            <form>
                <!-- Grupo Marca -->
                <div class="form-group">
                    <label for="marca">Marca <span class="required">(requerido)</span></label>
                    <input type="text" id="marca" placeholder="Ejemplo: Nike">
                </div>

                <!-- Grupo Línea -->
                <div class="form-group">
                    <label for="linea">Línea</label>
                    <input type="text" id="linea" placeholder="Ejemplo: Air Max">
                    <div class="form-group-inline">
                        <input type="checkbox" id="no-aplica-linea">
                        <label for="no-aplica-linea">No aplica</label>
                    </div>
                </div>

                <!-- Grupo Nombre -->
                <div class="form-group">
                    <label for="nombre">Nombre <span class="required">(requerido)</span></label>
                    <input type="text" id="nombre" placeholder="Ejemplo: Producto A">
                </div>

                <!-- Grupo Es Kit -->
                <div class="form-group">
                    <label>¿Es kit?</label>
                    <div class="form-group-inline">
                        <label><input type="radio" name="es-kit" value="sí"> Sí</label>
                        <label><input type="radio" name="es-kit" value="no"> No</label>
                        <label><input type="radio" name="es-kit" value="no-aplica"> No aplica</label>
                    </div>
                </div>

                <!-- Grupo Tipo -->
                <div class="form-group">
                    <label for="tipo">Tipo</label>
                    <select id="tipo">
                        <option value="" disabled selected>Elegir</option>
                        <option value="tipo1">Tipo 1</option>
                        <option value="tipo2">Tipo 2</option>
                    </select>
                    <div class="form-group-inline">
                        <input type="checkbox" id="no-aplica-tipo">
                        <label for="no-aplica-tipo">No aplica</label>
                    </div>
                </div>

                <!-- Botones -->
                <div class="form-actions">
                    <button type="button" class="cancel-btn">Cancelar</button>
                    <button type="submit" class="submit-btn">Confirmar</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>