
<?php

include("sesion.php");
if($_SESSION["tipo_usuario"] == "Administrador"){ //NUEVO2

?>

<!DOCTYPE html>
<html lang="es">
	  <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>Nombre del proyecto</title>
      <meta content="" name="description">
      <meta content="" name="keywords">

      <!-- Favicons -->
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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


	 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html"><img src="imagenes/logo.jpg">Veterinaria hh<span>.</span></a></h1><!--NUEVO-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->


      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="menu_ppal_admin.php">Inicio</a></li><!--NUEVO-->
          <!--<li><a href="#about">Inicie Sesión</a></li><!--NUEVO-->
          <li><a href="form_consulta_servicios_cliente.php">Servicios</a></li><!--NUEVO-->
          <li> <a href="form_registro_solicitud.php">Solicitar Servicios</a></li>
          <!--<li><a href="#team">Equipo</a></li><!--NUEVO-->
          <li><a href="main/Usuarios/users.php">Administración de Usuarios</a></li><!--NUEVO1_NUEVO PARA USUARIOS-->

                <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <!--<li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contacto</a></li><!--NUEVO-->
          <li><a href="cerrar.php">Salir</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!--NUEVO ACTIVIDAD 4-->
<section id="hero" class="d-flex align-items-center"><!--NUEVO MODIFICACIÓN EN EL ID hero-->
 <main id="main">
	<div class="panel-body">
		<form name="registro_usuario" class="form-horizontal" method="post" role="form" action="editar_usuario.php">
						
			<div align="center">
			<div class="container">

			<h1>
			<span></span>
			</h1>
			
			
			<a class="btn btn-primary" href="form_registro_solicitud.php" role="button">Agregar solicitud</a>
			
			
				<div class="tabla">
					<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%" >

						<thead>
						 <tr>
							<th>Número servicio</th>
							<th>Nombre del servicio</th>
							<th>Fecha de registro</th>
							<th>Fecha de entrega</th>
							<th>hora de entrega</th>
							
							<!--<th>Horas de atencion</th>-->
							
							
												
							<!-- <th>Eliminar</th> -->
							
							
						 </tr>
						</thead>

						<tbody>
						
						 <?php 
						 
						 include 'conexion_new.php';

						 //$con=conexion();
						 @$usu_cod = $_SESSION["codigo"];
						 $consulta= "select * from servicio";
						 
						 $result = $con->query($consulta);					 
						 
						 while($rows=mysqli_fetch_assoc($result)){ ?>
							
						 <tr>
							<td align="center" ><?php echo $rows['serv_consec']; ?></td>
							
							<td align="center"><?php echo $rows ['serv_cod']; ?></td>
				
							<td align="center"><?php echo $rows['fech_reg']; ?></td>
							
							<td align="center"><?php echo $rows['fech_entrega']; ?></td>
							
							<td align="center"><?php echo $rows['hor_entrega']; ?></td>
							
							
							
							

							<td align="center"><a href="form_editar_solicitud.php?id=<?php echo $rows["serv_consec"]; ?>"  ><img src="imagenes/lapiz.png"></a></td> 
							
  

							<!-- <td align="center"><a  onclick="confirmDel();" href="eliminar-alumno2.php?id=<?php // echo $rows["cod_usuario"]; ?> " ><img src="tabla/images/close.png"></a></td>		 -->							
							
							
						
						 </tr>

						 <?php }	 ?>
						 

						</tbody>
					</table>
					
				</div>
				
		</div>	
					

			

			
			</div>
		</form>
		</div>
		
  
  </section><!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

        <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="container py-4">
      <div class="copyright">
   
        &copy; Copyright2021 <strong><span>Nombre del proyecto</span></strong>. Todos los derechos reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Diseñado por <a href="https://bootstrapmade.com/">Nombre del proyecto</a>
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
<?php //NUEVO 2
}
else{
  echo '<script language = javascript>
  alert("Acceso no permitido....!")
  self.location = "index.php"
  </script>';
}
?>







