
<html>
<head>
	<title>Formulario Contenidos</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">

</head>
<body>

<form class="formulario1" action="insertausuario.php" method="POST">
	<table>
		<tr>
			<td>Nombre</td>
			<td><input name="conf" required="required" type="text"/></td>
		</tr>
		<tr>
			<td>Apellido</td>
			<td><input name="aud" required="required" type="text"/></td>
		</tr>
		<tr>
			<td>Direcccion</td>
			<td><input name="aud" required="required" type="text"/></td>
		</tr>
		<tr>
			<td>Correo</td>
			<td><input name="aud" required="required" type="text"/></td>
		</tr>
		<tr>
			<td>Cedula</td>
			<td><input name="aud" required="required" type="text"/></td>
		</tr>
			<td class="boton" colspan="2"><input name="iniciar" type="submit" value="Registrar"/></td>
		</tr>
		<!--<tr>
			<a href="contenidos.php"><button>Regresar</button></a> 
		</tr>-->
	</table>

</form>
</body>
</html>