<!DOCTYPE html>
<html lang="es">
<head>
  
<!--TITULO DE LA VISTA -->
<title>Nosotros - Eagles Safety eirl</title>

<!-- CONTENIDO GENERAL DEL HEAD -->
<?php include_once "ES-FrontEnd/Elementos/Generales-Web/head.php";?>
    
</head>

<body>

<?php include_once "ES-FrontEnd/Elementos/Generales-Web/barraNavegacion.php";?>
 
<!--=====================================
        ENCABEZADO     
======================================-->   
<div class="container-fluid" style="height: 350px; background: url('ES-FrontEnd/Elementos/Imagenes/Nosotros/Encabezado.jpg') no-repeat center; background-size: cover;">

   <div class="container">
        <br><br><br>
       <div class="text-white display-4 font-weight-bold pt-5 wow fadeIn" style="font-size:300%; font-family: 'Bungee', cursive;">NOSOTROS</div>
       <a class="btn green btn-sm wow fadeInLeft" href="Contactos.php">Contáctanos</a>
   </div>

</div>    
<!--=====================================
        QUIENES SOMOS    
======================================-->
<section id="quienesSomos">
<div class="container text-center wow fadeIn">
   
    <h1 class="font-weight-bold my-4 pt-5 ">¿QUIÉNES SOMOS?</h1>
    <p class="grey-text lead">Somos una empresa importadora, comercializadora y exportadora de equipos de proteccion personal (epp's) enfocada en brindar un buen nivel de servicio. Nuestros productos aseguran calidad, seguridad y confiabilidad. Todo lo que el cliente necesita para llegar seguro a casa.</p>

</div>    
</section>
     
<!--=====================================
        MARCAS    
======================================-->
<section class="marcas pb-5 wow fadeIn">      
<div class="container py-5">

<!--DESCRIPCION -->
<h3 class="h5-responsive font-weight-bold px-4 pb-5 grey-text text-center wow fadeIn">Calidad y seguridad garantizada en cada una de nuestras marcas.</h3>

<!--CAROUSEL DE MARCAS -->
<div class="container text-center d-none d-sm-flex">
<div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
    
    <!--MARCAS -->
    <div id="MARCAS" class="carousel-inner w-100" role="listbox"></div>
    
    <!--CONTROLADOR -->
    <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>
</div>

<div class="container text-center d-flex d-sm-none">
<div id="recipeCarousel2" class="carousel slide w-100" data-ride="carousel">
    
    <!--MARCAS -->
    <div id="MARCASCEL" class="carousel-inner w-100" role="listbox"></div>
    
    <!--CONTROLADOR -->
    <a class="carousel-control-prev" href="#recipeCarousel2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#recipeCarousel2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>
</div>

</div>       
</section> 
       
<!--=====================================
        MISION     
======================================-->
<section id="mision" class="py-5">
<div class="container py-5 wow fadeInLeft">
<div class="row">
    <div class="col-12 col-sm-6">
        <h1 class="white-text font-weight-bold my-4">MISIÓN</h1>
        <p class="grey-text lead">Nuestra misión es proveer equipos de protección personal epp's de calidad que cumplan con los requerimientos de los clientes y brinden un desenvolvimiento seguro de cada usuario en todos los sectores productivos del Perú.</p>
    </div>
    <div class="col-12 col-sm-6 text-center my-auto">
        <img id="imgMision" class="figure-img img-fluid" src="ES-FrontEnd/Elementos/Imagenes/Nosotros/FondoNosotros2.png" style="width:160px;">
    </div>
</div>
</div>    
</section>

<!--=====================================
        VISION     
======================================-->
<section id="vision" class="py-5">
<div class="container py-5 wow fadeInRight">
<div class="row">
    <div class="col-12 col-sm-6 text-center my-auto">
        <img id="imgVision" class="figure-img img-fluid" src="ES-FrontEnd/Elementos/Imagenes/Nosotros/FondoNosotros2.png" style="width:160px;">
    </div>
    <div class="col-12 col-sm-6">
        <h1 class="white-text font-weight-bold my-4">VISIÓN</h1>
        <p class="white-text lead">Convertirnos en una empresa reconocida en su sector por brindar una atención de calidad a sus clientes.</p>
    </div>
</div>
</div>    
</section>

<!--=====================================
        LOGO    
======================================-->
<section id="logo" class="py-5">
<div class="container py-5 text-right wow fadeInLeft">
   
    <img id="logoES" class="my-5 pb-5 img-fluid" src="ES-FrontEnd/Elementos/Imagenes/ES-Icon.png" alt="">

</div>    
</section>

<!--************************************************************************************
                        FIN COMPONENTES DE LA PAGINA 
 ************************************************************************************-->

<?php include_once "ES-FrontEnd/Elementos/Generales-Web/piePagina.php";?>

<?php include_once "ES-FrontEnd/Elementos/Generales-Web/scripts.php";?> 

<script>
vWeb.mostrarMarcas();
vWeb.mostrarInformacionNosotros();
</script>

</body>
</html>