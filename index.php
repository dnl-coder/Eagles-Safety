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
    <!--
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
    -->
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
    
    <!-- CATEGORIAS DESTACADAS-->
    <div id="seccionCategorias" class="container-fluid">
      <div class="row">
        <div class="col-12 mb-5">

          <!--DESCRIPCION -->
          <h3 class="h4-responsive font-weight-bold px-4 pb-2 font-primary wow fadeIn">Categorías <span class="font-secundary">destacadas</span></h3>

          <!--CAROUSEL DE CATEGORIAS DESTACADAS -->
          <div class="mx-3 text-center d-none d-sm-flex">
          <div id="carouselCategorias" class="carousel slide w-100" data-ride="carousel">

              <!--CATEGORIAS -->
              <div id="categoriasDestacadas" class="carousel-inner w-100" role="listbox"></div>

              <!--CONTROLADOR -->
              <a class="carousel-control-prev" href="#carouselCategorias" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselCategorias" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>

          </div>
          </div>

          <!--CAROUSEL DE CATEGORIAS DESTACADAS RESPONSIVE -->
          <div class="mx-3 text-center d-flex d-sm-none">
          <div id="carouselCategoriasCelular" class="carousel slide w-100" data-ride="carousel">

              <!--CATEGORIAS -->
              <div id="categoriasDestacadasCelular" class="carousel-inner w-100" role="listbox"></div>

              <!--CONTROLADOR -->
              <a class="carousel-control-prev" href="#carouselCategoriasCelular" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselCategoriasCelular" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>

          </div>
          </div>

        </div>  
      </div>
    </div>
          
    <!-- PRODUCTOS DESTACADOS-->
    <div id="DESTACADOS"></div>

    <!-- CAROUSEL DE MARCAS-->
    <div class="py-5">
      <div class="container my-5">

      <!--DESCRIPCION -->
      <h3 class="h4-responsive font-weight-bold px-4 pb-2 grey-text text-center wow fadeIn">Calidad y seguridad garantizada en cada una de nuestras marcas.</h3>

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
    
    <script>
      
      mostrarCategoriasDestacadas();
      
      function mostrarCategoriasDestacadas(){
        
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarCategorias.php',
            type: 'GET',
            datatype:'json',
            error: function(error){
                if(error.status == 401){
                    console.log("Archivos no encontrados");
                }
                else{
                    console.log("Error no identificado");
                }
            },
            success: function(datos){
                var contenedor = "";

                //VERSION WEB
                contenedor += "<div class='carousel-item row row-cols-5 no-gutters active'>";
                for(var i=0; i<datos.length ; i++){
                    if(i<5){
                        contenedor+="\n\<div class='col float-left p-2 text-left'><div class='card align-items-center'> \
                  <div class='view overlay' style='height: 330px'> \
                    <img src='ES-FrontEnd/Elementos/Imagenes/Categorias/"+datos[i].CATIMAGEN+"' class='card-img-top' height='320'> \
                    <a id='"+datos[i].CATCODIGO+"' onclick='vWeb.seleccionarProducto(this)'><div class='mask rgba-white-slight'></div></a> \
                  </div> \
                  <div class='card-body text-center px-1 py-2'> \
                    <h6 class='font-weight-bold text-uppercase'> \
                      <a id='"+datos[i].CATCODIGO+"' class='dark-grey-text' onclick='vWeb.seleccionarProducto(this)'>"+datos[i].CATNOMBRE+"</a> \
                    </h6> \
                  </div> \
                </div></div>"
                    }
                }
                contenedor+="\n\</div>"
                for(var j=0; j<datos.length-1; j++){

                    var a=0;
                    contenedor += "<div class='carousel-item row row-cols-5 no-gutters'>";

                    for(var k=1; k<6; k++){

                        if((k+j)<datos.length){
                            contenedor+="\n\<div class='col float-left p-2 text-left'><div class='card align-items-center'> \
                  <div class='view overlay' style='height: 330px'> \
                    <img src='ES-FrontEnd/Elementos/Imagenes/Categorias/"+datos[k+j].CATIMAGEN+"' class='card-img-top' height='320'> \
                    <a id='"+datos[k+j].CATCODIGO+"' onclick='vWeb.seleccionarProducto(this)'><div class='mask rgba-white-slight'></div></a> \
                  </div> \
                  <div class='card-body text-center px-1 py-2'> \
                    <h6 class='font-weight-bold text-uppercase'> \
                      <a id='"+datos[k+j].CATCODIGO+"' class='dark-grey-text' onclick='vWeb.seleccionarProducto(this)'>"+datos[k+j].CATNOMBRE+"</a> \
                    </h6> \
                  </div> \
                </div></div>"
                        }else{
                            contenedor+="\n\<div class='col float-left p-2 text-left'><div class='card align-items-center'> \
                  <div class='view overlay' style='height: 330px'> \
                    <img src='ES-FrontEnd/Elementos/Imagenes/Categorias/"+datos[a].CATIMAGEN+"' class='card-img-top' height='320'> \
                    <a id='"+datos[a].CATCODIGO+"' onclick='vWeb.seleccionarProducto(this)'><div class='mask rgba-white-slight'></div></a> \
                  </div> \
                  <div class='card-body text-center px-1 py-2'> \
                    <h6 class='font-weight-bold text-uppercase'> \
                      <a id='"+datos[a].CATCODIGO+"' class='dark-grey-text' onclick='vWeb.seleccionarProducto(this)'>"+datos[a].CATNOMBRE+"</a> \
                    </h6> \
                  </div> \
                </div></div>"
                            a++;
                        }

                    }
                    contenedor+="\n\</div>"

                }
                $("#categoriasDestacadas").html(contenedor);

                //VERSION MOVIL
                contenedor = "";
                for(var i=0; i<datos.length ; i++){
                    if(i==0){
                        contenedor += "<div class='carousel-item justify-content-center no-gutters p-2 text-left active'>";
                        contenedor+="\n\<div class='card align-items-center'> \
                  <div class='view overlay' style='height: 238.078px'> \
                    <img src='ES-FrontEnd/Elementos/Imagenes/Categorias/"+datos[i].CATIMAGEN+"' class='card-img-top'> \
                    <a id='"+datos[i].CATCODIGO+"' onclick='vWeb.seleccionarProducto(this)'><div class='mask rgba-white-slight'></div></a> \
                  </div> \
                  <div class='card-body text-center'> \
                    <h5 class='mb-3'> \
                      <strong> \
                        <a id='"+datos[i].CATCODIGO+"' class='dark-grey-text' onclick='vWeb.seleccionarProducto(this)'>"+datos[i].CATNOMBRE+"</a> \
                      </strong> \
                    </h5> \
                  </div> \
                </div></div>"
                    }else{
                        contenedor += "<div class='carousel-item justify-content-center p-2 text-left no-gutters '>";
                        contenedor+="\n\<div class='card align-items-center'> \
                  <div class='view overlay' style='height: 238.078px'> \
                    <img src='ES-FrontEnd/Elementos/Imagenes/Categorias/"+datos[i].CATIMAGEN+"' class='card-img-top'> \
                    <a id='"+datos[i].CATCODIGO+"' onclick='vWeb.seleccionarProducto(this)'><div class='mask rgba-white-slight'></div></a> \
                  </div> \
                  <div class='card-body text-center'> \
                    <h5 class='mb-3'> \
                      <strong> \
                        <a id='"+datos[i].CATCODIGO+"' class='dark-grey-text' onclick='vWeb.seleccionarProducto(this)'>"+datos[i].CATNOMBRE+"</a> \
                      </strong> \
                    </h5> \
                  </div> \
                </div></div>"
                    }
                }
                $("#categoriasDestacadasCelular").html(contenedor);
            }
        });
        
      }
      
  
    </script>

</body>
</html>