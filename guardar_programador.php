

<?php
if(!empty($_POST)){
	include "connection.php";
	$con  = connect();
	$sql = "insert into programador (nombre,apellido,cedula,correo,lenguajes,fecha_creacion) value (\"".$_POST["nombre"]."\",\"".$_POST["apellido"]."\",\"".$_POST["cedula"]."\",\"".$_POST["correo"]."\",\"".$_POST["lenguajes"]."\",NOW())";
	$con->query($sql);
	header("Location: datos.php");
}
?>