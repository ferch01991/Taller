<?php 
  include("static/site_config.php");
  include("static/conect_mysql.php");
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>
	<div class="row">
		<h1>Registro</h1>
		<div class="col-md-4" id="registro">
			<form class="form-horizontal" action="datos.php" method="post">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control"  name="nombre" placeholder="Nombre">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Apellido</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="apellido" placeholder="Apellido">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label" name="direccion">Direccion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Direccion">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label" name="correo">Correo</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="direccion" placeholder="Correo">
					</div>
				</div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label" >Cedula</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="Cedula" name="cedula">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label" >Institucion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" placeholder="UTPL">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" >Tipo de inscrito</label>
					<div class="col-sm-10">
						<select class="selectpicker" name="tipo">
							<option>Estudiante</option>
							<option>Expositor</option>
							<option>Organizador</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Curso</label>
					<div class="col-sm-10">
						<select class="selectpicker" name="curso">
							<option>Innovacion</option>
							<option>Desarrollo</option>
							<option>Emprendimiento</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
