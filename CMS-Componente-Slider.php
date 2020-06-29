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
            <button class="btn py-2 bg-primary" data-toggle="modal" data-target="#agregarSlider" onclick="agregarSliderOp()">Agregar</button>
            <button class="btn py-2 bg-primary" onclick="cargarDatos()">Actualizar</button>
          </div>
        </div>
                  
      </div>

      <!--SLIDERS-->
      <div id="contenidoModificar" class="px-5 mt-0 mb-5 d-flex flex-wrap justify-content-center">
      </div>

      <!-- MODAL AÑADIR/ACTUALIZAR SLIDER -->
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
                      <input id="codigo" hidden type="text">
                  </div>
                  
                  <div class="form-group">
                      <h6 class="subtitulo">Descripcion</h6>
                      <input id="descripcion" type="text" class="form-control">
                  </div>

                  <h6 class="subtitulo">Imagen</h6>
                  <img id="previewFoto" class="imagenMinSlider mb-2"><br>
                  <label for="foto" class="botonSecundario">Seleccionar imagen</label>
                  <input id="foto" class="inputImagen" name="archivo" type="file" accept="image/*"><input type="text" hidden id="estado">

              </form>
            </div>
            
            <!-- BOTONES -->
            <div class="modal-footer">
              <button id="guardar" type="button" class="btn bg-primary" onClick="validarFormulario()">Guardar</button>
              <button id="actualizar" type="button" class="btn bg-primary" onClick="validarFormulario2()">Actualizar</button>
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
    
    <script>
    var mostrar=false;
    //--INICIALIZAR FUNCIONES--
    cargarDatos();
    mostrarToast();

    //--LLAMAR A FUNCION MOSTRAR IMAGEN AL CARGAR IMAGEN--  
    var inputFile = document.getElementById('foto');
    inputFile.addEventListener('change', vGenerales.mostrarImagen, false);  

    //--CARGAR DATOS DE LA TABLA SLIDER--  
    function cargarDatos(){

        var slider="", slider2="";

        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarSliders.php',
            type: 'GET',
            dataType: 'json',
            error: function(error){
                if(error.status == 401){
                    mostrarToast("error","No se pudo establecer conexion con el servidor");
                }
                else{
                    mostrarToast("error","Error no identificado.");
                }
            },
            success: function(datos){
                if(datos.response == 0){
                    $("#contenidoVistaPrevia").html("");
                    $("#contenidoModificar").html("");
                }
                else{
                    for(var i=0; i<datos.length; i++){
                        if(i==0){
                            slider+="<div class='carousel-item active' style='background:url("+datos[i].SLDRIMAGEN+");'> \
                                <div class='descripcionSlider container-fluid wow fadeIn' data-wow-delay='0.4s'>\
                                    <p class='h3-responsive wow fadeInLeftBig'>"+datos[i].SLDRNOMBRE+"</p>\
                                    <p class='descripcion wow fadeIn'>"+datos[i].SLDRDESCRIPCION+"</p>\
                                    </div>\
                            </div>\
                        </div>"
                        }else{
                            slider+="<div class='carousel-item' style='background:url("+datos[i].SLDRIMAGEN+");'> \
                                <div class='descripcionSlider container-fluid wow fadeIn' data-wow-delay='0.4s'>\
                                    <p class='h3-responsive wow fadeInLeftBig'>"+datos[i].SLDRNOMBRE+"</p>\
                                    <p class='descripcion wow fadeIn'>"+datos[i].SLDRDESCRIPCION+"</p>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>"
                        }

                        slider2+="<div class='p-1'>\
                <img class='imagenMinSlider' src='"+datos[i].SLDRIMAGEN+"'>\
                <div class='opcionesSlider'>\
                    <button class='btn bg-primary' onclick='mostrarDatosSlider("+datos[i].SLDRCODIGO+")'  data-toggle='modal'' data-target='#agregarSlider'><i class='fas fa-pen'></i></button>\
                    <button class='btn ml-5' onclick='eliminarSlider("+datos[i].SLDRCODIGO+")'>X</button>\
                </div>\
            </div>"

                    }
                    $("#contenidoVistaPrevia").html(slider);
                    $("#contenidoModificar").html(slider2);
                    $("#cantSlider").html(datos.length);

                }
            }
        });

    }
      
    //--MOSTRAR DATOS SLIDER--      
    function mostrarDatosSlider(cod){
      
        $("#guardar").addClass("d-none");
        $("#actualizar").removeClass("d-none");

        var $datos={
            '_codigo': cod
        }

        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_DetalleSlider.php',
            type: 'POST',
            data: $datos,
            dataType: 'json',
            error: function(error){
                if(error.status == 401){
                    mostrarToast("error","No se pudo establecer conexion con el servidor");
                }
                else{
                    mostrarToast("error","Error no identificado.");
                }
            },
            success: function(datos){
                if(datos.response == 0){
                    mostrarToast("error",datos.message);
                }
                else{
                    $("#codigo").val(datos.SLDRCODIGO);
                    $("#titulo").val(datos.SLDRNOMBRE);
                    $("#descripcion").val(datos.SLDRDESCRIPCION);
                    document.getElementById('previewFoto').src = datos.SLDRIMAGEN;
                }
            }
        });

    }

    //--VALIDAR DATOS INGRESADOS EN EL FORMULARIO--  
    function validarFormulario(){

        var R1 = $("#titulo").val();
        var R2 = $("#descripcion").val();

        if(R1 == null || R1.length == 0 || /^\s+$/.test(R1)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#titulo").focus();
        }
        else if(R2 == null || R2.length == 0 || /^\s+$/.test(R2)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#descripcion").focus();
        }else{
            guardarImagenSlider();
            if ($("#estado").val() == "IMAGEN GUARDADA CORRECTAMENTE"){
                agregarSlider()
            }else{
                alert($("#estado").val());
            }
        }

    } 
      
    //--VALIDAR DATOS INGRESADOS EN EL FORMULARIO--  
    function validarFormulario2(){

        var R1 = $("#titulo").val();
        var R2 = $("#descripcion").val();

        if(R1 == null || R1.length == 0 || /^\s+$/.test(R1)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#titulo").focus();
        }
        else if(R2 == null || R2.length == 0 || /^\s+$/.test(R2)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#descripcion").focus();
        }else{
            if(document.getElementById('foto').files.length == 0){
                actualizarSlider();
            }else{
                guardarImagenSlider();

                if ($("#estado").val() == "IMAGEN GUARDADA CORRECTAMENTE"){
                        actualizarSlider()
                }else{
                        mostrar=true;
                        mostrarToast("error",$("#estado1").val());
                }

            }
          
        }

    } 

    //--GUARDAR IMAGEN DEL SLIDER--  
    function guardarImagenSlider(){

      var nuevoFormulario = new FormData();   
      $("#form").find(':input').each(function() {
        var elemento= this;
        //Si recibe tipo archivo 'file'
        if(elemento.type === 'file'){
           if(elemento.value !== ''){
              for(var i=0; i< $('#'+elemento.id).prop("files").length; i++){
                  nuevoFormulario.append(elemento.name, $('#'+elemento.id).prop("files")[i]);
               }
           }              
         }
      });

      $.ajax({
          url: "ES-BackEnd/Controlador/Controlador-CMS/Controlador_GuardarImagenSlider.php",
          type: "POST",
          data: nuevoFormulario,
          contentType: false,
          processData: false,
          async:false,
          success: function(datos){
            if(datos.response==0){
                  $("#estado").val("ERROR AL GUARDAR LA IMAGEN: "+datos.message)
              }else{
                  $("#estado").val("IMAGEN GUARDADA CORRECTAMENTE")
              }
          }
      });
    }    

    //--AÑADIR SLIDER--
    function agregarSlider(){
        var rutaFoto,nombreFoto;

        if(document.getElementById('foto').files[0].name == undefined){
          if(document.getElementById('previewFoto').src==""){
            rutaFoto="";
          }else{
            nombreFoto=document.getElementById('previewFoto').src.split("/Slider/");
            rutaFoto="ES-FrontEnd/Elementos/Imagenes/Slider/"+nombreFoto[1];
          }
        }else{
          rutaFoto="ES-FrontEnd/Elementos/Imagenes/Slider/"+document.getElementById('foto').files[0].name
        }

        var $datos={
            '_titulo': $("#titulo").val(),
            '_descripcion': $("#descripcion").val(),
            '_rutaFoto': rutaFoto
        }

        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_AgregarSlider.php',
            type: 'POST',
            data: $datos,
            dataType: 'json',
            error: function(error){
                if(error.status == 401){
                    mostrarToast("error","No se pudo establecer conexion con el servidor");
                }
                else{
                    mostrarToast("error","Error no identificado.");
                }
            },
            success: function(datos){
                if(datos.response == 0){
                    mostrarToast("error",datos.message);
                }
                else{
                    document.getElementById("guardar").disabled=false;
                    $('#agregarSlider').modal('hide');
                    $("#titulo").val("");
                    $("#descripcion").val("");
                    $("#foto").val("");
                    document.getElementById('previewFoto').src="";
                    cargarDatos();
                    mostrarToast('exito','Imagen agregada correctamente');
                }
            }
        });

    }

    //--OP DE AGREGAR SLIDER--      
    function agregarSliderOp(){
      
        $("#guardar").removeClass("d-none");
        $("#actualizar").addClass("d-none");
      
    }

    //--ACTUALIZAR SLIDER--      
    function actualizarSlider(){
      
        var rutaFoto, nombreFoto;

        if(document.getElementById('foto').files.length == 0){
          if(document.getElementById('previewFoto').src==""){
            rutaFoto="";
          }else{
            nombreFoto=document.getElementById('previewFoto').src.split("/Slider/");
            rutaFoto="ES-FrontEnd/Elementos/Imagenes/Slider/"+nombreFoto[1];
          }
        }else{
          rutaFoto="ES-FrontEnd/Elementos/Imagenes/Slider/"+document.getElementById('foto').files[0].name
        }

        var $datos={
            '_codigo': $("#codigo").val(),
            '_nombre': $("#titulo").val(),
            '_descripcion': $("#descripcion").val(),
            '_imagen': rutaFoto
        }

        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_ActualizarSlider.php',
            type: 'POST',
            data: $datos,
            dataType: 'json',
            error: function(error){
                if(error.status == 401){
                    mostrarToast("error","No se pudo establecer conexion con el servidor");
                }
                else{
                    mostrarToast("error","Error no identificado.");
                }
            },
            success: function(datos){
                if(datos.response == 0){
                    mostrarToast("error",datos.message);
                }
                else{
                    mostrar=true;
                    mostrarToast('exito','Slider editado correctamente');
                    cargarDatos();
                    $('#agregarSlider').modal('hide');
                }
            }
        });

    }

    //--ELIMINAR SLIDER--      
    function eliminarSlider(cod){

        var $datos={
            '_codigo': cod
        }

        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_EliminarSlider.php',
            type: 'POST',
            data: $datos,
            dataType: 'json',
            error: function(error){
                if(error.status == 401){
                    mostrarToast("error","No se pudo establecer conexion con el servidor");
                }
                else{
                    mostrarToast("error","Error no identificado.");
                }
            },
            success: function(datos){
                if(datos.response == 0){
                    mostrarToast("error",datos.message);
                }
                else{
                    mostrar=true;
                    mostrarToast('exito','Slider eliminado correctamente');
                    cargarDatos();
                }
            }
        });

    }  
      
    //--MOSTRAR TOAST CON MENSAJE--
    function mostrarToast(tipo,msj){
        if(mostrar==true){
                    switch(tipo){
                        case 'exito':
                            $(".toast").removeClass("succesfull");
                            $(".toast").removeClass("error");

                            $(".toast").addClass("succesfull");
                            break;
                        case 'error':
                            $(".toast").removeClass("succesfull");
                            $(".toast").removeClass("error");

                            $(".toast").addClass("error");
                            break;
                    }

            $('.toast-body').html('');
            $('.toast-body').html(msj);

            $('.toast').toast('show');
            $('.toast').addClass('visualizar');
        }
        mostrar=false;
    }

    </script>
   
</body>

</html>