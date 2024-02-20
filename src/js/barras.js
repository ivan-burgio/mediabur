const barras = document.querySelectorAll('.barras');
const categorias = document.querySelector('#categorias');

// Agrega evento de clic a los elementos con la clase 'barras'
barras.forEach(barra => {
    barra.addEventListener('click', () => {
        categorias.classList.add('d-flex');
    });
});

// Agrega evento de clic al documento para cerrar el contenedor si se hace clic fuera de él
document.addEventListener('click', (event) => {
    // Verifica si el clic no ocurrió dentro del contenedor
    if (!categorias.contains(event.target) && !event.target.classList.contains('barras')) {
        categorias.classList.remove('d-flex');
    }
});
