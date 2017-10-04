<?php

include("CONEXIONemp.php");

$id=$_REQUEST['id_emp'];

$pass= $_GET['pass_emp'];
$id_emp= $_GET['id_emp'];
$nombre= $_GET['nom_emp'];


$query="UPDATE empleado SET  pass_emp='$pass', id_emp='$id_emp', nom_cliente='$nombre' WHERE id_emp='$id_emp' ";
$resultado= $conexion->query($query);

if($resultado){
	header("Location: tablaemp.php");
	} else{
		echo "insersion no exitosa";
		
		
		}





?>