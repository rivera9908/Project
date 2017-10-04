<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TABLA</title>
</head>

<body bgcolor="#FF6600" background="fondo tabla.jpg" >
<center>
    <table bgcolor="#999999" border="4">
    <thead>
    <tr> 
      <th colspan="1"><a href="ingreso.html">Nuevo ingreso</A></th>
      <th colspan="5">Lista de clientes registrados</th>
    </tr>
 
    <tbody bgcolor="#006633" >
    </tbody>
    <tr>
    <td>Cliente</td>
    <td>pass</td>
    <td>Id</td>
    <td>Nombre</td>
    <td colspan="2">¿Modificar o eliminar cliente?</td> 
    </tr>
    
    <?php
	
	include("CONEXION.php");
	
	$query="select * from clientes ";
	$resultado= $conexion->query($query);
	while($row=$resultado->fetch_assoc()){
		?>
        
        <tr>
        <td><?php echo $row['cliente']; ?></td>
        <td><?php echo $row['pass_cliente']; ?></td>
        <td><?php echo $row['id_cliente']; ?></td>
        <td><?php echo $row['nom_cliente']; ?></td>
        <td><a href="Modificar.php?id_cliente=<?php echo $row['id_cliente'];?>">Modificar</a></td>
        <td><a href="Eliminar.php?id_cliente=<?php echo $row['id_cliente'];?>">Eliminar</a></td>
        
       
        
        <?php
		}
        
        
	?>
	
	
    </thead>
    </table>
    
    
    



</center>




</body>
</html>
