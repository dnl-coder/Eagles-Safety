<!DOCTYPE html>
<html lang="es">
<head>

    <!--TITULO DE LA VISTA -->
    <title>Productos - Eagles Safety EIRL</title>

    <!-- CONTENIDO GENERAL-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/config.php";?>
    
</head>

<body>
   
    <!-- CONTENT-->
    
    <!-- BARRA DE NAVEGACION-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/barraNavegacion.php";?>

    <!-- ENCABEZADO-->  
    <div class="container-fluid" style="height: 110px; background: url('ES-FrontEnd/Elementos/Imagenes/Encabezados/Contactanos.jpg') no-repeat center; background-size: cover;"></div>  
    
    <!-- MENU DE UBICACION-->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
      
      <div class="mr-auto">
        <nav aria-label="breadcrumb">
          <ol id="menuUbicacion" class="breadcrumb clearfix d-none d-md-inline-flex pt-0"></ol>
        </nav>
      </div>
      
      <form class="form-inline my-2">
        <input class="form-control mr-4 mr-sm-2" type="text" placeholder="Buscar producto" aria-label="Search">
      </form>
      
    </nav>

    <!-- CONTENIDO-->
    <section class="container-fluid my-4" style="margin: auto; width: 95%;">
      <div class="row">
        
        <!--CATEGORIAS-->  
        <div id="categorias" class="col-12 d-none d-lg-block p-0 my-0 py-0">
          <ul class="row justify-content-center p-0"></ul>
        </div>

        <!--FILTROS-->  
        <div class="filtros col-lg-3 d-none d-lg-block bg-light1 p-4">

            <!--TITULO-->  
            <div class="font-dark4">
                <h6 class="h6-responsive font-weight-bold"><i class="fas fa-sliders-h"></i> FILTROS</h6>
            </div>

            <!--OPCIONES DE FILTROS-->  
            <div class="">

                <!--FILTROS APLICADOS-->  
                <div class="my-3">
                  <p class="font-dark4 h6-responsive font-weight-bold">Filtros aplicados</p>
                  <div class="tags mt-3">
                    <div class="chip white border rounded-pill px-3 py-1">3M<i class="close fas fa-times"></i></div>
                  </div>
                  <div class="text-center my-3">
                    <a class="font-dark4">Limpiar filtros</a>
                  </div>

                </div>

                <!--MARCAS-->  
                <hr>
                <div class="my-3">
                  <p class="font-dark4 h6-responsive font-weight-bold mb-1">Marcas</p>
                  <ul class="marcas list-group"></ul>
                </div>

                <!--DISPONIBILIDAD-->  
                <hr>
                <div class="my-3">
                  <p class="font-dark4 h6-responsive font-weight-bold mb-1">Disponibilidad</p>
                  <ul class="list-group">
                      <li class="list-group-item">
                          <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="disponibilidad1" name="disponibilidad">
                              <label class="custom-control-label pt-1 pl-2" for="disponibilidad1">Disponible</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="disponibilidad2">
                              <label class="custom-control-label pt-1 pl-2" for="disponibilidad2" name="disponibilidad">No disponible</label>
                          </div>
                      </li>
                  </ul>
                </div>
                
                <!--FICHA TECNICA-->  
                <hr>
                <div class="my-3">
                  <p class="font-dark4 h6-responsive font-weight-bold mb-1">Ficha técnica</p>
                  <ul class="list-group">
                      <li class="list-group-item">
                          <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="fichaTecnica1" name="fichaTecnica">
                              <label class="custom-control-label pt-1 pl-2" for="fichaTecnica1">Disponible</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" id="fichaTecnica2">
                              <label class="custom-control-label pt-1 pl-2" for="fichaTecnica2" name="fichaTecnica">No disponible</label>
                          </div>
                      </li>
                  </ul>
                </div>
                
                <!--TAGS-->  
                <hr>
                <div class="my-3">
                  <p class="font-dark4 h6-responsive font-weight-bold mb-1">Tags</p>
                  <ul class="tags list-group"></ul>
                </div>

            </div>

        </div>
        
        <!-- PRODUCTOS--> 
        <div class="col-12 col-lg-9">

            <!-- BOTON MOSTRAR CATEGORIAS/FILTROS -->
            <div class="d-flex align-items-center mb-3 d-block d-lg-none">
               
                <a id="filtroCategorias" class="btn bg-primary m-0 mr-2 py-2 px-2">
                    <i class="fas fa-boxes mr-2"></i>CATEGORIAS
                </a>  
                
                <a id="filtros" class="btn bg-primary m-0 py-2 px-2">
                    <i class="fa fa-filter mr-2"></i>FILTROS
                </a> 
                 
            </div>
            
            <!-- FILTRO CATEGORIAS--> 
            <div id="filtroCategoriasContent" class="d-none"> 
              <ul class="row justify-content-center p-0"></ul>
            </div>

            <!-- PRODUCTOS--> 
            <div class="tab-content">
              <div class="tab-pane fade show active" id="producto" role="tabpanel">
                <div id="content" class="row p-0 mx-1"></div>
              </div>
            </div>

            <!-- PAGINACION-->
            <div class="d-flex align-items-center flex-wrap justify-content-center py-4">
                <div id="PAGINACION"></div>      
            </div>

        </div>

      </div>
    </section>

    <!-- DESCRIPCION--> 
    <div class="modal fade" id="modalDescripcion" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
    </div></div>

    <!-- FOOTER-->   
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/piePagina.php";?>    
    
    <!-- CONTENT-->
    
    <!-- JS DEL ARCHIVO-->
    <script type="text/javascript">
      
      mostrarCategorias();
      mostrarMarcas();

      categoria="Protección Anticaída";
      vWeb.mostrarProductosXCategoria(categoria);
      ubicacionMenu(categoria);

      //--SELECCIONAR CATEGORIA--
      $('body').on('click', '#categorias li', function (e) {
          e.preventDefault()
          categoria=$(this).text();
          vWeb.mostrarProductosXCategoria(categoria);
          ubicacionMenu(categoria);
          $(this).tab('show');

          $("#categorias li").each(function() { 
              $(this).removeClass("active");
              if ($(this).text().toLowerCase() == categoria.toLowerCase() ) { 
                  $(this).addClass("active");
              }
          }); 
      })
      $('body').on('click', '#filtroCategoriasContent li', function (e) {
          e.preventDefault()
          $('#filtroCategoriasContent').addClass('d-none');
          categoria=$(this).text();
          vWeb.mostrarProductosXCategoria(categoria);
          ubicacionMenu(categoria);
          $(this).tab('show');

          $("#categorias li").each(function() { 
              $(this).removeClass("active");
              if ($(this).text().toLowerCase() == categoria.toLowerCase() ) { 
                  $(this).addClass("active");
              }
          }); 

      })

      //--MOSTRAR/OCULTAR CATEGORIAS--
      $("#filtroCategorias").click(function() {
          $("#filtroCategoriasContent").toggleClass("d-none");
      }); 

      //FUNCION PARA COMPRIMIR EL MENU
      $('#filtros').click(function(){
          $(".filtros").toggleClass("mostrar");
      });
      
      //-MOSTRAR TODOS LAS CATEGORIAS--
      function mostrarCategorias(){

          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarCategorias.php',
              type: 'GET',
              dataType: 'json',
              error: function(error){
                  mostrar=true;
                  if(error.status == 401){
                      mostrarToast("error","No se pudo establecer conexion con el servidor");
                  }
                  else{
                      mostrarToast("error","Error no identificado.");
                  }
              },
              success: function(datos){
                  if(datos.response == 0){
                      mostrar=true;
                      mostrarToast("error",'ERROR: '+datos.message);
                  }
                  else{
                      var categorias = "";
                      var categorias2 = "";
                      for (var i=0;i<datos.length;i++){
                          if(i==0){
                            categorias+="<li class='col btn p-1 active'><img src='ES-FrontEnd/Elementos/Imagenes/Categorias/"+datos[i].CATICONO+"' width='60'><p class='px-2'>"+datos[i].CATNOMBRE+"</p></li>"
                          }else{
                            categorias+="<li class='col btn p-1'><img src='ES-FrontEnd/Elementos/Imagenes/Categorias/"+datos[i].CATICONO+"' width='60'><p class='px-2'>"+datos[i].CATNOMBRE+"</p></li>"
                          }
                        
                          categorias2+="<li class='btn col-5 col-sm-3 bg-primary p-1'><img src='ES-FrontEnd/Elementos/Imagenes/Categorias/"+datos[i].CATICONO+"' width='50'><br>"+datos[i].CATNOMBRE+"</li>"
                          
                      }
                      $("#categorias ul").html(categorias);
                      $("#filtroCategoriasContent ul").html(categorias2);
                  }
              }
          });
      }

      //-MOSTRAR TODOS LAS MARCAS--
      function mostrarMarcas(){

          $.ajax({
              url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarMarcas.php',
              type: 'GET',
              dataType: 'json',
              error: function(error){
                  mostrar=true;
                  if(error.status == 401){
                      mostrarToast("error","No se pudo establecer conexion con el servidor");
                  }
                  else{
                      mostrarToast("error","Error no identificado.");
                  }
              },
              success: function(datos){
                  if(datos.response == 0){
                      mostrar=true;
                      mostrarToast("error",'ERROR: '+datos.message);
                  }
                  else{
                      $("ul.marcas").html("");
                      var marcas = ""
                      for (var i=0;i<datos.length;i++){
                          marcas+="<li class='list-group-item'>  \
                              <div class='custom-control custom-checkbox'>  \
                                  <input type='checkbox' class='custom-control-input' id='"+datos[i].MARCCODIGO+"'>  \
                                  <label class='custom-control-label pt-1 pl-2' for='"+datos[i].MARCCODIGO+"'>"+datos[i].MARCNOMBRE+"</label>  \
                              </div>  \
                          </li>"
                      }
                      $("ul.marcas").html(marcas);
                  }
              }
          });
      }
      
      function ubicacionMenu(categoria){
          var ubicacion= "";
          ubicacion += "<li class='breadcrumb-item'><i class='fa fa-home fa-lg mt-1 mr-2 white-text' aria-hidden='true'></i><a class='white-text' href='index.php'>Inicio</a></li>  \
            <li class='breadcrumb-item'>Productos</li>  \
            <li class='breadcrumb-item active'>"+categoria+"</li>";
          $("#menuUbicacion").html(ubicacion);
      }
  
    </script>


</body>
</html>