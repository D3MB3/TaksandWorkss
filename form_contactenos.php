<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contacto</title>
	<meta charset="utf-8">


			<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320"/>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="cleartype" content="on">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet"  href="estilo.css">
	<link rel="stylesheet"  href="bootstrap-3.3.4-dist/css/bootstrap.min.css">
</head>
<header class="header d-flex flex-row">

			<meta charset="utf-8">
			<meta content="width=device-width, initial-scale=1.0" name="viewport">

			


		


			<li class="active"><a href="menu_ppal.php?codigo=0">Solicitar un servicio</a></li>
			<li><a href="form_ver_trabajos.php?codigo=0">Mis solicitudes</a></li>
			<li><a href="gallery/index3.php?codigo=0">Portafolio de servicios</a></li><!--NUEVO 4-->	
            <li><a href="form_contactenos.php?codigo=0">contacto</a></li>
            <li><a href="menu_ppal.php?codigo=0">atras</a></li>
			<li><a href="cerrar.php">Salir</a></li>
		</ul>
	</nav>		
		</header>
<body>

	<div class="super_container">
		<div class="logo justify-content-center align-items-center">
			<img src="images/logo_gepar_opt.png" alt="">
		</div>  
		<!-- Header -->
		



		<div class="popular page_section">

			<center><h2>Envío de Mensajes</h2></center>
			<form role="form" method="POST" action="add_contacto.php">
				<center>
					<div class="col-sm-5">
						<input type="hidden" class="form-control" name="id_contacto" required>
					</div><br>

					<div class="col-sm-5">
						<input type="text" class="form-control" name="nombre" required placeholder="Ingrese su Nombre y Apellido">
					</div><br>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="telefono" required placeholder="Ingrese N° de teléfono ó celular">
					</div><br>
					<div class="col-sm-5">
						<input type="mail" class="form-control" name="correo" placeholder="Ingrese un correo electrónico">
					</div><br>
					<div class="col-sm-10">
						<textarea name="comentario" rows="8" cols="75" placeholder="Ingrese un mensaje"></textarea>
					</div><br>

					<div class="col-sm-offset-6 col-sm-10">							
						<input type="submit" class="btn btn-danger btn-sm" value="Enviar">                                             
					</div>
				</center>	

			</form>

		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/courses_custom.js"></script>

</body>
</html>
