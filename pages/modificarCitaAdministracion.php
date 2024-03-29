

<!DOCTYPE html>
<!--
Template Name: Gleblu
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>WILL-DENT | TRATAMIENTOS| ACCESO</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet"/>

<script language = "javascript">
    function regresar(){
        history.back();
    }
</script>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +52 1 7361025861</li>
        <li><i class="far fa-envelope rgtspace-5"></i> info@domain.com</li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><a href="../index.html"><i class="fas fa-home"></i></a></li>
        <li id="searchform">
          <div>
            <form method="get" action="https://www.google.com/search" target="_blank">
<input type="search" name="q" placeholder="BUSCAR" autofocus required>
<input type="submit" value="Buscador" >
</form>
          </div>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a href="../index.html">WILL-DENT</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a href="../index.html">Home</a></li>
        <li><a href="consultorio.html">CONSULTORIO</a></li>
        <li ><a class="drop" href="#">TRATAMIENTOS</a>
          <ul>
             <li><a href="endodoncia.html">ENDODONCIA</a></li>
            <li><a href="estetica.html">ESTETICA</a></li>
            <li><a href="protesis.html">PROTESIS</a></li>
          <!--   <li><a href="sidebar-right.html">Sidebar Right</a></li>
            <li><a href="basic-grid.html">Basic Grid</a></li>
            <li class="active"><a href="font-icons.html">Font Icons</a></li>-->
          </ul>
        </li>
        <li><a class="drop" href="#">GALERIA</a>
          <ul>
            <li><a href="fotos.html">FOTOS</a></li>
           <!-- <li><a class="drop" href="#">FOTOS</a>
              <ul>
             </ul> -->
            </li>
            <li><a href="videos.html">VIDEOS</a></li>
          </ul>
        </li>
        
        <li class="active"><a href="contacto.html">CONTACTO</a></li>
       <!-- <li><a href="#">Link Text</a></li>-->
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('file:///C|/xampp/htdocs/gleblu/images/demo/backgrounds/01.png');">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="../index.html">Home</a></li>
      <li><a href="#">TRATAMIENTOS</a></li>
      <li><a href="#">ACCESO</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php 
$conexion= mysqli_connect("localhost","root","","octavio")
or die ("no se puede conectar con el servidor local".mysqli_error($conexion));
//$conexion= mysqli_connect("sql10.freesqldatabase.com:3306","sql10225315","xUkyHmlEbY","sql10225315")
//or die ("no se puede conectar con el servidor ".mysqli_error($conexion));
//$conexion =  mysql_connect('localhost','root','')
//or die ('No se puede Conectar con el Servidor');
//mysql_select_db('octavio') or die('La base de datos no existe');

 $Id =$_GET['Id'];
 //$resultado = mysqli_query($conexion,"select FROM cita2 WHERE clave='$Id'");
 //$Id =$_GET['Id'];
