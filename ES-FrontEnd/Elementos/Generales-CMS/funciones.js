//FUNCION PARA AGREGAR CLASE ACTIVE AL ELEMENTO SELECCIONADO DEL NAV
$(".list-sidebar a").click(function() {
    // eliminamos active de todos los elementos
    $(".list-sidebar a").removeClass("bg-primary");
    // activamos el elemento clickeado.
    $(this).addClass("bg-primary");
});

//FUNCION PARA COMPRIMIR EL MENU
$('.navbar-toggler').click(function(){
    $(".sidebar").toggleClass("mostrar");
});

//--AJUSTAR MENU DE ACUERDO AL TAMAÑO DE PANTALLA--
$(window).resize(function(){

    if (window.innerWidth>991){
        $('.sidebar').removeClass('mostrar');
    }

});
