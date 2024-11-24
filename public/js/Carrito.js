const cartData = [
    {
        imagen: " ",
        nombre: "Producto 1",
        precio: 500,
        cantidad: 1
    },
    {
        imagen: " ",
        nombre: "Producto 2",
        precio: 300,
        cantidad: 1
    }
];

const cartItems = document.getElementById('cartItems');
const totalItems = document.getElementById('totalItems');
const totalPrice = document.getElementById('totalPrice');

function renderCart() {
    let total = 0;
    let items = 0;

    cartItems.innerHTML = cartData.map((producto, index) => {
        const subtotal = producto.precio * producto.cantidad;
        total += subtotal;
        items += producto.cantidad;

        return `
            <tr>
                <td><img src="${producto.imagen}" alt="${producto.nombre}" class="product-image"></td>
                <td>${producto.nombre}</td>
                <td>$${producto.precio.toFixed(2)}</td>
                <td>
                    <button class="btn-minus" onclick="updateQuantity(${index}, -1)">-</button>
                    <span class="quantity-display">${producto.cantidad}</span>
                    <button class="btn-plus" onclick="updateQuantity(${index}, 1)">+</button>
                </td>
                <td><button class="btn" onclick="removeItem('${producto.nombre}')">Eliminar</button></td>
            </tr>
        `;
    }).join('');

    totalItems.textContent = `Productos: ${items}`;
    totalPrice.textContent = `Total: $${total.toFixed(2)}`;
}

function updateQuantity(index, change) {
    const producto = cartData[index];
    producto.cantidad = Math.max(1, producto.cantidad + change);
    renderCart();
}

function removeItem(nombre) {
    const index = cartData.findIndex(producto => producto.nombre === nombre);
    if (index > -1) {
        cartData.splice(index, 1);
        renderCart();
    }
}

renderCart();
