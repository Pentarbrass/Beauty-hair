$(document).ready(function(){
    $('.header-slider__wrapper').slick();
});

$('.scrollto a').on('click', function() {

    let href = $(this).attr('href');

    $('html, body').animate({
        scrollTop: $(href).offset().top
    }, {
        duration: 370,   
        easing: "linear"  
    });

    return false;
});

const myCarousel = new Carousel(document.querySelector("#photosCarousel"), {

    slidesPerPage: 1,
    infinite: true,
    center: true,
    fill: true,
    Dots: false,
    initialPage: 1,
    
    
});