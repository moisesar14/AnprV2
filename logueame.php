<?php 
session_start();
$connect = mysqli_connect("localhost","root","","bdproyecto");
if (isset($_POST["user"]) && isset($_POST["pass"])) {
	  $user =mysqli_real_escape_string($connect, $_POST["user"]);
    $pass =mysqli_real_escape_string($connect, $_POST["pass"]);
  	$tipoUser =mysqli_real_escape_string($connect, $_POST["tipoUser"]);

  	$sql = "SELECT id, clave,rol.nomrol, GROUP_CONCAT( CONCAT_WS(  ' ', nombres, apellido1, apellido2 ) ) nombreCompleto
  			FROM usuario,rol
  			WHERE id=$user 
  			AND clave='$pass' AND rol.idrol=rol_idrol AND rol_idrol='$tipoUser'";
  	$result = mysqli_query($connect, $sql);
  	$num_row = mysqli_num_rows($result);

  	if ($num_row == "1") {
    	$data = mysqli_fetch_array($result);
    	if ($data["nombreCompleto"] != null) {
        # code...
        $_SESSION["user"] = $data["nombreCompleto"];
        $_SESSION["tip"] = $data["nomrol"];
        echo "1";
      }else{
        echo "error";
      }

  	} else {
    	echo "error";
  	}
} else {
  	echo "error";
}
 ?>