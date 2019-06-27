<?php
$conexion= mysqli_connect("localhost","root","","octavio")
or die ("no se puede conectar con el servidor local".mysqli_error($conexion));
//$conexion= mysqli_connect("sql10.freesqldatabase.com:3306","sql10225315","xUkyHmlEbY","sql10225315")
//or die ("no se puede conectar con el servidor ".mysqli_error($conexion));
//$link =  mysql_connect('localhost', 'root','')or die
//("no se puede conectar con el servidor local");
//$db = mysql_select_db('octavio', $link)or die
//('No se puede conectar con la base de datos');

$Nombre = $_POST['txtnombre2'];
$Email = $_POST['txtemail2'];
$Telefono = $_POST['txttelefono2'];
$Ciudad = $_POST['txtciudad2'];
$Fecha = $_POST['txtfecha2'];
$Edad = $_POST['txtedad2'];
$Horacita = $_POST['txthora2'];
$Sexo = $_POST['txtsex2'];
   
 $consulta =mysqli_query($conexion,"SELECT * FROM cita2 WHERE fecha_cita= '".$Fecha."'  
 AND hora_cita='".$Horacita."'") or die (mysqli_error($conexion));
 $fila=mysqli_fetch_array($consulta);
 
  if($fila)
{
echo '<script>
alert("cita ocupada")
</script>';
echo "INTENTE CON OTRA HORA Y FECHA";
}
 else{
  mysqli_query ($conexion,"insert into `cita2` (`nombre`, `email`, `telefono`, `ciudad`, `fecha_cita` , `edad` , `hora_cita` , `comentario`)
  values ('$Nombre','$Email','$Telefono','$Ciudad','$Fecha','$Edad','$Horacita','$Sexo')")
  or die ("no se puede conectar con el servidor local".mysqli_error($conexion));
  
  echo '<script language= javascript>
         alert("registro correctamente agregado")
		 self.location="contacto.html"</script>';
}
?>