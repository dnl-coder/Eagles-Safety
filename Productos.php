<!DOCTYPE html>
<html lang="es">
<head>

    <!--TITULO DE LA VISTA -->
    <title>Productos - Eagles Safety eirl</title>

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

    <!-- CONTENEDOR INFERIOR-->
    <section class="container-fluid my-4" style="margin-left: 1%; margin-right: 1%; width: 98%;">
      <div class="row">

          <!--contenedor izquierdo-->  
          <div id="categorias" class="col-lg-4 col-xl-3 d-none d-lg-block">
            <div class="list-group" id="list-tab" role="tablist">
                
                <!-- CATEGORIA 1 -->
                <a class="list-group-item list-group-item-action p-0 d-flex" data-toggle="list" href="#producto" role="tab" aria-controls="profile"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/CAT2.png" width="100"><span class="my-auto">Protección Anticaída</span></a>                

                <!-- CATEGORIA 2 -->
                <a class="list-group-item list-group-item-action active p-0 d-flex" data-toggle="list" href="#producto" role="tab" aria-controls="home"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/CAT6.png" width="100"><span class="my-auto">Protección Auditiva</span></a>

                <!-- CATEGORIA 3 -->
                <a class="list-group-item list-group-item-action p-0 d-flex" data-toggle="list" href="#producto" role="tab" aria-controls="messages"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/CAT1.png" width="100"><span class="my-auto">Protección Cabeza</span></a>
                
                <!-- CATEGORIA 4 -->
                <a class="list-group-item list-group-item-action p-0 d-flex" data-toggle="list" href="#producto" role="tab" aria-controls="settings"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/CAT3.png" width="100"><span class="my-auto">Protección Corporal</span></a>

                <!-- CATEGORIA 5 -->
                <a class="list-group-item list-group-item-action p-0 d-flex" data-toggle="list" href="#producto" role="tab" aria-controls="settings"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/CAT4.png" width="100"><span class="my-auto">Protección Manos</span></a>
                
                <!-- CATEGORIA 6 -->
                <a class="list-group-item list-group-item-action p-0 d-flex" data-toggle="list" href="#producto" role="tab" aria-controls="settings"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/CAT5.png" width="100"><span class="my-auto">Protección Pies</span></a>

                <!-- CATEGORIA 7 -->
                <a class="list-group-item list-group-item-action p-0 d-flex" data-toggle="list" href="#producto" role="tab" aria-controls="settings"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/CAT7.png" width="100"><span class="my-auto">Protección Respiratoria</span></a>

                <!-- CATEGORIA 8 -->
                <a class="list-group-item list-group-item-action p-0 d-flex" data-toggle="list" href="#producto" role="tab" aria-controls="settings"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/CAT8.png" width="100"><span class="my-auto">Protección Visual</span></a>
                
                <!-- CATEGORIA 9 -->
                <a class="list-group-item list-group-item-action p-0 d-flex" data-toggle="list" href="#producto" role="tab" aria-controls="settings"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/CAT9.png" width="100"><span class="my-auto">Ropa Descartable</span></a>
                
                <!-- CATEGORIA 10 -->
                <a class="list-group-item list-group-item-action p-0 d-flex" data-toggle="list" href="#producto" role="tab" aria-controls="settings"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/CAT10.png" width="100"><span class="my-auto">Ropa Impermeable</span></a>

                <!-- CATEGORIA 11 -->
                <a class="list-group-item list-group-item-action p-0 d-flex" data-toggle="list" href="#producto" role="tab" aria-controls="settings"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/CAT11.png" width="100"><span class="my-auto">Señalización</span></a>

                <!-- CATEGORIA 12 -->
                <a class="list-group-item list-group-item-action p-0 d-flex" data-toggle="list" href="#producto" role="tab" aria-controls="settings"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/CAT12.png" width="100"><span class="my-auto">Otros Equipos de Protección</span></a>                    

            </div>
          </div>

          <!-- contenedor derecho--> 
          <div class="col-12 col-lg-8 col-xl-9">

              <!-- BOTON MOSTRAR CATEGORIAS -->
              <div class="d-flex align-items-center flex-wrap mb-3 d-block d-lg-none">
                  <a id="filtroCategorias" class="btn bg-primary m-0 py-2">
                      <i class="fa fa-filter"></i> <b>Categorías</b>
                  </a>  
              </div>
              
              <!-- FILTRO CATEGORIAS--> 
              <div id="filtroCategoriasContent" class="d-none"> 
                <ul class="row justify-content-center p-0">
                  <li class="btn col-5 col-sm-3 bg-primary p-1"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/p-caida.png" width="50"><br>Protección anticaída</li>
                  <li class="btn col-5 col-sm-3 bg-primary p-1"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/p-auditiva.png" width="50"><br>Protección auditiva</li>
                  <li class="btn col-5 col-sm-3 bg-primary p-1"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/p-cabeza.png" width="50"><br>Protección cabeza</li>
                  <li class="btn col-5 col-sm-3 bg-primary p-1"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/p-cuerpo.png" width="50"><br>Protección corporal</li>
                  <li class="btn col-5 col-sm-3 bg-primary p-1"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/p-manos.png" width="50"><br>Protección manos</li>
                  <li class="btn col-5 col-sm-3 bg-primary p-1"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/p-pies.png" width="50"><br>Protección pies</li>
                  <li class="btn col-5 col-sm-3 bg-primary p-1"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/p-respiratoria.png" width="50"><br>Protección respiratoria</li>
                  <li class="btn col-5 col-sm-3 bg-primary p-1"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/p-visual.png" width="50"><br>Protección visual</li>
                  <li class="btn col-5 col-sm-3 bg-primary p-1"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/p-descartable.png" width="50"><br>Ropa descartable</li>
                  <li class="btn col-5 col-sm-3 bg-primary p-1"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/p-impermeable.png" width="50"><br>Ropa impermeable</li>
                  <li class="btn col-5 col-sm-3 bg-primary p-1"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/p-señalizacion.png" width="50"><br>Señalización</li>
                  <li class="btn col-5 col-sm-3 bg-primary p-1"><img src="ES-FrontEnd/Elementos/Imagenes/TiposProductos/p-otros.png" width="50"><br>Otros equipos de protección</li>
                </ul>
              </div>

              <!-- PRODUCTOS--> 
              <div class="tab-content grey lighten-3">
                <div class="tab-pane fade show active" id="producto" role="tabpanel">
                  <div id="content" class="row p-0 mx-1"></div>
                </div>
              </div>
              
              <!-- PAGINACION-->
              <div class="d-flex align-items-center flex-wrap justify-content-center py-4 grey lighten-3">
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

</script>

</body>
</html>