<?php
include("sesion.php");
include("conexion.php");
//$codigo=$_SESSION["codigo"];//NUEVO4// Capturo la variable de sesión para poder hacer la solicitud, esta viene de menu_ppal.php
	//$con=conexion();
	//$status = "";
if ($_POST["action"] == "upload") {// Esa linea, valida si estás intentando subir un archivo al servidor
		// obtenemos los datos del archivo 
		$tamano = $_FILES["archivo"]['size'];//tamaño en bytes del archivo recibido
		$tipo = $_FILES["archivo"]['type'];//tipo mime del archivo, por ejemplo image/gif
		$archivo = $_FILES["archivo"]['name'];//nombre original del archivo
		if ($archivo != "") {
			if( $_FILES['archivo']['size'] < 10000000 )
			{
				$ruta =  "files/";
				//VERIFICAR EXISTENCIA DEL DIRECTORIO
				if(!file_exists($ruta))
				{
					mkdir($ruta);// mkdir — Crea un directorio
				}	
				// guardamos el archivo a la carpeta files
				$destino =  $ruta."".str_replace(' ', '', $_SESSION["nomuser"])."_".str_replace(' ', '', $archivo);
				//str_replace — Reemplaza todas las apariciones del string buscado con el string de reemplazo, coloca el nombre del archivo nombre del usuario_nombre del archivo ejemplo: Alejandra_tarea
				if(copy($_FILES['archivo']['tmp_name'],$destino)) { //  copy — Copia un fichero con un nombre temporal
					//$status = "Archivo subido: <b>".$archivo."</b>";
					
					$descripcion   = ($_POST['descripcion']);//Capturo el campo descripcion con el array asociativo, con el método post, este viene del formulario menu_ppal.php
					$rutaarchivo   = $destino;
					$fechaingreso  = date('Y-m-d');
					$fechasolicita = ($_POST['fechasolicita']);
					$correo        = ($_POST['correo']);
					$estado        =  "Pendiente"; 
					$fechaentrega  =  "";
					$tipo          =  ($_POST['tipo']);
					//$valor         = 0;
					

					$mysqli = new mysqli("localhost", "root", "", "taksandworks");

					/* check connection */
					if (mysqli_connect_errno()) {
						printf("Connect failed: %s\n", mysqli_connect_error());
						exit();
					}

					$sql = "INSERT INTO trabajo(descripcion,rutaarchivo,fechaingreso,fechasolicita,correo,estado,fechaentrega,tipo)VALUES('".$descripcion."','".$rutaarchivo."','".$fechaingreso."','".$fechasolicita."','".$correo."','".$estado."','".$fechaentrega."','".$tipo."')";


					if ($resultado = $mysqli->query($sql)) { //la función Query - ejecuta la consulta

					//comprobar si hay error
						$my_error=mysql_error($resultado);
						if($my_error <> ""){
							header("Location:menu_ppal.php?error=si");
						}else{
							header("Location:menu_ppal.php?error=no");
						}

					}else {
						header("Location:menu_ppal.php?error=si");
					//$status = "Error al subir el archivo";
					}				
				} else{
					header("Location:menu_ppal.php?error=si");
				//echo 'El archivo sobrepasa el tamaño máximo permitido: 10 MB';
				}
			}else{ //Esta bloque de codigo indica que el usuario no quizo seleccionar archivo
				$descripcion   = ($_POST['descripcion']);
				$rutaarchivo   = "";
				$fechaingreso  = date('Y-m-d');
				$fechasolicita = ($_POST['fechasolicita']);
				$correo        = ($_POST['correo']);
				$estado        =  "Pendiente"; 
				$fechaentrega  =  "";
				$tipo          = ($_POST['tipo']);

				mysqli_query("insert into trabajo(descripcion,rutaarchivo,fechaingreso,fechasolicita,correo,estado,fechaentrega,tipo)values('{$descripcion}','{$rutaarchivo}','{$fechaingreso}','{$fechasolicita}','{$correo}','{$estado}','{$fechaentrega}','{$tipo})",$con);
			//comprobar si hay error
				$my_error=mysql_error($con);
				if($my_error <> ""){
					header("Location:menu_ppal.php?error=si");
				}else{
					header("Location:menu_ppal.php?error=no");
				}

			}
		}
	}	
	?>

	