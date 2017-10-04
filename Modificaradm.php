<!doctype html>
<html>
<head>
</head>
<body background="fondo modificaradm.jpg" >

<?php
	
	$id=$_REQUEST['id_adm'];
	
	
	include("CONEXIONadm.php");
	
	$query="SELECT * FROM administrador WHERE id_adm='$id'";
	$resultado= $conexion->query($query);
	$row=$resultado->fetch_assoc();
		
		
		?>
        
<form action="modificar_procesoadm.php?codigo=<?php echo $row['id_adm']; ?>" method="GET">


        
        
<TR>
<td><label>Nombre adm</label></td>
<td><input type="text" required name="nom_adm" placeholder="Nombre administrador" value="<?php echo $row['nom_adm'];?>" /></td><br />
</TR> 
<TR>
<td><label>identificacion cliente</label></td>
<td><input type="text" required name="id_adm" placeholder="identificacion adm " value="<?php echo $row['id_adm'];?>" /></td><br />
</TR> 
<TR>
<td><label>contraseña cliente</label></td>
<td><input type="text" required name="pass_adm" placeholder="contraseña" value="<?php echo $row['pass_adm'];?>" /></td><br />
</TR> 
<TR>
<td><label>ingresar datos</label></td>
<td><p>
  <input type="submit"  name="ingresar" class="btn-enviar" />
  <br />
        
        
        </FORM>


</body>
</html>