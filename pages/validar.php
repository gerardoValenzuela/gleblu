<?php
	require "connect_db.php";
	$username = $_POST["username"];
    $password = $_POST["password"];
    $sql = ("SELECT * FROM usuario where nombre = '" . 	$username . "' and contrasenia = '" . $password . "';");
	echo "\n" . $sql . "<br>";
    $result = mysqli_query($mysqli, $sql);
	
	if($row = mysqli_fetch_array($result)){
		echo $row["nombre"].$row["contrasenia"];
		if($row["cargo"] == "Administrador"){
			echo "\nEl usuario es Administrador<br>";
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='consulta.php'</script>";
		}
	}
	else{
		$sql1 = ("SELECT * FROM cita2 where (nombre = '" . $username . "' or email = '" . $username . "') and contrasenia = '" . $password . "';");
		echo "\n" . $sql1 . "<br>";
    
		$result1 = mysqli_query($mysqli, $sql1);
		if($row1 = mysqli_fetch_array($result1)){
			echo '<script>alert("BIENVENIDO INVITADO")</script> ';
			header("Location: modificarCita.php?Id=".$row1['clave']);
    
		}
		else{
			echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
			//echo "<script>location.href='index.php'</script>";	
		}
	
	
	}
?>