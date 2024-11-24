let currentIndex = 0;

function moveCarousel(direction) {
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;

    // Ajusta el índice actual con el valor de la dirección
    currentIndex += direction;

    // Reinicia el índice si se pasa del total de elementos
    if (currentIndex < 0) {
        currentIndex = totalItems - 1;
    } else if (currentIndex >= totalItems) {
        currentIndex = 0;
    }

    // Desplazamiento del carrusel
    const offset = -currentIndex * 100;
    document.querySelector('.carousel-container').style.transform = `translateX(${offset}%)`;
}

// Mueve el carrusel automáticamente cada 3 segundos
setInterval(() => {
    moveCarousel(1);
}, 3000);
