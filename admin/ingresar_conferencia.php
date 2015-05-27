
<html>
<head>
	<title>Formulario Contenidos</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">

</head>
<body>

<form class="formulario1" action="insertaconf.php" method="POST">
	<table>
		<tr>
			<td>Conferencia</td>
			<td><input name="conf" required="required" type="text"/></td>
		</tr>
		<tr>
			<td>Auditorio</td>
			<td><input name="aud" required="required" type="text"/></td>
		</tr>
		<tr>
			<td>Hora</td>
			<td><input name="hora" required="required" type="text"/></td>
		</tr>
		
		<tr>
			<td class="boton" colspan="2"><input name="iniciar" type="submit" value="Registrar"/></td>
		</tr>
		<!--<tr>
			<a href="contenidos.php"><button>Regresar</button></a> 
		</tr>-->
	</table>

</form>
</body>
</html>