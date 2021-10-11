<?php
  session_start();
  //$_SESSION['usuario'];

  include "conexion1.php";
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BizLand Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/estilo.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v1.2.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
 <img src="images1/swirl.png" width="1188" id="img1"><!--NUEVO1-->
  </div>
  
  <div id="contenido">
    <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
       <span> <h1>Nuevo Usuario</h1> </span>
      <br>

     <form action="user_newcliente2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;"><!--NUEVO1-->
         
           <div>

          <!--<div>
            <div class="row">
              <div class="col-xs-3">
              <label>Correo:</label>
              <input type="text" name="correo" id="correo" class="form-control" >
              </div>
            </div>-->
            <div class="row">
              <div class="col-xs-3">
              <label>Correo:</label>
              <input type="mail" name="correo" id="correo" class="form-control" >
              </div>
            </div>
      
            <div class="row">
              <div class="col-xs-3">
              <label>Nombre:</label>
              <input type="mail" name="nombre" id="nombre" class="form-control" >
              </div>
            </div>
			<div class="row">
              <div class="col-xs-3">
              <label>Apellido:</label>
              <input type="text" name="apellido" id="apellido" class="form-control" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-3">
              <label>Telefono:</label>
              <input type="text" name="telefono" id="telefono" class="form-control" >
              </div>
            </div>
            <div class="row">
              <div class="col-xs-3">
              <label>Direccion:</label>
              <input type="text" name="direccion" id="direccion" class="form-control" >
              </div>
            </div>

			
        <!--<div class="row">
              <div class="col-xs-3">
              <label>Tipo de Usuario:</label>
              <select name="tipousuario" id="tipousuario" class="form-control">
                  <option>Administrador</option>
              </select>
              </div>
            </div>--><!--NUEVO1 Comentamos este código-->
           
           <div class="row">
              <div class="col-xs-3">
              <label>Clave:</label>
              <input type="text" name="clave" id="clave" class="form-control" >
              </div>
            </div>

          </div>
          
          <br>
          <button type="submit" class="btn btn-success">Guardar</button>
         </form>
    </div>
    
  </div>
  
  <div id="footer">
      <img src="images/swirl2.png" id="img2">
    </div>

</div>


</body>
</html>
