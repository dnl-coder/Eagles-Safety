<!DOCTYPE html>
<html lang="es">
<head>

<!--TITULO DE LA VISTA -->
<title>Contáctanos - Eagles Safety eirl</title>

<!--***************************************
     INCLUIR CONTENIDO GENERAL DEL HEAD 
 ***************************************-->
<?php include_once "ES-FrontEnd/Elementos/Generales-Web/head.php";?> 
 
</head>

<body>

<!--=====================================
        BARRA DE NAVEGACION     
======================================--> 
<?php include_once "ES-FrontEnd/Elementos/Generales-Web/barraNavegacion.php";?>

<!--************************************************************************************
                             COMPONENTES DE LA PAGINA 
 ************************************************************************************-->

<!--=====================================
        CONTACTANOS 
======================================-->
<section class="mt-5 pb-4">

<!--FORMULARIO DE CONTACTO -->
<div class="row" style="margin-bottom:-100px;">

<!--FORMULARIO -->
<div class="col-md-5 col-sm-6 col-12 px-5 pt-2 wow fadeIn">

    <!--TITULO -->
    <h2 class="h1-responsive green-text font-weight-bold text-center my-3">Contáctanos</h2>

    <!--DESCRIPCION -->
    <p class="text-center w-responsive mx-auto my-4">¿Tienes alguna consulta? No dudes en escribirnos, te responderemos en la brevedad posible.</p>

   <!--CASILLAS DE LLENADO -->
    <div class="row">
    <div class="col-12">
       
        <!--INPUTS -->
        <form method="POST">
           
            <!--NOMBRE -->
            <div class="row">
                <div class="col-md-12 my-3">
                    <input type="text" id="nombre" name="name" class="form-control" placeholder="Nombre">
                </div>
            </div>
            
            <!--CORREO -->
            <div class="row">
                <div class="col-md-12 my-3">
                    <input type="email" id="correo" name="email" class="form-control" placeholder="Correo">
                </div>
            </div>
            
            <!--MENSAJE -->
            <div class="row">
                <div class="col-md-12 my-3">
                    <textarea type="text" id="mensaje" name="message" rows="2" class="form-control md-textarea" placeholder="Mensaje"></textarea>
                </div>
            </div>

        </form>
        
        <!--BOTON ENVIAR -->
        <div class="text-center my-3 mb-4">
            <a class="btn btn-green" onclick="vWeb.validar()">Enviar</a>
        </div>
        
        <!--ESTADO -->
        <div class="status"></div>

    </div>
    </div>

</div>

<!--MAPA -->
<div class="col-md-7 col-sm-6 col-12 p-0 wow fadeIn" style="z-index: -1000">
<div class="view">
   <iframe width="100%" height="575" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" margin-bottom: "-4000px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.918055062016!2d-77.06174825067502!3d-11.98017192940227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cf5183bdf79d%3A0x83f0874d1675e677!2sEagles%20Safety%20EIRL!5e0!3m2!1ses-419!2spe!4v1572703746557!5m2!1ses-419!2spe"></iframe>
   <div class="mask flex-center rgba-green-light"></div>
</div>
</div>

</div>    


</section>

<!--************************************************************************************
                        FIN COMPONENTES DE LA PAGINA 
 ************************************************************************************-->

<?php include_once "ES-FrontEnd/Elementos/Generales-Web/piePagina.php";?>

<?php include_once "ES-FrontEnd/Elementos/Generales-Web/scripts.php";?> 

</body>
</html>