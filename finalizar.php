<?php session_start();
 if(isset($_SESSION['user']))
    {
     session_destroy();
     //echo "Has cerrado la sesion";
     header("location:login.php");
    }else{
    	echo "No ha iniciado Sesion";
    	header("location:login.php");
    }
 ?>