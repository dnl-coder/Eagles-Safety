<!DOCTYPE html>
<html lang="es">
<head>

<!-- TITULO DE LA VISTA -->
<title>CMS - Eagles Safety eirl</title>

<!-- CONTENIDO GENERAL DEL HEAD -->
<?php include_once "ES-FrontEnd/Elementos/Generales-CMS/head.php";?>
 
</head>

<!----ESTILOS DE LA VISTA---->
<style>
    
{ margin: 0;padding: 0;}
#fondo-canvas {
    position: absolute;
    display: block;
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: -100;
}
.login{
    max-width: 400px;
    min-height: 320px;
    position: absolute;
	top: 0;
    bottom: 0;
	left: 0;
    right: 0;
	height: 30%;
	width: 50%;
	margin: auto;
}
.login p{ font-weight: 600;}

/*===CELULARES MIN====*/
@media (max-width: 420.98px) { .login{height: 30;width: 70%;} .login p{font-size: 20px;} }

/*===CELULARES====*/
@media (min-width: 420px) and (max-width: 575.98px) { .login{height: 30;width: 60%;} }
   
</style>

<body onload="verificarLogin()">
   
<div class="canvas-container">

<!----BACKGROUND CAMBAS---->
<canvas id="fondo-canvas"></canvas>

<!----INICIAR SESION---->
<div class="login p-sm-5 p-3 green lighten-5">
<form method="post">

    <p class="h4 text-center mb-2 green-text">PANEL ADMINISTRADOR</p>

    <label for="ingresarUsuario" class="grey-text">Usuario</label>
    <input type="text" id="ingresarUsuario" class="form-control green lighten-4" name="usuario" minlength="5" maxlength="40" required pattern="[A-Za-z0-9]+" title="Letras y números. Tamaño mínimo: 5. Tamaño máximo: 40">

    <label for="ingresarContraseña" class="grey-text mt-2">Contraseña</label>
    <input type="password" id="ingresarContraseña" class="form-control green lighten-4" name="password" required>

    <div class="text-center mt-2">
        <input class="btn btn-green" type="button" value="Iniciar Sesión" onClick="validar()">
    </div>

</form>
</div>

</div>

<?php include_once "ES-FrontEnd/Elementos/Generales-CMS/scripts.php";?>

<!----BACKGROUND CAMBAS---->
<script type="text/javascript" src="ES-FrontEnd/Elementos/Generales-CMS/granim.min.js"></script>
<script>
    
//ANIMACION FONDO 
var granimInstance = new Granim({
   element: '#fondo-canvas',
   name: 'granim',
   opacity: [1, 1],
    direction: 'diagonal',// 'left-right', 'top-bottom', 'radial'
   states : {
       "default-state": {
           gradients: [
               ['#000', '#04508F'],
               ['#273E7C', '#052C10'],
               ['#1B8531', '#2A2F2B'],
               ['#0A0070', '#6D1420']
           ]
       }
   }
});
    
//VERIFICAR INICIO DE SESION
function verificarLogin(){
	if (localStorage.getItem("user") === null || localStorage.getItem("estado") == "out" ) {
	  console.log("Es necesario iniciar sesión");
	} else {
      window.location="inicio.php";
	}
}

//VALIDAR INFORMACION DE INICIO DE SESION
function validar(){
    var user=$("#ingresarUsuario").val();
    var pass=$("#ingresarContraseña").val();
    
    
    if(user == null || user.length == 0 || /^\s+$/.test(user)){
        alert('ERROR: El campo usuario no debe ir vacío o lleno de solamente espacios en blanco');
        $("#ingresarUsuario").focus();
    }
    else if(pass == null || pass.length == 0 || /^\s+$/.test(pass)){
        alert('ERROR: El campo contraseña no debe ir vacío o lleno de solamente espacios en blanco');
        $("#ingresarContraseña").focus();
    }
    else if(user.length<5 || user.length>40){
        alert('ERROR Usuario: Tamaño mínimo : 5. Tamaño máximo: 40');
        $("#ingresarUsuario").focus();
    }
    else if(pass.length<5 || pass.length>40){
        alert('ERROR Contraseña: Tamaño mínimo: 5. Tamaño máximo: 40');
        $("#ingresarContraseña").focus();
    }
    else if(/^\w+$/.test(user) && /^\w+$/.test(pass)){
        Login(user, pass);
    }else{
        alert('ERROR: Formato  incorrecto, solo ingresar alfanumericos');
    }
        
}

//INICIAR SESION
function Login(usuario, password){
    var $usuario={
        '_username': usuario,
        '_password': password
    }
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-CMS/Controlador_Login.php',
        type: 'POST',
        data: $usuario,
        dataType: 'json',
        error: function(error){
            if(error.status == 401){
                console.log("Usuario y contraseña incorrectas");
            }
            else{
                console.log("Error no identificado");
            }
        },
        success: function(datos){
            localStorage.clear();
            if(datos.response == 1){
                $('#ingresarUsuario').removeClass('red');
                $('#ingresarUsuario').addClass('green');
                $('#ingresarContraseña').removeClass('red');
                $('#ingresarContraseña').addClass('green');
                
                localStorage.setItem("user", usuario);
                localStorage.setItem("estado", "in");

                window.location="inicio.php";
            }
            else{
                $('#ingresarUsuario').removeClass('green');
                $('#ingresarUsuario').addClass('red');
                $('#ingresarContraseña').removeClass('green');
                $('#ingresarContraseña').addClass('red');
                console.log('ERROR: '+datos.message);
            }
        }
    });
}

//LIMPIAR SESION DE USUARIO
function limpiarSesion(){
    console.log("Se ha borrado la sesion");
    localStorage.clear();
}

</script>
   
</body>
</html>