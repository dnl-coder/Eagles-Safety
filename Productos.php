<!DOCTYPE html>
<html lang="es">
<head>

    <!--TITULO DE LA VISTA -->
    <title>Productos - Eagles Safety eirl</title>

    <!-- CONTENIDO GENERAL-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/head.php";?>
    
</head>

<body>
   
    <!-- CONTENT-->
    
    <!-- BARRA DE NAVEGACION-->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/barraNavegacion.php";?>

    <!-- ENCABEZADO-->  
    <div class="container-fluid" style="height: 300px; background: url('ES-FrontEnd/Elementos/Imagenes/Productos/Encabezado.jpg') no-repeat center; background-size: cover;">

       <div class="container">
            <br><br><br>
           <div class="text-white display-4 font-weight-bold pt-5 wow fadeIn" style="font-size:300%; font-family: 'Bungee', cursive;">PRODUCTOS</div>
       </div>

    </div>  

    <!-- CONTENEDOR INFERIOR-->
    <section class="container-fluid my-4" style="margin-left: 1%; margin-right: 1%; width: 98%;"><div class="row">

    <!--=====================================
            CATEGORIAS
    ======================================--> 
    <!--contenedor izquierdo-->  
    <div class="col-12 col-md-3 col-xl-2">
    <div class="list-group" id="list-tab" role="tablist">

        <!-- CATEGORIA 1 -->
        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#producto" role="tab" aria-controls="home">Protección Auditiva </a>

        <!-- CATEGORIA 2 -->
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#producto" role="tab" aria-controls="profile">Protección Anticaída</a>

        <!-- CATEGORIA 3 -->
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#producto" role="tab" aria-controls="messages">Protección Cabeza</a>

        <!-- CATEGORIA 4 -->
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#producto" role="tab" aria-controls="settings">Protección Manos</a>

        <!-- CATEGORIA 5 -->
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#producto" role="tab" aria-controls="settings">Protección Respiratoria</a>

        <!-- CATEGORIA 6 -->
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#producto" role="tab" aria-controls="settings">Protección Visual</a>

        <!-- CATEGORIA 7 -->
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#producto" role="tab" aria-controls="settings">Protección Ropa Impermeable</a>

        <!-- CATEGORIA 8 -->
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#producto" role="tab" aria-controls="settings">Protección Ropa Descartable</a>

        <!-- CATEGORIA 9 -->
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#producto" role="tab" aria-controls="settings">Protección Pies</a>

        <!-- CATEGORIA 10 -->
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#producto" role="tab" aria-controls="settings">Protección Corporal</a>

        <!-- CATEGORIA 11 -->
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#producto" role="tab" aria-controls="settings">Señalización</a>

        <!-- CATEGORIA 12 -->
        <a class="list-group-item list-group-item-action" data-toggle="list" href="#producto" role="tab" aria-controls="settings">Otros Equipos de Protección</a>                    

    </div>
    </div>

    <!--contenedor derecho--> 
    <div class="col-12 col-md-9 col-xl-10">

    <!--=====================================
            BARRA DE PAGINACION Y BUSQUEDA     
    ======================================-->
    <div class="d-flex align-items-center flex-wrap justify-content-center grey lighten-3 rounded py-2">

    <!-------PAGINACION----------------->
    <div id="PAGINACION" class="mr-auto mb-2 ml-auto white"></div>      

    <!-------BUSCAR----------------->                        
    <div>
    <form class="form-inline active-green col-auto">
        <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Buscar" aria-label="Search">
        <i class="fa fa-search" aria-hidden="true"></i>
    </form>
    </div>    

    </div>

    <!--=====================================
            PRODUCTOS     
    ======================================--> 
    <div class="tab-content grey lighten-3">
    <div class="tab-pane fade show active" id="producto" role="tabpanel"><div id="content" class="row pt-0 pb-3 px-3 justify-content-center">
    </div></div>
    </div>

    <!--###################################--> 

    </div>
    <!--FIN contenedor derecho-->

    </div></section>

    <!-- DESCRIPCION--> 
    <div class="modal fade" id="modalDescripcion" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    </div></div>

    <!--FOOTER -->   
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/piePaginaMin.php";?>    
    
    <!-- CONTENT-->
    
    <!-- SCRIPTS -->
    <?php include_once "ES-FrontEnd/Elementos/Generales-Web/scripts.php";?>  

    <script>

        categoria="Protección Auditiva";
        vWeb.mostrarProductosXCategoria(categoria);

        //--SELECCIONAR CATEGORIA--
        $('#list-tab a').on('click', function (e) {
            e.preventDefault()
            categoria=$(this).text();
            vWeb.mostrarProductosXCategoria(categoria);
            $(this).tab('show');
        })

    </script>

</body>
</html>