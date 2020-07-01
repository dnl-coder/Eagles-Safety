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
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarSliders.php',
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
            var sliders="";
            switch(datos[0].COMPSLIDER){
              case "1": 
                sliders+="<div class='fondo' style='background-repeat: no-repeat; background-size: cover; background-position: center center; height:100vh;'> \
            <div class='mask bg-gradiente d-flex justify-content-center align-items-center' style='height:100vh;'> \
              <div class='container'> \
                <div class='row'> \
                  <div class='col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft' data-wow-delay='0.3s'> \
                    <h1 class='h1-responsive font-weight-bold mt-sm-5'>"+datos[0].SLDRNOMBRE+"</h1> \
                    <hr class='hr-light'> \
                    <h6 class='Sdescripcion mb-4'>"+datos[0].SLDRDESCRIPCION+"</h6> \
                    <a class='btn botonPrincipal' href='Nosotros.php'>Ver más</a> \
                    <a class='btn botonCuarto' href='Contactos.php'>Contáctanos</a> \
                  </div> \
                  <div class='col-md-6 col-xl-5 mt-xl-5 wow fadeInRight' data-wow-delay='0.3s'> \
                    <img class='Simagen img-fluid'> \
                  </div> \
                </div> \
              </div> \
            </div> \
          </div>"; 
                $(".carousel-control-prev").css("display","none");
                $(".carousel-control-next").css("display","none");
                break;
              case "2": 
                sliders+="<div class='Simagen view jarallax' data-jarallax='{'speed': 0.2}' style='background-repeat: no-repeat; background-size: cover; background-position: center center; height:100vh;'> \
            <div class='mask rgba-white-light d-flex justify-content-center align-items-center'> \
              <div class='container'> \
                <div class='row'> \
                  <div class='col-md-12 white-text text-center'> \
                    <h1 class='display-4 mb-0 pt-md-5 pt-5 white-text font-weight-bold wow fadeInDown' data-wow-delay='0.3s'>"+datos[0].SLDRNOMBRE+"</h1> \
                    <h5 class='text-uppercase pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 white-text font-weight-bold wow fadeInDown' data-wow-delay='0.3s'>"+datos[0].SLDRDESCRIPCION+"</h5> \
                    <div class='wow fadeInDown' data-wow-delay='0.3s'> \
                      <a class='btn bg-enfasis1 btn-lg btn-rounded' href='Nosotros.php'>Ver más</a> \
                      <a class='btn bg-enfasis2 btn-lg btn-rounded' href='Contactos.php'>Contáctanos</a> \
                    </div> \
                  </div> \
                </div> \
              </div> \
            </div> \
          </div>";
                $(".carousel-control-prev").css("display","none");
                $(".carousel-control-next").css("display","none");
                break;
              case "3": 
                sliders+="<div class='Simagen view jarallax' data-jarallax='{'speed': 0.2}' style='background-repeat: no-repeat; background-size: cover; background-position: center center; height:100vh;'> \
            <div class='mask rgba-black-light d-flex justify-content-center align-items-center'> \
              <div class='container'> \
                <div class='row'> \
                  <div class='col-md-12 mb-4 white-text text-center'> \
                    <h1 class='h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown' data-wow-delay='0.3s'><strong>"+datos[0].SLDRNOMBRE+"</strong></h1> \
                    <hr class='my-4 wow fadeInDown' data-wow-delay='0.4s' style='border-top: 3px solid #fff; width: 80px;'> \
                    <h5 class='text-uppercase mb-4 white-text wow fadeInDown' data-wow-delay='0.4s'><strong>"+datos[0].SLDRDESCRIPCION+"</strong></h5> \
                    <a class='btn botonCuarto wow fadeInDown' href='Nosotros.php' data-wow-delay='0.4s'>Ver más</a> \
                    <a class='btn botonCuarto wow fadeInDown' href='Contactos.php' data-wow-delay='0.4s'>Contáctanos</a> \
                  </div> \
                </div> \
              </div> \
            </div> \
          </div>";
                $(".carousel-control-prev").css("display","none");
                $(".carousel-control-next").css("display","none");
                break;
              case "4":
                for (var i=0; i<datos.length;i++){
                    if(i==0){
                        sliders+="<div class='carousel-item active' style='background:url(\""+datos[i].SLDRIMAGEN+"\");'>"
                    }
                    else{
                        sliders+="<div class='carousel-item' style='background:url(\""+datos[i].SLDRIMAGEN+"\");'>"
                    }
                    sliders+="\<div class='descripcionSlider container-fluid wow fadeIn' data-wow-delay='0.4s'>\
                                    <p class='h1-responsive wow fadeInLeftBig'>"+datos[i].SLDRNOMBRE+"</p>\
                                    <p class='descripcion wow fadeIn'>"+datos[i].SLDRDESCRIPCION+"</p>\
                                </div>\
                            </div>\
                        </div>"
                }
                break;
            }
            $("#CarouselInicio .carousel-inner").html(sliders);
            $(".Simagen").attr("src",datos[0].SLDRIMAGEN);
            $(".Simagen").css("background-image","url("+datos[0].SLDRIMAGEN+")");
            $(".fondo").css("background-image",'url(https://mdbootstrap.com/img/Photos/Others/architecture.jpg)');
        }
    });
};

