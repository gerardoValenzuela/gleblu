<?php
$conexion= mysqli_connect("localhost","root","","octavio")
or die ("no se puede conectar con el servidor local".mysqli_error($conexion));
//$conexion= mysqli_connect("sql10.freesqldatabase.com:3306","sql10225315","xUkyHmlEbY","sql10225315")
//or die ("no se puede conectar con el servidor ".mysqli_error($conexion));
//$conexion= mysql_connect('localhost','root','')or die
//("no se puede conectar con el servidor local");
//mysql_select_db('octavio')or die
//('No se puede conectar con la base de datos');

$Id = $_POST['txtID'];
$Nombre =  $_POST['txtnombre2'];
$Email =  $_POST['txtemail2'];
$Telefono =  $_POST['txttelefono2'];
$Ciudad =  $_POST['txtciudad2'];
$Fecha =  $_POST['txtfecha2'];
$Edad =  $_POST['txtedad2'];
$Horacita =  $_POST['txthora2'];
$Sexo =  $_POST['txtsex2'];

		  $resultado = mysqli_query($conexion,"Update cita2 set nombre = '$Nombre', email='$Email',telefono='$Telefono', ciudad='$Ciudad',fecha_cita='$Fecha' ,edad= '$Edad',hora_cita='$Horacita',comentario='$Sexo'	  
          where clave='$Id'");
		
		  if($resultado)
		  {
			  echo 'Registro Modificado Correctamente';
			  
		  }
         else
		 {
			 echo 'Error al Modificar';
		 }

		 
?>

<a href="consulta.php"><input type="Submit" value="Regresar"></a>