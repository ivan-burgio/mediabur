$(document).ready(function() {
    var barras = $('.barras');
    var categorias = $('#categorias');
    var screen = $('.categorias__screen');
    var body = $('body');

    // Agrega evento de clic a los elementos con la clase 'barras'
    barras.on('click', function() {
        screen.addClass('d-flex');
        body.addClass('overflow-hidden');
    });

    // Agrega evento de clic al documento para cerrar el contenedor si se hace clic fuera de él
    $(document).on('click', function(event) {
        // Verifica si el clic no ocurrió dentro del contenedor
        if ((!categorias.is(event.target) && !$(event.target).hasClass('barras')) || $(event.target).hasClass('categorias__titulo--icono')) {
            screen.removeClass('d-flex');
            body.removeClass('overflow-hidden');
        }
    });
});
