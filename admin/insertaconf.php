<?php
include("../static/clase_mysql.php");
include("../static/site_config.php");
	$miconexion = new clase_mysql;
	$miconexion->conectar($db_name,$db_host, $db_user,$db_password);
	
	$conf = $_POST["conf"];   
    $aud = $_POST["aud"];
    $hora = $_POST["hora"];

	$miconexion->consulta	("INSERT INTO `conferencia`(`id_conferencia`, `Conferencia`, `Auditorio`, `Hora`) VALUES ('','$conf','$aud','$hora')");

	echo "<script>location.href='conferencia.php'</script>";


?>