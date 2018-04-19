<?php

  $mysqli = new mysqli("localhost", "root", "", "bdproyecto");

  if ($mysqli->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      exit();
  }

  $consulta="SELECT u.id, u.nombres, u.apellido1, u.apellido2, u.direccion, u.email, u.telefono, r.nomrol
             FROM usuario u, rol r
             WHERE u.rol_idrol = r.idrol";
  $tabla = "";
  if ($resultado = $mysqli->query($consulta)) {
      //while ($fila = $resultado->fetch_row()) {
      while ($fila = $resultado->fetch_array()){
              $Edicion = '<a class=\"btn btn-primary btn-sm\" style=\"color:white;\" data-target=\"#modalEdicion\" data-toggle=\"modal\" '.
              'data-edidad=\"'.$fila['id'].'\" '.
              'data-ednombread=\"'.$fila['nombres'].'\" '.
              'data-edapellido1ad=\"'.$fila['apellido1'].'\" '.
              'data-edapellido2ad=\"'.$fila['apellido2'].'\" '.
              'data-edcorad=\"'.$fila['email'].'\" '.
              'data-eddirad=\"'.$fila['direccion'].'\" '.
              'data-edtelad=\"'.$fila['telefono'].'\" '.
              '>Editar</a>';

              $tabla.='{
                "identificacion":"'.$fila['id'].'",
                "nombres":"'.$fila['nombres'].'",
                "pApellido":"'.$fila['apellido1'].'",
                "sApellido":"'.$fila['apellido2'].'",
                "direccion":"'.$fila['direccion'].'",
                "email":"'.$fila['email'].'",
                "telefono":"'.$fila['telefono'].'",
                "rol":"'.$fila['nomrol'].'",
                "Editar":"'.$Edicion.'"
              },';    
      }
  }

  //Elinamos la coma que sobra
  $tabla = substr($tabla,0, strlen($tabla) - 1);

  echo '{"data":['.$tabla.']}'; 

?>