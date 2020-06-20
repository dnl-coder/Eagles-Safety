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

    <!--===========================================================
        CONTENIDO GENERAL DE LA VISTA
    =============================================================-->

    <div class="contenedor-principal mx-auto my-1">

        <!--TITULO-->
        <h3 class="titulo mb-3">ACTUALIZAR PRODUCTO</h3>
        
        <!--CONTENIDO GENERAL-->
        <div>
    
            <!--CONTENIDO-->
        <div class="row">

                    <!--SELECCIONAR CATEGORIA-->
                    <div class="col-12 col-sm-6">
                        
                        <div class="form-group">
                            <h6>SELECCIONAR CATEGORIA <span class="red-text font-weight-bold">*</span></h6>
                            <select id="selCategoria" class="form-control">
                                <option value="">Seleccionar categoría</option>
                            </select>
                        </div>

                    </div>

                    <!--SELECCIONAR PRODUCTO-->
                    <div class="col-12 col-sm-6">
                        
                        <div class="form-group">
                            <h6>SELECCIONAR PRODUCTO <span class="red-text font-weight-bold">*</span></h6>
                            <select id="selProducto" class="form-control">
                                <option value="">Seleccionar producto</option>
                            </select>
                        </div>

                    </div>

                    <!--SEPARADOR-->
                    <div class="col-12">
                        <hr>
                    </div>

                    <!--IMAGENES-->
                    <div class="col-md-5 col-sm-5"><form action="" id="form">
                        
                        <!--IMAGEN DEL PRODUCTO-->
                        <div class="text-center">
                                <h6 class="text-left mx-auto" style="width:300px;">IMAGEN DEL PRODUCTO</h6>
                                <img id="previewFoto" class="formulario mx-auto my-2" style="width: 300px; height: 250px;">
                                <label for="foto" class="btn2">CAMBIAR IMAGEN</label>
                                <input id="foto" class="my-2" name="archivo1" type="file" accept="image/*" style="display: none"><input type="text" hidden id="estado">
                        </div>

                    </form></div>

                    <!--INGRESAR DATOS-->
                    <div class="col-md-7 col-sm-7">

                        <!--NOMBRE-->
                        <div class="form-group">
                            <h6>NOMBRE <span class="red-text font-weight-bold">*</span></h6>
                            <input id="nombre" type="text" class="form-control" placeholder="ingresar el nombre del producto...">
                        </div>

                        <!--DESCRIPCION-->
                        <div class="form-group">
                            <h6>DESCRIPCION <span class="red-text font-weight-bold">*</span></h6>
                            <input id="descripcion" type="text" class="form-control" placeholder="ingresar descripcion breve del producto...">
                        </div>

                        <!--DESCRIPCION ESPECIFICA-->
                        <div class="form-group">
                            <h6>DESCRIPCION ESPECIFICA<span class="red-text font-weight-bold">*</span></h6>
                            <input id="descripcionEspecifica" type="text" class="form-control" placeholder="ingresar descripcion especifica del producto...">
                        </div>

                        <!--CATEGORIA-->
                        <div class="form-group">
                            <h6>CATEGORIA<span class="red-text font-weight-bold">*</span></h6>
                            <select id="categoria" class="form-control">
                                <option value="">Seleccionar categoria</option>
                                <option value="1">Protección anticaída</option>
                            </select>
                        </div>

                        <!--DESTACADO-->
                        <div class="row mx-0 form-group">
                            <h6>¿ES UN PRODUCTO DESTACADO?<span class="red-text font-weight-bold">*</span></h6>
                            <select id="destacado" class="form-control">
                                <option value="1">SI</option>
                                <option value="0" selected>NO</option>
                            </select>
                        </div>

                    </div>

        </div>
        
            <!--BOTONES-->
        <div class="row justify-content-center my-5">
                    <div class="col-md-4 col-sm-4">
                        <button class="btn btn-block enfasis1" onclick="validarFormulario()" type="submit">Actualizar</button>
                    </div>
        </div>
        
        </div>
        
        <!--ALERTA-->
        <div class="alert alert-danger mx-5" role="alert">
                * Campo obligatorio!
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

    <!--===========================================================
        SCRIPTS DE LA VISTA
    =============================================================-->

    <script>
    
    //--INICIALIZAR FUNCIONES--
    var mostrar=false;
    mostrarCategorias();
    //cargarDatos("1");
        
    //--LLAMAR A FUNCION MOSTRAR IMAGEN AL CARGAR IMAGEN--  
    var inputFile = document.getElementById('foto');
    inputFile.addEventListener('change', vGenerales.mostrarImagen, false);   
    
    //--SELECCION DE CATEGORIA--
    $("#selCategoria").change(function() {
        mostrarProductos($("#selCategoria option:selected").html());
    });
    
    //--SELECCION DE PRODUCTO--
    $("#selProducto").change(function() {
        cargarDatos($("#selProducto option:selected").val());
    });
    
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
                    $("#selCategoria").html("");
                    var categorias = "<option value=''>Seleccionar categoria</option>"
                    for (var i=0;i<datos.length;i++){
                        categorias+="\<option value='"+datos[i].CATCODIGO+"'>"+datos[i].CATNOMBRE+"</option>"
                    }
                    categorias += "\</select>"
                    $("#selCategoria").append(categorias);
                }
            }
        });
    }
    
    //-MOSTRAR TODOS LOS PRODUCTOS--
    function mostrarProductos(cat){
        
        var $datos={
            '_categoria': cat
        }
        
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarProductos.php',
            type: 'POST',
            data: $datos,
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
                    $("#selProducto").html("");
                    var productos = "<option value=''>Seleccionar producto</option>"
                    for (var i=0;i<datos.length;i++){
                        productos+="\<option value='"+datos[i].PRODCODIGO+"'>"+datos[i].PRODNOMBRE+"</option>"
                    }
                    productos += "\</select>"
                    $("#selProducto").append(productos);
                }
            }
        });
        
    }
    
    //--CARGAR INFORMACION EXISTENTE EN LA BASE DE DATOS--
    function cargarDatos(op){
        
        var $datos={
            '_codigo': op
        }
        
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_DetalleProducto.php',
            type: 'POST',
            data: $datos,
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
                    $("#nombre").val(datos.PRODNOMBRE);
                    $("#descripcion").val(datos.PRODDESCRIPCION);
                    $("#descripcionEspecifica").val(datos.PRODDESCRIPCION_ESPECIFICA);
                    $("#categoria option[value="+ datos.CATCODIGO +"]").attr("selected",true);
                    $("#destacado option[value="+ datos.PRODDESTACADO +"]").attr("selected",true);
                    
                    if(datos.PRODIMAGEN!=""){
                    document.getElementById('previewFoto').src = datos.PRODIMAGEN;
                    }
                }
            }
        });
        
    }
    
    //--VALIDAR DATOS INGRESADOS EN EL FORMULARIO --  
    function validarFormulario(){
    
        var R1 = $("#nombre").val();
        var R2 = $("#descripcion").val();
        var R3 = $("#descripcionEspecifica").val();
        var R4 = $("#categoria").val();
        var R5 = $("#destacado").val();
        
        if(R1 == null || R1.length == 0 || /^\s+$/.test(R1)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#nombre").focus();
        }
        else if(R2 == null || R2.length == 0 || /^\s+$/.test(R2)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#descripcion").focus();
        }
        else if(R3 == null || R3.length == 0 || /^\s+$/.test(R3)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#descripcionEspecifica").focus();
        }
        else if(R4 == null || R4.length == 0 || /^\s+$/.test(R4)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#categoria").focus();
        }
        else if(R5 == null || R5.length == 0 || /^\s+$/.test(R5)){
            alert('ERROR: El campo no debe ir vacío o lleno solamente espacios en blanco');
            $("#destacado").focus();
        }
        else if(document.getElementById('foto').files.length == 0){
            actualizarProducto();
        }else{
            guardarImagenProducto();
            
            if ($("#estado").val() == "IMAGEN GUARDADA CORRECTAMENTE"){
                actualizarProducto()
            }else{
                mostrar=true;
                mostrarToast("error",$("#estado").val());
            }
        }
            
    } 
        
    //--GUARDAR IMAGEN DEL PRODUCTO --
    function guardarImagenProducto(){
    
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
        url: "ES-BackEnd/Controlador/Controlador-CMS/Controlador_GuardarImagenProducto.php",
        type: "POST",
        data: nuevoFormulario,
        contentType: false,
        processData: false,
        async:false,
        success: function(datos){
            if(datos.response==0 ){
                $("#estado").val("ERROR AL GUARDAR LA IMAGEN: "+datos.message)
            }else{
                $("#estado").val("IMAGEN GUARDADA CORRECTAMENTE")
            }
        }
    });
    }
        
    //--AGREGAR NUEVO PRODUCTO --    
    function actualizarProducto(){
        var rutaFoto1,nombreFoto1;
    
        if(document.getElementById('foto').files.length == 0){
        if(document.getElementById('previewFoto').src==""){
            rutaFoto1="";
        }else{
            nombreFoto1=document.getElementById('previewFoto').src.split("/Imagenes/");
            rutaFoto1="ES-FrontEnd/Elementos/Imagenes/"+nombreFoto1[1];
        }
        }else{
        rutaFoto1="ES-FrontEnd/Elementos/Imagenes/"+document.getElementById('foto').files[0].name
        }
        
            mostrar=true;
        
        var $datos={
            '_codigo': $("#selProducto option:selected").val(),
            '_nombre': $("#nombre").val(),
            '_descripcion': $("#descripcion").val(),
            '_descripcionEspecifica': $("#descripcionEspecifica").val(),
            '_codcategoria': $("#categoria").val(),
            '_destacado': $("#destacado").val(),
            '_imagen': rutaFoto1
        }
        
        $.ajax({
            url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_ActualizarProducto.php',
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
                    mostrarToast("error",'ERROR: '+datos.message);
                }
                else{
                    mostrarToast("exito","Producto actualizado exitosamente!");
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