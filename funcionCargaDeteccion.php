<?php

  $mysqli = new mysqli("localhost", "root", "", "bdproyecto");

  if ($mysqli->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      exit();
  }

  $consulta="SELECT idacceso, fec_hr_entrada, placa, camara_idcam, fotoalmacen
FROM acceso
WHERE CONVERT( fec_hr_entrada, DATE ) = CONVERT( NOW( ) , DATE ) ";
  $tabla = "";
  if ($resultado = $mysqli->query($consulta)) {

      //while ($fila = $resultado->fetch_row()) {
      while ($fila = $resultado->fetch_array()){
              $verfoto = '<button class=\"btn btn-info btn-xs\" data-target=\"#modalVerPlaca\" data-toggle=\"modal\" '.
              'data-imagendet=\"'.str_replace("\\", "/", $fila['fotoalmacen']).'\" '.
              ' aria-label=\"Left Align\"><span class=\"pull-left glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span> Ver Placa</button>';
              $tabla.='{
                "iddet":"'.$fila['idacceso'].'",
                "fechrdet":"'.$fila['fec_hr_entrada'].'",
                "placadet":"'.$fila['placa'].'",
                "camaradet":"'.$fila['camara_idcam'].'",
                "fotodet":"'.$verfoto.'"
              },';    
      }
  }

  //Elinamos la coma que sobra
  $tabla = substr($tabla,0, strlen($tabla) - 1);

  echo '{"data":['.$tabla.']}'; 

?>

