<?php

include("CONEXION.php");

$id=$_REQUEST['id_cliente'];


$query="DELETE FROM clientes WHERE id_cliente='$id' ";
$resultado= $conexion->query($query);

if($resultado){
	header("Location: tabla.php");
	} else{
		echo "insersion no exitosa";
		
		
		}





?>