<!DOCTYPE html>
<html lang="en">

<head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5TMPWDQMHD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5TMPWDQMHD');
</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="/img/favicon-clean1.png">


  <title>Cloudplot</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor_portal/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor_portal/fontawesome-free/css/all.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('vendor_portal/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="{{ asset('vendor_portal/device-mockups/device-mockups.min.css') }}" rel="stylesheet"/>  
    <!-- Custom styles for this template -->
    <link href="{{ asset('vendor_portal/css/new-age.css?v=12') }}" rel="stylesheet"/>  
    <link href="{{ asset('vendor_portal/css/custom-css.css') }}" rel="stylesheet"/> 

    <!-- Slick resources start -->
    <!-- Bootstrap CSS -->
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
<!-- Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<!-- Slick resources end -->



</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img class="imglogod" style="display:none;" src="{{ asset('vendor_portal/img/logo.svg') }}" width="200px" alt="">
        <img class="imglogom" style="display:none;" src="{{ asset('img/logo_azul.svg') }}" width="200px" alt="">
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Nueva cuenta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#features">Características</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="/login">Ingresa</a>
           {{--  <a href="">Ingresa</a> --}}
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <h1>Ploteo Inteligente</h1>
            <ul class="checklist">
              <li><i class="fa fa-check"></i><strong>  Fácil</strong>, pide tus planos desde la app.</li>
              <li><i class="fa fa-check"></i><strong>  Rápido</strong>, recíbelos en tiempo record.</li>
              <li><i class="fa fa-check"></i><strong>  Claro</strong>, ten a tu mano reportes de avance, costos y facturación.</li>
            </ul>
           
            <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Me encanta, quiero empezar</a>
            
            <div class="clients-mini col-xs-12">
              <h5>Piden sus planos con <span style="font-weight:700;">cloudplot</span>:</h5>
              <ul>
               <li><img src="{{ asset('vendor_portal/img/cl_min_ferrovial.png') }}"></li>
               <li><img src="{{ asset('vendor_portal/img/cl_min_grevia.png') }}"></li>
               <li><img src="{{ asset('vendor_portal/img/cl_min_mpc.png') }}"></li>
               <li><img src="{{ asset('vendor_portal/img/cl_min_sigro.png') }}"></li>
              </ul>
            </div>

            <!-- <div class="row clients-mini">
              <div class="clmini-up">

              </div>
              <div class="clmini-dwn"></div>
              <div class="clmini-up"></div>
              <div class="clmini-dwn"></div>
              <div class="clmini-up"></div>

            </div> -->

          </div>
        </div>
        <div class="col-lg-5 my-auto col-sm-12 col-xs-12">
          <div class="device-container">
            <div class="device-mockup iphone6_plus portrait white">
              <div class="device">
                <div class="screen">
                  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                  <img src="{{ asset('vendor_portal/img/demo-screen-1.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="button">
                  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>



  <section class="features" id="features">
    <div class="container">
      <div class="section-heading text-center" style="margin-bottom: 0;">
        <h2>Gestión inteligente de ploteo</h2>
        <p class="text-muted">El estándar de solicitudes por email es cosa del pasado</p>
        <hr>
      </div>
      <div class="row">
        <!--<div class="col-lg-4 my-auto">
          <div class="device-container">
            <div class="device-mockup iphone6_plus portrait white">
              <div class="device">
                <div class="screen">
                   Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! 
                  <img src="{{ asset('vendor_portal/img/demo-screen-1.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="button">
                   You can hook the "home button" to some JavaScript events or just remove it 
                </div>
              </div>
            </div>
          </div>
        </div>-->
        <div class="col-lg-12 my-auto">
          <div class="container-fluid">
            <div class="row">
            <div class="col-lg-4">
                <div class="feature-item">
                  <i class="icon-screen-smartphone text-primary"></i>
                  <h3>Acceso móvil</h3>
                  <p class="text-muted">Accede desde cualquier navegador web, en tu pc o celular.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="feature-item">
                  <i class="icon-bell text-primary"></i>
                  <h3>Notificaciones</h3>
                  <p class="text-muted">Notificaciones por whatsapp, cuando tu pedido esté listo o sea despachado.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="feature-item">
                  <i class="icon-speech text-primary"></i>
                  <h3>Comunicación directa</h3>
                  <p class="text-muted">Chatea con el operador encargado de tu trabajo, directo desde tu cuenta.</p>
                </div>
              </div>              
            </div>
            <div class="row">
            <div class="col-lg-4">
                <div class="feature-item">
                  <i class="icon-organization text-primary"></i>
                  <h3>Servidor centralizado</h3>
                  <p class="text-muted">No + emails. Solicitudes se cargan al instante al personal asignado.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="feature-item">
                  <i class="icon-list text-primary"></i>
                  <h3>Cuentas claras</h3>
                  <p class="text-muted">Accede a detalles de costos, lista de precios, y recibe reporte mensual.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="feature-item">
                  <i class="icon-people text-primary"></i>
                  <h3>Trabaja en equipo</h3>
                  <p class="text-muted">Varios usuarios en una misma obra, comparten la información y registro de pedidos.</p>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="download bg-primary text-center" id="download">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <img src="{{ asset('vendor_portal/img/tracking.png') }}" alt="Rastreo de solicitudes" width="100%" height="auto">
          <h2 style="font-size:50px !important" class="section-heading">Seguimiento automático del avance de tus pedidos</h2>

          {{-- <p>Our app is available on any mobile device! Download now to get started!</p>
          <div class="badges">
            <a class="badge-link" href="#"><img src="{{ asset('vendor_portal/img/google-play-badge.svg') }}" alt=""></a>
            <a class="badge-link" href="#"><img src="{{ asset('vendor_portal/img/app-store-badge.svg') }}" alt=""></a>
          </div> --}}
        </div>
      </div>
    </div>
  </section>

  
  <section class="cta">
    <div class="cta-content">
      <div class="container">
        <h2>Deja de esperar.<br>Empieza a <strong>construir</strong>.</h2>
        <a href="#contact" class="btn btn-outline btn-xl js-scroll-trigger">Empecemos!</a>
      </div>
    </div>
    <div class="overlay"></div>
  </section>


  <section class="contact" id="contact">
    <div class="container-fluid">
    <div class="section-heading text-center" style="margin-bottom: 0;">
        <h2>Empieza a usar CloudPlot ahora</i></h2>
        
      

      </div>
      <div class="container overflow-hidden">
  <div class="row gy-2 pt-5">
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
      <div class="p-4 bg-primary">
      <p class="text-muted">Trabajas con nuestros clientes convenio?</p>
      <a href="/register" class="btn btn-primary btn-xl">Registrar nueva cuenta</a>

      </div>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
      <div class="p-4 bg-primary contacts">
      <p class="text-muted">Contáctanos y te ayudamos a conectarte</p>
      <ul class="list-inline list-social">
        <li class="list-inline-item social-whatsapp">
          <a href="https://wa.me/56997797738" target=”_blank>
            <i class="fab fa-whatsapp"></i>
          </a>
        </li>
        <li class="list-inline-item social-facebook">
          <a href="mailto:info@cloudplot.cl" target="_blank">
          <i class="fa fa-envelope"></i>
          </a>
        </li>

      </ul>

      </div>
    </div>
</div>
<hr class="m-4 mx-auto">
      <div class="row pt-5">
  <div class="container">
  <h3 class="convenio">Nuestros clientes convenio <i class="fas fa-heart"></i></h3>
    <section class="logo-carousel slider" >
      <div class="slide"><img src="{{ asset('vendor_portal/img/mpc.png') }}"></div>
      <div class="slide"><img src="{{ asset('vendor_portal/img/ferrovial.png') }}"></div>
      <div class="slide"><img src="{{ asset('vendor_portal/img/carran.png') }}"></div>
      <div class="slide"><img src="{{ asset('vendor_portal/img/sigro.png') }}"></div>
      <div class="slide"><img src="{{ asset('vendor_portal/img/besalco.png') }}"></div>
      <div class="slide"><img src="{{ asset('vendor_portal/img/befco.png') }}"></div>
      <div class="slide"><img src="{{ asset('vendor_portal/img/imagina.png') }}"></div>
      <div class="slide"><img src="{{ asset('vendor_portal/img/grevia.png') }}"></div>
      <div class="slide"><img src="{{ asset('vendor_portal/img/emm.png') }}"></div>


    </section>
  </div>
</div>

          <!--
          <div class="bg-primary row" style="width: 90%; height: 250px; margin: auto;" >
        <div class="col-md-5" style="padding: 25px;">
          <h5>Si trabajas con nuestros clientes convenio, puedes registrar tu cuenta y obra de inmediato:</h5>
          <a href="/register" class="btn btn-xl">Registrar nueva cuenta</a>



        </div>
        <div class="col-md-2"><hr class="verticalhr"></div>
        <div class="col-md-5"></div>
        </div>-->


      {{-- <h2>We
        <i class="fas fa-heart"></i>
        new friends!</h2>
      <ul class="list-inline list-social">
        <li class="list-inline-item social-twitter">
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item social-facebook">
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li class="list-inline-item social-google-plus">
          <a href="#">
            <i class="fab fa-google-plus-g"></i>
          </a>
        </li>
      </ul> --}}
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; Bitnapse 2020. Todos los derechos reservados.</p>
     <!-- <ul class="list-inline">
        <li class="list-inline-item">
          <a href="#">Privacy</a>
        </li>
        <li class="list-inline-item">
          <a href="#">Terms</a>
        </li>
        <li class="list-inline-item">
          <a href="#">FAQ</a>
        </li>
      </ul>-->
    </div>
  </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor_portal/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor_portal/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor_portal/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for this template -->
    <script src="{{ asset('vendor_portal/js/new-age.min.js') }}"></script>
    <script >
      $(document).ready(function() {
        if ($(window).width() <= 768) {
        console.log('ready es mobile!!');
          $(".imglogod").hide();//imglogod
          $(".imglogom").css({'display':'block'});//imglogod
        }else{
        console.log('ready es desktop!!');
          $(".imglogod").show();//imglogod
          $(".imglogom").hide();
        }
      });
    </script>
    
<!-- jQuery first, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- Slick Slider JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="{{ asset('vendor_portal/js/slick.js') }}"></script>
</body>

</html>
