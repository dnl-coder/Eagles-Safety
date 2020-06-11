<!DOCTYPE html>
<html lang="en">
<head>
   
    <!-- TITULO DE LA VISTA-->
    <title>Seguridad industrial - Eagles Safety eirl</title>

    <!-- CONFIGURACION GENERAL-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/config.php";?>
    
    <!-- JS DEL ARCHIVO-->
    <script type="text/javascript">
      vWeb.mostrarSliders();
      vWeb.mostrarMarcas();
      vWeb.mostrarProductosDestacados();
    </script>
    
</head>
<body>
   
    <!-- CONTENT-->
    
    <!-- BARRA DE NAVEGACION-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/barraNavegacion.php";?>
    
    <!-- CAROUSEL DE IMAGENES-->
    <div id="CarouselInicio" class="carousel slide" data-ride="carousel">

      <!--SLIDES-->
      <div class="carousel-inner" role="listbox"></div>

      <!--CONTROLES-->
      <a class="carousel-control-prev" href="#CarouselInicio" role="button" data-slide="prev">
          <span aria-hidden="true"><i class="fa fa-chevron-left fa-2x"></i></span>
          <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#CarouselInicio" role="button" data-slide="next">
          <span aria-hidden="true"><i class="fa fa-chevron-right fa-2x"></i></span>
          <span class="sr-only">Siguiente</span>
      </a>

    </div>                    
    
    <!-- BANNER 1-->
    <div class="container py-2 px-5">    
      <div class="row my-5 py-5">

      <!--IMAGEN -->   
      <div class="col-12 col-sm-7 my-auto">
          <img src="ES-FrontEnd/Elementos/Imagenes/Banners/ES-Banner1.png" class="img-fluid mx-auto d-block wow fadeInLeft">
      </div>

      <!--DESCRIPCION -->
      <div class="col-12 col-sm-5">
          <h3 class="h1-responsive font-weight-bold wow fadeIn">EXPERIENCIA, SEGURIDAD Y GARANTIA</h3>
          <p>Tenemos los mejores productos para <b class="font-weight-bold wow fadeIn">garantizar</b> que siempre regreses seguro a tu hogar.</p>
      </div>

      </div>       
    </div>

    <!-- PRODUCTOS DESTACADOS-->
    <div class="product-ofertas container-fluid py-3">

        <!--TITULO -->  
        <p class="h2-responsive pt-4 font-weight-bold text-center animated fadeIn" data-wow-delay="0.4s">Productos de alta calidad</p>

        <!--DESCRIPCION -->  
        <p class="px-4 pb-3 lead text-center animated fadeIn">Los mejores acabados, diseños y modelos a tu alcance.</p>

        <!--PRODUCTOS -->  
        <div id="DESTACADOS" class="card-deck mb-4 row justify-content-center"></div> 
        
        <!-- DESCRIPCION--> 
        <div class="modal fade" id="modalDescripcion" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered" role="document"></div>
        </div>

    </div>

    <!-- CAROUSEL DE MARCAS-->
    <div class="black darken-4 py-5">
      <div class="container my-5">

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
    
    <!--FOOTER -->   
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/piePagina.php";?>   
    
    <!-- CONTENT-->

</body>
</html>