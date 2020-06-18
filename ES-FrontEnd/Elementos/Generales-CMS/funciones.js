
//VERIFICAR INICIO DE SESION
function verificarLogin(){
	if (localStorage.getItem("user") === null || localStorage.getItem("estado") == "out" ) {
	  window.location="login.php";
	} else {
      window.location="inicio.php";
	}
}

/*=============================================
    FUNCIONES DE CAMBIO DE VISTA
=============================================*/

//--REDIRIGIR A VISTA MARCAS--
function ventanaMarcas(){
    
    $.ajax({  
        url: 'ES-FrontEnd/Vista-CMS/CMS-Index/ModificarMarcas.html',  
        contentType: "text / html",
        success: function(data) {  
            $('#cuerpo').html(data);  
        }  
    }); 
    
}

//--REDIRIGIR A VISTA SLIDER--
function ventanaSlider(){
    
    $.ajax({  
        url: 'ES-FrontEnd/Vista-CMS/CMS-Index/ModificarSlider.html',  
        success: function(data) {  
            $('#cuerpo').html(data);  
        }  
    }); 
    
}

//--REDIRIGIR A VISTA ACTUALIZAR BANNER--
function ventanaActualizarBanner(){
    
    $.ajax({  
        url: 'ES-FrontEnd/Vista-CMS/CMS-Index/ActualizarBanner.html',  
        success: function(data) {  
            $('#cuerpo').html(data);  
        }  
    }); 
    
}

//--REDIRIGIR A VISTA ACTUALIZAR DATOS EMPRESA--
function ventanaActualizarDatosEmpresa(){
    
    $.ajax({  
        url: 'ES-FrontEnd/Vista-CMS/CMS-Index/ActualizarDatosEmpresa.html',  
        success: function(data) {  
            $('#cuerpo').html(data);  
        }  
    }); 
    
}

//--REDIRIGIR A VISTA CONTACTANOS--
function vistaContactanos(){
    
    $.ajax({  
        url: 'ES-FrontEnd/Vista-CMS/VistaContactanos.html', 
        success: function(data) {  
            $('#cuerpo').html(data);  
        }  
    }); 
}

//--REDIRIGIR A VISTA NOSOTROS--
function vistaNosotros(){
    
    $.ajax({  
        url: 'ES-FrontEnd/Vista-CMS/VistaNosotros.html', 
        success: function(data) {  
            $('#cuerpo').html(data);  
        }  
    }); 
}

//--REDIRIGIR A VISTA PRINCIPAL--
function vistaPrincipal(){
    
    $.ajax({  
        url: 'ES-FrontEnd/Vista-CMS/VistaPrincipal.html',  
        success: function(data) {  
            $('#cuerpo').html(data);  
        }  
    }); 
}

//--REDIRIGIR A VISTA NUEVO PRODUCTO--
function vistaNuevoProducto(){
    
    $.ajax({  
        url: 'ES-FrontEnd/Vista-CMS/CMS-Productos/NuevoProducto.html',  
        success: function(data) {  
            $('#cuerpo').html(data);  
        }  
    });
}

//--REDIRIGIR A VISTA EDITAR PRODUCTO--
function vistaEditarProducto(){
    
    $.ajax({  
        url: 'ES-FrontEnd/Vista-CMS/CMS-Productos/ActualizarProducto.html',  
        success: function(data) {  
            $('#cuerpo').html(data);  
        }  
    });
}

//--REDIRIGIR A VISTA ELIMINAR PRODUCTO--
function vistaEliminarProducto(){
    
    $.ajax({  
        url: 'ES-FrontEnd/Vista-CMS/CMS-Productos/EliminarProducto.html',  
        success: function(data) {  
            $('#cuerpo').html(data);  
        }  
    });
}

//--REDIRIGIR A VISTA NUEVA CATEGORIA--
function vistaNuevaCategoria(){
    
    $.ajax({  
        url: 'ES-FrontEnd/Vista-CMS/CMS-Productos/NuevaCategoria.html',  
        success: function(data) {  
            $('#cuerpo').html(data);  
        }  
    });
}

//--REDIRIGIR A VISTA ACTUALIZAR CATEGORIA--
function vistaActualizarCategoria(){
    
    $.ajax({  
        url: 'ES-FrontEnd/Vista-CMS/CMS-Productos/ActualizarCategoria.html',  
        success: function(data) {  
            $('#cuerpo').html(data);  
        }  
    });
}

//--REDIRIGIR A VISTA ELIMINAR CATEGORIA--
function vistaEliminarCategoria(){
    
    $.ajax({  
        url: 'ES-FrontEnd/Vista-CMS/CMS-Productos/EliminarCategoria.html',  
        success: function(data) {  
            $('#cuerpo').html(data);  
        }  
    });
}

/*=============================================
    FUNCIONES GENERALES
=============================================*/

var vistas = function (){}

//--MOSTRAR IMAGEN --
vistas.prototype.mostrarImagen = function(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  reader.onload = function(event) {
    var img = document.getElementById('previewFoto');
    img.src= event.target.result;
  }
  reader.readAsDataURL(file);
}

//--MOSTRAR IMAGEN 1 --
vistas.prototype.mostrarImagen1 = function(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  reader.onload = function(event) {
    var img = document.getElementById('previewFoto1');
    img.src= event.target.result;
  }
  reader.readAsDataURL(file);
}

//--MOSTRAR IMAGEN 2 --
vistas.prototype.mostrarImagen2 = function(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  reader.onload = function(event) {
    var img = document.getElementById('previewFoto2');
    img.src= event.target.result;
  }
  reader.readAsDataURL(file);
}

var vGenerales = new vistas();