//-- FUNCION MOSTRAR COMPONENTE 1 --
vistaWeb.prototype.mostrarComponente1 = function(){
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarDatosComponente1.php',
        type: 'GET',
        dataType: 'json',
        error: function(error){
            if(error.status == 401){
                console.error("Archivos no encontrados");
            }
            else{
                console.error("Error no identificado");
            }
        },
        success: function(datos){
            var componente="";
            switch(datos.COMP1){
              case "1": componente+="<div id='banner1' class='container my-5 py-5'> \
            <section class='px-md-5 mx-md-5 dark-grey-text text-center text-lg-left'> \
              <div class='row'> \
                <div class='col-lg-6 mb-4 mb-lg-0 d-flex align-items-center justify-content-center'> \
                  <img class='img-fluid wow fadeInLeft' src='"+datos.C1IMAGEN+"'> \
                </div> \
                <div class='col-lg-6 mb-4 mb-lg-0'> \
                  <h3 class='font-weight-bold wow fadeIn'>"+datos.C1TITULO+"</h3> \
                  <p class='font-weight-bold wow fadeIn'>"+datos.C1SUBTITULO+"</p> \
                  <p class='text-muted wow fadeIn'>"+datos.C1DESCRIPCION+"</p> \
                  <a class='font-weight-bold font-primary wow fadeIn' href='Nosotros.php' >Conocer más<i class='fas fa-angle-right ml-2'></i></a> \
                </div> \
              </div> \
            </section> \
          </div>"; break;
              case "2": componente+="<div id='banner1' class='tab-pane fade show' id='op2' role='tabpanel' aria-labelledby='op2-tab'> \
          <div class='container my-5 py-5'> \
            <section class='px-md-5 mx-md-5 text-center dark-grey-text'> \
              <div class='row'> \
                <div class='col-md-6 mb-4 mb-md-0'> \
                  <h3 class='font-weight-bold wow fadeIn'>"+datos.C1TITULO+"</h3> \
                  <p class='text-muted wow fadeIn'>"+datos.C1DESCRIPCION+"</p> \
                  <a class='btn bg-primary btn-md ml-0 wow fadeIn' href='Nosotros.php' role='button'>Conocer más<i class='fa fa-gem ml-2'></i></a> \
                  <hr class='my-5'> \
                  <p class='font-weight-bold wow fadeIn'>Síguenos en:</p> \
                  <a class='mx-1 font-primary disabled wow fadeIn' role='button'><i class='fab fa-facebook-f'></i></a> \
                  <a class='mx-1 font-primary disabled wow fadeIn' role='button'><i class='fab fa-linkedin-in'></i></a> \
                  <a class='mx-1 font-primary disabled wow fadeIn' role='button'><i class='fab fa-instagram'></i></a> \
                </div> \
                <div class='col-md-5 mb-4 mb-md-0'> \
                  <img class='c1imagen img-fluid wow fadeInRight' src='"+datos.C1IMAGEN+"'> \
                </div> \
              </div> \
            </section> \
          </div> \
        </div>"; break;
              case "3": componente+="<div id='banner1' class='container my-5 py-5'> \
            <section class='px-md-5 mx-md-5 text-center text-lg-left dark-grey-text'> \
              <h3 class='font-weight-bold wow fadeIn'>"+datos.C1TITULO+"</h3> \
              <p class='text-muted mb-5 wow fadeIn'>"+datos.C1DESCRIPCION+"</p> \
              <div class='row'> \
                <div class='col-lg-3 col-md-12 mb-lg-0 mb-4'> \
                  <img class='img-fluid wow fadeInLeft' src='"+datos.C1IMAGEN+"'> \
                </div> \
                <div class='col-lg-6 col-md-6 mb-lg-0 mb-lg-0 mb-2'> \
                  <h4 class='h4 wow fadeIn'>¿Por qué elegirnos?</h4> \
                  <p class='text-muted wow fadeIn'>"+datos.C1DESTACAMOS+"</p> \
                </div> \
                <div class='col-lg-3 col-md-6 text-center'> \
                  <a class='btn bg-primary btn-md waves-effect wow fadeIn' href='Nosotros.php' role='button'>Ver más</a> \
                  <a class='btn bg-primary btn-md wow fadeIn' href='Contactos.php' role='button'>Contáctanos</a> \
                </div> \
              </div> \
            </section> \
          </div>"; break;
              case "4": componente+="<div id='banner1' class='container my-5 py-5'> \
            <section class='px-md-5 mx-md-5 text-center dark-grey-text'> \
              <div class='row d-flex justify-content-center'> \
                <div class='col-xl-6 col-md-8'> \
                  <h3 class='font-weight-bold wow fadeIn'>"+datos.C1TITULO+"</h3> \
                  <p class='text-muted wow fadeIn'>"+datos.C1DESCRIPCION+"</p> \
                  <a class='btn bg-primary btn-md ml-0 mb-5 wow fadeIn' href='Nosotros.php' role='button'>Ver más<i class='fa fa-magic ml-2'></i></a> \
                </div> \
              </div> \
              <div class='row'> \
                <div class='col-lg-3 col-md-6 wow fadeIn'> \
                  <i class='fas fa-gem fa-3x blue-text'></i> \
                  <p class='font-weight-bold my-3'>Calidad</p> \
                  <p class='text-muted'>"+datos.C1CARACTERISTICA1+"</p> \
                </div> \
                <div class='col-lg-3 col-md-6 wow fadeIn'> \
                    <i class='fas fa-chart-area fa-3x teal-text'></i> \
                    <p class='font-weight-bold my-3'>Garantía</p> \
                    <p class='text-muted'>"+datos.C1CARACTERISTICA2+"</p> \
                </div> \
                <div class='col-lg-3 col-md-6 wow fadeIn'> \
                    <i class='fas fa-cogs fa-3x indigo-text'></i> \
                    <p class='font-weight-bold my-3'>Funcional</p> \
                    <p class='text-muted'>"+datos.C1CARACTERISTICA3+"</p> \
                </div> \
                <div class='col-lg-3 col-md-6 wow fadeIn'> \
                    <i class='fas fa-cloud-upload-alt fa-3x deep-purple-text'></i> \
                    <p class='font-weight-bold my-3'>Eficaz</p> \
                    <p class='text-muted'>"+datos.C1CARACTERISTICA4+"</p> \
                </div> \
              </div> \
            </section> \
          </div>"; break;
              case '5': componente+="<div id='banner1' class='container my-5 p-5> \
            <section class='dark-grey-text'> \
              <h2 class='text-center font-weight-bold mb-4 pb-2'>"+datos.C1TITULO+"</h2> \
              <p class='text-center lead grey-text mx-auto mb-5'>"+datos.C1DESCRIPCION+"</p> \
              <div class='row'> \
                <div class='col-md-4'> \
                  <div class='row mb-3 wow fadeIn'> \
                    <div class='col-2'> \
                      <i class='fas fa-2x fa-flag-checkered font-primary'></i> \
                    </div> \
                    <div class='col-10'> \
                      <h5 class='font-weight-bold mb-3'>Calidad</h5> \
                      <p class='grey-text'>"+datos.C1CARACTERISTICA1+"</p> \
                    </div> \
                  </div> \
                  <div class='row mb-3 wow fadeIn'> \
                    <div class='col-2'> \
                      <i class='fas fa-2x fa-flask font-primary'></i> \
                    </div> \
                    <div class='col-10'> \
                      <h5 class='font-weight-bold mb-3'>Eficiente</h5> \
                      <p class='grey-text'>"+datos.C1CARACTERISTICA2+"</p> \
                    </div> \
                  </div> \
                  <div class='row mb-md-0 mb-3 wow fadeIn'> \
                    <div class='col-2'> \
                      <i class='fas fa-2x fa-glass-martini font-primary'></i> \
                    </div> \
                    <div class='col-10'> \
                      <h5 class='font-weight-bold mb-3'>Garantía</h5> \
                      <p class='grey-text mb-md-0'>"+datos.C1CARACTERISTICA3+"</p> \
                    </div> \
                  </div> \
                </div> \
                <div class='col-md-4 text-center'> \
                  <img class='img-fluid wow fadeIn' src='"+datos.C1IMAGEN+"'> \
                </div> \
                <div class='col-md-4'> \
                  <div class='row mb-3 wow fadeIn'> \
                    <div class='col-2'> \
                      <i class='far fa-2x fa-heart font-primary'></i> \
                    </div> \
                    <div class='col-10'> \
                      <h5 class='font-weight-bold mb-3'>Confiable</h5> \
                      <p class='grey-text'>"+datos.C1CARACTERISTICA4+"</p> \
                    </div> \
                  </div> \
                  <div class='row mb-3 wow fadeIn'> \
                    <div class='col-2'> \
                      <i class='fas fa-2x fa-bolt font-primary'></i> \
                    </div> \
                    <div class='col-10'> \
                      <h5 class='font-weight-bold mb-3'>Eficaz</h5> \
                      <p class='grey-text'>"+datos.C1CARACTERISTICA5+"</p> \
                    </div> \
                  </div> \
                  <div class='row wow fadeIn'> \
                    <div class='col-2'> \
                      <i class='fas fa-2x fa-magic font-primary'></i> \
                    </div> \
                    <div class='col-10'> \
                      <h5 class='font-weight-bold mb-3'>Mágico</h5> \
                      <p class='grey-text mb-0'>"+datos.C1CARACTERISTICA6+"</p> \
                    </div> \
                  </div> \
                </div> \
              </div> \
            </section> \
          </div>"; break;
            }
            $("div#CarouselInicio").after(componente);
        }
    });
};

