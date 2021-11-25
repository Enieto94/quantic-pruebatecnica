<!DOCTYPE html>
<html>
<head>
	<title>Prueba técnica Quantic - Edwin Nieto</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php include "navbar.php"; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Programadores</h1>
      <h3>Nuevo programador</h3>

<form method="post" action="./guardar_programador.php">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="apellido">Apellido</label>
    <textarea class="form-control" name="apellido" id="apellido" placeholder="Apellido"></textarea>
  </div>
  <div class="form-group">
    <label for="cedula">Cedula</label>
    <textarea class="form-control" name="cedula" id="cedula" placeholder="Cedula"></textarea>
  </div>
  <div class="form-group">
    <label for="correo">Correo</label>
    <textarea class="form-control" name="correo" id="correo" placeholder="Correo"></textarea>
  </div>
  <div class="form-group">
    <label for="lenguajes">Lenguajes</label>
    <textarea class="form-control" name="lenguajes" id="lenguajes" placeholder="Lenguajes"></textarea>
  </div>
  <div class="form-group" style="display:none">
    <label for="description">Fecha</label>
    <textarea class="form-control" name="fecha_creacion" id="fecha_creacion" placeholder="Fecha Creacion"></textarea>
  </div>

  <button type="submit" class="enviar btn btn-primary">Agregar</button>
</form>

		</div>
	</div>
</div>

<script>    
	$(".enviar").click(function(e) {
		e.preventDefault();
		var nombre = $("#nombre").val(),
		apellido = $("#apellido").val(),
		cedula = $("#cedula").val(),
		correo = $("#correo").val(),
		lenguajes = $("#lenguajes").val(),


		datos = {"nombre":nombre, "apellido":apellido,"cedula":cedula,"correo":correo,"lenguajes":lenguajes},

		$.ajax({
			url: "datos.php",
			type: "POST",
			data: datos
		}).done(function(respuesta){
			if (respuesta.estado === "ok") {
				console.log(JSON.stringify(respuesta));

				var nombre = respuesta.nombre,
				apellido = respuesta.apellido,
				cedula = respuesta.cedula;
				correo = respuesta.correo;
				lenguajes = respuesta.lenguajes;
				fecha_creacion = respuesta.fecha_creacion;

				$(".respuesta").html("Servidor:<br><pre>"+JSON.stringify(respuesta, null, 2)+"</pre>");
			}
		});
	});
</script>
</body>
</html>