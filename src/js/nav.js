// Función para cambiar la visibilidad de los navs según el ancho de la pantalla
function toggleNavVisibility() {
    var screenWidth = $(window).width(); // Obtener el ancho de la pantalla

    // Mostrar u ocultar los navs según el ancho de la pantalla
    if (screenWidth >= 768) {
        // Resoluciones grandes (como monitores)
        $("#nav-large").show();
        $("#nav-small").hide();
    } else {
        // Resoluciones pequeñas (como tabletas o celulares)
        $("#nav-large").hide();
        $("#nav-small").show();
    }
}

$(document).ready(function () {
    // Llamar a la función toggleNavVisibility al cargar la página y al cambiar el tamaño de la ventana
    toggleNavVisibility();

    $(window).resize(function () {
        toggleNavVisibility();
    });

    // Agregar un controlador de eventos al hacer clic en la imagen de barras
    $("#nav-desple").click(function () {
        $("#navContenido").toggleClass("d-none"); // Alternar la visibilidad del div
    });

    // Controlar el scroll para agregar/quitar clase 'fixed' a la barra de navegación
    $(window).scroll(function () {
        if ($(window).scrollTop() > 150) {
            $(".nav").addClass("fixed");
        } else {
            $(".nav").removeClass("fixed");
        }
    });
});
