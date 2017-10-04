<?php

include("CONEXIONadm.php");

$id=$_REQUEST['id_adm'];


$query="DELETE FROM administrador WHERE id_adm='$id' ";
$resultado= $conexion->query($query);

if($resultado){
	header("Location: tablaadm.php");
	} else{
		echo "insersion no exitosa";
		
		
		}





?>