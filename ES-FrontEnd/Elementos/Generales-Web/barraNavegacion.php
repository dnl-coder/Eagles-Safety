<!-- BARRA DE NAVEGACION  [ESTILOS] -->
<style>

@import url('https://fonts.googleapis.com/css?family=Dancing+Script:700');

/*=============================================
TITULO Y LOGO            
=============================================*/

.title{font-family: 'Dancing Script', cursive;}

/*=============================================
NAV BAR         CONTENIDO
=============================================*/
.nav-item:hover{background: forestgreen;}
.activeNav{background: forestgreen;}

</style>   

<header>

<nav class="navbar navbar-expand-lg navbar-dark p-0 fixed-top scrolling-navbar" id="menu">

<!--TITULO-->
<a class="navbar-brand title ml-3" href="index.php">
    <b class="h3">Eagles Safety eirl</b>
</a>

<!--BOTON EXPANSIBLE-->
<button class="navbar-toggler p-0 my-0 mr-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<!--CONTENIDO EXPANSIBLE-->
<div class="collapse navbar-collapse" id="navbarSupportedContent">

   <!--OPCIONES DEL MENU-->
    <ul class="navbar-nav mr-auto ml-2">

        <!--INICIO-->
        <li class="nav-item activeNav"><a class="nav-link" href="index.php">Inicio</a></li>
        
        <!--NOSOTROS-->
        <li class="nav-item"><a class="nav-link" href="Nosotros.php">Nosotros</a></li>

        <!--PRODUCTOS-->
        <li class="nav-item"><a class="nav-link" href="Productos.php">Productos</a></li>

        <!--CONTACTANOS-->
        <li class="nav-item"><a class="nav-link" href="Contactos.php">Contáctanos</a></li>

    </ul>

   <!--REDES SOCIALES-->
    <ul class="navbar-nav pb-2 pb-sm-0">
        <li class="d-flex text-center pt-1 mx-auto">
            
            <div class="d-flex flex-column text-left pl-2 pl-sm-0">
                
                <div>
                    <a id="telNavES" class="white-text" style="cursor:context-menu;"></a>
                </div>
                <div>
                    <a id="correoNavES" class="white-text" style="cursor:context-menu;"></a>
                </div>
                
            </div>
            
            <a id="red1NavES" class="nav-link text-white ml-0 ml-sm-3 my-auto" style="background:forestgreen; font-size: 20px; width:40px; height:40px" href="#"><span class="fa fa-youtube"></span></a>

            <a id="red2NavES" class="nav-link text-white ml-0 ml-sm-1 my-auto" style="background:forestgreen; font-size: 20px; width:40px; height:40px" target="_blank" href="http://www.facebook.com/eagles.safety.eirl/"><span class="fa fa-facebook"></span></a>

        </li>
    </ul>

</div>
</nav>

</header>