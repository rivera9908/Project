<!doctype html>
<html>
<head>
</head>
<body background="modiemp.jpg" >

<?php
	
	$id=$_REQUEST['id_emp'];
	
	
	include("CONEXIONemp.php");
	
	$query="SELECT * FROM empleado WHERE id_emp='$id'";
	$resultado= $conexion->query($query);
	$row=$resultado->fetch_assoc();
		
		
		?>
        
<form action="modificar_procesoemp.php?codigo=<?php echo $row['id_emp']; ?>" method="GET">


        
        
 
<TR>
<td><label>Nombre empleado</label></td>
<td><input type="text" required name="nom_emp" placeholder="Nombres " value="<?php echo $row['nom_emp'];?>" /></td><br />
</TR> 
<TR>
<td><label>identificacion cliente</label></td>
<td><input type="text" required name="id_emp" placeholder="identificacion empleado " value="<?php echo $row['id_emp'];?>" /></td><br />
</TR> 
<TR>
<td><label>contraseña cliente</label></td>
<td><input type="text" required name="pass_emp" placeholder="contraseña" value="<?php echo $row['pass_Emp'];?>" /></td><br />
</TR> 
<TR>
<td><label>ingresar datos</label></td>
<td><p>
  <input type="submit"  name="ingresar" class="btn-enviar" />
  <br />
        
        
        </FORM>


</body>
</html>