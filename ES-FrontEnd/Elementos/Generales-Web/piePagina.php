<!--************************************
    PIE DE PAGINA  [ESTILOS]   
*************************************-->

<style>

.footer {
    margin: 0;
    padding:15px 0px;
    width: 100%;
    color: white;
    border-style: solid;
    border-width: 70px 0px 0px;
    border-image: url('ES-FrontEnd/Elementos/Imagenes/ES-Footer.png') 200 0 0 fill stretch repeat;
}
.footer h5{color: darkgreen;font-weight: 600; margin-top: 10px;cursor:context-menu;}
.footer p{font-weight: 500;font-size: 18px;cursor:context-menu;}
.footer span{ color: #FFF;}

.footer .rs span{
    color: white;
    background: #28a745;
    width: 60px;
    height: 50px;
    text-align: center;
    vertical-align: middle;
    padding: 10px;
}
.footer .rs .fb:hover{ background: blue;}
.footer .rs .yt:hover{ background: red;}

/*===CELULARES====*/
@media (max-width: 575.98px) { 
    .footer {
                border-width: 20px 0px 0px;
                padding:10px 0px;
		}
}

/*=============================================
COPYRIGHT
=============================================*/

.footer-bottom{
    vertical-align: middle;
	text-align:center;
	height: 100%;
    line-height: 10px;
    padding: 30px 0px 10px 0px;
    background: forestgreen;
}
.footer-bottom p{
	font-size:13px;
    font-weight: 700;
	color: white;
    cursor:context-menu;
}

</style>        

<!--************************************
    PIE DE PAGINA  [CONTENIDO] 
*************************************-->

<!--FOOTER -->   
<footer>
<div class="footer">
<div class="container px-5">

<!--INFORMACION GENERAL -->  
<div class="row">

<!--TELEFONOS -->  
<div class="col text-center wow zoomIn">
    <span class="fa fa-phone fa-3x fa-sm-4x"></span>
    <h5>Teléfono:</h5>
    <p id="tel1ES" class="mb-1">(+51) 998 338 559</p>
    <p id="tel2ES">(+51) 999 229 937</p>
</div>
<!--CORREO -->  
<div class="col text-center wow zoomIn">
    <span class="fa fa-envelope fa-3x fa-sm-4x"></span>
    <h5>Escríbenos:</h5>
    <p id="correoES">rmanrique@es.com.pe</p>
</div>
<!--DIRECCION -->  
<div class="col text-center wow zoomIn">
    <span class="fa fa-map-marker fa-3x fa-sm-4x"></span>
    <h5>Encuéntranos en:</h5>
    <p id="direccion1ES" class="mb-1"></p>
    <p id="direccion2ES"></p>
</div>

</div>
<hr class="bg-white">

<!--REDES SOCIALES -->  
<div class="row justify-content-center">
    <p class="my-auto">Siguenos en:</p>
    <a id="red1ES" class="rs m-2" target="_blank" href="http://www.facebook.com/eagles.safety.eirl/"><span class="fb fa fa-facebook fa-2x"></span></a>
    <a id="red2ES" class="rs m-2" href="#"><span class="yt fa fa-youtube fa-2x"></span></a>
</div>

</div>
</div>
</footer>

<!--COPYRIGHT -->      
<div class="footer-bottom align-bottom"><div class="container"><div class="row">
<div class="col-md-12"><p>Eagles Safety © 2018. Todos los derechos reservados.</p></div>
</div></div></div>