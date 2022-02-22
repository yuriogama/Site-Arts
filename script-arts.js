$("#to-top").click(function () {
    $('html, body').animate({ scrollTop: 0 }, 50);
})

$(".home .box-banner-carrossel .carrossel").slick({
    dots: true,
    fade: true,
    speed: 1000,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
});