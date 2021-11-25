<?php
if(!empty($_POST)){
	include "connection.php";
	$con  = connect();
	$sql = "update post set title=\"".$_POST["title"]."\",description=\"".$_POST["description"]."\" where id=$_POST[id]";
	$con->query($sql);
	$last_id = $con->insert_id;
	/**
	* Vamos a borrar las categorias asignadas y luego las volveremos a agregar
	**/
	$sql = "delete from post_category where post_id=".$_POST["id"];
	$con->query($sql);

	$categorias = get_categorias();
	/**
	* Aqui agregamos de nuevo las categorias, es un codigo similar a  la opcion de nuevo post.
	**/
	foreach($categorias as $cat){
		if(isset($_POST["category_".$cat->id])){
		$sql = "insert into post_category (post_id,category_id) value (".$_POST["id"].",".$cat->id.")";
		$con->query($sql);
		}
	}
	header("Location: index.php");
}
?>