//-- FUNCION MOSTRAR COMPONENTE 1 --
vistaWeb.prototype.mostrarComponente2 = function(){
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_MostrarDatosComponente2.php',
        type: 'GET',
        dataType: 'json',
        error: function(error){
            if(error.status == 401){
                console.error("Archivos no encontrados");
            }
            else{
                console.error("Error no identificado");
            }
        },
        success: function(datos){
            var componente="";
            switch(datos.COMP2){
              case "0": componente+=""; break;
              case "1": componente+="<div class='container my-5'> \
            <section class='dark-grey-text text-center'> \
              <h3 class='text-center font-weight-bold mb-4 pb-2'>"+datos.C2TITULO+"</h3> \
              <p class='text-center text-muted w-responsive mx-auto mb-5'>"+datos.C2DESCRIPCION+"</p> \
              <div class='row'> \
                <div class='col-md-6 mb-4'> \
                  <div class='c1imagen1 card card-image'> \
                    <div class='text-white text-center d-flex align-items-center py-5 px-4 px-md-5 rounded'> \
                      <div> \
                        <h6 class='font-enfasis1'> \
                          <i class='fas fa-chart-pie'></i> \
                          <strong>Funcional</strong> \
                        </h6> \
                        <h3 class='py-3 font-weight-bold'> \
                          <strong>"+datos.C2T1TITULO+"</strong> \
                        </h3> \
                        <p class='pb-3'>"+datos.C2T1DESCRIPCION+"</p> \
                      </div> \
                    </div> \
                  </div> \
                </div> \
                <div class='col-md-6 mb-4'> \
                  <div class='c1imagen2 card card-image'> \
                    <div class='text-white text-center d-flex align-items-center py-5 px-4 px-md-5 rounded'> \
                      <div> \
                        <h6 class='font-enfasis3'> \
                          <i class='fas fa-eye'></i> \
                          <strong> Dinámico</strong> \
                        </h6> \
                        <h3 class='py-3 font-weight-bold'> \
                          <strong>"+datos.C2T2TITULO+"</strong> \
                        </h3> \
                        <p class='pb-3'>"+datos.C2T2DESCRIPCION+"</p> \
                      </div> \
                    </div> \
                  </div> \
                </div> \
              </div> \
            </section> \
          </div>"; break;
              case "2": componente+="<div class='container-fluid p-5 bg-primary'> \
            <section class='text-center white-text'> \
              <h2 class='font-weight-bold mb-4 pb-2 text-uppercase'>"+datos.C2TITULO+"</h2> \
              <p class='mx-auto mb-5'>"+datos.C2DESCRIPCION+"</p> \
              <div class='row'> \
                <div class='col-md-4 mb-4'> \
                  <i class='fas fa-brain fa-3x'></i> \
                  <h5 class='font-weight-bold my-4 text-uppercase'>"+datos.C2T1TITULO+"</h5> \
                  <p class='mb-md-0 mb-5'>"+datos.C2T1DESCRIPCION+"</p> \
                </div> \
                <div class='col-md-4 mb-4'> \
                  <i class='fas fa-eye fa-3x'></i> \
                  <h5 class='font-weight-bold my-4 text-uppercase'>"+datos.C2T2TITULO+"</h5> \
                  <p class='mb-md-0 mb-5'>"+datos.C2T2DESCRIPCION+"</p> \
                </div> \
                <div class='col-md-4 mb-4'> \
                  <i class='fas fa-users fa-3x'></i> \
                  <h5 class='font-weight-bold my-4 text-uppercase'>"+datos.C2T3TITULO+"</h5> \
                  <p class='mb-0'>"+datos.C2T3DESCRIPCION+"</p> \
                </div> \
              </div> \
            </section> \
          </div>"; break;
              case "3": componente+="<div class='container-fluid'> \
            <section class='dark-grey-text text-center'> \
              <h3 class='text-center font-weight-bold mb-4 pb-2'>"+datos.C2TITULO+"</h3> \
              <p class='text-center text-muted w-responsive mx-auto mb-5'>"+datos.C2DESCRIPCION+"</p> \
              <div class='row'> \
                <div class='col-md-12 px-0'> \
                  <div class='c1imagen1 card card-image' style='background-attachment: fixed;'> \
                    <div class='text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 px-md-5 rounded'> \
                      <div> \
                        <h6 class='font-primary'> \
                          <i class='fas fa-eye'></i> \
                          <strong> Funcional</strong> \
                        </h6> \
                        <h3 class='py-3 font-weight-bold'> \
                          <strong>"+datos.C2T1TITULO+"</strong> \
                        </h3> \
                        <p class='pb-3'>"+datos.C2T1DESCRIPCION+"</p> \
                      </div> \
                    </div> \
                  </div> \
                </div> \
              </div> \
            </section> \
          </div>"; break;
              case "4": componente+="<div class='container-fluid px-0'> \
            <section class='c1imagen1 text-center white-text p-5' style='background-attachment: fixed;'> \
              <div class='row d-flex justify-content-center my-5'> \
                <div class='col-md-6'> \
                    <h3 class='font-weight-bold'>"+datos.C2TITULO+"</h3> \
                    <p>"+datos.C2DESCRIPCION+"</p> \
                </div> \
              </div> \
            </section> \
          </div>"; break;
            }
            $("div#banner1").after(componente);
            $(".c1imagen1").css("background-image","url("+datos.C2IMAGEN1+")");
            $(".c1imagen1").css("background-repeat","no-repeat");
            $(".c1imagen1").css("background-size","cover");
            $(".c1imagen1").css("background-position","center");
            $(".c1imagen2").css("background-image","url("+datos.C2IMAGEN2+")");
            $(".c1imagen2").css("background-repeat","no-repeat");
            $(".c1imagen2").css("background-size","cover");
            $(".c1imagen2").css("background-position","center");
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
            $(".navbar-brand").html("<img class='mr-3' src='"+datos[0].INFEMPLOGO+"' width='100'>"+datos[0].INFEMPTITULO_PAGINA);
          
            $("#telNavES").html("<span class='fa fa-phone rounded-circle mr-2 pl-1 pt-1'></span>"+datos[0].INFEMPTELEFONO1+" / "+datos[0].INFEMPTELEFONO2);

            $("#correoNavES").html("<span class='fa fa-envelope rounded-circle mr-2 pl-1 pt-1'></span>"+datos[0].INFEMPCORREO);

					
            //FOOTER
            $("#nombreEmpresa").html(datos[0].INFEMPTITULO_PAGINA);
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
            switch(datos[0].COMPDESTACADOS){
              case "0": contenedor+=""; break;
              case "1":
                contenedor +="<div class='bg-light1 container-fluid pt-5 pb-2 text-center'> \
              <h3 class='font-weight-bold mb-4 pb-2  wow fadeIn'>Productos de alta calidad</h3> \
              <p class='grey-text w-responsive mx-auto mb-5 wow fadeIn'>Los mejores acabados, diseños y modelos a tu alcance.</p> \
              <div class='card-deck mb-4 row justify-content-center'>";
                for(var i=0; i<datos.length ; i++){
                    contenedor += "<div class='col-12 wow fadeIn' style='min-width:150px; max-width:250px;'> \
                    <div class='card m-1'> \
                        <div class='view overlay zoom'> \
                            <img id='"+datos[i].PRODCODIGO+"' class='card-img-top' src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[i].PRODIMAGEN+"' onclick='vWeb.seleccionarProducto(this)' style='cursor:pointer;' height='200px'> \
                        </div> \
                        <div class='card-body'> \
                            <p class='font-weight-bold text-uppercase mb-1' style='height:80px;'>"+datos[i].PRODNOMBRE+"</p> \
                            <hr class='bg-light3 my-0' style='width: 60%; height:3px;'> \
                            <hr class='bg-primary my-1' style='width: 20%; height:3px;'> \
                            <div class='text-right'> \
                                <a id='"+datos[i].PRODCODIGO+"' class='btn bg-primary btn-sm py-0 px-1' onclick='vWeb.seleccionarProducto(this)'>Ver más</a>  \
                            </div> \
                        </div> \
                    </div> \
                    </div>";

                }
                contenedor += "</div>  \
              <div class='modal fade' id='modalDescripcion' tabindex='-1' role='dialog'> \
                <div class='modal-dialog modal-dialog-centered' role='document'></div> \
              </div> \
          </div>"
                break;
              case "2":
                contenedor += "<div class='container mt-5'> \
            <section class='dark-grey-text text-center'> \
              <h3 class='font-weight-bold mb-4 pb-2'>Productos de alta calidad</h3> \
              <p class='grey-text w-responsive mx-auto mb-5'>Los mejores acabados, diseños y modelos a tu alcance.</p> \
              <div class='row justify-content-center'>";                
                for(var i=0; i<datos.length ; i++){
                    contenedor += "<div class='col-lg-3 col-md-6 mb-4 justify-content-center d-flex align-items-stretch'> \
                <div class='card align-items-center'> \
                  <div class='destacado2 view overlay' style='height: 238.078px'> \
                    <img src='ES-FrontEnd/Elementos/Imagenes/Productos/"+datos[i].PRODIMAGEN+"' class='card-img-top'> \
                    <a id='"+datos[i].PRODCODIGO+"' onclick='vWeb.seleccionarProducto(this)'><div class='mask rgba-white-slight'></div></a> \
                  </div> \
                  <div class='card-body text-center'> \
                    <h5 class='mb-3'> \
                      <strong> \
                        <a id='"+datos[i].PRODCODIGO+"' class='dark-grey-text' onclick='vWeb.seleccionarProducto(this)'>"+datos[i].PRODNOMBRE+"</a> \
                      </strong> \
                    </h5> \
                  </div> \
                </div> \
              </div>";

                }
                contenedor += "</div> \
            </section> \
          </div>";
                break;
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
    var asunto=$("#asunto").val();
    var correo=$("#correo").val();
    var mensaje=$("#mensaje").val();    
    
    if(asunto == null || asunto.length == 0 || /^\s+$/.test(asunto)){
        alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
        $("#asunto").focus();
    }
    else if(mensaje == null || mensaje.length == 0 || /^\s+$/.test(mensaje)){
        alert('ERROR: El campo contraseña no debe ir vacío o lleno de solamente espacios en blanco');
        $("#mensaje").focus();
    }
    else if(asunto.length<3 || asunto.length>40){
        alert('ERROR Nombre: Tamaño mínimo : 3. Tamaño máximo: 40');
        $("#asunto").focus();
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
        '_correo': $("#correo").val(),
        '_asunto': $("#asunto").val(),
        '_mensaje': $("#mensaje").val()
    }
    
    $.ajax({
        url: 'ES-BackEnd/Controlador/Controlador-Web/Controlador_EnviarCorreo.php',
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
                $("#correo").val("");
                $("#asunto").val("");
                $("#mensaje").val("");
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
        contenido += "<div class='col-12 col-sm-6 col-md-4 p-2'>\n\
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
