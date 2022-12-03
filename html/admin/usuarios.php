<?php
session_start();
include_once("../../conexion.php");
$sql = "SELECT * FROM usuario";
$result =  $con->query($sql);

if(isset($_SESSION['logueado'])){ 
?> 
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title>Universidad Sergio Arboleda</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="../../assets/vendor/js/helpers.js"></script>
    <script src="../../assets/js/config.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        th, td {
            text-align: center !important;
        }
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php
          include("../component/menu_lateral.html");
        ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <?php
            include("../component/navbar.html");
          ?>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
           
            <!-- Content -->
            <div class="col-lg-12 text-center p-4" style="padding-left: 5%; padding-right: 5%">
                <div class="card">
                  <div class="p-5">
                    <h1  style="color: #2c4a73; font-weight: bold">Listado de Usuarios</h1>
                    <hr>
                    <table id="customers">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Gestion de Usuarios</th>
                                <th>Permiso realizar Observaciones</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($fila = mysqli_fetch_array($result)){
                            ?>
                            <tr>
                                <td><?php echo $fila[1] ?></td>
                                <td><?php echo $fila[2] ?></td>
                                <td>
                                    <?php 
                                        if($fila[4] == "1"){
                                            echo "Si";
                                        }else{
                                            echo "No";
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if($fila[6] == "1"){
                                            echo "Si";
                                        }else{
                                            echo "No";
                                        }
                                    ?>
                                </td>
                                <td>
                                    <button  data-bs-toggle="modal" data-bs-target="#modal_edit" onclick="asignar_valor_usuario('<?php echo $fila[4] ?>', '<?php echo $fila[6] ?>', '<?php echo $fila[2] ?>', '<?php echo $fila[1] ?>')" class="btn btn-info"><i class='bx bx-edit-alt' ></i></button>
                                </td>
                            </tr>
                            <?php 
                                }
                            ?>
                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php
              include("../component/footer.html");
            ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal_edit" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCenterTitle">Registro de Usuario</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body p-2">
            <form id="editar_usuario_form" method="post" action="../../php/registrar_usuario.php">
                <div class="modal-body">   
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="tema_practica">Nombre: </label>
                            <input class="form-control" type="text" id="nombre_e" name="nombre_u">   
                        </div>              
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="tema_practica">Correo: </label>
                            <input class="form-control" type="text" id="correo_e" name="correo_u">   
                        </div>              
                    </div>  
                    <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="tema_practica">Permiso de Realizar Observaciones: </label>
                            <select class="form-control" name="realizar_obser" id="realizar_obser_e">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>  
                        </div>              
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="hidden" name="opcion" id="opcion_e" value="guardar">
                            <label for="tema_practica">Permiso de Gestionar Usuarios: </label>
                            <select class="form-control" name="registrar_usu" id="registrar_usu_e">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>  
                        </div>              
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    


    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/dashboards-analytics.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="../../js/usuario.js"></script>
    <script src="../../js/practicas.js"></script>
    <script>
        function asignar_valor_usuario(permiso1, permiso2, correo, nombre){
            document.getElementById("correo_e").value = correo;
            document.getElementById("nombre_e").value = nombre;
            document.getElementById("realizar_obser_e").value = permiso1;
            document.getElementById("registrar_usu_e").value = permiso2;
            document.getElementById("opcion_e").value = "editar";
        }
    </script>
    <script>
        $('#customers').DataTable({
            "ordering": false,
            "pageLength": 10,
            "lengthChange": false,
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero ",
                    "last": " Ultimo",
                    "next": " Siguiente",
                    "previous": "Anterior "
                }
            },
        });
    </script>
    <script>
        $( "#sub_usu" ).addClass( "open" );
        $( "#li_lu" ).addClass( "active" );
    </script>
  </body>
</html>
<?php
}else{  
  header('Location: ../index.php');
  exit();
}
?>