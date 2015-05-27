<?php
include("../static/clase_mysql.php");
include("../static/site_config.php");
	$miconexion = new clase_mysql;
	$miconexion->conectar($db_name,$db_host, $db_user,$db_password);
	
	$curso = $_POST["curso"];   
    $costo = $_POST["costo"];

	$miconexion->consulta	("INSERT INTO `curso`(`id_curso`, `Curso`, `Costo`) VALUES ('','$curso','$costo')");

	echo "<script>location.href='curso.php'</script>";


?>