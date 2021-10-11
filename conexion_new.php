<?php

	error_reporting(E_ALL ^ E_NOTICE);

	$host="localhost";
	$user="root";
	$password="";
	$db="taksandworks";
	$con = new mysqli($host,$user,$password,$db);	
	
	if ($mysqli -> connect_errno) {
		die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
		. ") " . $mysqli -> mysqli_connect_error());
	}

?>

