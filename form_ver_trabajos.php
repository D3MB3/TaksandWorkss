<?php
	include("sesion.php");
?>
<!doctype html>
<html lang="es">
	<head>

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
	
	<header>
		<nav class="navbar navbar-default" role="navigation">
			<ul class="nav nav-pills nav-justified">
				<!--<li><?php //echo "Bienvenido: ".utf8_decode($_SESSION["nomuser"]); ?></li>-->
				<!--<li ><a href="form_editar_usuario.php">Ver mi Perfil</a></li>-->
				<li ><a href="menu_ppal.php?codigo=0">Solicitar un Servicio</a></li>
				<li class="active"><a href="form_ver_trabajos.php?codigo=0">Mis Solicitudes</a></li>
				<li><a href="cerrar.php">Salir</a></li>
			</ul> 
		</nav>		
	</header>
			
	<body>
		
		<div class="panel-body">
		<form name="registro_usuario" class="form-horizontal" method="post" role="form" action="registrar_trabajo.php" enctype="multipart/form-data">
			<div align="center">
				<table class="table table-bordered">
					<thead>
						<tr>
							
							<th>Descripción</th>
							<th>Fecha de Ingreso</th>
							<th>Fecha Solicitada</th>
							<th>Correo</th>
							<th>Estado</th>
							<th>Fecha de Entrega</th>
							<th>Tipo</th>
						</tr>
					</thead>
					<tbody>
						<?php
							error_reporting(E_ERROR);//para que no muestre los WARNING
						
							include ("conexion.php");
							//$con=conexion();
						
							//mysql_query("SET NAMES 'utf8'");
							
							
						$mysqli = new mysqli("localhost", "root", "", "taksandworks");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
						
							$sql = "SELECT * FROM  trabajo  where correo = '".$_SESSION["correo"]."' order by fechasolicita asc"; //NUEVO
							//echo $sql;
							//$resultado = mysqli_query($con, $sql);
							
							if ($resultado = $mysqli->query($sql)) {
							$i = 0 ; 
							while ($row = $resultado->fetch_row()){
													
							echo "<tr class='info'>
								
								     <td><input type='text' name='descripcion[$i]' value='".$row[1]."'/></td>
									 <td><input type='text' name='fechaingreso[$i]' value='".$row[3]."' /></td>
									 <td><input type='text' name='fechasolicita[$i]' value='".$row[4]."' /></td>
									 <td><input type='text' name='correo[$i]' value='".$row[5]."' /></td>
									 <td><input type='text' name='estado[$i]' value='".$row[6]."'/></td>
									 <td><input type='text' name='fechaentrega[$i]' value='".$row[7]."'/></td>
								
									 <td><input type='text' name='tipo[$i]' value='".$row[8]."' /></td>
									 
								</tr>";
							$i++; 
						}
					}
						?>
					</tbody>
				</table>						
			</div>
		</form>
		</div>	
		<div    class="navbar navbar-default navbar-fixed-bottom ">
			<div class="container">
			  <p>&copy2021- TaksandWorks, Celular:301 885 555, Mail:taksandworks@gmail.com.com </p>       
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


