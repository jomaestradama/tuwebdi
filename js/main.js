$(document).ready(function(){
    $('.slider').slick({
        dots: false,
        arrows:false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
      });

    var x=$(".boton-cerrar");
    $( ".boton-cerrar" ).click(function() {
        $(".formulario").removeClass("show");
        $(".formulario").addClass("hiden");
        $(".boton-email").removeClass("hiden");
        $(".boton-email").addClass("show");
    });
    
    $(".boton-email").click(function(){
        $(".formulario").removeClass("hiden");
        $(".formulario").addClass("show");
        $(".boton-email").removeClass("show");
        $(".boton-email").addClass("hiden");
    });

});