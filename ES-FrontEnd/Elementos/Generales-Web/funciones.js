/*=============================================
    BARRA DE NAVEGACION SCRIPTS
=============================================*/

//--REDIRIGIR A INICIO--
$("#logo-Eagles").click(function() {
    window.location="index.php";
});     
    
//--AÑADIR CLASE ACTIVE A LA OPCION DEL NAVBAR SELECCIONADA--
 $(document).ready(function () { 
     $(function(){ 
         var current_page_URL = location.href; 
         $( "a" ).each(function() { 
            if ($(this).attr("href") !== "#") { 
                var target_URL = $(this).prop("href"); 
                if (target_URL == current_page_URL) { 
                    $('nav a').parents('li, ul').removeClass('activeNav'); 
                    $(this).parent('li').addClass('activeNav'); 
                    return false; 
                } 
            }
         }); 
     }); 
 }); 

//-- ANIMACION TEXTO ESCRIBIENDOSE (INDEX) --
var TxtType = function (el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};
TxtType.prototype.tick = function () {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting){
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else{
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function() {that.tick();}, delta);
};
window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};    

//--MOSTRAR/OCULTAR CATEGORIAS RESPONSIVE--
$(window).resize(function(){
    if (window.innerWidth>991){
        // ## agregar clase
        $('#filtroCategoriasContent').addClass('d-none'); 
    }else{
        // ## eliminar clase
        $('#filtroCategoriasContent').removeClass('d-block');
    }
});

/*=============================================
    FUNCIONES GENERALES
=============================================*/
var data="";
var vistaWeb = function (){}

//-- FUNCION MOSTRAR SLIDERS --
vistaWeb.prototype.mostrarSliders = function(){
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_MostrarSliders.php',
        type: 'GET',
        dataType: 'json',
        error: function(error){
            if(error.status == 401){
                console.log("Archivos no encontrados");
            }
            else{
                console.log("Error no identificado");
            }
        },
        success: function(datos){
            var sliders=""
            for (var i=0; i<datos.length;i++){
                if(i==0){
                    sliders+="<div class='carousel-item active' style='background:url(\""+datos[i].SLDRIMAGEN+"\");'>"
                }
                else{
                    sliders+="<div class='carousel-item' style='background:url(\""+datos[i].SLDRIMAGEN+"\");'>"
                }
                sliders+="\<div class='descripcionSlider container-fluid wow fadeIn' data-wow-delay='0.4s'>\
                                <p class='h1-responsive wow fadeInLeftBig'>EQUIPOS</p>\
                                <p class='h1-responsive wow fadeInLeftBig'>QUE PROTEGEN</p>\
                                <p class='h1-responsive wow fadeInLeftBig'>TU VIDA</p>\
                                <p class='descripcion wow fadeIn'>Tenemos los mejores productos para garantizar tu cuidado</p>\
                            </div>\
                        </div>\
                    </div>"
            }
            $("#CarouselInicio .carousel-inner").html(sliders);
        }
    });
};

//-- FUNCION MOSTRAR INFORMACION DE LA EMPRESA --
vistaWeb.prototype.mostrarInformacionEmpresa = function(){
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarDatosEmpresa.php',
        type: 'GET',
        dataType: 'json',
        error: function(error){
            if(error.status == 401){
                console.log("Archivos no encontrados");
            }
            else{
                console.log("Error no identificado");
            }
        },
        success: function(datos){

            //NAV
            $("#telNavES").html("<span class='fa fa-phone rounded-circle mr-2 pl-1 pt-1'></span>"+datos[0].INFEMPTELEFONO1+" / "+datos[0].INFEMPTELEFONO2);

            $("#correoNavES").html("<span class='fa fa-envelope rounded-circle mr-2 pl-1 pt-1'></span>"+datos[0].INFEMPCORREO);

					
            //FOOTER
            $("#correoES").html(datos[0].INFEMPCORREO);

            document.getElementById('red1ES').href = datos[0].INFEMPRED_SOCIAL1;
            document.getElementById('red2ES').href = datos[0].INFEMPRED_SOCIAL2;

            $("#tel1ES").html(datos[0].INFEMPTELEFONO1);
            $("#tel2ES").html(datos[0].INFEMPTELEFONO2);

            $("#direccion1ES").html(datos[0].INFEMPDOMICILIO+", "+datos[0].INFEMPDISTRITO);
            $("#direccion2ES").html(datos[0].INFEMPPROVINCIA+", "+datos[0].INFEMPPAIS);
            

        }
    });
};

