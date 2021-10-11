<?php
	include("sesion.php");
	if($_SESSION["tipo_usuario"] == "Administrador"){ //NUEVO2

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
				<!--<li ><a href="form_editar_usuario.php">Ver mi Perfil</a></li>
				<li ><a href="menu_ppal.php">Solicitar un Servicio</a></li>
				<li ><a href="form_ver_trabajos.php">Mis Servicios Solicitados</a></li>-->
				<li class="active"><a href="form_trabajos.php">Ver Solicitudes</a></li>
				<li><a href="main/Usuarios/users.php">Usuarios</a></li>
			    <li><a href="menu_ppal_admin.php">Atrás</a></li>
				<li><a href="cerrar.php">Salir</a></li>
			</ul> 
		</nav>		
	</header>
			
	<body>
		
		<div class="panel-body">
		<form name="registro_usuario" class="form-horizontal" method="post" role="form" action="form_trabajos.php" >
			<div align="center">
				<div class="table-responsive">	
					<table class="table table-bordered">
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
									$mysqli = new mysqli("localhost", "root", "", "taksandworks");

                              /* check connection */
                        if (mysqli_connect_errno()) {
                           printf("Connect failed: %s\n", mysqli_connect_error());
                                exit();
                                         }
							
								$sql = "SELECT * FROM trabajo order by correo, fechasolicita asc";
								
								if ($resultado = $mysqli->query($sql)) { //la función Query ejecuta la consulta
							     $i = 0 ; 
								while ($row = $resultado->fetch_row()){ //fetch_row - Obtiene una fila de datos del conjunto de resultados y la devuelve como un array enumerado, donde cada columna es almacenada en un índice del array comenzando por 0 (cero). Cada llamada subsiguiente a esta función devolverá la siguiente fila del conjunto de resultados, o null si no hay más filas.
														
								echo "<tr class='info'>
									 <td><input type='hidden' name='tipo[$i]' value='".$row[8]."'/>".$row[8]."</td>
									 <td><input type='hidden' name='descripcion[$i]' value='".$row[1]."'/>".$row[1]."</td>
									 <td><input type='hidden' name='fechaingreso[$i]' value='".$row[3]."' />".$row[3]."</td>
									 <td><input type='hidden' name='fechasolicita[$i]' value='".$row[4]."' />".$row[4]."</td>
									 <td><input type='hidden' name='fechaentrega[$i]' value='".$row[7]."'/>".$row[7]."</td>
									 <td><input type='hidden' name='correo[$i]' value='".$row[5]."' />".$row[5]."</td>
									 <td><input type='hidden' name='rutaarchivo[$i]' value='".$row[2]."'/><a href=".$row[2].">".$row[2]."</a></td>
									 <td><input type='hidden' name='estado[$i]' value='".$row[6]."'/>".$row[6]."</td>
									 <td><a  href='form_editar_trabajo.php?x=".$row["0"]."'>Editar</a></td>
									 
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
		<div    class="navbar navbar-default navbar-fixed-bottom ">
			<div class="container">
			  <p>&copy2021- Taks and Works, Celular:301 7961199, Mail:taksandwoks@gmail.com </p>       
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
<?php //NUEVO 2
}
else{
  echo '<script language = javascript>
  alert("Acceso no permitido....!")
  self.location = "index.php"
  </script>';
}
?>