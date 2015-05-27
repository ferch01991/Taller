<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
<form class="formulario" action="validar_usuario.php" method="POST">
	<table>
		<tr>
			<td>Usuario</td>
			<td><input name="admin" required="required" type="text"/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input name="password" required="required" type="password"/></td>
		</tr>
		<tr>
			<td class="boton" colspan="2"><input name="iniciar" type="submit" value="Iniciar sesion"/></td>
		</tr>
	</table>

</form>