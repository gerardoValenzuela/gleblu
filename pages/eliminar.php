<?php 
$conexion= mysqli_connect("localhost","root","","octavio")
or die ("no se puede conectar con el servidor local".mysqli_error($conexion));
//$conexion= mysqli_connect("sql10.freesqldatabase.com:3306","sql10225315","xUkyHmlEbY","sql10225315")
//or die ("no se puede conectar con el servidor ".mysqli_error($conexion));
//$conexion =  mysql_connect('localhost','root','')
//or die ('No se puede Conectar con el Servidor');
//mysql_select_db('octavio') or die('La base de datos no existe');

 $Id =$_GET['Id'];
 $resultado = mysqli_query($conexion,"DELETE FROM cita2 WHERE clave='$Id'");
 //$Id =$_GET['Id'];
 //$query = "DELETE FROM `cita2` WHERE clave='$Id'";
 //$resultado = mysql_query($query);
 
?> 

<html>
    <head>
	<title>Eliminar</title>
	</head>
	<body>
	   <center>
	   <?php
	    if($resultado> 0)
		{
	     ?>
		<h2> Registro Eliminado Correctamente</h2>
		<?php
		}   ?>
		
		<p></p>
		<a href="consulta.php">Regresar</a>
		</center>
	  </body>
	</html>
