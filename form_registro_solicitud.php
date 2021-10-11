
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
		<html lang="es">
		<?php

		include "conexion_new.php";

		$tipousuario = "Tecnico";
		$consulta= "select correo, nombre, apellido from usuarios where tipousuario = '".$tipousuario."'";
		$result = $con->query($consulta);

		?>

		<head>

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

<body>	
<section id="hero" class="d-flex align-items-center"><!--NUEVO MODIFICACIÓN EN EL ID hero-->
	<div class="panel-body">
		<form name="registro_solicitud" class="form-horizontal" method="post" role="form" action="registrar_solicitud.php">

			<div align="center">

				<body>	

					<div class="container">
						<div class="row">
							<div class="col-md-4 col-offset-7">
								<div class="panel panel-default">
									<div class="panel heading"> <span class="glyphicon glyphicon-lock"> </span> Solicitud De Servicio </div>
									<div class="panel-body">
										<div class="form-group">
											<!--<label for="form-group" class="col-sm-3 control-label"> Servicio </label>-->
											<div class="col-ms-9">
												<SELECT name="serv_cod" class="form-control" required>
													<OPTION VALUE="">Seleccione</OPTION>
													<OPTION VALUE="Instalacion_Antivirus">Instalación Antivirus</OPTION>
													<OPTION VALUE="Seguridad_Informatica">Seguridad Informatica</OPTION>
													<OPTION VALUE="Escaneo_de_Redes">Escaneo de Redes</OPTION>
													<OPTION VALUE="Monitoreo_de_Redes">Monitoreo de Redes</OPTION>
													<OPTION VALUE="Mantenimiento_Correctivo">Mantenimiento Correctivo</OPTION>
													<OPTION VALUE="Mantenimiento_Preventivo">Mantenimiento Preventivo</OPTION>
													<OPTION VALUE="Asesoria_Virtual_Presencial">Asesoría Virtual ó Presencial</OPTION>
													<OPTION VALUE="Recuperacion_de_datos">Recuperacion de datos.</OPTION>
												</SELECT>
											</div>
										</div>

										<div class="form-group"><!-- Nuevo **************-->
											<label for="input" class="col-sm-3 control-label"> Correo</label>
											<div class="col-ms-9">
												<input type="email" name="correo" class="form-control" id="input" placeholder="Ingrese correo" required>
											</div>
										</div>
													<!--<div class="form-group">
															<label for="input" class="col-sm-3 control-label"> Hora </label>
																<div class="col-ms-9">
																	<input type="text" name="hor_servicio" class="form-control" id="input" placeholder="Ingrese rango de horas (Ej: 8:00 am - 1:00 pm)" required>
																</div>
															</div>-->
															<br>
														<!--<SELECT name="tecnico" class="form-control" required>
															<OPTION VALUE="">Seleccione el Técnico</OPTION>
															<?php //while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
															//{     //echo "<option value='".$row['correo']."'>".$row['nombre']." ".$row['apellido']."</option>"; 
															//} ?>	
														</SELECT>-->		
														<br>
														<div class="form-group last">
															<div class="col-sm-offset-3 col-sm-9">
																<button type="submit" class="btn btn-success btn-sm">Enviar solicitud</a><br></button>
															</div>

														</div>

													</div>
													
												</div>
											</div>
										</div>
									</div>
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
							