//-- FUNCION MOSTRAR MARCAS DE LA EMPRESA --
vistaWeb.prototype.mostrarMarcas = function(){
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarMarcas.php',
        type: 'GET',
        dataType: 'json',
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

            //MARCAS VERSION WEB
            contenedor += "<div class='carousel-item row no-gutters active'>";
            for(var i=0; i<datos.length ; i++){
                if(i<4){
                    contenedor+="\n\<div class='col-sm-3 col-12 float-left'><img id='marca-"+datos[i].MARCCODIGO+"' class='img-fluid' src='"+datos[i].MARCIMAGEN+"'></div>"
                }
            }
            contenedor+="\n\</div>"
            for(var j=0; j<datos.length-1; j++){

                var a=0;
                contenedor += "<div class='carousel-item row no-gutters'>";

                for(var k=1; k<5; k++){

                    if((k+j)<datos.length){
                        contenedor+="\n\<div class='col-sm-3 col-12 float-left'><img id='marca-"+datos[k+j].MARCCODIGO+"' class='img-fluid' src='"+datos[k+j].MARCIMAGEN+"'></div>"
                    }else{
                        contenedor+="\n\<div class='col-sm-3 col-12 float-left'><img id='marca-"+datos[a].MARCCODIGO+"' class='img-fluid' src='"+datos[a].MARCIMAGEN+"'></div>"
                        a++;
                    }

                }
                contenedor+="\n\</div>"

            }
            $("#MARCAS").html(contenedor);

            //MARCAS VERSION MOVIL
            contenedor = "";
            for(var i=0; i<datos.length ; i++){
                if(i==0){
                    contenedor += "<div class='carousel-item justify-content-center no-gutters active'>";
                    contenedor+="\n\<img id='marca-"+datos[i].MARCCODIGO+"' class='img-fluid' src='"+datos[i].MARCIMAGEN+"'></div>"
                }else{
                    contenedor += "<div class='carousel-item justify-content-center no-gutters '>";
                    contenedor+="\n\<img id='marca-"+datos[i].MARCCODIGO+"' class='img-fluid' src='"+datos[i].MARCIMAGEN+"'></div>"
                }
            }
            $("#MARCASCEL").html(contenedor);
        }
    });
};

//-- FUNCION MOSTRAR PRODUCTOS DESTACADOS--
vistaWeb.prototype.mostrarProductosDestacados = function(){
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarProductosDestacados.php',
        type: 'GET',
        dataType: 'json',
        error: function(error){
            if(error.status == 401){
                console.log("Archivos no encontrados");
            }
            else{
                console.log("Error no identificado");
            }
        },
        success: function(datos){
            data=datos;
            var contenedor = "";
            for(var i=0; i<3 ; i++){
                contenedor += "<div id='producto-"+datos[i].PRODCODIGO+"' class='col-12 wow fadeIn' style='min-width:150px; max-width:250px;'>\n\
                <div class='card m-1'>\n\
                    <!--imagen-->\n\
                    <div class='view overlay zoom'>\n\
                        <img id='"+datos[i].PRODCODIGO+"' class='card-img-top' src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[i].PRODIMAGEN+"' onclick='vWeb.seleccionarProducto(this)' style='cursor:pointer;'>\n\
                    </div>\n\
                    <!--titulo-->\n\
                    <div class='card-body'>\n\
                        <p class='font-weight-bold text-uppercase mb-1' >"+datos[i].PRODNOMBRE+"</p>\n\
                        <hr class='bg-light3 my-0' style='width: 60%; height:3px;'>\n\
                        <hr class='bg-primary my-1' style='width: 20%; height:3px;'>\n\
                        <div class='text-right'>\n\
                            <a id='"+datos[i].PRODCODIGO+"' class='btn bg-primary btn-sm py-0 px-1' onclick='vWeb.seleccionarProducto(this)'>Ver más</a> \n\
                        </div>\n\
                    </div>\n\
                </div>\n\
                </div>";
            }

            $("#DESTACADOS").html(contenedor);
        }
    });
};

