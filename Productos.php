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
    <div class="container-fluid" style="height: 250px; background: url('ES-FrontEnd/Elementos/Imagenes/Productos/Encabezado.jpg') no-repeat center; background-size: cover;">

       <div class="container">
            <br><br><br>
           <div class="text-white display-4 font-weight-bold pt-5 wow fadeIn" style="font-size:250%; font-family: 'Bungee', cursive;">PRODUCTOS</div>
       </div>

    </div>  

    <!-- CONTENIDO-->
    <section class="container-fluid my-4" style="margin: auto; width: 95%;">
      <div class="row">

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
                    <div class="chip white border rounded-pill px-3 py-1">Anticaída<i class="close fas fa-times"></i></div>
                  </div>
                  <div class="text-center my-3">
                    <a class="font-dark4">Limpiar filtros</a>
                  </div>

                </div>

                <!--CATEGORIAS-->  
                <hr>
                <div class="my-3">
                  <p class="font-dark4 h6-responsive font-weight-bold mb-1">Categorías</p>
                  <ul class="categoria list-group"></ul>
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
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="disponibilidad1">
                              <label class="custom-control-label pt-1 pl-2" for="disponibilidad1">Disponible</label>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="disponibilidad2">
                              <label class="custom-control-label pt-1 pl-2" for="disponibilidad2">No disponible</label>
                          </div>
                      </li>
                  </ul>
                </div>

            </div>

        </div>

        <!-- PRODUCTOS--> 
        <div class="col-12 col-lg-9">

            <!-- BOTON MOSTRAR CATEGORIAS -->
            <div class="d-flex align-items-center flex-wrap mb-3 ml-3 d-block d-lg-none">
                <a id="filtros" class="btn bg-primary m-0 py-2">
                    <i class="fa fa-filter"></i> <b>Filtros</b>
                </a>  
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

        categoria="Protección Anticaída";
        vWeb.mostrarProductosXCategoria(categoria);

        //--SELECCIONAR CATEGORIA--
        $('#list-tab a').on('click', function (e) {
            e.preventDefault()
            categoria=$(this).text();
            vWeb.mostrarProductosXCategoria(categoria);
            $(this).tab('show');
        })
        $('#filtroCategoriasContent li').on('click', function (e) {
            e.preventDefault()
            $('#filtroCategoriasContent').addClass('d-none');
            categoria=$(this).text();
            vWeb.mostrarProductosXCategoria(categoria);
            $(this).tab('show');
          
            $("#list-tab a").each(function() { 
                $(this).removeClass("active");
                if ($(this).children("span").text().toLowerCase() == categoria.toLowerCase() ) { 
                    $(this).addClass("active");
                }
            }); 
          
        })
      
        //--MOSTRAR/OCULTAR CATEGORIAS--
        $("#filtroCategorias").click(function() {
            $("#filtroCategoriasContent").toggleClass("d-none");
        }); 

    </script>

    <!-- JS DEL ARCHIVO-->
    <script type="text/javascript">

        categoria="Protección Anticaída";
        vWeb.mostrarProductosXCategoria(categoria);

        //--SELECCIONAR CATEGORIA--
        $('#list-tab a').on('click', function (e) {
            e.preventDefault()
            categoria=$(this).text();
            vWeb.mostrarProductosXCategoria(categoria);
            $(this).tab('show');
        })
        $('#filtroCategoriasContent li').on('click', function (e) {
            e.preventDefault()
            $('#filtroCategoriasContent').addClass('d-none');
            categoria=$(this).text();
            vWeb.mostrarProductosXCategoria(categoria);
            $(this).tab('show');
        
            $("#list-tab a").each(function() { 
                $(this).removeClass("active");
                if ($(this).children("span").text().toLowerCase() == categoria.toLowerCase() ) { 
                    $(this).addClass("active");
                }
            }); 
        
        })

</script>

    <script>
    mostrarCategorias();
      
    //-MOSTRAR TODOS LAS CATEGORIAS--
    function mostrarCategorias(){
        
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarCategoria.php',
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
                    $("ul.categoria").html("");
                    var categorias = ""
                    for (var i=0;i<datos.length;i++){
                        categorias+="<li class='list-group-item'>  \
                            <div class='custom-control custom-checkbox'>  \
                                <input type='checkbox' class='custom-control-input' id='"+datos[i].CATCODIGO+"'>  \
                                <label class='custom-control-label pt-1 pl-2' for='"+datos[i].CATCODIGO+"'>"+datos[i].CATNOMBRE+"</label>  \
                            </div>  \
                        </li>"
                    }
                    $("ul.categoria").html(categorias);
                }
            }
        });
    }
    
    //FUNCION PARA COMPRIMIR EL MENU
    $('#filtros').click(function(){
        $(".filtros").toggleClass("mostrar");
    });
  
    </script>


</body>
</html>