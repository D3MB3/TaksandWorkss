<?php
	$tipousuario = 2;//NUEVO1

	NuevoUsuario($_POST['correo'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['direccion'],$tipousuario, $_POST['clave']);

	function NuevoUsuario($correo, $nombre, $apellido,  $telefono, $direccion, $tipousuario, $clave )
	{
		include 'conexion1.php"';
		$sentencia="INSERT INTO usuario (correo, nombre, apellido, telefono, direccion, codigo, clave) VALUES ('".$correo."','".$nombre."', '".$apellido."', '".$telefono."', '".$direccion."', ".$tipousuario.", '".$clave."' )";
		$conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));



		echo '<script>';
			echo 'alert("Usuario creado exitosamente!!");';
			echo 'window.location.href="index.php";';//NUEVO1
		echo '</script>';

	}
?>

