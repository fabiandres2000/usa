<?php
session_start();
include_once("../../conexion.php");
$ID = $_GET['id'];

$sql = "SELECT * FROM `sociodemografico` where id = $ID";
$result_socio =  mysqli_fetch_array($con->query($sql));

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
        #customers th, td {
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
            <div class="col-lg-12 p-4" style="padding-left: 5%; padding-right: 5%">
                <div class="card">
                    <div class="p-5">
                    <h1  style="color: #2c4a73; font-weight: bold">Detalle Caracterización Sociodemográfica</h1>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>Nombres y Apellidos</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[2] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6" style="padding-top: 15px;">
                                <label for="">Semestre Cursado</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[3] ?>">
                            </div>
                            <div class="col-lg-3" style="padding-top: 15px;">
                                <label for="">Tipo de Identificación</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[4] ?>">
                            </div>
                            <div class="col-lg-3" style="padding-top: 15px;">
                                <label for=""># identificación</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[5] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3" style="padding-top: 15px;">
                            <label for="">Edad</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[6] ?>">
                            </div>
                            <div class="col-lg-3" style="padding-top: 15px;">
                                <label for="">Sexo</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[7] ?>">
                            </div>
                            <div class="col-lg-3" style="padding-top: 15px;">
                                <label for="">Estrato socioeconómico</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[8] ?>">
                            </div>
                            <div class="col-lg-3" style="padding-top: 15px;">
                                <Label># de Celular</Label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[9] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4" style="padding-top: 15px;">
                                <label for="">Ciudad donde reside generalmente</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[10] ?>">
                            </div>
                            <div class="col-lg-3" style="padding-top: 15px;">
                                <label for="">Cantidad de Hijos</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[11] ?>">
                            </div>
                            <div class="col-lg-5" style="padding-top: 15px;">
                                <label for="">Economicamente depende de</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[12] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3" style="padding-top: 15px;">
                                <label for="">Consume algún tipo de sustancia psicoactiva</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[13] ?>">
                            </div>
                            <div class="col-lg-5" style="padding-top: 15px;">
                                <label for="">Indique la frecuencia con la que consume sustancias psicoativas</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[14] ?>">
                            </div>
                            <div class="col-lg-4" style="padding-top: 15px;">
                                <label for="">Ha recibido tratamiento para el control de la adición</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[15] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6" style="padding-top: 15px;">
                                <label for="">Indique la cantidad de horas que labora semanalmente</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[16] ?>">
                            </div>
                            <div class="col-lg-6" style="padding-top: 15px;">
                                <label for="">Su universidad se encuentra en la ciudad de</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[17] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="padding-top: 15px;">
                                <label for="">Persona(s) con quien vive en la ciudad donde estudia</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[18] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6" style="padding-top: 15px;">
                                <label for="">Realiza usted alguna actividad física</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[19] ?>">
                            </div>
                            <div class="col-lg-6" style="padding-top: 15px;">
                                <label for="">Intensidad de la actividad física (aproximadamente)</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[20] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="padding-top: 15px;">
                                <label for="">Señale las actvidades que más practica en su tiempo libre</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[21] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5" style="padding-top: 15px;">
                                <label for="">En época de clases, generalmente, cuántas horas duerme diariamente</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[22] ?>">
                            </div>
                            <div class="col-lg-4" style="padding-top: 15px;">
                                <label for="">Ha sido diagnosticado con algún tipo de enfermedad?</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[23] ?>">
                            </div>
                            <div class="col-lg-3" style="padding-top: 15px;">
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[24] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="padding-top: 15px;">
                                <label for="">23.	Señale las comidas que consume con mayor frecuencia</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[25] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4" style="padding-top: 15px;">
                                <label for="">ICFES (puntaje)</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[26] ?>">
                            </div>
                            <div class="col-lg-4" style="padding-top: 15px;">
                                <label for="">Promedio académico</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[27] ?>">
                            </div>
                            <div class="col-lg-4" style="padding-top: 15px;">
                                <label for="">Fecha</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[28] ?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Información de la Madre</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4" style="padding-top: 15px;">
                                <label for="">Edad</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[29] ?>">
                            </div>
                            <div class="col-lg-4" style="padding-top: 15px;">
                                <label for="">Nivel de educación</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[30] ?>">
                            </div>
                            <div class="col-lg-4" style="padding-top: 15px;">
                                <label for="">Dedicación</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[31] ?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Información del Padre</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4" style="padding-top: 15px;">
                                <label for="">Edad</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[32] ?>">
                            </div>
                            <div class="col-lg-4" style="padding-top: 15px;">
                                <label for="">Nivel de educación</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[33] ?>">
                            </div>
                            <div class="col-lg-4" style="padding-top: 15px;">
                                <label for="">Dedicación</label>
                                <input type="text"  class="form-control" disabled value="<?php echo $result_socio[34] ?>">
                            </div>
                        </div>
                        <br>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="../../js/usuario.js"></script>
    <script src="../../js/practicas.js"></script>
  </body>
</html>
<?php
}else{  
  header('Location: ../index.php');
  exit();
}
?>