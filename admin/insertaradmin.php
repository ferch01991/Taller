<?php
include("../static/clase_mysql.php");
include("../static/site_config.php");
	$miconexion = new clase_mysql;
	$miconexion->conectar($db_name,$db_host, $db_user,$db_password);
	
	$usuario = $_POST["usuario"];   
    $password = $_POST["password"];
	$miconexion->consulta	("INSERT INTO `administradores`(`id_administrador`, `nombre_administrador`, `password`) VALUES ('','$usuario','$password')");

	echo "<script>location.href='administrador.php'</script>";


?>