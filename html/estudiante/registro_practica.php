<?php
session_start();
include_once("../../conexion.php");
$id_est = $_SESSION['id'];
$sql = "SELECT * FROM `practica` where id_estudiante = $id_est";
$result =  $con->query($sql);

$res = $result->num_rows;
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
    <style>
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
                        if($res == 0){
                    ?>
                        <h1 style="color: #2c4a73; font-weight: bold">Registro de Practicas</h1>
                        <hr>
                        <form enctype="multipart/form-data" action="../../php/registro_practicas.php" method="post" id="form_registro_practica">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="">Nombres y Apellidos</label>
                                    <input required placeholder="Nombres y Apellidos" type="text"  class="form-control" id="nombre" name="nombre">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">Semestre</label>
                                    <select required style="height: 34px;" name="semestre" id="semestre" class="form-control">
                                        <option value="">Semestre</option>
                                        <option value="I">I Semestre</option>
                                        <option value="II">II Semestre</option>
                                        <option value="III">III Semestre</option>
                                        <option value="IV">IV Semestre</option>
                                        <option value="V">V Semestre</option>
                                        <option value="VI">VI Semestre</option>
                                        <option value="VII">VII Semestre</option>
                                        <option value="VIII">VIII Semestre</option>
                                        <option value="IX">IX Semestre</option>
                                        <option value="X">X Semestre</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Fecha</label>
                                    <select required style="height: 34px;" name="periodo" id="periodo" class="form-control">
                                        <option value="">Fecha</option>
                                        <option value="2021-1">2021-1</option>
                                        <option value="2021-2">2021-2</option>
                                        <option value="2022-1">2022-1</option>
                                        <option value="2022-2">2022-2</option>
                                        <option value="2023-1">2023-1</option>
                                        <option value="2023-2">2023-2</option>
                                        <option value="2024-1">2024-1</option>
                                        <option value="2024-2">2024-2</option>
                                        <option value="2025-1">2025-1</option>
                                        <option value="2025-2">2025-2</option>
                                        <option value="2026-1">2026-1</option>
                                        <option value="2026-2">2026-2</option>
                                        <option value="2027-1">2027-1</option>
                                        <option value="2027-2">2027-2</option>
                                        <option value="2028-1">2028-1</option>
                                        <option value="2028-2">2028-2</option>
                                        <option value="2029-1">2029-1</option>
                                        <option value="2029-2">2029-2</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="">Tema de la Practica</label>
                                    <input required placeholder="Tema de la Practica" type="text"  class="form-control" id="tema" name="tema">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="">Sitio de la practica</label>
                                    <input required placeholder="Sitio de la practica" type="text"  class="form-control" id="sitio" name="sitio">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="">Tutor Sitio de Practica</label>
                                    <input required placeholder="Tutor Sitio de Practica" type="text"  class="form-control" id="tutor_sitio" name="tutor_sitio">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="">Valoración del Tutor Sitio de Practica</label>
                                    <input required placeholder="Valoración del Tutor Sitio de Practica" type="text"  class="form-control" id="valoracion_sitio" name="valoracion_sitio">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="">Tutor Universidad Sergio Arboleda</label>
                                    <input required placeholder="Tutor Universidad Sergio Arboleda" type="text"  class="form-control" id="tutor_usa" name="tutor_usa">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="">Valoración del Tutor Universidad Sergio Arboleda</label>
                                    <input required placeholder="Valoración del Tutor Universidad Sergio Arboleda" type="text"  class="form-control" id="valoracion_usa" name="valoracion_usa">
                                </div>
                            </div>
                            <br>
                            <div class="form-group" style="color: #6c757d">
                                <label for="isProductDiscounted" class="text-uppercase font-weight-bold">Aplico Instrumento 1?</label>
                                <br>
                                <br>
                                <div class="row" >
                                    <div class="col-lg-4">
                                        <label for="si_ins_1" class="text-left">
                                            <input style="margin-top: 0px" id="si_ins_1" class="form-check-input" name="ins_1" type="radio" value = "si"> Si
                                        </label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="no_ins_1">
                                            <input style="margin-top: 0px" id="no_ins_1" class="form-check-input" name="ins_1" type="radio" value = "no"> No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input placeholder="Cual?" type="text" disabled  class="form-control" id="cual_ins_1" name="cual_ins_1">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="excel_1_R">Subir archivo (Excel)</label>
                                    <input type="file" accept=".xlsx" disabled class="form-control" id="excel_1_R" name="excel_1_R">
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
                                            <input style="margin-top: 0px" id="si_ins_2" class="form-check-input" name="ins_2" type="radio" value = "si"> Si
                                        </label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="no_ins_1">
                                            <input style="margin-top: 0px" id="no_ins_2" class="form-check-input" name="ins_2" type="radio" value = "no"> No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input placeholder="Cual?" type="text" disabled  class="form-control" id="cual_ins_2" name="cual_ins_2">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="excel_2_R">Subir archivo (Excel)</label>
                                    <input type="file" accept=".xlsx" disabled class="form-control" id="excel_2_R" name="excel_2_R">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="proyecto">Subir archivo (Practicas - PDF o DOCX)</label>
                                    <input required type="file" accept=".pdf, .docx" class="form-control" id="proyecto" name="proyecto">
                                    <input type="hidden" class="form-control" value="<?php echo $_SESSION['id'] ?>" id="id_estudiante" name="id_estudiante">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <button style="width: 100%" type="submit" class="btn btn-success"><i class="fa fa-save" aria-hidden="true"></i> Guardar </button>
                                </div>
                            </div>
                        </form>
                    <?php 
                        }else{
                    ?>
                        <div style="width: 100%; height: 200px;" class="alert alert-success text-center">
                            <h1>!Atención!</h1>
                            <hr>
                            <h2>Ya usted realizo el proceso de registro de practica academica.</h2>
                            <a href="estado_practicas.php">Ver Detalle</a>
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
    
    <script type="text/javascript">
        
        
        function updateStatus() {
            var si_ins_1 = document.getElementById('si_ins_1');
            var no_ins_1 = document.getElementById('no_ins_1');
            var cual_ins_1 = document.getElementById('cual_ins_1');
            var excel_1 = document.getElementById('excel_1_R');

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
    

        function updateStatus2() {
            var si_ins_2 = document.getElementById('si_ins_2');
            var no_ins_2 = document.getElementById('no_ins_2');
            var cual_ins_2 = document.getElementById('cual_ins_2');
            var excel_2 = document.getElementById('excel_2_R');

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
        $( "#li_rp" ).addClass( "active" );
    </script>
  </body>
</html>
<?php
}else{  
  header('Location: ../index.php');
  exit();
}
?>