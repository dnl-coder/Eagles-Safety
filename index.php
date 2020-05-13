<!DOCTYPE html>
<html lang="es">
<head>
   
<!--TITULO DE LA VISTA -->
<title>Seguridad industrial - Eagles Safety eirl</title>

<!-- CONTENIDO GENERAL DEL HEAD -->
<?php include_once "ES-FrontEnd/Elementos/Generales-Web/head.php";?>
     
</head>

<body>   

<!--=====================================
        BARRA DE NAVEGACION     
======================================--> 
<?php include_once "ES-FrontEnd/Elementos/Generales-Web/barraNavegacion.php";?>

<!--=====================================
        IMAGENES DESLIZANTES      
======================================-->
<section>
<div id="CarouselInicio" class="carousel slide" data-ride="carousel">

<!--SLIDES-->
<div class="carousel-inner" role="listbox"></div>

<!--CONTROLES-->
<a class="carousel-control-prev" href="#CarouselInicio" role="button" data-slide="prev">
    <span aria-hidden="true"><i class="fa fa-chevron-left fa-2x"></i></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#CarouselInicio" role="button" data-slide="next">
    <span aria-hidden="true"><i class="fa fa-chevron-right fa-2x"></i></span>
    <span class="sr-only">Next</span>
</a>

</div>                    
</section>

<!--=====================================
        MARCAS
======================================-->
<div class="black darken-4 py-3">

<div class="container my-3">

<!--DESCRIPCION -->
<h3 class="h4-responsive font-weight-bold px-4 pb-2 white-text text-center wow fadeIn">Calidad y seguridad garantizada en cada una de nuestras marcas.</h3>

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

</div>

<!--=====================================
        BANNER 1     
======================================-->
<div class="container p-2">    
<div class="row my-5 py-5">

<!--IMAGEN -->   
<div class="col-12 col-sm-7 my-auto">
    <img src="ES-FrontEnd/Elementos/Imagenes/Banners/ES-Banner1.png" class="img-fluid mx-auto d-block  wow fadeInLeft">
</div>

<!--DESCRIPCION -->
<div class="col-12 col-sm-5 feature">
    <h3 class="h1-responsive font-weight-bold">EXPERIENCIA, SEGURIDAD Y GARANTIA</h3>
    <p>Tenemos los mejores productos para <b class="font-weight-bold">garantizar</b> que siempre regreses seguro a tu hogar.</p>
</div>
    
</div>       
</div>

<!--=====================================
        BANNER 2    
======================================-->
<section class="extra">
<div class="fondo-extra py-4">
<div class="container py-5">

<!--TITULO -->
<h4 class="h1-responsive my-2 py-4 text-center white-text wow fadeIn" data-wow-delay="0.4s">CONOCE MAS ACERCA DE NOSOTROS</h4>

<!--DESCRIPCION -->
<p class="px-4 my-4 py-3 lead white-text text-center wow fadeIn">Somos parte de Industrias Manrique S.A.C. empresa dedicada a diseñar, fabricar y comercializar productos para la protección personal desde 1996.</p> 

<!--BOTON -->
<div class="text-center py-1"><a class="btn green wow rubberBand white-text" target="_blank" href="http://im.com.pe">VER MAS</a></div>

</div>    
</div>
</section>

<!--=====================================
        DESTACADOS PRODUCTOS     
======================================-->
<section class="grey product-ofertas py-3">
<div class="container">

<!--TITULO -->  
<h4 class="h2-responsive pt-4 font-weight-bold text-center white-text wow fadeIn" data-wow-delay="0.4s">Productos de alta calidad</h4>

<!--DESCRIPCION -->  
<p class="px-4 pb-3 lead white-text text-center wow fadeIn">Los mejores acabados, diseños y modelos a tu alcance.</p>

<!--PRODUCTOS -->  
<div id="DESTACADOS" class="card-deck mb-4 px-5 justify-content-center"></div> 

</div>
</section>

<!--=====================================
        ANIMACION    
======================================-->
<section class="im green">
<div class="container text-center">
<h5 class="h3"><a href="" class="typewrite white-text" data-period="2000" data-type='["Especialistas en calzado industrial.", "Primeros en su ruglo.", "Seguridad al alcance de todos." ]'><span class="wrap"></span></a></h5>
</div>
</section>

<!--=====================================
        MAPA 
======================================-->
<section>
<div class="map">
    <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1594.2648940347135!2d-77.06227751619815!3d-11.979064569052294!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3f5ca4d404542fc3!2sIndustrias%20Manrique%20Calzado%20de%20Seguridad!5e0!3m2!1ses-419!2spe!4v1571504238308!5m2!1ses-419!2spe"></iframe>
</div>
</section>

<!--=====================================
        DESCRIPCION     
======================================--> 

<!--DESCRIPCION 1-->
<div class="modal fade" id="modalDescripcion" tabindex="-1" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document" style='max-width:600px;'>
</div></div>

<?php include_once "ES-FrontEnd/Elementos/Generales-Web/piePagina.php";?>

<?php include_once "ES-FrontEnd/Elementos/Generales-Web/scripts.php";?>  

<script>
vWeb.mostrarMarcas();
vWeb.mostrarProductosDestacados();
vWeb.mostrarSliders();

</script>

</body>
</html>