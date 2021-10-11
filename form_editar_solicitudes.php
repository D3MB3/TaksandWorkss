<?php

	include("sesion.php");
	
	require_once('conexion.php');
    //$con=conexion();
	
	$codigosolicitud = $_GET['x'];
								
	$mysqli = new mysqli("localhost", "root", "", "huellitas");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
	$sql="SELECT * FROM  solicitud where codigosolicitud = ".$codigosolicitud.""
	 or die ("Error en la consulta, el error es :".mysql_errno()."-".mysql_error());
	 
	 

	 if ($resultado = $mysqli->query($sql)) {

    /* obtener un array asociativo */
    while ($fila = $resultado->fetch_assoc()) {
        //printf ("%s (%s)\n", $fila["Name"], $fila["CountryCode"]);
   
	 //$row = mysqli_fetch_assoc($sql);

	//asigno los valores que trae la consulta
	$fechaentrega = @$row["fechaentrega"];
	$estado = @$row["estado"];
	}
 }	
?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
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
				<!--<li ><a href="form_editar_usuario.php">Ver mi Perfil</a></li>
				<li><a href="menu_ppal.php">Solicitar un Servicio</a></li>
				<li><a href="form_ver_solicituds.php">Mis Servicios Solicitados</a></li>-->
				<li  class="active"><a href="form_solicitudes.php">Ver Solicitudes</a></li>
				<li><a href="cerrar.php">Salir</a></li>
				
			</ul>
		</nav>		
	</header>
	<body>	
				
		<div class="panel-body">
		<form action="editar_solicitudes.php" name="registro_usuario" class="form-horizontal" method="post" role="form" >
						
			<div align="center">
				<?php
				error_reporting(E_ALL ^ E_NOTICE);
				if($_GET["error"]=="si"){
					echo "Error al actualizar solicitud, por favor Verifica tus Datos";
				}
				if($_GET["error"]=="no"){
					echo "Usuario Modificado correctamente...!";
				}
				
				
				?>	
				
				<div class="row">
				<div class="col-md-4 col-md-offset-7">
				<div class="panel panel-default">						
						
				<div class="panel-heading">	<span class="glyphicon glyphicon-folder-open"></span>Edición de solicitud</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">
						Codigo</label>
					<div class="col-sm-9">
						<input type="text" disabled value="<?php  echo $codigosolicitud; ?>" name = "codigosolicitud" class="form-control" id="inputEmail3" required>
						<input type="hidden"  value="<?php  echo $codigosolicitud; ?>" name = "codigosolicitud">
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-3 control-label">
						Fecha de Entrega</label>
					<div class="col-sm-9">
						<input type="date" class="form-control" id="inputEmail3" value="<?php  echo $fechaentrega; ?>" name="fechaentrega" required="">
					</div>
				</div>
				
				
				
				<div class="form-group">
					<label for="form-group" class="col-sm-3 control-label">
					    Estado</label>
					<div class="col-sm-9">
						<SELECT name="estado" class="form-control" id="sel1" required> 
							<?php
								echo "<option value='".$row['estado']."'>".$row['estado']."</option>";
							?>	
							<OPTION VALUE="Pendiente">Pendiente</OPTION>
							<OPTION VALUE="En Proceso">En Proceso</OPTION>
							<OPTION VALUE="Cancelado">Cancelado</OPTION>
							<OPTION VALUE="Terminado">Terminado</OPTION>
						</SELECT>
					</div>
				</div>
								
				<div class="form-group last">
					<div class="col-sm-offset-3 col-sm-9">
						<button type="submit" class="btn btn-success btn-sm">Guardar</button>
					</div>
				</div>
									
				</div>
				</div>
				</div>				
			</div>
		</form>
		</div>
		<div    class="navbar navbar-default navbar-fixed-bottom ">
			<div class="container">
			  <p>&copy2021 Proyecto Huellitas, Celular:301 7961140, Mail:huellitas@gmail.com 
				   </p>       
			</div>    
	    </div>
	  <style type="text/css">
	   
		{
			text-align: center;
		}
	  </style>
	</body>
</html>