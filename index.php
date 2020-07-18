<!DOCTYPE html>
<html lang="en">
<head>
   
    <!-- TITULO DE LA VISTA-->
    <title>Seguridad industrial - Eagles Safety EIRL</title>

    <!-- CONFIGURACION GENERAL-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/config.php";?>
    
    <!-- JS DEL ARCHIVO-->
    <script type="text/javascript">
      vWeb.mostrarSliders();
      vWeb.mostrarComponente1();
      vWeb.mostrarComponente2();
      vWeb.mostrarMarcas();
      vWeb.mostrarProductosDestacados();
    </script>
    
</head>
<body>
   
    <!-- CONTENT-->
    
    <!-- BARRA DE NAVEGACION-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/barraNavegacion.php";?>
    
    <div id="pre-loading">
     
      <style>
        #pre-loading{
          position: absolute;
          z-index: 5000;
          height: 100%;
          width: 100%;
          text-align: center;
          margin: 0;
          padding: 0;
          background: linear-gradient(var(--enfasis1), var(--primary));
          animation: slideOutDown .3s ease-out 2.5s 1 forwards !important;
        }
        #pre-loading .container{
          margin-top: 8%;
        }
        
        /* Keyframes for the slideOutDown */
        @keyframes slideOutDown { 
          from { 
            opacity:1;
            transform : scale(1) translateX(0);
          } 
          to { 
            transform : scale(0.5) translateX(0);
            opacity:0; 
          } 
        }
        
        /* Keyframes for the slideInUp */
        @keyframes slideInUp { from { opacity:0; } to { opacity:1; } }
        #pre-loading h5{
          opacity: 0;  
          animation:slideInUp 1s ease-in 1 forwards;
        }
        #pre-loading h5.one {animation-delay: .1s;}
        #pre-loading h5.two {animation-delay: .4s;}
        #pre-loading h5.three {animation-delay: .8s;}
        #pre-loading h5.four {animation-delay: 1.2s;}
        
      </style>
      
      <div class="container">
        <img class="img-fluid logo wow fadeIn mb-4" width="200">
        <div class="mx-auto" style="max-width:400px;">
          <h5 class="h5-responsive white-text text-left mb-4 one"><i class="far fa-check-circle pr-3"></i>Especialistas en calzado industrial...</h5>
          <h5 class="h5-responsive white-text text-left mb-4 two"><i class="far fa-check-circle pr-3"></i>Seguridad en todas nuestras marcas...</h5>
          <h5 class="h5-responsive white-text text-left mb-4 three"><i class="far fa-check-circle pr-3"></i>Experiencia ampliamente garantizada... </h5>
          <h5 class="h5-responsive white-text text-left mb-4 four"><i class="far fa-check-circle pr-3"></i>Los mejores productos de protección... </h5>
        </div>
      </div>
      
    </div>
    
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
    
    <!-- PRODUCTOS DESTACADOS-->
    <div id="DESTACADOS"></div>

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
    
    <!-- JS PRE-LOADING-->
    <script type="text/javascript">
      
      
      
    </script>

</body>
</html>