$resultado= mysqli_query($conexion,"SELECT * FROM cita2 where clave = $Id");
?>
 <div class="row wrapper row3" style = "text-align:center;">
    <form action = "modificaciondeCitaAdministracion.php" method = "post">
    	<center>
            <table class = "table">
                <thead>
                    <tr>
                        <th colspan = "2">
                            Modificación de cita. 
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($row=mysqli_fetch_array($resultado)){ ?>
                    <tr>
                        <td>Clave:</td>
                        <td>   
                            <input type = "hidden" name = "Id" id = "Id" value = "<?php echo $row["clave"]; ?>"> 
                            <?php echo $row['clave']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td>
                            <input type = "text" name = "nombre" id = "nombre" value = "<?php echo $row["nombre"]; ?>"> 
                        </td>
                    </tr>
                    <tr>
                        <td>E-Mail:</td>
                        <td>
                            <input type = "text" name = "email" id = "email" value = "<?php echo $row["email"]; ?>"> 
                        </td>
                    </tr>
                    <tr>
                        <td>Telefono:</td>
                        <td>
                            <input type = "text" name = "telefono" id = "telefono" value = "<?php echo $row["telefono"]; ?>"> 
                        </td>
                    </tr>
                    <tr>
                        <td>Domicilio:</td>
                        <td>
                            <input type = "text" name = "ciudad" id = "ciudad" value = "<?php echo $row["ciudad"]; ?>"> 
                        </td>
                    </tr>
                    <tr>
                        <td>Edad:</td>
                        <td>
                            <input type = "text" name = "edad" id = "edad" value = "<?php echo $row["edad"]; ?>"> 
                        </td>
                    </tr>
                    <tr>
                        <td>Sexo:</td>
                        <td>
                            <select id = "sexo" name = "sexo">
                                <option value = "MASCULINO" <?php if(strcmp($row["sexo"], "MASCULINO") == 0) echo "selected"; ?> >MASCULINO</option>
                                <option value = "FEMENINO" <?php if(strcmp($row["sexo"], "FEMENINO") == 0) echo "selected"; ?> >FEMENINO</option>
                            <select>
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha: (dd/mm/aaaa)</td>
                        <td>
                            <input type = "text" value = "<?php echo $row['fecha_cita']; ?>"  name = "fecha_cita">
                        </td>
                    </tr>
                    <tr>
                        <td>Hora: (hh:mm)</td>
                        <td>
                            <select id = "hora_cita" name = "hora_cita">
                                <option value = "9:00" <?php if(strcmp($row["hora_cita"], "9:00") == 0) echo "selected"; ?> >9:00</option>
                                <option value = "9:30" <?php if(strcmp($row["hora_cita"], "9:30") == 0) echo "selected"; ?> >9:30</option>
                                <option value = "10:00" <?php if(strcmp($row["hora_cita"], "10:00") == 0) echo "selected"; ?> selected >10:00</option>
                                <option value = "10:30" <?php if(strcmp($row["hora_cita"], "10:30") == 0) echo "selected"; ?> >10:30</option>
                                <option value = "11:00" <?php if(strcmp($row["hora_cita"], "11:00") == 0) echo "selected"; ?> >11:00</option>
                                <option value = "11:30" <?php if(strcmp($row["hora_cita"], "11:30") == 0) echo "selected"; ?> >11:30</option>
                                <option value = "12:00" <?php if(strcmp($row["hora_cita"], "12:00") == 0) echo "selected"; ?> >12:00</option>
                                <option value = "12:30" <?php if(strcmp($row["hora_cita"], "12:30") == 0) echo "selected"; ?> >12:30</option>
                                <option value = "13:00" <?php if(strcmp($row["hora_cita"], "13:00") == 0) echo "selected"; ?> >13:00</option>
                                <option value = "13:30" <?php if(strcmp($row["hora_cita"], "13:30") == 0) echo "selected"; ?> >13:30</option>
                                <option value = "17:00" <?php if(strcmp($row["hora_cita"], "17:00") == 0) echo "selected"; ?> >17:00</option>
                                <option value = "17:30" <?php if(strcmp($row["hora_cita"], "17:30") == 0) echo "selected"; ?> >17:30</option>
                                <option value = "18:00" <?php if(strcmp($row["hora_cita"], "18:00") == 0) echo "selected"; ?> >18:00</option>
                                <option value = "18:30" <?php if(strcmp($row["hora_cita"], "18:30") == 0) echo "selected"; ?> >18:30</option>
                                <option value = "19:00" <?php if(strcmp($row["hora_cita"], "19:00") == 0) echo "selected"; ?> >19:00</option>
                                <option value = "19:30" <?php if(strcmp($row["hora_cita"], "19:30") == 0) echo "selected"; ?> >19:30</option>
                                <option value = "20:00" <?php if(strcmp($row["hora_cita"], "20:00") == 0) echo "selected"; ?> >20:00</option>
                                <option value = "20:30" <?php if(strcmp($row["hora_cita"], "20:30") == 0) echo "selected"; ?> >20:30</option>
                            <select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan = "2" style = "text-align: center">
                            <button type = "submit" class = "btn btn-primary" style = "font-size:medium; background-color:#ff0000;">Modificar</button>
                            <button type = "button" class = "btn btn-primary" style = "font-size:medium; background-color:#0000ff;" onclick = "regresar()" >Cancelar</button>
                        </td>
                    </tr>
                    <?php }else{ ?>
                    <tr>
                        <td colspan = "2" style = "text-align: center;">No se encontro ninguna cita con clave <?php echo $Id; ?>.</td>
                    </tr>
                    <tr>
                        <td colspan = "2" style = "text-align: center;">
                            <a href="consulta.php?Id=<?php echo $row['clave'];?>" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Regresar</a>
                        </td>
                            
                    </tr>
                    
                    <?php } ?>
                    
                </tbody>
            <table>
            
            <p></p>
        </center>
    </form>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading">DATOS</h6>
      <ul class="nospace linklist contact btmspace-30">
        <li><i class="fas fa-map-marker-alt"></i>
          <address>
          CALLE INDEPENDENCIA No. 61, TELOLOAPAN, 40535
          </address>
        </li>
        <li><i class="fas fa-phone"></i> +52 1 7361025861</li>
        <li><i class="far fa-envelope"></i> info@domain.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://web.facebook.com/OrtodonciaTeloloapan/"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">HORARIO DE ATENCION</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">LUNES A 
            VIERNES</a></p>
            <time class="block font-xs" datetime="2045-04-06">12:00 PM A 2:00 PM<sup></sup> 5:00 PM A 8:00 PM</time>
          </article>
        </li>
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">URGENCIAS</a></p>
            <time class="block font-xs" datetime="2045-04-05">24 HORAS<sup></sup> </time>
          </article>
        </li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">ESPECIALIDADES</h6>
      <ul class="nospace linklist">
        <li><a href="endodoncia.html">ENDODONCIA</a></li>
        <li><a href="videos.html">PREVENCIÓN</a></li>
        <li><a href="protesis.html">PRÓTESIS FIJA Y REMOVIBLE</a></li>
        <li><a href="estetica.html">ESTETICA DENTAL</a></li>
      </ul>
     </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>
</body>
</html>
