<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TABLA</title>
</head>

<body bgcolor="#FF6600" background="fondo tablaadm.jpg">
<center>
    <table bgcolor="#999999" border="4">
    <thead>
    <tr> 
      <th colspan="1"><a href="ingresoadm.html">Nuevo ingreso</A></th>
      <th colspan="5">Lista de administradores registrados</th>
    </tr>
 
    <tbody bgcolor="#006633" >
    </tbody>
    <tr>
    <td>administrador</td>
    <td>pass</td>
    <td>Id</td>
    <td>Nombre</td>
    <td colspan="2">¿Modificar o eliminar Administrador?</td> 
    </tr>
    
    <?php
	
	include("CONEXIONadm.php");
	
	$query="select * from administrador ";
	$resultado= $conexion->query($query);
	while($row=$resultado->fetch_assoc()){
		?>
        
        <tr>
        <td><?php echo $row['adm']; ?></td>
        <td><?php echo $row['pass_adm']; ?></td>
        <td><?php echo $row['id_adm']; ?></td>
        <td><?php echo $row['nom_adm']; ?></td>
        <td><a href="Modificaradm.php?id_adm=<?php echo $row['id_adm'];?>">Modificar</a></td>
        <td><a href="Eliminaradm.php?id_adm=<?php echo $row['id_adm'];?>">Eliminar</a></td>
        
       
        
        <?php
		}
        
        
	?>
	
	
    </thead>
    </table>
    
    
    



</center>




</body>
</html>
