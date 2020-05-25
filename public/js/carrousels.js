$(function () {
    // ----- CARROUSEL ACCUEIL ----- //

    $('.carrousel-accueil').slick({
        autoplay: true,
        arrows: true,
        dots: false,
        prevArrow: '<a href="" class="slick-arrow prev-arrow"><i class="fas fa-chevron-left"></i></a>',
        nextArrow: '<a href="" class="slick-arrow next-arrow"><i class="fas fa-chevron-right"></i></i></a>',
        slidesToShow: 3,
        infinity: true,
    });


    // ----- CARROUSEL DÉTAILS VINYLE ----- //

    // Code inspiré de Keith Petrillo
    // Lien: https://jsfiddle.net/keithpetrillo/6j7fzwek/

    $('.carrousel-vinyle').slick({
        slidesToShow: 1,
        accessibility: false,
        arrows: true,
        fade: true,
        slidesToScroll: 0,
        asNavFor: '.carrousel-vignettes',
    });

    $('.carrousel-vignettes').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.carrousel-vinyle',
        dots: true,
        focusOnSelect: true,
    });

    // Remove active class from all thumbnail slides
    $('.carrousel-vignettes .slick-slide').removeClass('vignette-active');

    // Set active class to first thumbnail slides
    $('.carrousel-vignettes .slick-slide').eq(0).addClass('vignette-active');

    // On before slide change match active thumbnail to current slide
    $('.carrousel-vinyle').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        var numVignette = nextSlide;
        $('.carrousel-vignettes .slick-slide').removeClass('vignette-active');
        $('.carrousel-vignettes .slick-slide').eq(numVignette).addClass('vignette-active');
    });

});