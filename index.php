<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Taks and Works</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="C:/xampp2/htdocs/taksandworks/assets/img/thanks.jpg" rel="icon">
  <link href="C:/xampp2/htdocs/taksandworks/assets/img/thanks.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/estilo.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v1.2.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div id="fondo"class="bg-warning container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">TAKS AND WORKS</h1></a><!--NUEVO-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="fondo" class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Inicio</a></li><!--NUEVO-->
          <li><a href="#about">Inicie Sesi??n</a></li><!--NUEVO-->
          <li><a href="#services">Servicios</a></li><!--NUEVO-->
          <li><a href="#portafolio">Portafolio</a></li><!--NUEVO-->
          <li><a href="#team">Equipo</a></li><!--NUEVO-->
          <li class="drop-down"><a href="#Nosotros">Nosotros</a>
            <ul>
              <li><a href="#Nosotros">Mision</a></li>
                <ul>
                  
                </ul>
              </li>
              <li><a href="#mision">Vision</a></li>
              <li><a href="#vision">Valores</a></li>
            </ul>
          </li>
          <li><a href="cerrar.php">Salir</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center"><!--NUEVO MODIFICACI??N EN EL ID hero-->
    
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1 id="taksand">Bienvenido a <span > TAKS AND WORKS </span><!--NUEVO-->
      </h1>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    
   <!-- ======= Services Section ======= -->
   <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>servicios</h2>
          <h3>Nuestros <span>Servicios</span></h3>
          <p>En esta seccion podras encontar cada uno de los servicios que ofrecemos </p>
        </div>

        

      </div>
    </section><!-- End Services Section -->
    <!-- ======= About Section ======= -->

    <section id="about"  class="about section-bg">
      
      <div class="row"   class="section-title" ><!-- NUEVO INICIO-->
          <div  class="col-md-12 col-md-offset-12">
            <div  class="panel panel-default">
              <div  class="panel-heading"> <span class="glyphicon glyphicon-lock"></span>Acceso al Sistema</div>
              <div class="panel-body">
                <form  class="form-horizontal" role="form" method='post' action="validar_acceso.php"><!--Formulario que me lleva a validar_acceso.php-->
                  <div class="form-group">
                    <!--<label for="inputEmail3" class="col-sm-3 control-label">Correo</label>-->
                    <div class="col-sm-9">
                      <input type="email" name = "correo" class="form-control" id="inputEmail3" placeholder="Ingrese su Correo Electr??nico" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <!--<label for="inputPassword3" class="col-sm-3 control-label">Clave</label>-->
                    <div class="col-sm-9">
                      <input type="password" name = "clave" class="form-control" id="inputPassword3" placeholder="Ingrese su Contrase??a" required>
                    </div>
                  </div>
                  <?php
                    // error_reporting(E_ERROR);
                    // if($_GET["error"]=="si"){
                      // echo "Correo o Clave invalida, por favor Verifica tus Datos de Acceso";
                      // }else{
                        // echo "";
                    // }          
                  ?>  
                  
<div class="form-group last">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn btn-dark">Ingresar</button>
                      <button type="reset" class="btn btn-dark">Cancelar</button>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="panel-footer">
                      <!--Olvidastes la Clave?<a href="formulario_mail.php">Recuperar Clave</a><br><br>-->
                      No estas Registrado? <a href="user_newcliente1.php">Registrate Aqu??</a><br><br><!--NUEVO1-->
                    </div>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div><!--NUEVO FINAL-->
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <section id="Nosotros" class="Nosotros">
      <div class="container" data-aos="fade-up">
          <h2 >nosotros</h2>
          <h3 id="mision">Mision</h3>
          <p>Somos una plataforma digital que busca llegar a la mayor??a de usuarios ofreciendo un servicio de calidad y eficacia, protegiendo los datos de los usuarios pudiendo facilitar sus necesidades a. Buscamos la seguridad de los usuarios y la comodidad de trabajar en una p??gina web de asesor??as y realizaci??n de trabajos .
