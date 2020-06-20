<!DOCTYPE html>
<html lang="es">
<head>
   
    <!-- TITULO DE LA VISTA -->
    <title>CMS - Eagles Safety EIRL</title>

    <!-- CONFIGURACION GENERAL-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-CMS/config.php";?>

</head>

<body>
   
    <!-- CONTENT-->
    
    <!-- BARRA DE NAVEGACION-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-CMS/barraNavegacion.php";?>
    
    <!-- CONTENIDO GENERAL-->
    <section class="cuerpo" id="cuerpo">

      <!--VISTA PREVIA-->
      <div class="mx-5">

        <!--TITULO-->
        <h3 class="titulo">ACTUALIZAR CARRUSEL DE IMAGENES</h3>

        <!--SLIDERS-->
        <div id="CarouselInicio" class="carousel slide" data-ride="carousel">

            <!--SLIDES-->
            <div id="contenidoVistaPrevia" class="carousel-inner" role="listbox">
            </div>

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
                    
        <!--OPCIONES-->
        <div class="alert alert-dark p-1 mx-auto my-4 row" role="alert">
          <div class="col-12 col-md-5 h5-responsive numeroSliders">Slider usados <span id="cantSlider">4</span> de 8</div>
          <div class="col-12 col-md-7 row m-0 justify-content-center">
            <button class="btn py-2 bg-primary" data-toggle="modal" data-target="#agregarSlider">Agregar</button>
            <button class="btn py-2 bg-primary" onclick="cargarDatos()">Actualizar</button>
          </div>
        </div>
                  
      </div>

      <!--SLIDERS-->
      <div id="contenidoModificar" class="px-5 mt-0 mb-5 d-flex flex-wrap justify-content-center">
      </div>

      <!-- MODAL AÑADIR SLIDER -->
      <div class="modal fade" id="agregarSlider" tabindex="-1" role="dialog" aria-labelledby="agregarSlider"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
           
            <!-- TITULO -->
            <div class="modal-header">
              <h5 class="modal-title">Añadir nueva imagen</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <!-- CUERPO -->
            <div class="modal-body">
              <form id="form" class="text-center">
                  
                  <div class="form-group">
                      <h6 class="subtitulo">Título</h6>
                      <input id="titulo" type="text" class="form-control">
                  </div>
                  
                  <div class="form-group">
                      <h6 class="subtitulo">Descripcion</h6>
                      <input id="descripcion" type="text" class="form-control">
                  </div>

                  <h6 class="subtitulo">Imagen</h6>
                  <img id="previewFoto" class="imagenMin"><br>
                  <label for="foto" class="botonSecundario">Seleccionar imagen</label>
                  <input id="foto" class="inputImagen" name="archivo" type="file" accept="image/*"><input type="text" hidden id="estado">

              </form>
            </div>
            
            <!-- BOTONES -->
            <div class="modal-footer">
              <button id="guardar" type="button" class="btn bg-primary" onClick="validarFormulario()">Guardar</button>
            </div>
            
          </div>
        </div>
      </div>

      <!-- TOAST -->
      <div role="alert" aria-live="assertive" aria-atomic="true" class="toast py-1 px-3 succesfull z-depth-3" data-delay="4000" data-animation="true">
        <div class="toast-body">Mensaje</div>
      </div> 

    </section> 
    
    <!-- CONTENT--> 
    
    <!-- JS Scripts-->
    <script type="text/javascript" src="ES-FrontEnd/Elementos/Generales-CMS/funciones.js"></script>



</body>

</html>