//-- FUNCION SELECCIONAR Y MOSTRAR LA INFORMACION DEL PRODUCTO --
vistaWeb.prototype.seleccionarProducto = function(e){
    var id = e.id;
    var modal="";
    var numproducto = 0;
    datos=data;
    
    //BUSCAR DATOS DE PRODUCTO EN ARRAY
    for(var i=0; i<datos.length; i++){
       if(datos[i].PRODCODIGO == id){
           var texto=datos[i].PRODDESCRIPCION;
           numproducto = i;
       }
    }
    //Descripcion General- Características
    var lineas = texto.split("\n");
    var caracteristicas="";
    
    for(var i=0; i<lineas.length; i++){
        caracteristicas+="\n\<li>"+lineas[i]+"</li>";
    }
    
    modal+="<div class='modal-content'>\n\
    <!-- ENCABEZADO -->\n\
    <div class='modal-header pb-0 border border-0'>\n\
        <!-- TITULO --> \n\
        <div>\n\
          <p class='font-weight-bold small mb-0'>"+datos[numproducto].PRODNOMBRE+"</p>\n\
          <hr class='bg-light3 my-0 mx-0' style='width: 60%; height:2px;'>\n\
          <hr class='bg-primary my-1 mx-0' style='width: 20%; height:2px;'>\n\
        </div>\n\
        <!-- BOTON CERRAR --> \n\
        <button type='button' class='close p-3' data-dismiss='modal' aria-label='Close'>\n\
            <span aria-hidden='true'>&times;</span>\n\
        </button>\n\
    </div>\n\
    <!-- CUERPO -->\n\
    <div class='modal-body'>\n\
    <div class='row'>\n\
        <!-- IMAGEN Y CONTACTO --> \n\
        <div class='col-12 col-lg-5 py-1'>\n\
            <!-- imagen -->   \n\
            <img class='img-fluid d-block mx-auto' src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[numproducto].PRODIMAGEN+"' style='max-height:40vh;' />\n\
        </div>    \n\
        <!-- CARACTERISTICAS -->\n\
        <div class='col-12 col-lg-7 p-0'>\n\
            <!-- descripcion --> \n\
            <div class='mx-2'>\n\
                <p class='font-weight-bold small'>Características</p>\n\
                <ul class='pl-3 small'>"+caracteristicas+"\n\</ul>\n\
                <div class='row justify-content-center'>\n\
                  <p class='mx-1 px-2 py-1 mb-0 small text-white rounded black'><i class='fas mr-1 fa-shield-alt'></i>Seguridad</p>\n\
                  <p class='mx-1 px-2 py-1 mb-0 small text-white rounded bg-primary'><i class='fas mr-1 fa-balance-scale'></i>Calidad</p>\n\
                  <p class='mx-1 px-2 py-1 mb-0 small text-white rounded bg-enfasis3'><i class='fas mr-1 fa-trophy'></i>Garantía</p>\n\
                </div>\n\
            </div>\n\
        </div>\n\
    </div> \n\
    </div>\n\
    </div>";
    $(".modal-dialog").html(modal);
    
    $("#modalDescripcion").modal({show:true});
};

//-- FUNCION MOSTRAR INFORMACION DE LA EMPRESA --
vistaWeb.prototype.mostrarInformacionNosotros = function(){
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarDatosNosotros.php',
        type: 'GET',
        dataType: 'json',
        error: function(error){
            if(error.status == 401){
                console.log("Archivos no encontrados");
            }
            else{
                console.log("Error no identificado");
            }
        },
        success: function(datos){
            $("#quienesSomos div p").html(datos.NOSTDESCRIPCION);
			$("#mision div p").html(datos.NOSTMISION);
			document.getElementById('imgMision').src = datos.NOSTMISION_IMAGEN;
			$("#vision div p").html(datos.NOSTVISION);
			document.getElementById('imgVision').src = datos.NOSTVISION_IMAGEN;

        }
    });
};

//-- VALIDAR INFORMACION DE CONTACTANOS EN LA WEB --
vistaWeb.prototype.validar = function(){
    var nombre=$("#nombre").val();
    var correo=$("#correo").val();
    var mensaje=$("#mensaje").val();    
    
    if(nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)){
        alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
        $("#nombre").focus();
    }
    else if(mensaje == null || mensaje.length == 0 || /^\s+$/.test(mensaje)){
        alert('ERROR: El campo contraseña no debe ir vacío o lleno de solamente espacios en blanco');
        $("#mensaje").focus();
    }
    else if(nombre.length<3 || nombre.length>40){
        alert('ERROR Nombre: Tamaño mínimo : 3. Tamaño máximo: 40');
        $("#nombreo").focus();
    }
    else if(mensaje.length<4 || mensaje.length>40){
        alert('ERROR Mensaje: Tamaño mínimo: 4. Tamaño máximo: 100');
        $("#mensaje").focus();
    }
    else if(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/.test(correo)){
            vWeb.insertarMensajeContactanos();
        }else{
            alert("Correo incorrecto");
        }
};

