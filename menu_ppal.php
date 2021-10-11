<?php
include("sesion.php");
include ('gallery/includes.php');// Direcciono el include -  para incluir includes.php
if ($_SESSION["codigo"]==0) {//Nuevo 4//Esta variable de session viene de validar_acceso.php
	$codigo =  $_GET["codigo"];//NUEVO 4// Se captura el valor que llega por la url de index3.php
    $_SESSION["codigo"]=$codigo;//NUEVO 4// Se envia $codigo a la varible de sesión para poder registrar la solicitud
    $sql = mysqli_query($link, "select * from gallery where code= $codigo;") or die (mysqli_error($link));
//Ejecuto la consulta con la función mysqli_query y con mysqli_error verifico si hay un error de conexión 
$dato = mysqli_fetch_array($sql);// Recupera una fila de resultados como un array asociativo, un array numérico o como ambos
//mysqli_fetch_array - Devuelve un array de cadenas que corresponde a la fila recuperada, o false si no hay más filas.
}else{
    $_SESSION["codigo"]=0;// Se resetea la variable de sesión para hacer una nueva solicitud
    $codigo=0;//Se envia un cero, se resetea la variable cuando el usuario termina el proceso de la solicitud y se pueda hacer una nueva
}

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
			<li><?php echo "Bienvenido: ".utf8_decode($_SESSION["nomuser"]); ?></li>
			<!--<li ><a href="form_editar_usuario.php">Ver mi Perfil</a></li>-->
			<li class="active"><a href="menu_ppal.php?codigo=0">Solicitar un servicio</a></li>
			<li><a href="form_ver_trabajos.php?codigo=0">Mis solicitudes</a></li>
			<li><a href="gallery/index3.php?codigo=0">Portafolio de servicios</a></li><!--NUEVO 4-->	
            <li><a href="form_contactenos.php?codigo=0">contacto</a></li>
			<li><a href="cerrar.php">Salir</a></li>
		</ul>
	</nav>		
</header>
<?php    
if ($codigo!=0)//Nuevo 4//para saber si la fundación va a realizar una solicitud, el $codigo es de la url


{
		echo "<h1>Usted realizará una solicitud para el Servicio:<br>".$dato["name"]."</h1>";// imprime el nombre del animal al final $dato["name"] con el array asociativo
	}

	?>	
	<body>

		
		<div class="panel-body">
			

                <form name="registro_solicitud" class="form-horizontal" method="post" role="form" action="registrar_trabajo.php" enctype="multipart/form-data">

                      <div align="center">
                            <?php
                                           	error_reporting(E_ERROR);//PARA EVITAR ADVERTENCIAS Y NOTICIAS, PARA VER SOLO ERRORES 
						//para sacar un mensaje en caso de error al ingresar
                                           	if($_GET["error"]=="si"){
                                           		echo "Hay un error al grabar, Por favor verifica el Tamaño del archivo (Maximo 10 MB)";
                                             }else{
                                                  echo "";
                                            } 					
                                            if($_GET["error"]=="no"){
                                                  echo "Solicitud registrada correctamente, en breves momentos uno de nuestros asesores te contactará vía Mail o Telefónica";
                                            }else{
                                                 echo "";
                                           } 
                                           ?>	

                                           <div class="row">
                                            <div class="col-md-4 col-md-offset-7">
                                                  <div class="panel panel-default">						
                                                        <div class="panel-heading">	<span class="glyphicon glyphicon-folder-open">&nbsp</span>Registro de Solicitud</div>

                                                        <div class="col-sm-14">
                                                              <input type="text" class="form-control" id="inputEmail3" placeholder="Ingresa una Breve descripción de lo que necesitas" name="descripcion" required="">
                                                        </div>
                                                        <br>
                                                        <div class="col-sm-14">
                                                              <SELECT name="tipo" class="form-control" id="sel1" required=""> 
                                                                    <OPTION VALUE="">Seleccione un Servicio</OPTION>
                                                                    <OPTION VALUE="Tarea">Tarea</OPTION>
                                                                    <OPTION VALUE="Trabajo">Trabajo</OPTION>
                                                                    <OPTION VALUE="Asesoría Virtual">Asesoría Virtual</OPTION>
                                                                    <OPTION VALUE="Asesoría Presencial">Asesoría Presencial</OPTION>
                                                              </SELECT>
                                                        </div>
                                                        <div>
                                                              Ingrese su correo:<input type="text" name="correo" required="">
                                                              <br>
                                                              <input name="archivo" class="form-control" type="file" size="42" name="MAX_FILE_SIZE" value="10000000" required=""/>
                                                              <input name="action" class="form-control" type="hidden" value="upload" required=""/>  				
                                                              <br>						
                                                              <label for="form-inline" class="col-sm-14 control-label">Fecha estimada para la entrega de la solicitud</label>
                                                              <div class="col-sm-14">
                                                                    <input type="date" class="form-control" id="inputEmail3" placeholder="" name="fechasolicita" required="">
                                                              </div>
                                                              <br>

                                                              <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary " style="width:150px">Enviar</button>       
                                                              </div>	

                                                        </div>
                                                  </div>
                                            </div>
                                      </div>				

                                </form>

                    </div>

                    <div    class="navbar navbar-default navbar-fixed-bottom ">
                     <div class="container">
                          <p>&copy2021- TaksandWorks, Celular:301 9061140, Mail:taksandworks@gmail.com </p>       
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

