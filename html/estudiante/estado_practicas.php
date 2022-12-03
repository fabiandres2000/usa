<?php
session_start();
include_once("../../conexion.php");
$id_est = $_SESSION['id'];
$sql = "SELECT * FROM `practica` where id_estudiante = $id_est";
$result =  mysqli_fetch_array($con->query($sql));

$id_practica = $result[0];

$sql2 = "SELECT * FROM `observacion` where id_practica = $id_practica ORDER BY hora_observacion desc";
$observaciones =  $con->query($sql2);

$res = mysqli_num_rows($con->query($sql));

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
    <title>Universidad Sergio Arboleda - Estudiante</title>
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
    <script src="../../assets/vendor/js/helpers.js"></script>
    <script src="../../assets/js/config.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <style>
        th, td {
            text-align: center;
        }

        label {
            color: #2c4a73; font-weight: bold
        }

        #check {
            color: #606468;
        }
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php
          include("../component/menu_lateral_estudiante.php");
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
            <div class="col-lg-12 p-4" style="padding-left: 5%; padding-right: 5%">
                <div class="card">
                  <div class="p-5">
                    <?php 
                        if($res == 1){
                    ?>
                        <h1 style="color: #2c4a73; font-weight: bold">Detalle de la Prtactica Registrada</h1>
                        <hr> 
                        <form action="../../php/editar_practicas.php" method="post" id="editar_practica_form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="">Nombres y Apellidos</label>
                                    <input value="<?php echo $result[0] ?>" type="hidden"  class="form-control" id="id_practica" name="id_practica">
                                    <input value="<?php echo $result[1] ?>" type="text"  class="form-control" id="nombre" name="nombre">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">Semestre</label>
                                    <select  style="height: 34px;" name="semestre" id="semestre" class="form-control">
                                        <option value="">Semestre</option>
                                        <option value="I" <?php if ($result[2] == 'I') echo 'selected'; ?> >I Semestre</option>
                                        <option value="II" <?php if ($result[2] == 'II') echo 'selected'; ?>>II Semestre</option>
                                        <option value="III" <?php if ($result[2] == 'III') echo 'selected'; ?>>III Semestre</option>
                                        <option value="IV" <?php if ($result[2] == 'IV') echo 'selected'; ?>>IV Semestre</option>
                                        <option value="V" <?php if ($result[2] == 'V') echo 'selected'; ?>>V Semestre</option>
                                        <option value="VI" <?php if ($result[2] == 'VI') echo 'selected'; ?>>VI Semestre</option>
                                        <option value="VII" <?php if ($result[2] == 'VII') echo 'selected'; ?>>VII Semestre</option>
                                        <option value="VIII" <?php if ($result[2] == 'VIII') echo 'selected'; ?>>VIII Semestre</option>
                                        <option value="IX" <?php if ($result[2] == 'IX') echo 'selected'; ?>>IX Semestre</option>
                                        <option value="X"<?php if ($result[2] == 'X') echo 'selected'; ?> >X Semestre</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Fecha</label>
                                    <select  style="height: 34px;" name="periodo" id="periodo" class="form-control">
                                        <option value="">Fecha</option>
                                        <option value="2021-1" <?php if ($result[3] == '2021-1') echo 'selected'; ?> >2021-1</option>
                                        <option value="2021-2" <?php if ($result[3] == '2021-2') echo 'selected'; ?> >2021-2</option>
                                        <option value="2022-1" <?php if ($result[3] == '2022-1') echo 'selected'; ?> >2022-1</option>
                                        <option value="2022-2" <?php if ($result[3] == '2022-2') echo 'selected'; ?> >2022-2</option>
                                        <option value="2023-1" <?php if ($result[3] == '2023-1') echo 'selected'; ?> >2023-1</option>
                                        <option value="2023-2" <?php if ($result[3] == '2023-2') echo 'selected'; ?> >2023-2</option>
                                        <option value="2024-1" <?php if ($result[3] == '2024-1') echo 'selected'; ?> >2024-1</option>
                                        <option value="2024-2" <?php if ($result[3] == '2024-2') echo 'selected'; ?> >2024-2</option>
                                        <option value="2025-1" <?php if ($result[3] == '2025-1') echo 'selected'; ?> >2025-1</option>
                                        <option value="2025-2" <?php if ($result[3] == '2025-2') echo 'selected'; ?> >2025-2</option>
                                        <option value="2026-1" <?php if ($result[3] == '2026-1') echo 'selected'; ?> >2026-1</option>
                                        <option value="2026-2" <?php if ($result[3] == '2026-2') echo 'selected'; ?> >2026-2</option>
                                        <option value="2027-1" <?php if ($result[3] == '2027-1') echo 'selected'; ?> >2027-1</option>
                                        <option value="2027-2" <?php if ($result[3] == '2027-2') echo 'selected'; ?> >2027-2</option>
                                        <option value="2028-1" <?php if ($result[3] == '2028-1') echo 'selected'; ?> >2028-1</option>
                                        <option value="2028-2" <?php if ($result[3] == '2028-2') echo 'selected'; ?> >2028-2</option>
                                        <option value="2029-1" <?php if ($result[3] == '2029-1') echo 'selected'; ?> >2029-1</option>
                                        <option value="2029-2" <?php if ($result[3] == '2029-2') echo 'selected'; ?> >2029-2</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="">Tema de la Practica</label>
                                    <input value="<?php echo $result[4] ?>" type="text"  class="form-control" id="tema" name="tema">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="">Sitio de la practica</label>
                                    <input value="<?php echo $result[5] ?>" type="text"  class="form-control" id="sitio" name="sitio">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="">Tutor Sitio de Practica</label>
                                <div class="col-lg-12">
                                    <input value="<?php echo $result[6] ?>" type="text"  class="form-control" id="tutor_sitio" name="tutor_sitio">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="">Valoración del Tutor Sitio de Practica</label>
                                <div class="col-lg-12">
                                    <input value="<?php echo $result[7] ?>" type="text"  class="form-control" id="valoracion_sitio" name="valoracion_sitio">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="">Tutor Universidad Sergio Arboleda</label>
                                <div class="col-lg-12">
                                    <input value="<?php echo $result[8] ?>" type="text"  class="form-control" id="tutor_usa" name="tutor_usa">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label for="">Valoración del Tutor Universidad Sergio Arboleda</label>
                                <div class="col-lg-12">
                                    <input value="<?php echo $result[9] ?>" type="text"  class="form-control" id="valoracion_usa" name="valoracion_usa">
                                </div>
                            </div>
                            <br>
                            <div class="form-group" style="color: #6c757d">
                                <label for="isProductDiscounted" class="text-uppercase font-weight-bold">Aplico Instrumento 1?</label>
                                <br><br>
                                <div class="row" >
                                    <div class="col-lg-4">
                                        <label for="si_ins_1" class="text-left">
                                            <input <?php echo ($result[11]=='si')?'checked':'' ?> style="margin-top: 0px" id="si_ins_1" class="form-check-input" name="ins_1" type="radio" value = "si"> Si
                                        </label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="no_ins_1">
                                            <input <?php echo ($result[11]=='no')?'checked':'' ?> style="margin-top: 0px" id="no_ins_1" class="form-check-input" name="ins_1" type="radio" value = "no"> No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input <?php echo ($result[11]=='no')?'disabled':'' ?> value="<?php echo $result[12] ?>" type="text"  class="form-control" id="cual_ins_1" name="cual_ins_1">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="excel_1_e">Archivo (Excel)</label>
                                    <input <?php echo ($result[11]=='no')?'disabled':'' ?> type="file" accept=".xlsx" class="form-control" id="excel_1_e" name="excel_1_e">
                                    <?php
                                        if($result[13] != ""){
                                    ?> 
                                        <a style="color:red" download href="<?php echo 'uploads/'.$result[13] ?>"><u>Descargar Archivo Cargado</u></a>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <br>
                            <div class="form-group" style="color: #6c757d">
                                <label for="isProductDiscounted" class="text-uppercase font-weight-bold">Aplico Instrumento 2?</label>
                                <br>
                                <br>
                                <div class="row" >
                                    <div class="col-lg-4">
                                        <label for="si_ins_2" class="text-left">
                                            <input <?php echo ($result[14]=='si')?'checked':'' ?> style="margin-top: 0px" id="si_ins_2" class="form-check-input" name="ins_2" type="radio" value = "si"> Si
                                        </label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="no_ins_1">
                                            <input <?php echo ($result[14]=='no')?'checked':'' ?> style="margin-top: 0px" id="no_ins_2" class="form-check-input" name="ins_2" type="radio" value = "no"> No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input <?php echo ($result[14]=='no')?'disabled':'' ?> value="<?php echo $result[15] ?>" type="text"  class="form-control" id="cual_ins_2" name="cual_ins_2">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="excel_2_e">Archivo (Excel)</label>
                                    <input <?php echo ($result[14]=='no')?'disabled':'' ?> type="file" accept=".xlsx" class="form-control" id="excel_2_e" name="excel_2_e">
                                    <?php
                                        if($result[16] != ""){
                                    ?>
                                        <a style="color:red" download href="<?php echo 'uploads/'.$result[16] ?>"><u>Descargar Archivo Cargado</u></a>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="proyecto_e">Archivo (Practicas - PDF o DOCX)</label>
                                    <input type="file" accept=".pdf, .docx" class="form-control" id="proyecto_e" name="proyecto_e">
                                    <a style="color:red" download href="<?php echo 'uploads/'.$result[10] ?>"><u>Descargar Archivo Cargado</u></a>
                                    <input type="hidden" class="form-control" value="<?php echo $_SESSION['id'] ?>" id="id_estudiante" name="id_estudiante">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4 text-center">
                                    <a data-bs-toggle="modal" data-bs-target="#modal_obs" style="width: 100%; color: white" class="btn btn-info"><i class="fa fa-commenting" aria-hidden="true"></i> Ver Observaciones</a>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <button type="submit" style="width: 100%" class="btn btn-success"><i class="fa fa-save" aria-hidden="true"></i> Editar Información </button>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <a style="width: 100%; color: white" class="btn btn-danger"><i class="fa fa-close" aria-hidden="true"></i> Cancelar</a>
                                </div>
                            </div>
                        </form>
                    <?php 
                        }else{
                    ?>
                        <div style="width: 100%; height: 200px;" class="alert alert-danger text-center">
                            <h1>!Atención!</h1>
                            <hr>
                            <h2>Usted no ha realizado el proceso de registro de practica academica.</h2>
                            <a href="registro_practica.php">Ver Detalle</a>
                        </div>
                    <?php 
                        }
                    ?>
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
     <div class="modal fade" id="modal_obs" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 83rem;">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body p-2">
            <h1 style="color: #2c4a73; font-weight: bold">Observaciones</h1>
            <hr>
            <table id="customers">
                <thead>
                    <tr>
                        <th style="text-align: center; width: 50px !important;">Fecha</th>
                        <th style="text-align: center; width: 50px !important;">Hora</th>
                        <th style="text-align: center; width: 130px !important;">Observacion</th>
                        <th style="text-align: center; width: 50px !important;">Documento Corregido</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($fila = mysqli_fetch_array($observaciones)){
                    ?>
                    <tr>
                        <td style="text-align: center; width: 50px !important;"><?php echo $fila[4] ?></td>
                        <td style="text-align: center; width: 50px !important;"><?php echo $fila[5] ?></td>
                        <td style="text-align: center; width: 130px !important;"><?php echo $fila[2] ?></td>
                        <td style="text-align: center; width: 50px !important;">
                            <?php
                                if($fila[3] != ""){
                            ?>
                                <a download href="<?php echo 'correcciones/'.$fila[3] ?>"><u>Descargar</u></a>
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
    <script src="../../js/practicas.js"></script>
    <script src="../../js/verificar_paso_test.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $('#customers').DataTable({
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
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
        });
    </script>
    <script type="text/javascript">
        var si_ins_1 = document.getElementById('si_ins_1');
        var no_ins_1 = document.getElementById('no_ins_1');
        var cual_ins_1 = document.getElementById('cual_ins_1');
        var excel_1 = document.getElementById('excel_1_e');

        function updateStatus() {
            if (! si_ins_1.checked) {
                cual_ins_1.disabled = true;
                excel_1.disabled = true;
            } else {
                cual_ins_1.disabled = false;
                excel_1.disabled = false;
            }
        }

        si_ins_1.addEventListener('change', updateStatus)
        no_ins_1.addEventListener('change', updateStatus)



        var si_ins_2 = document.getElementById('si_ins_2');
        var no_ins_2 = document.getElementById('no_ins_2');
        var cual_ins_2 = document.getElementById('cual_ins_2');
        var excel_2 = document.getElementById('excel_2_e');

        function updateStatus2() {
            if (! si_ins_2.checked) {
                cual_ins_2.disabled = true;
                excel_2.disabled = true;
            } else {
                cual_ins_2.disabled = false;
                excel_2.disabled = false;
            }
        }

        si_ins_2.addEventListener('change', updateStatus2)
        no_ins_2.addEventListener('change', updateStatus2)
    </script>
    <script>
        $( "#sub_practica" ).addClass( "open" );
        $( "#li_ep" ).addClass( "active" );
    </script>
  </body>
</html>
<?php
}else{  
  header('Location: ../index.php');
  exit();
}
?>