<?php
	$conexion= new mysqli("localhost", "root", "", "taksandworks");
	//Comprobar conexion
	if(mysqli_connect_errno())
	{
		printf("Fallo la conexion");
	}
	else {
		//printf("Estas conectado");
	}
?>
