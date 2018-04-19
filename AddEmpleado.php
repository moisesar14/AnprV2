<?php 
	$mysqli = new mysqli("localhost", "root", "", "bdproyecto");
	

	if (isset($_POST["didAdm"]) 
		&& isset($_POST["dnomAdm"]) 
		&& isset($_POST["dape1Adm"]) 
		&& isset($_POST["dape2Adm"]) 
		&& isset($_POST["dcorAdm"]) 
		&& isset($_POST["ddirAdm"]) 
		&& isset($_POST["dtelAdm"]) 
		&& isset($_POST["dclaAdm"]) 
		&& isset($_POST["dTRolad"])) {

		$id = mysqli_real_escape_string($mysqli, $_POST["didAdm"]);
		$nom = mysqli_real_escape_string($mysqli, $_POST["dnomAdm"]);
		$ape1 = mysqli_real_escape_string($mysqli, $_POST["dape1Adm"]);
		$ape2 = mysqli_real_escape_string($mysqli, $_POST["dape2Adm"]);
		$corr = mysqli_real_escape_string($mysqli, $_POST["dcorAdm"]);
		$dir = mysqli_real_escape_string($mysqli, $_POST["ddirAdm"]);
		$tel = mysqli_real_escape_string($mysqli, $_POST["dtelAdm"]);
		$cla = mysqli_real_escape_string($mysqli, $_POST["dclaAdm"]);
		$Trol = mysqli_real_escape_string($mysqli, $_POST["dTRolad"]);

		$sql = "SELECT id, nombres, apellido1, apellido2
				FROM usuario
				WHERE id=$id";

	    $result = mysqli_query($mysqli, $sql);
	    $num_row = mysqli_num_rows($result);

	    if ($num_row == "1") {
	      echo "encontrado";
	    }else{

	        $sql = "INSERT INTO usuario (id, nombres, apellido1, apellido2, telefono, direccion, email, rol_idrol, clave, estadoemp) 
	        		VALUES ($id, '$nom', '$ape1', '$ape2', $tel, '$dir', '$corr', $Trol, '$cla', 'ACTIVO');";

			if(mysqli_query($mysqli,$sql)){
			    echo"registrado";
			}else{
			    echo"Error";
			}
			
	    }
		
		
		mysqli_close($mysqli);
	} else{
		echo "algun dato no esta publicado ";
	}

?>
