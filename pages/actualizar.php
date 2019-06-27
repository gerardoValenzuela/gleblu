<?php
$conexion= mysqli_connect("localhost","root","","octavio")
or die ("no se puede conectar con el servidor local".mysqli_error($conexion));
//$conexion= mysqli_connect("sql10.freesqldatabase.com:3306","sql10225315","xUkyHmlEbY","sql10225315")
//or die ("no se puede conectar con el servidor ".mysqli_error($conexion));
//$conexion= mysql_connect('localhost','root','')or die
//("no se puede conectar con el servidor local");
//mysql_select_db('octavio')or die
//('no se puede conectar con la base de datos');
$Id= $_GET['Id'];
$resultado= mysqli_query($conexion,"select *from cita2 where clave='$Id'");
$row= mysqli_fetch_Array($resultado);
//$Id= $_GET['Id'];
//$query="select *from `cita2` where clave='$Id'";
//$resultado= mysql_query($query);
//$row= mysql_fetch_Array($resultado);
?>
<form id="form1" name="form1" method="post" action="modificar.php">
  <table width="272" height="331" border="2" align="center">
  <tr>
      <td width="81">CLAVE</td>
      <td width="173"><input type="text" name="txtID" value="<?php echo $row['clave'];?>"</td>
    </tr>
    <tr>
      <td width="81">Nombre</td>
      <td width="173"><input type="text" name="txtnombre2" value="<?php echo $row['nombre'];?>"</td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="txtemail2" value="<?php echo $row['email'];?>"</td>
    </tr>
    <tr>
      <td>Telefono</td>
      <td><input type="text" name="txttelefono2" value="<?php echo $row['telefono'];?>"</td>
    </tr>
    <tr>
      <td>Direccion</td>
      <td><input type="text" name="txtciudad2" value="<?php echo $row['ciudad'];?>"</td>
    </tr>
    <tr>
      <td>Fecha</td>
      <td><input type="text" name="txtfecha2" value="<?php echo $row['fecha_cita'];?>"</td>
    </tr>
    <tr>
      <td>Edad</td>
      <td><input type="text" name="txtedad2" value="<?php echo $row['edad'];?>"</td>
    </tr>
    <tr>
      <td>Hora cita </td>
      <td><input type="text" name="txthora2" value="<?php echo $row['hora_cita'];?>"</td>
    </tr>
    <tr>
      <td>Sexo</td>
      <td><input type="text" name="txtsex2" value="<?php echo $row['comentario'];?>"</td>
    </tr>
   
    <tr align="center">
      <td colspan="2"><input name="submit" type="submit"value="Actualizar"/></td>
    </tr>
  </table>
</form>
