 <!-- MENU SUPERIOR-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
   
    <!-- BOTON EXPANSIBLE--> 
    <button class="navbar-toggler" >
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- TITULO -->
    <a class="navbar-brand ml-2" href="#">Eagles Safety EIRL</a>

    <!-- CONTENIDO-->
    <ul class="nav ml-auto mr-2">
      <li class="nav-item dropdown">
       
        <!--Nombre de usuario-->
        <a class="nav-link dropdown-toggle" id="navbarUser" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Micha con patas</a>
          
        <!--Opciones de usuario-->
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarUser">
          <a class="dropdown-item" href="#">Mi cuenta</a>
          <a class="dropdown-item" href="#">Configuración</a>
          <a class="dropdown-item" href="#">Cerrar sesión</a>
        </div>
        
      </li>
    </ul>

</nav>

<!-- MENU LATERAL-->
<div id="navbarText"  class="sidebar">
  <ul class="list-sidebar">

    <!-- LOGO-->
    <div class="text-center my-3" onclick="ventanaBienvenido()">
        <img src="ES-FrontEnd/Elementos/Imagenes/Logo.png" height="180">
    </div>

    <!-- MENU INICIO-->
    <li> 
        <a href="#" class="bg-primary"> 
            <i class="fas fa-home"></i>
            <span class="nav-label"> Inicio </span>
        </a>
    </li>
    
    <!-- MENU INFORMACION GENERAL-->
    <li> 
        <a href="#" onclick="ventanaActualizarDatosEmpresa()"> 
            <i class="fas fa-users"></i>
            <span class="nav-label"> Información general</span>
        </a>
    </li>
   
    <!-- MENU PAGINA DE LA EMPRESA-->
    <li> 
        <a href="#" data-toggle="collapse" data-target="#dashboard1" class="collapsed"> 
            <i class="fas fa-address-book"></i>
            <span class="nav-label"> Página de la empresa</span> 
            <span class="fa fa-chevron-left pull-right mt-2"></span> 
        </a>
        <ul class="sub-menu collapse" id="dashboard1">
            <li><a onclick="ventanaSlider()"> Carrusel de imágenes </a></li>
            <li><a onclick="ventanaMarcas()"> Marcas </a></li>
            <li><a onclick="ventanaActualizarBanner()"> Banner </a></li>
        </ul>
    </li>

    <!-- MENU PRODUCTOS-->
    <li> 
        <a href="#" data-toggle="collapse" data-target="#dashboard2" class="collapsed"> 
            <i class="fas fa-shipping-fast"></i> 
            <span class="nav-label"> Productos </span> 
            <span class="fa fa-chevron-left pull-right mt-2"></span> 
        </a>
        <ul class="sub-menu collapse" id="dashboard2">
            <li><a onclick="vistaNuevoProducto()"> Agregar producto </a></li>
            <li><a onclick="vistaEditarProducto()"> Editar producto </a></li>
            <li><a onclick="vistaEliminarProducto()"> Eliminar producto </a></li>
        </ul>
    </li>

  </ul>
</div>