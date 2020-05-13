<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<style>
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

/*=============================================
MENU SUPERIOR       
=============================================*/

.navbar{
    margin-left: 265px;
    transition: all 0.5s  ease-in-out;
}
.comprimido{
    margin-left: 59px;
    transition: all 0.5s  ease-in-out;
}

/*=============================================
MENU LATERAL         
=============================================*/

/*===BUSCAR====*/
.active-pink-2 input[type=text]:focus:not([readonly]) {
    border-bottom: 1px solid #fd668c;
    box-shadow: 0 1px 0 0 #fd668c;
}

#buscar::placeholder{color: white;}

/*===EXPANDIDO====*/
.sidebar{
    z-index: 1000;
    position: absolute;
    height: 100%;
    width:265px;  
    background: url(ES-FrontEnd/Elementos/Imagenes/Fondo-barraLateral.png);
    transition: all 0.5s  ease-in-out;
    top: 0;
    color: white;
    overflow-y:auto;
}
    ::-webkit-scrollbar{width:0px}

.active{ 
    background-color:#1B4B5A;
}

.sidebar ul{ list-style:none; margin:0px; padding:0px; }

.sidebar ul li a{ 
    display:block; 
    padding:18px 15px; 
    color: white;
    border-left:0px solid #dedede;  
    text-decoration:none;
}
.sidebar li a.active{
    background-color:rgba(35,65,134,.8);
    border-left:5px solid #dedede; 
    transition: all 0.5s  ease-in-out
}
.sidebar li a:hover, .sidebar li a.active:hover{background-color:rgba(35,65,134,.8);}

.sidebar li a i{ padding-right:3px;font-size: 30px;vertical-align: bottom;}

.sidebar ul li .sub-menu li a{ 
    position:relative; 
    color: white;
}
.sidebar ul li .sub-menu li a:before{
    font-family: FontAwesome;
    content: "\f105";
    display: inline-block;
    padding-left: 0px;
    padding-right: 10px;
    vertical-align: middle;
}
.sidebar ul li .sub-menu li a:hover:after {
    content: "";
    position: absolute;
    left: -5px;
    top: 0;
    width: 5px;
    background-color: #111;
    height: 100%;
}
.sidebar ul li .sub-menu li a:hover{ 
    background-color:#222; 
    padding-left:20px; 
    transition: all 0.5s  ease-in-out;
}
.sub-menu{ border-left:5px solid #dedede;}
.sidebar li a .nav-label,.sidebar li a .nav-label+span{ transition: all 0.5s  ease-in-out}

/*===COMPRIMIDO====*/

.sidebar.fliph .header , .sidebar.fliph li a .nav-label,.sidebar.fliph li a .nav-label+span{ 
    display:none;
    transition: all 0.5s  ease-in-out
}
.sidebar.fliph {
    width: 59px;
    transition: all 0.5s  ease-in-out
}	
.sidebar.fliph li{ position:relative}
.sidebar.fliph .sub-menu {
    position: fixed;
    left: 59px;
    top: 0;
    background-color: #222;
    width: 170px;
    z-index: 10000;
}

.sidebar.fliph ul li .sub-menu li a:hover{ 
    background-color:rgba(137, 0, 249, 0.28); 
    transition: all 0.5s  ease-in-out;
}
.ocultar{position:absolute !important;}

/*===CELULARES====*/
@media (max-width: 420.98px) { 
    .sidebar.fliph {display:none; }
    .comprimido{margin-left: 0px;}
    .cuerpo{margin-left: 0px;}
}

</style>
       
<!--MENU SUPERIOR-->
<nav class="navbar navbar-expand-md navbar-dark secundario encabezado">

    <div class="float-left">
        <a class="white-text button-left" href="#!" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars fa-2x"></i></a>
    </div>

    <ul class="navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item">
            <a class="nav-link"><i class="fa fa-envelope fa-lg"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link"><i class="fa fa-facebook fa-lg"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link"><i class="fa fa-youtube fa-lg"></i></a>
        </li>
    </ul>

</nav>

<!--MENU LATERAL-->
<aside>
<div class="sidebar left">

<div class="header" style="background-color:#334f82;">

    <a class="navbar-brand px-auto mt-3 ml-2" onclick="ventanaBienvenido()">
        <img class="img-fluid" src="ES-FrontEnd/Elementos/Imagenes/ES.png" height="30">
    </a>
    <hr style="background-color:rgba(153,153,153,.3);">
    <div class="md-form active-pink-2 mb-3">
      <input id="buscar" class="form-control white-text px-2" type="text" placeholder="Search" aria-label="Search">
    </div>


</div>

<ul class="list-sidebar">
   
   <!--MENU INICIO-->
    <li> 
        <a href="#" data-toggle="collapse" data-target="#dashboard1" class="collapsed"> 
            <i class="fas fa-industry"></i>
            <span class="nav-label"> Inicio </span> 
            <span class="fa fa-chevron-left pull-right mt-2"></span> 
        </a>
        <ul class="sub-menu collapse" id="dashboard1">
            <li><a onclick="ventanaMarcas()"> Actualizar marcas </a></li>
            <li><a onclick="ventanaSlider()"> Actualizar slider </a></li>
            <li><a onclick="ventanaActualizarBanner()"> Actualizar banner </a></li>
            <li><a onclick="ventanaActualizarDatosEmpresa()"> Actualizar datos empresa </a></li>
        </ul>
    </li>

   <!--MENU PRODUCTOS-->
    <li> 
        <a href="#" data-toggle="collapse" data-target="#dashboard2" class="collapsed"> 
            <i class="fas fa-shipping-fast"></i> 
            <span class="nav-label"> Productos </span> 
            <span class="fa fa-chevron-left pull-right mt-2"></span> 
        </a>
        <ul class="sub-menu collapse" id="dashboard2">
            <li><a onclick="vistaNuevaCategoria()"> Nueva categoría </a></li>
            <li><a onclick="vistaActualizarCategoria()"> Actualizar categoría </a></li>
            <li><a onclick="vistaEliminarCategoria()"> Eliminar categoría </a></li>
            <li><a onclick="vistaNuevoProducto()"> Agregar producto </a></li>
            <li><a onclick="vistaEditarProducto()"> Editar producto </a></li>
            <li><a onclick="vistaEliminarProducto()"> Eliminar producto </a></li>
        </ul>
    </li>

   <!--MENU CONTACTANOS-->
    <li>
        <a onclick="vistaContactanos()">
            <i class="fas fa-address-book"></i>
            <span class="nav-label"> Contáctanos </span>
        </a>
        
    </li>

   <!--MENU NOSOTROS-->
    <li> 
        <a onclick="vistaNosotros()">
            <i class="fas fa-users"></i>
            <span class="nav-label"> Nosotros </span>
        </a>
    </li>

</ul>

</div>
</aside>