<?php
	include ("static/site_config.php");
	include ("static/clase_mysql.php");
	$act='';
	extract($_GET);
	$miconexion = new clase_mysql;
	$miconexion->conectar($db_name,$db_host, $db_user,$db_password);
	$miconexion->consulta("select * from contenidos");
	$miconexion->verconsulta();
	if($act==1){
		$miconexion->consulta("delete from contenidos where id=$id");
		$miconexion->verconsulta();
		echo '<script>alert("eliminado")</script>';
      	echo "<script>location.href='prueba.php'</script>";
	}
	if($act==2){
		echo "actualizar";
		echo '<script>alert("actualizado")</script>';
      	echo "<script>location.href='prueba.php'</script>";
	}
?>