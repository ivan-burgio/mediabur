$(document).ready(function() {
    const globo = $('.globo');
    const pincho = $('.globo__pincho');
    const x = $('.globo__pincho-x');

    globo.on('click', function(event) {
        pincho.toggleClass('d-flex');
    });

    pincho.on('click', function(event) {
        event.stopPropagation();
    });

    x.on('click', function(event) {
        pincho.removeClass('d-flex');
    });
});