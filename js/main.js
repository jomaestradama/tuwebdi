$(document).ready(function(){
    $('.slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
      });

    var x=$("#inputBusqueda");
    $( "#cerrarb" ).click(function() {
           $("#inputBusqueda").removeClass("aparece");
        $("#inputBusqueda").addClass("desaparece");
        
     
       
       
        
       $("#inpute").html("<input type='text' value=''> ");
    });
    
    $("#sea").click(function(){
        $("#inputBusqueda").removeClass("init");
            $("#inputBusqueda").removeClass("desaparece");
           $("#inputBusqueda").addClass("aparece");
        $("#inpute").html("<input type='text' value=''> ");
    });

});