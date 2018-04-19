<?php 
    session_start();
    if(!isset($_SESSION["user"])){
      header("location:login.php");
    }
 ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sistema ANPR</title>
  <script type="text/javascript" src="js/alertify.min.js"></script>
  <script type="text/javascript" src="js/Funciones2.js"></script>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <!-- Page level plugin CSS-->
  <script src="js/jquery-1.12.3.min.js"></script>
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <script src="js/sb-admin-datatables.min.js"></script>
  <script src="js/CargarEmpleados.js"></script> 
  

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="Index.php">Sistema ANPR</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reportes">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-play-circle"></i>
            <span class="nav-link-text">Reportes</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="IntDeteccion.php">Placas Detectadas</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Empleados">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-address-card"></i>
            <span class="nav-link-text">Empleados</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="IntEmpleados.php">Listado</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-sm" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-user-circle"></i>
            
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">Menu Usuario</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#" data-toggle="modal" data-target="#modalCerrar"><span class="fa fa-fw fa-sign-out"></span>Logout</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" >
            <i class=""></i><?php echo $_SESSION["user"]; ?></a>
        </li>
        <!--li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li-->
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="Index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Listado de Empleados</li>
      </ol>
      <div class="card-body">
        <caption>
            <button class="btn btn-primary btn-sm" data-target="#modalAgregar" data-toggle="modal"><i class="fa fa-user-plus"></i>
              Agregar Empleados
            </button><br><br>
          </caption>
        <div class="table-responsive">
          <table id="TablEmpleados" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
              <tr>
                  <th>Identificacion</th>
                  <th>Nombres</th>
                  <th>Primer Apellido</th>
                  <th>Segundo Apellido</th>
                  <th>Direccion</th>
                  <th>E-mail</th>
                  <th>Telefono</th>
                  <th>Rol</th>
                  <th>Editar</th>
              </tr>
              </thead>
              <tbody>
              </tbody>
          </table>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Universidad del Sinú - Seccional Cartagena 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="modalCerrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Esta Seguro que desea cerrar sesion?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="finalizar.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!--modal edicion empleado-->
    <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Actualizar datos de empleado</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <input  id="id" name="id" type="hidden" ></input>
                        <div class="form-group-sm">
                              <div class="form-group-sm">
                                <label for="maddidAD">Identificacion</label>
                                <input class="form-control input-sm" id="medidad" name="medidad" type="text" disabled="true"></input>
                              </div>  
                              <div class="form-group-sm">
                                <label for="maddnombreAd">Nombre</label>
                                <input class="form-control input-sm" id="mednombread" name="mednombread" type="text" ></input>
                              </div>
                              <div class="form-group-sm">
                                <label for="maddapellidoAd">Primer apellido</label>
                                <input class="form-control input-sm" id="medapellido1ad" name="medapellido1ad" type="text" ></input>
                              </div>
                              <div class="form-group-sm">
                                <label for="maddapellidoAd">Segundo apellido</label>
                                <input class="form-control input-sm" id="medapellido2ad" name="medapellido2ad" type="text" ></input>
                              </div>
                              <div class="form-group-sm">
                                <label for="maddcorAd">Correo</label>
                                <input class="form-control input-sm" id="medcorad" name="medcorad" type="text" ></input>
                              </div>
                              <div class="form-group-sm">
                                <label for="madddirAd">Direccion</label>
                                <input class="form-control input-sm" id="meddirad" name="meddirad" type="text" ></input>
                              </div>
                              <div class="form-group-sm">
                                <label for="maddtelAd">Telefono</label>
                                <input class="form-control input-sm" id="medtelad" name="medtelad" type="text" ></input>
                              </div>
                              <br>
                     <input type="submit" id="edEmp" class="btn btn-primary" value="Actualizar">             
                      </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>
    <!--Modal Agregar Empleado-->
    <div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">                      
              <input  id="id" name="id" type="hidden" ></input>
              <div class="form-group">
                <div class="form-group">
                  <div class="form-group-sm">
                    <label for="maddidAD">Identificacion</label>
                    <input class="form-control" id="maddidAD" name="maddidAD" type="text"></input>
                  </div>  
                  <div class="form-group-sm">
                    <label for="maddnombreAd">Nombre</label>
                    <input class="form-control" id="maddnombreAd" name="maddnombreAd" type="text" ></input>
                  </div>
                  <div class="form-group-sm">
                    <label for="maddapellidoAd">Primer apellido</label>
                    <input class="form-control" id="maddapellido1Ad" name="maddapellidoAd" type="text" ></input>
                  </div>
                  <div class="form-group-sm">
                    <label for="maddapellidoAd">Segundo apellido</label>
                    <input class="form-control" id="maddapellido2Ad" name="maddapellidoAd" type="text" ></input>
                  </div>
                  <div class="form-group-sm">
                    <label for="maddcorAd">Correo</label>
                    <input class="form-control" id="maddcorAd" name="maddcorAd" type="text" ></input>
                  </div>
                  <div class="form-group-sm">
                    <label for="madddirAd">Direccion</label>
                    <input class="form-control" id="madddirAd" name="madddirAd" type="text" ></input>
                  </div>
                  <div class="form-group-sm">
                    <label for="maddtelAd">Telefono</label>
                    <input class="form-control" id="maddtelAd" name="maddtelAd" type="text" ></input>
                  </div>
                  <div class="form-group-sm">
                    <label for="maddClaAd">Clave</label>
                    <input class="form-control" id="maddClaAd" name="maddClaAd" type="password" ></input>
                  </div>
                  <div class="form-group-sm">
                    <label for="rol">Rol de empleado</label>
                    <select class="form-control" id="maddTRolad" name="maddTRolad">
                      <option value="1">ADMINISTRADOR</option>
                      <option value="2">VIGILANTE</option>
                    </select>
                  </div>
                  <br>
                </div>
                <input type="submit" id="AddEmp" class="btn btn-primary" value="Registrar">      
            </div>         
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 

        $('#edEmp').click(function(){
          var idAdm = $('#medidad').val();
          var nomAdm = $('#mednombread').val();
          var apeAdm = $('#medapellido1ad').val();
          var ape2Adm = $('#medapellido2ad').val();
          var dirAdm = $('#meddirad').val();
          var corAdm = $('#medcorad').val();
          var telAdm = $('#medtelad').val();
            $.ajax({
              url:"actualizaEmp.php",
              type:"POST",
              data:{didAdm:idAdm,
                    dnomAdm:nomAdm,
                    dapeAdm:apeAdm,
                    dape2Adm:ape2Adm,
                    ddirAdm:dirAdm,
                    dcorAdm:corAdm,
                    dtelAdm:telAdm},
              cache:"false",
              beforeSend:function() {
                $('#AcAdmin').val("Por Favor Espere...");
              },
              success:function(data) {
                $('#AcAdmin').val("Actualizar");
                if (data.trim()=="actualizado") {
                  Mensaje("Notificar","Actualizacion completa...!!");
                  document.location.reload()
                } else if (data.trim()=="Error"){
                  Mensaje("Alerta","No Se pudo Realizar la actualizacion!! :( ");
                }
              }
            });
        });

        $('#AddEmp').click(function(){
            var idAdm = $('#maddidAD').val();
            var nomAdm = $('#maddnombreAd').val();
            var ape1Adm = $('#maddapellido1Ad').val();
            var ape2Adm = $('#maddapellido2Ad').val();
            var corAdm = $('#maddcorAd').val();
            var dirAdm = $('#madddirAd').val();
            var telAdm = $('#maddtelAd').val();
            var claAdm = $('#maddClaAd').val();
            var TRolad = $('#maddTRolad').val();
            debugger;
              $.ajax({
                url:"AddEmpleado.php",
                type:"POST",
                data:{didAdm:idAdm,
                      dnomAdm:nomAdm,
                      dape1Adm:ape1Adm,
                      dape2Adm:ape2Adm,
                      dcorAdm:corAdm,
                      ddirAdm:dirAdm,
                      dtelAdm:telAdm,
                      dclaAdm:claAdm,
                      dTRolad:TRolad},
                cache:"false",
                beforeSend:function() {
                  $('#AddEmp').val("Por Favor Espere...");
                },
                success:function(data) {
                  $('#AddEmp').val("Registrar");
                  if (data.trim()=="registrado") {
                    Mensaje("Notificar","Registro ingresado Exitosamente...!!");
                    document.location.reload()
                  } else if (data.trim()=="Error"){
                    Mensaje("Alerta","Error!!... Consulte al Administrador del sistema");
                  } else if (data.trim()=="encontrado"){
                    Mensaje("Alerta","identificacion ya se encuentra registrado ");
                    
                  }
                }
              });
          });

    });
</script> 
</html>
<script type="text/javascript">
    $('#modalEdicion').on('show.bs.modal', function (event) {
  debugger;
  var button = $(event.relatedTarget) 
  // Button that triggered the modal
  var recipient0 = button.data('edidad')
  var recipient1 = button.data('ednombread')
  var recipient2 = button.data('edapellido1ad')
  var recipient3 = button.data('edapellido2ad')
  var recipient4 = button.data('edcorad')
  var recipient5 = button.data('eddirad')
  var recipient6 = button.data('edtelad')

  // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

  var modal = $(this)    
  modal.find('.modal-body #medidad').val(recipient0)
  modal.find('.modal-body #mednombread').val(recipient1)
  modal.find('.modal-body #medapellido1ad').val(recipient2)
  modal.find('.modal-body #medapellido2ad').val(recipient3)
  modal.find('.modal-body #medcorad').val(recipient4)
  modal.find('.modal-body #meddirad').val(recipient5)
  modal.find('.modal-body #medtelad').val(recipient6)
});
</script>