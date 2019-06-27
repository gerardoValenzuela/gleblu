<?php
session_start();

$conexion= mysqli_connect("localhost","root","","octavio")
or die ("no se puede conectar con el servidor local".mysqli_error($conexion));
//$conexion= mysqli_connect("sql10.freesqldatabase.com:3306","sql10225315","xUkyHmlEbY","sql10225315")
//or die ("no se puede conectar con el servidor ".mysqli_error($conexion));
//$conexion= mysql_connect('localhost','root','')or die
//("no se puede conectar con el servidor local");
//mysql_select_db('octavio')or die 
//('no se puede conectar con la base de datos');

 $username=$_POST ['username'];
 $password = $_POST['password'];

 $consulta =mysqli_query($conexion,"SELECT * FROM cita2 WHERE nombre= '".$username."'  
 AND contrasenia='".$password."'") or die (mysqli_error($conexion));
 $fila=mysqli_fetch_array($consulta);
 if($fila)
 
{
$result= mysqli_query($conexion,"SELECT * FROM cita2 WHERE nombre=$username");
while($row=mysqli_fetch_array($result)){
echo $row["clave"];
	 }
echo '<script languaje= javascript>
alert("Consulta")
//self.location=""actualizar.php?Id=<?php echo $row["clave"];?>"</script>';
//?Id=echo $row["clave"];
}
else 
{
echo '<script languaje=javascript>';
echo 'alert("usuario Y o password no validos")';
//self.location="acceso.html"
echo '</script>';
 }
 ?>
