<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TABLA</title>
</head>

<body bgcolor="#FF6600" background="tablaemp.jpg" >
<center>
    <table bgcolor="#999999" border="4">
    <thead>
    <tr> 
      <th colspan="1"><a href="ingresoemp.html">Nuevo ingreso</A></th>
      <th colspan="5">Lista de empleados</th>
    </tr>
 
    <tbody bgcolor="#006633" >
    </tbody>
    <tr>
    <td>empleado</td>
    <td>pass</td>
    <td>Id</td>
    <td>Nombre</td>
    <td colspan="2">¿Modificar o eliminar empleado?</td> 
    </tr>
    
    <?php
	
	include("CONEXIONemp.php");
	
	$query="select * from empleado ";
	$resultado= $conexion->query($query);
	while($row=$resultado->fetch_assoc()){
		?>
        
        <tr>
        <td><?php echo $row['emp']; ?></td>
        <td><?php echo $row['pass_Emp']; ?></td>
        <td><?php echo $row['id_emp']; ?></td>
        <td><?php echo $row['nom_emp']; ?></td>
        <td><a href="Modificaremp.php?id_emp=<?php echo $row['id_emp'];?>">Modificar</a></td>
        <td><a href="Eliminaremp.php?id_emp=<?php echo $row['id_emp'];?>">Eliminar</a></td>
        
       
        
        <?php
		}
        
        
	?>
	
	
    </thead>
    </table>
    
    
    



</center>




</body>
</html>
