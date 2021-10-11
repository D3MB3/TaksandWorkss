<?php
include("sesion.php");
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Index</title>
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

</head>

<header>

	<nav  role="navigation">
		<ul class="nav nav-pills nav-justified">

				<!--<li ><a href="form_editar_usuario.php">Ver mi Perfil</a></li>
				<li ><a href="menu_ppal.php">Solicitar un Servicio</a></li>
				<li ><a href="form_ver_trabajos.php">Mis Servicios Solicitados</a></li>-->
				<li><button type="button" class="btn btn-outline-primary"><a href="form_solicitudes.php">Ver Solicitudes</button></a></button></li>
				<li><button type="button" class="btn btn-outline-primary"><a href="main/Usuarios/users.php">Usuarios</button></a></button></li>
				<li><button type="button" class="btn btn-outline-primary"><a href="menu_ppal_admin.php">Atrás</button></a></button></li>
				<li><button type="button" class="btn btn-outline-primary"><a href="cerrar.php">Cerrar</button></a></button></li>

			</ul> 
		</nav>
	</div>

</header>

<body>




	<!-- ======= Header ======= -->



	<section id="about"  class="about section-bg">

		<div class="row"   class="section-title" ><!-- NUEVO INICIO-->
			<div  class="col-md-11 col-md-offset-1">
				<div  class="panel panel-default">

					<div class="panel-body">
						<form name="registro_usuario" class="form-horizontal" method="post" role="form" action="form_solicitudes.php" >
							<div align="center">
								<div class="table-responsive">	
									<table  class="table table-sm table-bordered table-primary" >
										<thead>
											<tr>
												<th>Tipo</th>
												<th>Descripción</th>
												<th>Fecha de Registro</th>
												<th>Fecha Solicitada</th>
												<th>Fecha de Entrega</th>
												<th>Correo</th>
												<th>Ruta Archivo</th>
												<th>Estado</th>
											</tr>
										</thead>
										<tbody>

											<?php
								error_reporting(E_ERROR);//para que no muestre los WARNING

								include("conexion.php");
								//$con=conexion();

								//mysql_query("SET NAMES 'utf8'");
								
								$correo = $_SESSION["correo"];
								$mysqli = new mysqli("localhost", "root", "", "huellitas");

								/* check connection */
								if (mysqli_connect_errno()) {
									printf("Connect failed: %s\n", mysqli_connect_error());
									exit();
								}

								$sql = "SELECT * FROM solicitud order by correo, fechasolicita asc";
								
								if ($resultado = $mysqli->query($sql)) {
									$i = 0 ; 
									while ($row = $resultado->fetch_row()){

										echo "<tr class='info'>
										<td><input type='hidden' name='tipo[$i]' value='".$row[8]."'/>".$row[8]."</td>
										<td><input type='hidden' name='descripcion[$i]' value='".$row[1]."'/>".$row[1]."</td>
										<td><input type='hidden' name='fechaingreso[$i]' value='".$row[3]."' />".$row[3]."</td>
										<td><input type='hidden' name='fechasolicita[$i]' value='".$row[4]."' />".$row[4]."</td>
										<td><input type='hidden' name='fechaentrega[$i]' value='".$row[7]."'/>".$row[7]."</td>
										<td><input type='hidden' name='correo[$i]' value='".$row[5]."' />".$row[5]."</td>
										<td><input type='hidden' name='rutaarchivo[$i]' value='".$row[2]."'/><a href=".$row[2].">".$row[2]."</a></td>
										<td><input type='hidden' name='estado[$i]' value='".$row[6]."'/>".$row[6]."</td>
										<td><a  href='form_editar_solicitudes.php?x=".$row["0"]."'>Editar</a></td>

										</tr>";
										$i++; 
									}
								}
								?>
							</tbody>
						</table>

					</div>
				</div>
			</form>

		</div>
	</div>
</div>
</div>
</section>

<div    class="navbar navbar-default navbar-fixed-bottom ">
	<div class="container">
		<p>&copy2021 Proyecto Huellitas, Celular:301 7961140, Mail:huellitas@gmail.com </p>       
	</div>    
</div>

<style type="text/css">
	p
	{
		text-align: center;
	}
</style>

</body>

</html>