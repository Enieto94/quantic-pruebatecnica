<?php

$conn = new mysqli("localhost","root","","edwin_nieto");
$sql = "SELECT * FROM programador";
if ($result=mysqli_query($conn,$sql)) {
    $rowcount=mysqli_num_rows($result);
}

header('Content-Type: application/json');


$datos = array(
'estado' => 'ok',
'mensaje' => 'Se ha registrado exitosamente',
'Total de programadores registrados en la base de datos' =>  $rowcount
);
//Devolvemos el array pasado a JSON como objeto
echo json_encode($datos, JSON_FORCE_OBJECT);

?>