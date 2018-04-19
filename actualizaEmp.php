<?php

session_start();
	$mysqli = new mysqli("localhost", "root", "", "bdproyecto");	

	if (isset($_POST["didAdm"])
	 && isset($_POST["dnomAdm"])
	 && isset($_POST["dapeAdm"]) 
	 && isset($_POST["dape2Adm"]) 
	 && isset($_POST["ddirAdm"]) 
	 && isset($_POST["dcorAdm"]) 
	 && isset($_POST["dtelAdm"])) {
		$vId = mysqli_real_escape_string($mysqli, $_POST["didAdm"]);
		$vNombre = mysqli_real_escape_string($mysqli, $_POST["dnomAdm"]);
		$vApellido = mysqli_real_escape_string($mysqli, $_POST["dapeAdm"]);
		$vApellido2 = mysqli_real_escape_string($mysqli, $_POST["dape2Adm"]);
		$vDireccion = mysqli_real_escape_string($mysqli, $_POST["ddirAdm"]);
		$vCorreo = mysqli_real_escape_string($mysqli, $_POST["dcorAdm"]);
		$vTelefono = mysqli_real_escape_string($mysqli, $_POST["dtelAdm"]);

		$sql = "UPDATE usuario 
				SET nombres='$vNombre',apellido1='$vApellido',apellido2='$vApellido2',email='$vCorreo',telefono=$vTelefono 
				WHERE id=$vId";
		if(mysqli_query($mysqli,$sql)){
		    echo"actualizado";
		}else{
		    echo"Error" . mysql_error($mysqli);
		}
		mysqli_close($mysqli);
	}

?>	