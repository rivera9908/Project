<?php

include("CONEXIONadm.php");

$id=$_REQUEST['id_adm'];


$pass= $_GET['pass_adm'];
$id_adm= $_GET['id_adm'];
$nombre= $_GET['nom_adm'];


$query="UPDATE administrador SET pass_adm='$pass', id_adm='$id_adm', nom_adm='$nombre' WHERE id_adm='$id_adm' ";
$resultado= $conexion->query($query);

if($resultado){
	header("Location: tablaadm.php");
	} else{
		echo "insersion no exitosa";
		
		
		}





?>