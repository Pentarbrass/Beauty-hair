$(window).on('load', function(){
    $('.header-slider__wrapper').slick({
        autoplay: true,
        autoplaySpeed: 4000,
    });
    function preloader() {
    $(() => {
        let p = $('.preloader');

        p.css('opacity', 0);

        setInterval(
            () => p.remove(),
            parseInt(p.css('1s')) * 1000
        )
    });
}

preloader();
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