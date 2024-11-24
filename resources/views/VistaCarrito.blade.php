<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{ asset('css/StyleCarrito.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
</head>
<body>
    <div class="banner">
        <img src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.22.5/mercadolibre/logo__large_plus.png" alt="Mercado Libre Logo">
    </div>
    
    <div class="container">
        <h2>Carrito de Compras</h2>

        <table class="product-table">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="cartItems">
            </tbody>
        </table>

        <div class="summary" id="summary">
            <h3>Resumen de compra</h3>
            <p id="totalItems">Productos: 0</p>
            <p id="totalPrice">Total: $0.00</p>
            <button class="btn">Finalizar compra</button>
        </div>
    </div>

    <script src="{{ asset('js/Carrito.js') }}"></script>
</body>
</html>
