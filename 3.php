<?php

$cliente= $_GET['cliente'];


$query="select * from clientes where cliente='$cliente'";

$resultado= $conexion->query($query);
if(mysqli_num_rows(query)==0){
	echo "el user es valido";
	
	} else{
		echo "ya esta ingrese otro";
		
		
		}



?>

 
       <!doctype html>
<html>
<head>
<title>Guardar</title>
</head>
<body background="296873-Sepik.jpg">
<center>





 <?php
	
	$id=$_REQUEST['id_cliente'];
	include("CONEXION.php");
	
	$query="select * from clientes where id_clientes='$id' ";
	$resultado= $conexion->query($query);
	$row=$resultado;
	?>
        
        <form action="modificar_proceso.php?id_cliente=<?php echo $row['id_cliente'];?>method="GET">
        
        
<br/><br/><br/>
<input type="text" name="cliente" placeholder="numero cliente" value="<?php echo $row['Cliente']  ?>"/><br/></br>
<input type="text" name="nom_cliente" placeholder="Nombre cliente" value="<?php echo $row['nom_cliente']  ?>"/><br/></br>
<input type="text" name="id_cliente" placeholder="identificacion cliente" value="<?php echo $row['id_cliente']  ?>"/><br/></br>
<input type="text" name="pass_cliente" placeholder="contraseña cliente" value="<?php echo $row['pass_cliente']  ?>"/><br/></br>
<input type="submit" value="aceptar" />
</form>
</center>
</body>
</html>