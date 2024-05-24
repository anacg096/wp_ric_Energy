jQuery(document).ready(function($) {
    // Inicializamos el slider de partners
    var slider_partners = $('.partners__slider').slick({
        // Configuramos el slider de partners
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: false,
        pauseOnHover: true,
        pauseOnFocus: true,
    });

    /* SLIDER DE PARTNERS */
    // Evento de después del cambio de slide
    slider_partners.on('afterChange', function (event, slick, currentSlide) {

        // Eliminar la clase active_partners de todos los elementos del progress__bar
        $('.progressbar__section').removeClass('active_partners');
        // Eliminar la clase opacity_partners de todos los elementos
        $('.arrow__btn').removeClass('opacity_partners');

        if (currentSlide === 3) { // cuando estamos en el 2 slide de 3 partners
            $('#progress_two').addClass('active_partners');
        } else if (currentSlide === 6) {
            $('#progress_three').addClass('active_partners');
            $('#next_partners').addClass('opacity_partners');
        } else {
            $('#progress_one').addClass('active_partners');
            $('#prev_partners').addClass('opacity_partners');
        }
    });

    // Evento de clic en el botón "Anterior" del slide de partners
    $('#prev_partners').on('click', function () {
        slider_partners.slick('slickPrev');
    });

    // Evento de clic en el botón "Siguiente" del slide de partners
    $('#next_partners').on('click', function () {
        slider_partners.slick('slickNext');
    });

    /* SLIDER DE NOTICIAS */
    // Inicializamos el slider de news
    var slider_news = $('.noticias__slider').slick({
        // Configuramos el slider de news
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: false,
        pauseOnHover: true,
        pauseOnFocus: true,
    });

    /* SLIDER DE NOTICIAS */
    // Evento de después del cambio de slide
    slider_news.on('afterChange', function (event, slick, currentSlide) {
        // Eliminar la clase active_news de todos los elementos del progress__bar
        $('.progressbar__bloque').removeClass('active_news');
        // Eliminar la clase opacity_news de todos los elementos
        $('.btn__flecha').removeClass('opacity_news');

        switch (currentSlide) {
            case 1:
                $('#news_two').addClass('active_news');
                break;
            case 2:
                $('#news_three').addClass('active_news');
                break;
            case 3:
                $('#news_four').addClass('active_news');
                break;
            case 4:
                $('#news_five').addClass('active_news');
                break;
            case 5:
                $('#news_six').addClass('active_news');
                $('#next_news').addClass('opacity_news');
                break;
            default:
                $('#news_one').addClass('active_news');
                $('#prev_news').addClass('opacity_news');
        }
    });

    // Evento de clic en el botón "Anterior" del slide de news
    $('#prev_news').on('click', function () {
        slider_news.slick('slickPrev');
    });

    // Evento de clic en el botón "Siguiente" del slide de news
    $('#next_news').on('click', function () {
        slider_news.slick('slickNext');
    });

    //Inicializamos el Animate On Scroll
    // Siempre al final del script
    AOS.init();
});

