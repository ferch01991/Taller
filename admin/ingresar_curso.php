
<html>
<head>
	<title>Formulario Contenidos</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">

</head>
<body>

<form class="formulario1" action="insertacurso.php" method="POST">
	<table>
		<tr>
			<td>Curso</td>
			<td><input name="curso" required="required" type="text"/></td>
		</tr>
		<tr>
			<td>Costo</td>
			<td><input name="costo" required="required" type="text"/></td>
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