
document.querySelectorAll('.dropdown').forEach(item => {
    item.addEventListener('click', function(event) {
      event.preventDefault(); // Evita que el enlace recargue la página
      
      // Alterna la clase 'active' en el dropdown para mostrar/ocultar el submenú
      this.classList.toggle('active');

      // Selecciona el submenú dentro del dropdown
      const submenu = this.querySelector('.submenu');
      
      // Si el submenú está oculto, lo mostramos; si está visible, lo ocultamos
      if (submenu.style.display === "none" || submenu.style.display === "") {
        submenu.style.display = "block";
      } else {
        submenu.style.display = "none";
      }
    });
});