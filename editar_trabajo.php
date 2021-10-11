<?php
	
	//if (isset($_REQUEST['Guardar'])){ 	
	
		$codigotrabajo	     = ($_POST['codigotrabajo']);
		$fechaentrega	     = ($_POST['fechaentrega']);
		$estado	             = ($_POST['estado']);
								
		include 'conexion.php';
		//$con=conexion();

						$mysqli = new mysqli("localhost", "root", "", "taksandworks");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
		$sql="UPDATE trabajo SET fechaentrega='".$fechaentrega."', estado='".$estado."' WHERE codigotrabajo='".$codigotrabajo."' ";
		//mysql_query("update trabajo set fechaentrega ='{$fechaentrega}', estado='{$estado}' where codigotrabajo = {$codigotrabajo}",$con);
		
		if ($resultado = $mysqli->query($sql)) {
		if($my_error <> ""){
			header("Location:form_editar_trabajo.php?error=si&x=".$codigotrabajo);
		}else{
			header("Location:form_editar_trabajo.php?error=no&x=".$codigotrabajo);
		}
	}
	
	
?>

