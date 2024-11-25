document.addEventListener('DOMContentLoaded', () => {
    // URL de la API
    const apiUrl = 'http://127.0.0.1:8000/api/productos';

    // Contenedor de productos
    const productosContainer = document.getElementById('productos');

    // Función para cargar los productos
    const cargarProductos = async () => {
        try {
            const response = await fetch(apiUrl); // Llamada a la API
            const productos = await response.json(); // Convertir a JSON

            // Vaciar el contenedor antes de añadir contenido
            productosContainer.innerHTML = '';

            // Crear los elementos HTML para cada producto
            productos.forEach(producto => {
                const productoHTML = `
                    <div class="producto">
                        <img src="${producto.IMAGEN}" alt="${producto.NOMBRE_PRODUCTO}" class="producto-imagen">
                        <p class="producto-nombre">${producto.NOMBRE_PRODUCTO}</p>
                        <p class="producto-precio">$${producto.PRECIO}</p>
                        ${
                            producto.PRECIO_CON_DESCUENTO
                                ? `<p class="producto-descuento">Precio con descuento: $${producto.PRECIO_CON_DESCUENTO}</p>`
                                : ''
                        }
                        <button class="producto-comprar">Comprar</button>
                    </div>
                `;
                productosContainer.innerHTML += productoHTML; // Añadir al contenedor
            });
        } catch (error) {
            console.error('Error al cargar los productos:', error);
            productosContainer.innerHTML = '<p>Error al cargar los productos.</p>';
        }
    };

    // Llamar a la función para cargar los productos
    cargarProductos();
});
