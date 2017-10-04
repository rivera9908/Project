<?php

include("CONEXIONemp.php");

$id=$_REQUEST['id_emp'];


$query="DELETE FROM empleado WHERE id_emp='$id' ";
$resultado= $conexion->query($query);

if($resultado){
	header("Location: tablaemp.php");
	} else{
		echo "insersion no exitosa";
		
		
		}





?>