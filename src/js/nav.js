$(window).scroll(function() {
    if ($(window).scrollTop() > 150) {
      $('.nav').addClass('fixed');
    } else {
      $('.nav').removeClass('fixed');
    }
});