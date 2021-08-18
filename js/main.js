$(window).on('load', function(){
    $('.header-slider__wrapper').slick({
        autoplay: true,
        autoplaySpeed: 4000,
    });
    
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
