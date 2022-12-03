<?php
    session_start();
    include_once("../../conexion.php");
    $ID = $_SESSION['id'];

    $sql = "SELECT * FROM `practica`";
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
        th td {
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
                  <h1 style="color: #2c4a73; font-weight: bold">Listado de practicas registradas</h1>
                        <hr>
                        <table id="customers">
                            <thead>
                                <tr>
                                    <th style="text-align: center; width: 130px !important;">Nombre</th>
                                    <th style="text-align: center; width: 130px !important;">Semestre</th>
                                    <th style="text-align: center; width: 130px !important;">Fecha</th>
                                    <th style="text-align: center; width: 130px !important;">Tema</th>
                                    <th style="text-align: center; width: 130px !important;">Sitio</th>
                                    <th style="text-align: center; width: 130px !important;">Tutor SP</th>
                                    <th style="text-align: center; width: 130px !important;">Valoracion SP</th>
                                    <th style="text-align: center; width: 130px !important;">Tutor USA</th>
                                    <th style="text-align: center; width: 130px !important;">Valoracion USA</th>
                                    <th style="text-align: center; width: 130px !important;">Instrumento 1</th>
                                    <th style="text-align: center; width: 130px !important;">Cual</th>
                                    <th style="text-align: center; width: 130px !important;">Excel instrumento 1</th>
                                    <th style="text-align: center; width: 130px !important;">Instrumento 2</th>
                                    <th style="text-align: center; width: 130px !important;">Cual</th>
                                    <th style="text-align: center; width: 130px !important;">Excel instrumento 2</th>
                                    <th style="text-align: center; width: 130px !important;">Documento</th>
                                    <th style="text-align: center; width: 130px !important;">Realizar <br> Observacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    while($fila = mysqli_fetch_array($result)){
                                ?>
                                <tr>
                                    <td style="text-align: center; width: 130px !important;"><?php echo $fila[1] ?></td>
                                    <td style="text-align: center; width: 130px !important;"><?php echo $fila[2] ?></td>
                                    <td style="text-align: center; width: 130px !important;"><?php echo $fila[3] ?></td>
                                    <td style="text-align: center; width: 130px !important;"><?php echo $fila[4] ?></td>
                                    <td style="text-align: center; width: 130px !important;"><?php echo $fila[5] ?></td>
                                    <td style="text-align: center; width: 130px !important;"><?php echo $fila[6] ?></td>
                                    <td style="text-align: center; width: 130px !important;"><?php echo $fila[7] ?></td>
                                    <td style="text-align: center; width: 130px !important;"><?php echo $fila[8] ?></td>
                                    <td style="text-align: center; width: 130px !important;"><?php echo $fila[9] ?></td>
                                    <td style="text-align: center; width: 130px !important;"><?php echo $fila[11] ?></strong></p></td>
                                    <td style="text-align: center; width: 130px !important;"><?php echo $fila[12] ?></td>
                                    <td style="text-align: center; width: 130px !important;">
                                        <?php
                                            if($fila[11] == "si"){
                                        ?>
                                            <a download href="<?php echo 'uploads/'.$fila[13] ?>"><u>Descargar</u></a>
                                        <?php
                                            }
                                        ?>
                                    </td>
                                    <td style="text-align: center; width: 130px !important;"><?php echo $fila[14] ?></strong></p></td>
                                    <td style="text-align: center; width: 130px !important;"><?php echo $fila[15] ?></td>
                                    <td style="text-align: center; width: 130px !important;">
                                        <?php
                                            if($fila[14] == "si"){
                                        ?>
                                            <a download href="<?php echo 'uploads/'.$fila[16] ?>"><u>Descargar</u></a>
                                        <?php
                                            }
                                        ?>
                                    </td>
                                    <td style="text-align: center; width: 130px !important;">
                                        <a download href="<?php echo 'uploads/'.$fila[10] ?>"><u>Descargar</u></a>
                                    </td>
                                    <td style="text-align: center; width: 130px !important;">
                                        <?php
                                            if($_SESSION["permiso_observaciones_practica"] == "1"){
                                        ?>
                                            <button onclick="asignar_valor('<?php echo $fila[4] ?>', <?php echo $fila[0] ?>)"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info"><i class='bx bx-message-dots'></i></button >
                                        <?php
                                            }
                                        ?>
                                        
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCenterTitle">Realizar Observación</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body p-2">
            <form id="observaciones_practica" method="post" action="../../php/realizar_observacion.php" enctype="multipart/form-data" >
                    <div class="modal-body">   
                            <div class="row">
                                <input type="hidden" id="id_practica" name="id_practica">               
                                <div class="col-lg-12">
                                    <label for="tema_practica">Tema: </label>
                                    <input disabled class="form-control" type="text" id="tema_practica" name="tema_practica">   
                                </div>              
                            </div>
                            <br>
                            <h2>Obervaciones: </h2>
                            <hr>
                            <div class="row">            
                                <div class="col-lg-12">
                                    <textarea style="width: 100%" name="observacion_practica" id="observacion_practica" rows="10"></textarea>  
                                </div>              
                            </div>
                            <hr>
                            <div class="row">        
                                <div class="col-lg-12">
                                    <label for="archivo_coregido">Archivo Corregido</label>
                                    <input type="file" id="archivo_coregido" name="archivo_coregido">
                                    <input type="hidden" class="form-control" value="<?php echo $_SESSION['id'] ?>" id="id_usuario" name="id_usuario">
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
        function asignar_valor(tema, id){
            document.getElementById("tema_practica").value = tema;
            document.getElementById("id_practica").value = id;
        }
    </script>
    <script>     
        $('#customers').DataTable({
            "scrollX": true,
            "ordering": false,
            "pageLength": 5,
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
        $( "#sub_pract" ).addClass( "open" );
        $( "#li_pr" ).addClass( "active" );
    </script>
  </body>
</html>
<?php
}else{  
  header('Location: ../index.php');
  exit();
}
?>