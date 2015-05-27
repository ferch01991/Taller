<?php
include("../static/clase_mysql.php");
include("../static/site_config.php");
	$miconexion = new clase_mysql;
	$miconexion->conectar($db_name,$db_host, $db_user,$db_password);
	
	$conf = $_POST["conf"];   
    $aud = $_POST["aud"];

	$miconexion->consulta	("INSERT INTO `tipo_inscritos`(`id_tipo`, `tipo`, `costo`) VALUES ('','$aud','$conf')");

	echo "<script>location.href='tipo_inscrip.php'</script>";


?>