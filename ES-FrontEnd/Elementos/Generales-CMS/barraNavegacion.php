    <!-- MENU SUPERIOR-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">

        <!-- BOTON EXPANSIBLE--> 
        <button class="navbar-toggler" >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- TITULO -->
        <a class="navbar-brand ml-2" href="CMS-Inicio.php">Eagles Safety EIRL</a>

        <!-- CONTENIDO-->
        <ul class="nav ml-auto mr-2 d-none d-lg-block">
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
    <div id="navbarText"  class="sidebar pb-5">
      <ul class="list-sidebar pb-3">

        <!-- LOGO-->
        <div class="text-center my-3">
            <img src="ES-FrontEnd/Elementos/Imagenes/Logo.png" height="180">
        </div>

        <!-- MENU INICIO-->
        <li> 
            <a href="CMS-Inicio.php"> 
                <i class="fas fa-home"></i>
                <span class="nav-label"> Inicio </span>
            </a>
        </li>

        <!-- MENU INFORMACION GENERAL-->
        <li> 
            <a href="CMS-InfGeneral.php"> 
                <i class="fas fa-users"></i>
                <span class="nav-label"> Información general</span>
            </a>
        </li>

        <!-- MENU COMPONENTES-->
        <li> 
            <a href="CMS-Componentes.php" data-toggle="collapse" data-target="#dashboard1" class="collapsed"> 
                <i class="fas fa-boxes"></i>
                <span class="nav-label"> Componentes</span> 
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
            <a href="CMS-Productos.php" data-toggle="collapse" data-target="#dashboard2" class="collapsed"> 
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
        
        <!-- MENU USUARIO-->
        <li class="d-lg-none"> 
            <a href="#" data-toggle="collapse" data-target="#dashboard3" class="collapsed"> 
                <i class="fas fa-address-book"></i> 
                <span class="nav-label"> Usuario </span> 
                <span class="fa fa-chevron-left pull-right mt-2"></span> 
            </a>
            <ul class="sub-menu collapse" id="dashboard3">
                <li><a onclick="vistaNuevoProducto()"> Mi cuenta </a></li>
                <li><a onclick="vistaEditarProducto()"> Configuración </a></li>
                <li><a onclick="vistaEliminarProducto()"> Cerrar sesión </a></li>
            </ul>
        </li>

      </ul>
    </div>