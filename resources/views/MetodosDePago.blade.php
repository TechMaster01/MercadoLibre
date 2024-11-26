<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{ asset('css/StyleMetodosDePago.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elige cómo pagar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
    <div class="banner">
        <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.22.5/mercadolibre/logo__large_plus.png" alt="Mercado Libre Logo">
    </div>

    
    <div class="container mt-5 pt-5">
        <h2 class="mb-4">Elige cómo pagar</h2>
        <form>
            
            <div class="form-group">
                <div class="custom-control custom-radio mb-3">
                    <input type="radio" id="opcionOxxo" name="metodoPago" class="custom-control-input">
                    <label class="custom-control-label" for="opcionOxxo">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/1/16/Oxxo_logo.svg" alt="Oxxo" width="50"> OXXO
                    </label>
                </div>
                <div class="custom-control custom-radio mb-3">
                    <input type="radio" id="opcionCredito" name="metodoPago" class="custom-control-input">
                    <label class="custom-control-label" for="opcionCredito">Nueva tarjeta de crédito</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                    <input type="radio" id="opcionDebito" name="metodoPago" class="custom-control-input">
                    <label class="custom-control-label" for="opcionDebito">Nueva tarjeta de débito</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                    <input type="radio" id="opcionSPEI" name="metodoPago" class="custom-control-input">
                    <label class="custom-control-label" for="opcionSPEI">Transferencia SPEI</label>
                </div>
                <div class="custom-control custom-radio mb-3">
                    <input type="radio" id="opcionEfectivo" name="metodoPago" class="custom-control-input">
                    <label class="custom-control-label" for="opcionEfectivo">Efectivo en puntos de pago</label>
                </div>
            </div>

           
            <div class="resumen-compra">
                <h4>Resumen de compra</h4>

            </div>

            <button type="submit" class="btn btn-primary btn-block mt-4">Continuar</button>
        </form>
    </div>
</body>
</html>
