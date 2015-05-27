<?php
include("../static/clase_mysql.php");
include("../static/site_config.php");
	$miconexion = new clase_mysql;
	$miconexion->conectar($db_name,$db_host, $db_user,$db_password);
	
	$nomb = $_POST["nombre"];  

	$miconexion->consulta("INSERT INTO `institucion`(`id_institucion`, `Nombre`) VALUES ('','$nomb')");

	echo "<script>location.href='institucion.php'</script>";


?>