<?php

function connect(){
	return new mysqli("localhost","root","","edwin_nieto");
}

function get_programadores(){
	$con = connect();
	$sql = "select * from programador";
	$query  =$con->query($sql);
	$data =  array();
	if($query){
		while($r = $query->fetch_object()){
			$data[] = $r;
		}
	}
	return $data;
}

?>