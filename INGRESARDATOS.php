<?php

require("CONEXION.php");

$Nombre= $_GET['Nom_Clie'];
$Codigo= $_GET['Id_Clie'];
$contraseña= $_GET['Pass_Clie'];


$query="INSERT INTO CLIENTES (nom_cliente, id_cliente, pass_cliente ) VALUES ('$Nombre', '$Codigo', '$contraseña')";

$resultado= $conexion->query($query);
if($resultado){
	header("location: tabla.php");
	} else{
		echo "insersion no exitosa";
		
		
		}





?>