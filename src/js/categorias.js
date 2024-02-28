$(document).ready(function() {
    const barras = $('.barras');
    const modal = $('#modal');
    const screen = $('.categorias__screen');
    const body = $('body');
    const x = $('.categorias__titulo--icono');
    const categorias = $('.categoria');

    const subcategorias = {
        'Videojuegos': $('#subcategorias-videojuegos'),
        'Plataformas': $('#subcategorias-plataformas'),
        'Tecnologia': $('#subcategorias-tecnologia'),
        'Programación': $('#subcategorias-programacion'),
        'Entretenimiento': $('#subcategorias-entretenimiento')
    };

    // Agrega evento de clic a los elementos con la clase 'barras'
    barras.on('click', function() {
        screen.addClass('d-flex');
        body.addClass('overflow-hidden');
    });

    // Agrega evento de clic al documento para cerrar el contenedor si se hace clic fuera de él
    $(document).on('click', function(event) {
        // Verifica si el clic no ocurrió dentro del contenedor
        if(!modal.is(event.target) && !$(event.target).hasClass('barras') && $(event.target).closest(modal).length === 0) {
            screen.removeClass('d-flex');
            body.removeClass('overflow-hidden');
        }
    });

    // Agrega evento de clic para el icono de cerrar (X)
    x.on('click', function() {
        screen.removeClass('d-flex');
        body.removeClass('overflow-hidden');
    });

    // Agrega evento de clic para las categorías
    categorias.on('click', function() {
        const contenidoCategoria = $(this).text();

        // Oculta todas las subcategorías
        Object.values(subcategorias).forEach(subcategoria => {
            subcategoria.removeClass('d-flex');
        });

        // Muestra la subcategoría correspondiente a la categoría seleccionada
        if (subcategorias.hasOwnProperty(contenidoCategoria)) {
            subcategorias[contenidoCategoria].addClass('d-flex');
        }
    });
});