//-- FUNCION GUARDAR MENSAJE DE CONTACTANOS EN LA BD --
vistaWeb.prototype.insertarMensajeContactanos = function(){
    var $datos={
        '_nombre': $("#nombre").val(),
        '_correo': $("#correo").val(),
        '_mensaje': $("#mensaje").val()
    }
    
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_InsertarMensajeContactanos.php',
        type: 'POST',
        data: $datos,
        dataType: 'json',
        error: function(error){
            if(error.status == 401){
				console.log("Información no enviada");
            }
            else{
				console.log("Error no identificado");
            }
        },
        success: function(msg){
            if(msg.response == 0){
                console.log("No se envió el mensaje");
            }
            else{
                console.log("Mensaje enviado correctamente");
            }
        }
    });
};

//-- FUNCION MOSTRAR PRODUCTOS X CATEGORIA--
/* --> SELECCIONAR CATEGORIA */ 
vistaWeb.prototype.mostrarProductosXCategoria = function(opcion){
    var $categoria={
        '_categoria': opcion
    }
    $.ajax({
		url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarProductos.php',
        type: 'POST',
        data: $categoria,
        datatype:'json',
        error: function(error){	
            if(error.status == 401){
                console.log("Categoria incorrecta");
            }
            else{
                console.log("Error no identificado");
            }
        },
        success: function(datos){
            data=datos;
            if(datos.response==0){
                var vacio="<div class='container text-center m-5 p-5'><h1 class='h1-responsive font-weight-bold grey-text'>NO DISPONIBLE </h1><i class='fa fa-lock fa-4x p-5 grey-text'></i></div>"
                $("#content").html(vacio);
            }else{
                vWeb.generarPaginacion(datos);
            }
        }
    });
};

/* --> GENERAR PAGINACION */ 
vistaWeb.prototype.generarPaginacion = function(datos){
    var total = datos.length;
    var paginas=0;
    
    //CANTIDAD DE PAGINAS
    if(total%12==0){
        paginas=total/12;
    }else{
        paginas=(total/12)+1;
        paginas=Math.floor(paginas);
    }
    
    //GENERAR CONTENEDOR
    $('#PAGINACION').bootpag({
        total: paginas,
        page: 1,
        maxVisible: 5,
        activeClass: 'activePage',
        disabledClass: 'disabled'
    }).on("page", function(event, num){
        vWeb.generarProductos(total, paginas, datos,num);
    });
    vWeb.generarProductos(total, paginas, datos,1);
};

/* --> GENERAR CUADRICULA DE PRODUCTOS */ 
vistaWeb.prototype.generarProductos = function(total, paginas, datos,num){
    var primero=(num-1)*12;
    var ultimo=num*12;
    var contenido = "";
    
    if(paginas==num){
        ultimo=total;
    }
    for(var i=primero; i<ultimo; i++){
        contenido += "<div id='producto-"+datos[i].PRODCODIGO+"' class='col-12 col-sm-6 col-md-4 p-2'>\n\
        <div class='card'>\n\
            <!--imagen-->\n\
            <div class='view overlay zoom'>\n\
                <img id='"+datos[i].PRODCODIGO+"' class='card-img-top' src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[i].PRODIMAGEN+"' onclick='vWeb.seleccionarProducto(this)' style='cursor:pointer; height:40vh;'>\n\
            </div>\n\
            <!--titulo-->\n\
            <div class='card-body'>\n\
                <p class='mb-3'>"+datos[i].PRODNOMBRE+"</p>\n\
                <hr class='bg-light2 my-0' style='width: 60%; height:3px;'>\n\
                <hr class='bg-primary my-1' style='width: 20%; height:3px;'>\n\
                <div class='text-right'>\n\
                    <a id='"+datos[i].PRODCODIGO+"' class='btn bg-primary btn-sm py-0 px-1' onclick='vWeb.seleccionarProducto(this)'>Ver más</a> \n\
                </div>\n\
            </div>\n\
        </div>\n\
        </div>";
    }
    $("#content").html(contenido);
};

var vWeb = new vistaWeb();
vWeb.mostrarInformacionEmpresa();
