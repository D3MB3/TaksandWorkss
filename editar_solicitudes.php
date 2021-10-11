<?php
	
	//if (isset($_REQUEST['Guardar'])){ 	
	
		$codigosolicitud	     = ($_POST['codigosolicitud']);
		$fechaentrega	     = ($_POST['fechaentrega']);
		$estado	             = ($_POST['estado']);
								
		include 'conexion.php';
		//$con=conexion();

						$mysqli = new mysqli("localhost", "root", "", "huellitas");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
		$sql="UPDATE solicitud SET fechaentrega='".$fechaentrega."', estado='".$estado."' WHERE codigosolicitud='".$codigosolicitud."' ";
		//mysql_query("update solicitud set fechaentrega ='{$fechaentrega}', estado='{$estado}' where codigosolicitud = {$codigosolicitud}",$con);
		
		if ($resultado = $mysqli->query($sql)) {
		if($my_error <> ""){
			header("Location:form_editar_solicitudes.php?error=si&x=".$codigosolicitud);
		}else{
			header("Location:form_editar_solicitudes.php?error=no&x=".$codigosolicitud);
		}
	}
	
	
?>