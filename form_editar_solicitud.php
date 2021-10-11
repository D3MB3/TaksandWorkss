<!doctype html!>
<html lang="es">
<?php

include("sesion.php");
?>

<head>
						<meta charset="utf-8">
						<link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.min.css">
					</head>
					
					<header>
					<nav class="navbar navbar-default" role="navigation">
					<ul class="nav nav-pills nav-justified">
						<li><?php echo "bienvenido: ".$_SESSION["nomuser"]; ?> </li>
						<!--<li> <a href=".php">Mis Datos</a></li>-->
						<li> <a href="form_consulta_servicios_cliente.php">Mis Servicios</a></li>
						<li> <a href="form_registro_solicitud.php">Solicitar Servicios</a></li>
						<li><a href="cerrar.php">Salir</a> </li>
					</ul>
					</nav>
					</header>
	<body>	
	
	<?php
						  // error_reporting(E_ALL^ E_NOTICE);
						  // if($GET["error"]=="si"){
							// echo "Error Al Grabar Usuario, Por Favor Verifique Sus Datos";
						  // }
						  // if ($GET["error"]=="no"){
							// echo "Usuario Registrado Correctamente...!";
						  // }
						  
							 include 'conexion_new.php';

						
	
							$id=$_GET['id'];
							//$id1=$_GET['id1'];
							
							$query="SELECT * FROM servicio WHERE serv_consec='$id' ";
							
							$resultado=$con->query($query);
							
							//$consulta=mysqli_query($con,$query);

							$row=$resultado->fetch_assoc();
						 ?>
				
		<div class="panel-body">
			<form name="edicion_solicitud" class="form-horizontal" method="post" role="form" action="editar_solicitud.php">
						
				<div align="center">
			
						<body>	
						
							<div class="container">
								<div class="row">
									<div class="col-md-4 col-offset-7">
										<div class="panel panel-default">
											<div class="panel heading"> <span class="glyphicon glyphicon-lock"> </span> Solicitud De Servicio </div>
												<div class="panel-body">
													<div class="form-group">
														<label for="form-group" class="col-sm-3 control-label"> Servicio </label>
														<div class="col-ms-9">
															<SELECT name="serv_cod" class="form-control" required>
															<?php 
																echo "<option value='". $row['serv_cod']."'>".$row['serv_cod']."</OPTION>";
															?>
																<OPTION VALUE="">Seleccione</OPTION>
																<OPTION VALUE="Instalación Antivirus">Instalación Antivirus</OPTION>
																<OPTION VALUE="Seguridad Informatica">Seguridad Informatica</OPTION>
																<OPTION VALUE="Escaneo de Redes">Escaneo de Redes</OPTION>
																<OPTION VALUE="Monitoreo de Redes">Monitoreo de Redes</OPTION>
																<OPTION VALUE="Mantenimiento Correctivo">Mantenimiento Correctivo</OPTION>
																<OPTION VALUE="Mantenimiento Preventivo">Mantenimiento Preventivo</OPTION>
																<OPTION VALUE="Asesoría Virtual ó Presencial">Asesoría Virtual ó Presencial</OPTION>
																<OPTION VALUE="Recuperación de datos.">Recuperacion de datos.</OPTION>
															</SELECT>
														</div>
													</div>
													<div class="form-group">
														<label for="input" class="col-sm-3 control-label"> Fecha Entrega </label>
														<div class="col-ms-9">
															<input type="date" value="<?php echo $row['fech_entrega']; ?>" name="fech_entrega" class="form-control" id="input" required>
														</div>
													</div>
													<div class="form-group">
															<label for="input" class="col-sm-3 control-label"> Hora Entrega </label>
																<div class="col-ms-9">
																	<input type="time" value="<?php echo $row['hor_entrega']; ?>" name="hor_entrega" class="form-control" id="input"  required>
																</div>
														</div>
														<input type="hidden" name="serv_consec" value="<?php echo $row['serv_consec']; ?>">
														<div class="form-group last">
															<div class="col-sm-offset-3 col-sm-9">
																<button type="submit" class="btn btn-success btn-sm">Guardar cambios</a><br></button>
															</div>

														</div>

												</div>
													
												</div>
										</div>
									</div>
								</div>
							</div>
						</body>



			</div>
		</form>
		</div>
		<div    class="navbar navbar-default navbar-fixed-bottom ">
			<div class="container">
			  <p>&copy2016- Prodsoft S.A.S, Celular:301 7961140, Mail:soporte@trabajosytareas.com
				   </p>       
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