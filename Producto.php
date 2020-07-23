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
          <ol class="breadcrumb clearfix d-none d-md-inline-flex pt-0">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg mt-1 mr-2 white-text" aria-hidden="true"></i><a class="white-text" href="#!">Inicio</a></li>
            <li class="breadcrumb-item">Productos</li>
            <li class="breadcrumb-item active">Protección anticaída</li>
          </ol>
        </nav>
      </div>
      
      <form class="form-inline my-2">
        <input class="form-control mr-4 mr-sm-2" type="text" placeholder="Buscar producto" aria-label="Search">
      </form>
      
    </nav>


    <!-- CONTENIDO-->
    <section class="container-fluid my-4" style="margin: auto; width: 95%;">
     
      <!-- DETALLE DEL PRODUCTO-->
      <div class="row mt-5 justify-content-center">
           
        <!-- IMAGEN-->
        <div class="col-lg-6 text-center">
          <img src="ES-FrontEnd/Elementos/Imagenes/Productos/CORAX.jpg" class="img-fluid mb-5 pb-4 border w-100">
        </div>

        <!-- PRESENTACION DEL PRODUCTO-->
        <div class="col-lg-5 text-center text-md-left mb-4">

          <!-- TITULO-->
          <h2 class="titulo h2-responsive text-center text-md-left font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">Petzl Arnes Kit CORAX</h2>
          
          <!-- TAGS-->
          <div class='row ml-xl-0 ml-4 mt-3 mb-4 justify-content-center justify-content-md-start'>
            <p class='mx-1 px-2 py-1 mb-0 small text-white rounded black'><i class='fas mr-1 fa-shield-alt'></i>Seguridad</p>
            <p class='mx-1 px-2 py-1 mb-0 small text-white rounded bg-primary'><i class='fas mr-1 fa-balance-scale'></i>Calidad</p>
            <p class='mx-1 px-2 py-1 mb-0 small text-white rounded bg-enfasis3'><i class='fas mr-1 fa-trophy'></i>Garantía</p>
          </div>

          <!-- DESCRIPCION-->
          <div class="font-weight-normal">

            <p class="descripcion ml-xl-0 ml-4">Kit de escalada que incluye un arnés CORAX, un sistema para asegurar con mosquetón Am’D y asegurador-descensor VERSO, una bolsa para magnesio BANDI y una bola de magnesio POWER BALL <br><br>

            El kit CORAX propone a las personas que desean iniciarse o a los que buscan progresar en la práctica de la escalada, del alpinismo o de vía ferrata, un arnés polivalente, fácil de utilizar y confortable. El kit también incluye un sistema para asegurar compuesto por un mosquetón Am’D y un asegurador-descensor VERSO con tecnología de frenado adaptado al diámetro de cuerda, así como una bolsa para magnesio BANDI y una bola de magnesio POWER BALL.</p>

            <div class="caracteristicas  ml-xl-0 ml-4">
              <p><span class="font-weight-bold">Producto de: </span><img src="ES-FrontEnd/Elementos/Imagenes/Marcas/marca4.png" height="30"></p>
              <p><span class="font-weight-bold">Categoría: </span><span class="categoria">Protección anticaída</span></p>
              <p><span class="font-weight-bold">Tags: </span><span class="tags">MSA, protección, arnes, eslinga</span></p>
              <p>
                <span class="font-weight-bold">Compartir: </span>
                <span class="compartir">
                  <button type="button" class="btn py-1 px-4 white-text" style="background: #3b5998;"><i class="fab fa-facebook-f"></i></button>
                  <button type="button" class="btn py-1 px-4 white-text" style="background: #0082ca;"><i class="fab fa-linkedin-in"></i></button>
                  <button type="button" class="btn py-1 px-4 white-text" style="background: #25d366;"><i class="fab fa-whatsapp"></i></button>
                </span>
              </p>
            </div>
            
          </div>

        </div>
        
        <!-- DETALLES ESPECIFICOS-->
        <div class="col-11">
         
          <!-- MENU DE OPCIONES-->
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link bg-light1 font-weight-bold font-dark4 active" id="informacionGeneral-tab" data-toggle="tab" href="#informacionGeneral" role="tab" aria-controls="informacionGeneral"
                aria-selected="true">Información general</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-light1 font-weight-bold font-dark4" id="fichaTecnica-tab" data-toggle="tab" href="#fichaTecnica" role="tab" aria-controls="fichaTecnica"
                aria-selected="false">Ficha técnica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-light1 font-weight-bold font-dark4" id="Comentarios-tab" data-toggle="tab" href="#Comentarios" role="tab" aria-controls="Comentarios"
                aria-selected="false">Comentarios</a>
            </li>
          </ul>
          
          <!-- CONTENIDO-->
          <div class="tab-content border p-4" id="myTabContent">
            <div class="tab-pane fade show active" id="informacionGeneral" role="tabpanel" aria-labelledby="informacionGeneral-tab">
              DESCRIPCION <br><br>
                  Kit idóneo para iniciarse en la escalada.<br>
                  Arnés regulable polivalente CORAX:<br>
                  – Construcción confortable y robusta.<br>
                  – Adecuado para las actividades estivales e invernales.<br>
                  Contenido del kit:<br>
                  – Un arnés CORAX.<br>
                  – Un asegurador-descensor VERSO.<br>
                  – Un mosquetón Am’D.<br>
                  – Un bolsa para magnesio BANDI.<br>
                  – Un bola de magnesio POWER BALL, 40 g.<br><br>
                  Características<br><br>

                  Certificaciones: arneses: CE y UIAA.
            </div>
            <div class="tab-pane fade" id="fichaTecnica" role="tabpanel" aria-labelledby="fichaTecnica-tab">Ficha tecnica</div>
            <div class="tab-pane fade" id="Comentarios" role="tabpanel" aria-labelledby="Comentarios-tab">Ningun comentario</div>
          </div>
        </div>
        
        <!-- PRODUCTOS RELACIONADOS-->
        <div class="col-11 my-5">

          <!--DESCRIPCION -->
          <h3 class="h4-responsive font-weight-bold px-4 pb-2 font-primary wow fadeIn">Productos <span class="font-secundary">relacionados</span></h3>

          <!--CAROUSEL DE PRODUCTOS RELACIONADOS -->
          <div class="container text-center d-none d-sm-flex">
          <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">

              <!--PRODUCTOS -->
              <div id="productosRelacionados" class="carousel-inner w-100" role="listbox"></div>

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

          <!--CAROUSEL DE PRODUCTOS RELACIONADOS RESPONSIVE -->
          <div class="container text-center d-flex d-sm-none">
          <div id="recipeCarousel2" class="carousel slide w-100" data-ride="carousel">

              <!--PRODUCTOS -->
              <div id="productosRelacionadosCelular" class="carousel-inner w-100" role="listbox"></div>

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
      
    </section>
   
    <!--FOOTER -->   
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/piePagina.php";?>    
    
    <!-- CONTENT-->
    
    <script>
      mostrarProductosRelacionados();
      
      function mostrarProductosRelacionados(){
        
        categoria="Protección Anticaída";
        
        var $categoria={
            '_categoria': categoria
        }
        
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarProductos.php',
            type: 'POST',
            data: $categoria,
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
                contenedor += "<div class='carousel-item row no-gutters active'>";
                for(var i=0; i<datos.length ; i++){
                    if(i<4){
                        contenedor+="\n\<div class='col-sm-3 col-12 float-left p-2 text-left'><div class='card' id='"+datos[i].PRODCODIGO+"' onclick='vWeb.seleccionarProducto(this)'>\n\
            <div class='view overlay zoom'>\n\
                <img class='card-img-top' src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[i].PRODIMAGEN+"' style='cursor:pointer; height:40vh;'>\n\
            </div>\n\
            <div class='card-body'>\n\
                <p class='mb-2 font-dark4'>PROTECTA</p>\n\
                <p class='mb-1'>"+datos[i].PRODNOMBRE+"</p>\n\
                <p class='mb-2 font-dark4'>COD 1161560</p>\n\
                <p class='mb-2 bg-primary text-white px-2 border rounded-pill' style='width:fit-content;'>DISPONIBLE</p>\n\
            </div>\n\
        </div></div>"
                    }
                }
                contenedor+="\n\</div>"
                for(var j=0; j<datos.length-1; j++){

                    var a=0;
                    contenedor += "<div class='carousel-item row no-gutters'>";

                    for(var k=1; k<5; k++){

                        if((k+j)<datos.length){
                            contenedor+="\n\<div class='col-sm-3 col-12 float-left p-2 text-left'><div class='card' id='"+datos[k+j].PRODCODIGO+"' onclick='vWeb.seleccionarProducto(this)'>\n\
            <div class='view overlay zoom'>\n\
                <img class='card-img-top' src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[k+j].PRODIMAGEN+"' style='cursor:pointer; height:40vh;'>\n\
            </div>\n\
            <div class='card-body'>\n\
                <p class='mb-2 font-dark4'>PROTECTA</p>\n\
                <p class='mb-1'>"+datos[k+j].PRODNOMBRE+"</p>\n\
                <p class='mb-2 font-dark4'>COD 1161560</p>\n\
                <p class='mb-2 bg-primary text-white px-2 border rounded-pill' style='width:fit-content;'>DISPONIBLE</p>\n\
            </div>\n\
        </div></div>"
                        }else{
                            contenedor+="\n\<div class='col-sm-3 col-12 float-left p-2 text-left'><div class='card' id='"+datos[a].PRODCODIGO+"' onclick='vWeb.seleccionarProducto(this)'>\n\
            <div class='view overlay zoom'>\n\
                <img class='card-img-top' src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[a].PRODIMAGEN+"' style='cursor:pointer; height:40vh;'>\n\
            </div>\n\
            <div class='card-body'>\n\
                <p class='mb-2 font-dark4'>PROTECTA</p>\n\
                <p class='mb-1'>"+datos[a].PRODNOMBRE+"</p>\n\
                <p class='mb-2 font-dark4'>COD 1161560</p>\n\
                <p class='mb-2 bg-primary text-white px-2 border rounded-pill' style='width:fit-content;'>DISPONIBLE</p>\n\
            </div>\n\
        </div></div>"
                            a++;
                        }

                    }
                    contenedor+="\n\</div>"

                }
                $("#productosRelacionados").html(contenedor);

                //VERSION MOVIL
                contenedor = "";
                for(var i=0; i<datos.length ; i++){
                    if(i==0){
                        contenedor += "<div class='carousel-item justify-content-center no-gutters p-2 text-left active'>";
                        contenedor+="\n\<div class='card' id='"+datos[i].PRODCODIGO+"' onclick='vWeb.seleccionarProducto(this)'>\n\
            <div class='view overlay zoom'>\n\
                <img class='card-img-top' src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[i].PRODIMAGEN+"' style='cursor:pointer; height:40vh;'>\n\
            </div>\n\
            <div class='card-body'>\n\
                <p class='mb-2 font-dark4'>PROTECTA</p>\n\
                <p class='mb-1'>"+datos[i].PRODNOMBRE+"</p>\n\
                <p class='mb-2 font-dark4'>COD 1161560</p>\n\
                <p class='mb-2 bg-primary text-white px-2 border rounded-pill' style='width:fit-content;'>DISPONIBLE</p>\n\
            </div>\n\
        </div></div>"
                    }else{
                        contenedor += "<div class='carousel-item justify-content-center p-2 text-left no-gutters '>";
                        contenedor+="\n\<div class='card' id='"+datos[i].PRODCODIGO+"' onclick='vWeb.seleccionarProducto(this)'>\n\
            <div class='view overlay zoom'>\n\
                <img class='card-img-top' src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[i].PRODIMAGEN+"' style='cursor:pointer; height:40vh;'>\n\
            </div>\n\
            <div class='card-body'>\n\
                <p class='mb-2 font-dark4'>PROTECTA</p>\n\
                <p class='mb-1'>"+datos[i].PRODNOMBRE+"</p>\n\
                <p class='mb-2 font-dark4'>COD 1161560</p>\n\
                <p class='mb-2 bg-primary text-white px-2 border rounded-pill' style='width:fit-content;'>DISPONIBLE</p>\n\
            </div>\n\
        </div></div>"
                    }
                }
                $("#productosRelacionadosCelular").html(contenedor);
            }
        });
        
      }
  
  
    </script>

</body>
</html>