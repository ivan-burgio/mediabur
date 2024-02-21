const barras = document.querySelectorAll('.barras');
const categorias = document.querySelector('#categorias');
const screen = document.querySelector('.categorias__screen');
const body = document.querySelector('body');

// Agrega evento de clic a los elementos con la clase 'barras'
barras.forEach(barra => {
    barra.addEventListener('click', () => {
        screen.classList.add('d-flex');
        body.classList.add('overflow-hidden');
    });
});

// Agrega evento de clic al documento para cerrar el contenedor si se hace clic fuera de él
document.addEventListener('click', (event) => {
    // Verifica si el clic no ocurrió dentro del contenedor
    if (!categorias.contains(event.target) && !event.target.classList.contains('barras')) {
        screen.classList.remove('d-flex');
        body.classList.remove('overflow-hidden');
    }
});
