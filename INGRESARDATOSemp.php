<?php

require("CONEXIONemp.php");

$Nombre= $_GET['Nom_emp'];
$Codigo= $_GET['Id_emp'];
$contraseña= $_GET['Pass_emp'];


$query="INSERT INTO empleado (nom_emp, id_emp, pass_emp ) VALUES ('$Nombre', '$Codigo', '$contraseña')";

$resultado= $conexion->query($query);
if($resultado){
	header("location: tablaemp.php");
	} else{
		echo "insersion no exitosa";
		
		
		}





?>