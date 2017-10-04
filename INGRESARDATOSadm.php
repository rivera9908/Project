<?php

require("CONEXIONadm.php");

$Nombre= $_GET['Nom_adm'];
$Codigo= $_GET['Id_adm'];
$contraseña= $_GET['Pass_adm'];


$query="INSERT INTO ADMINISTRADOR (nom_adm, id_adm, pass_adm ) VALUES ('$Nombre', '$Codigo', '$contraseña')";

$resultado= $conexion->query($query);
if($resultado){
	header("location: tablaadm.php");
	} else{
		echo "insersion no exitosa";
		
		
		}





?>