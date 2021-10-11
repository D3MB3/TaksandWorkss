<?php
	//este codigo se invoca al inicio de todos los formularios para autentificarlos.(20 minuto maximo para una sesion por default)
	session_start();//inicio una sesion

	if (!$_SESSION["autentificado"]){//Si el usario no esta autentificado
		header("Location:cerrar.php");//Me lleva a cerrar.php
	}
?>



