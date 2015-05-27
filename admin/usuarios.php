
<?php
include ("../static/site_config.php");
include ("../static/clase_mysql.php");
session_start();

if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Administrador</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">

    <!-- Custom styles for this template -->
    <link href="navbar-static-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 
  <body>
  	<!--<h1>BIENVENIDO Al Administrador</h1>
 	<a href="logout.php">Cerrar Sesión</a>-->
    

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        
        	<?php include ("../static/menu.php");?>
    
      </nav>
      <div class="container">
     <div class="jumbotron">
  <h2>Tabla Administradores</h2>

 <?php
	
	$act='';
	extract($_GET);
	$miconexion = new clase_mysql;
	$miconexion->conectar($db_name,$db_host, $db_user,$db_password);
	$miconexion->consulta("select * from usuario");
	$miconexion->verconsulta6();
	if($act==1){
		$miconexion->consulta("delete from usuario where id_user=$id");
		$miconexion->verconsulta6();
		echo '<script>alert("eliminado")</script>';
      	echo "<script>location.href='usuarios.php'</script>";
	}
	/*if($act==2){
		echo "editar";
		echo '<script>alert("editar")</script>';
      	echo "<script>location.href='ingresar_administrador.php'</script>";
      	

      	//echo "<a href='ingresar_cont.php'></a>";

	}*/
	if($act==3){
		echo "ingresar";
		echo '<script>alert("Ingresar")</script>';
      	echo "<script>location.href='ingresar_usuarios.php'</script>";
	}
?>
</div>
</div>
 <?php include("../static/footer.php");?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
  
  
 
