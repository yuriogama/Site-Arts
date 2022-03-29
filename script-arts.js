$("#to-top").click(function () {
    $('html, body').animate({ scrollTop: 0 }, 50);
});

$("#open-mn-mb").click(function(){
    $("#header .menu-mobile").toggleClass("show-menu-mob")
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

$(".home .categoria .rpwe-ul").slick({
    dots: true,
    fade: true,
    speed: 1000,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 1000,
    adaptiveHeight: true,
    slidesToShow: 1,
    slidesToScroll: 1,
});


if($("body").hasClass("contato")){
    $(".form-contato .yourname input").attr("placeholder" , "Nos diga o seu nome ou de sua Empresa")
    $(".form-contato .your-message textarea").attr("placeholder" , "Escreva Sua mensagem")
    $(".form-contato .your-email input").attr("placeholder" , "Digite seu melhor e-mail")

    $("form.wpcf7-form").submit(function(){
        $("form.wpcf7-form p").fadeToggle();
    })
}