. Ofrecemos p??ginas enfocadas en la realizaci??n de trabajos y tareas 
. Hacemos estos servicios ya que no hay muchas p??ginas para esto y las que hay no abarcan el tema de la realizaci??n de tareas a cambio de un pago .
. Trabajamos para clientes que buscan una mejor forma de hacer sus tareas siendo esta una prestadora de servicios pocas veces vista..</p>
        
        <h3 id="vision">Vision<span></h3>
  <p>Seremos para el a??o 2030 uno de los mejores sistemas de informaci??n educativos en toda colombia para universidades e instituciones educativas favoreciendo y ayudando a los estudiantes . 

</p>
        <h3 id="valores">Valores<span></h3>
            <p>Pasi??n. Este es el valor m??s importante cuando alguien se muestra apasionado con su trabajo y con lo que hace dejar?? de ser algo tedioso y agobiante, tendr?? la mente m??s clara para pensar en ideas novedosas que puedan hacer de la empresa algo mejor para entregar un mejor servicio al cliente.</p>

<p>Escucha. La escucha es un valor empresarial indispensable y necesario para poder trabajar en equipo pues muchas veces se pierden trabajadores con ideas innovadoras que est??n en busca de un lugar donde se sientan escuchados</p>

<p>Competitividad: En el momento que perdemos la competitividad, las ganas de seguir mejorando, de lograr las metas perdemos la pasi??n, la ??nica forma en la que una empresa puede crecer es siendo competitivo, con ambici??n de un mejor lugar con las ganas de ser el mejor y de igual forma se deben de sentir las personas encargadas de hacer esto posible.</p>

<p>Trabajo en equipo: es muy importante saber que una empresa necesita del compromiso y trabajo de todos sus empleados, que se escuchen los unos a los otros, que cada uno de los trabajadores tengan compa??erismo para lograr una meta la cual siempre debe de ser de la empresa algo mejor y no solamente en el mercado si no tambi??n un lugar agradable para trabajar, donde la tolerancia, respeto, la admiraci??n y la consideraci??n son las prioridades.</p>

      </div>
    </section><!-- End About Section -->

 

    

    <!-- ======= Portafolio Section ======= -->
    <section id="portafolio" class="portafolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portafolio</h2>
          <h3>Mira tu <span>Portafolio</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <h3><span>Equipo de Trabajo</span></h3>
          <p>Este es nuestro equipo de trabajo </p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/brahian.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Brahian Alvarez</h4>
                <span>Lider Fundador(Dise??ador del Frontend)</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/juan-manuel.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>juan manuel correa</h4>
                <span>Dise??ador del Backend</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/samuel.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Samuel Eliaz Lopera</h4>
                <span>Encargado del Mantenimiento de la Pagina</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/Santiago.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Santiago Gaviria</h4>
                <span>Dise??ador del Backend</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
         <a href="form_contactenos.php" <h2>Contacto</h2></a>
          <h3><span>contactanos</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Ubicacion</h3>
              <p>Cra. 48 ##1-125 Medellin, Antioquia</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Correo</h3>
              <p>taksandworks@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>llamanos</h3>
              <p>+57 301 414 3639</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado correctamente. Gracias!</div>
              </div>
              <div class="button"><button type="btn btn-dark">Enviar mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Taks and Works<span>.</span></h3>
            <p>
              Medellin, Antioquia<br>
               Cra. 48 ##1-125<br>
              Colombia<br><br>
              <strong>Celular:</strong> +57 301 414 3639<br>
              <strong>Correo:</strong> taksandworks@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            
            <h4>no se q poner</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#Nosotros">Nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Portafolio de Servivios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Equipo</a></li>
            </ul>
          </div>



          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Redes Sociales</h4>
            <p>Aca encontraras mas acerca de nosotros y podras estar actualizado acerca de nuestros servicios y mas </p>
            <div class="social-links mt-3">
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>

            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Taks and Works</span></strong>. Derechos reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Dise??ado por <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>