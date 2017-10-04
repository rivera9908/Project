<?php

include("CONEXION.php");

$id=$_REQUEST['id_cliente'];

$cliente= $_GET['cliente'];
$pass= $_GET['pass_cliente'];
$id_clie= $_GET['id_cliente'];
$nombre= $_GET['nom_cliente'];


$query="UPDATE clientes SET  pass_cliente='$pass', id_cliente='$id_clie', nom_cliente='$nombre' WHERE id_cliente='$id_clie' ";
$resultado= $conexion->query($query);

if($resultado){
	header("Location: tabla.php");
	} else{
		echo "insersion no exitosa";
		
		
		}





?>