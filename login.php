<?php 
    session_start();
    if (isset($_SESSION["user"]) && isset($_SESSION["tip"])) {
      $miVar = $_SESSION["tip"];
      if ($miVar == 'ADMINISTRADOR') {
          # code...
          header("location:IntEmpleados.php");
        }elseif ($miVar == 'VIGILANTE') {
          # code...
          header("location: IntDeteccionHistory.php");
        }
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form>
          <div>
            <center>
            <img src="images/Administrator Male_96px.png">
            <br>
            <br>
            </center>
          </div>
          <div class="form-group">
            <!--label for="user">Identificacion</label-->
            <input class="form-control" id="user" name="user " placeholder="Identificacion">
          </div>
          <div class="form-group">
            <!--label for="pass">Contraseña</label-->
            <input class="form-control" id="pass" type="password" placeholder="Password" name="pass">
          </div>
          <div class="form-group">
            <!--label for="tipo">Tipo de usuario</label-->
            <select class="form-control" id="tipoUser" name="tipoUser">
              <option value="1">Administrador</option>
              <option value="2">Vigilante</option>
            </select>
          </div>
          <input class="btn btn-primary btn-block" id="login" value="Login"></input>
          <br>
          <span id="result"></span>

        </form>
        <!--div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div-->
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>

<script>
  $(document).ready(function(){
    $('#login').click(function(){
      var user = $('#user').val();
      var pass = $('#pass').val();
      var tipoUser = $('#tipoUser').val();
      debugger;
      if ($.trim(user).length > 0 && $.trim(pass).length > 0) {
        $.ajax({
          url:"logueame.php",
          type:"POST",
          data:{user:user, pass:pass,tipoUser:tipoUser},
          cache:"false",
          beforeSend:function(){
            $('#login').val("Conectando...Espere un momento");
          },
          success:function(data){
            $('#login').val("Login");
            if (data=="1") {
              $(location).attr('href','index.php');
            } else {
              $("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> las credenciales son incorrectas.</div>");
            }
          }
        });
      }
    });
  });
</script>
