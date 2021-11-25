<!DOCTYPE html>
<html>
<head>
	<title>Prueba técnica Quantic - Edwin Nieto</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<?php 
include "navbar.php";
include "connection.php";
 ?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Programadores</h1>
			<a href="./nuevo_programador.php" class="btn btn-default">Nuevo Programador</a>

				<?php

					$con = connect();
					$sql = "select * from programador";
					$query  =$con->query($sql);
					$data =  array();
					if($query){
						while($r = $query->fetch_object()){
							$data[] = $r;
						}
					}
				?>
				<br><br>
				<?php if(count($data)>0):?>
					<table class="table table-bordered">
						<thead>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Cedula</th>
							<th>Correo</th>
							<th>Lenguajes</th>
							<th>Fecha</th>
						</thead>
						<?php foreach($data as $d):?>
						<tr>
							<td><?php echo $d->nombre; ?></td>
							<td><?php echo $d->apellido; ?></td>
							<td><?php echo $d->cedula; ?></td>
							<td><?php echo $d->correo; ?></td>
							<td><?php echo $d->lenguajes; ?></td>
							<td><?php echo $d->fecha_creacion; ?></td>
							<!-- <td>
								<a href="./modificar_post.php?id=<?php echo $d->id?>" class='btn btn-warning btn-xs'>Modificar</a>
								<a href="./eliminar_post.php?id=<?php echo $d->id?>" class='btn btn-danger btn-xs'>Eliminar</a>
							</td> -->
						</tr>

						<?php endforeach; ?>
					</table>
				<?php else:?>
					<p class="alert alert-warning">No hay datos</p>
				<?php endif; ?>

		</div>
	</div>

	<div class="respuesta"></div>
</div>
<script src="./ejercicio-logica.js"></script>


</body>
</html>