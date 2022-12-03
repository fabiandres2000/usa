<?php
    session_start();
    include_once("../../conexion.php");
    $correo = $_GET["correo"];
    $nombre = $_GET["nombre"];

    //ver por cual paso va
    $sql = "SELECT * FROM `test_respuestas` WHERE `correo`='$correo'";
    $result = $con->query($sql);
    $fila = mysqli_fetch_array($result);
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
    <link rel="stylesheet" href="../../css/table.css">
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
                    <div class="container" style="margin-top: 10px">	
                        <div class="row">
                            <div class="col-9">
                                <h3><span span class="theme_color">Bienvenido(a): <?php echo $nombre ?></span></h3>
                            </div>
                            <div class="col-3" style="text-align: right">
                            
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <h5 style="font-size: 21px; text-align: justify;">Este cuestionario consta de 240 afirmaciones en referencia a su forma de ser o comportarse. Por favor, lea cada frase con atención. Debe indicar su grado de acuerdo en la hoja de respuestas según el siguiente código:</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <table id="customers">
                                    <thead>
                                        <tr>
                                            <th>1. Total desacuerdo</th>
                                            <th>2. Desacuerdo</th>
                                            <th>3. Neutral</th>
                                            <th>4. De acuerdo</th>
                                            <th>5. Totalmente de acuerdo</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <h5 style="font-size: 20px; text-align: justify;">
                                No hay respuestas correctas ni incorrectas, y no se necesita ser un experto para contestar a este cuestionario. Conteste de forma sincera y exprese sus opiniones de la manera más precisa posible. Intente trabajar deprisa y no se entretenga demasiado en la respuesta. No deje NINGUNA respuesta en blanco. 
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- section -->
                    <div class="section tabbar_menu" style="margin-top: 30px; margin-bottom: 10px;">
                        <div class="container">
                            <?php 
                                if($fila[41] == "" && $fila[82] == "" && $fila[123] == "" && $fila[164] == "" && $fila[205] == "" && $fila[246] == "" ) {
                            ?>
                            <form action="../../php/guardar_respuestas.php?paso=paso_1&correo=<?php echo $correo ?>" method="post" id="paso_1">
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="tab_menu">
                                                <div class="container">
                                                    <table id="customers">
                                                        <thead>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1.  No soy una persona que se preocupe mucho.</td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2.  La mayoría de la gente que conozco me cae muy simpática.</td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3.  Tengo una imaginación muy activa.</td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4.  Tiendo a ser cínico y escéptico respecto a las intenciones de los demás.</td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>5.  Se me conoce por mi prudencia y sentido común.</td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>6.  Con frecuencia me irrita la forma en que me trata la gente.</td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>7.  Huyo de las multitudes.</td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>8.  Los aspectos estéticos y artísticos no son muy importantes para él.</td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>9.  No soy astuto ni disimulador.</td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>10.  Prefiere dejar abiertas posibilidades más que planificarme todo de antemano.</td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>11.  Rara vez me siento solo o triste.</td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>12.  Soy dominante, enérgico y defiendo mis opiniones.</td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>13.  Sin emociones fuertes la vida carecería de interés para mí.</td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>14.  Algunas personas creen que soy egoísta y egocéntrico.</td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>15.  Trato de realizar concienzudamente todas las cosas que se me encomiendan. </td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>16.  Al tratar con los demás siempre temo hacer una patochada.</td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>17.  Tanto en el trabajo como en la diversión tengo un estilo pausado. </td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>18.  Tengo unas costumbres y opiniones bastante arraigadas. </td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>19.  Preferiría cooperar con los demás a competir con ellos.</td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>20.  No me enfado por nada, soy un poco pasota. </td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>21.  Rara vez me excedo en algo.</td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>22.  A menudo anhelo tener experiencias emocionantes. </td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>23.  Con frecuencia disfruto jugando con teorías o ideas abstractas. </td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>24.  No me importa hacer alarde de mis talentos y logros. </td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>25.  Soy bastante bueno en organizarme para terminar las cosas a tiempo. </td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>26.  Con frecuencia me siento indefenso y quiero que otro resuelva mis problemas</td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>27.  Literalmente, nunca he saltado de alegría.</td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>28.  Considero que dejar que los jóvenes oigan a personas cuyas opiniones son polémicas sólo puede confundirles o equivocarles. </td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>29.  Los líderes políticos deberían ser más conscientes del lado humano de sus programas</td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>30.  He hecho bastantes tonterías a lo largo de mi vida</td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>31.  Me asusto con facilidad.</td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>32.  No me gusta mucho charlar con la gente.</td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>33.  Intentó que todos mis pensamientos sean realistas y no dejar que vuele la imaginación. </td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>33.  Intentó que todos mis pensamientos sean realistas y no dejar que vuele la imaginación. </td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>35.  No me tomo muy en serio mis deberes cívicos, como ir a votar. </td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>36.  Soy una persona apacible.</td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>37.  Me gusta tener mucha gente alrededor. </td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>38.  A veces me quedo totalmente absorto en la música que escucho. </td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>39.  Si es necesario, estoy dispuesto a manipular a la gente para conseguir lo que quiero. </td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>40.  Tengo mis cosas bien cuidadas y limpias</td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="4"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 30px">			
                                        <div class="col-3"></div>
                                        <div class="col-6" style="text-align:center" >
                                            <button style="width: 100%; color: white" type="submit"  class="btn btn-success">Siguiente</button>
                                        </div>
                                        <div class="col-3"></div>	
                                    </div>
                            </form>
                            <?php } ?>
                            <?php 
                                if($fila[41] != "" && $fila[82] == "" && $fila[123] == "" && $fila[164] == "" && $fila[205] == "" && $fila[246] == "" ) {
                            ?>
                            <form action="../../php/guardar_respuestas.php?paso=paso_2&correo=<?php echo $correo ?>" method="post" id="paso_2">
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="tab_menu">
                                                <div class="container">
                                                    <table id="customers">
                                                        <thead>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>41.  A veces me parece que no valgo absolutamente nada</td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>42.  A veces no soy capaz de defender mis opiniones todo lo que debiera.</td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>43.  Rara vez experimento emociones fuertes.</td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>44.  Trato de ser cortés con todo el que conozco. </td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>45.  A veces no soy tan formal y fiable como debiera. </td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>46.  Rara vez me siento cohibido cuando estoy con gente. </td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>47.  Cuando hago cosas, las hago con energía.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>48.  Creo que es interesante aprender y desarrollar nuevas aficiones.</td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>49.  Puedo ser sarcástico y mordaz si es necesario.</td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>50.  Tengo unos objetivos claros y me esfuerzo por alcanzarlos de forma ordenada. </td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>51.  Me cuesta resistirme a mis deseos.</td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>52.  No me gustaría pasar las vacaciones en los centros de juego de Las Vegas.</td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>53.  Encuentro aburridas las discusiones filosóficas.</td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>54.  Prefiero no hablar de mis éxitos o de mi mismo. </td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>55.  Pierdo mucho tiempo hasta que me pongo a trabajar.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>56.  Creo que soy capaz de enfrentarme a la mayoría de mis problemas. </td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>57.  A veces he experimentado una gran alegría o arrebato.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>58.  Considero que las leyes y normas sociales deberían cambiar para reflejar las necesidades de un  mundo cambiante. </td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>59.  Soy duro y poco sentimental en mis actitudes. </td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>60.  Pienso muy bien las cosas antes de tomar una decisión. </td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>61.  Rara vez me siento con miedo o ansioso.</td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>62.  Se me conoce como una persona cálida y cordial.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>63.  Tengo mucha fantasía. </td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>64.  Creo que la mayoría de la gente se aprovecharía de uno si se le dejara.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>65.  Me mantengo informado y por lo general tomo decisiones inteligentes.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>66.  Me consideran colérico y de genio vivo. </td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>67.  En general prefiero hacer las cosas sólo.</td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>68.  Me aburre el ballet clásico o danza moderna. </td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>69.  Aunque quisiera, no podría engañar a nadie.</td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>70.  No soy una persona muy metódica.</td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>71.  Rara vez estoy triste o deprimido.</td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>72.  A menudo he sido un líder en los grupos en que he estado.</td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>73.  Cómo siento sobre las cosas es algo importante para mí.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>74.  Algunas personas piensan de mí que soy frío y calculador. </td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>75.  Pago mis deudas puntualmente y en su totalidad.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>76.  En ocasiones he estado tan avergonzado que he querido esconderme. </td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>77.  Probablemente mi trabajo sea lento pero constante.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>78.  Cuando encuentro la manera de hacer algo, me aferro a ella. </td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>79.  Me resulta difícil expresar rabia, aunque lleve razón </td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>80. Cuando empiezo un programa para mejorar algo mío, lo habitual es que lo abandone a los pocos días.</td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="4"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="margin-top: 30px">			
                                        <div class="col-3"></div>
                                        <div class="col-6" style="text-align:center" >
                                            <button style="width: 100%; color: white" type="submit"  class="btn btn-success">Siguiente</button>
                                        </div>
                                        <div class="col-3"></div>	
                                    </div>
                            </form>
                            <?php } ?>
                            <?php 
                                if($fila[41] != "" && $fila[82] != "" && $fila[123] == "" && $fila[164] == "" && $fila[205] == "" && $fila[246] == "" ) {
                            ?>
                            <form action="../../php/guardar_respuestas.php?paso=paso_3&correo=<?php echo $correo ?>" method="post" id="paso_3">
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="tab_menu">
                                                <div class="container">
                                                    <table id="customers">
                                                        <thead>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>81.  Me cuesta poco resistir a una tentación.</td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>82.  A veces he hecho cosas por mera excitación, buscando emociones.</td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>83.  Disfruto resolviendo problemas o rompecabezas.</td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>84.  Soy mejor que la mayoría de la gente, y estoy seguro de ello. </td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>85.  Soy una persona productiva, que siempre termina su trabajo.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>86.  Cuando estoy bajo un fuerte estrés, a veces siento que me voy a desmoronar.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>87.  No soy un alegre optimista.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>88. Considero que deberíamos contar con las autoridades religiosas para tomar decisiones sobre cuestiones morales. </td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>89.  Hagamos lo que hagamos por los pobres y los ancianos, nunca será demasiado. </td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>90.  En ocasiones primero actúo y luego pienso.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>91.  A menudo me siento tenso e inquieto. </td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>92.  Mucha gente cree que soy algo frío y distante.</td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>93.  No me gusta perder el tiempo soñando despierto.</td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>94.  Creo que la mayoría de la gente con la que trato es honrada y fidedigna.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>95.  Muchas veces no preparo de antemano lo que tengo que hacer.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>96.  No se me considera una persona quisquillosa o de mal genio.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>97.  Si estoy solo mucho tiempo, siento mucha necesidad de la gente.    </td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>98.  Me despiertan la curiosidad las formas que encuentro en el arte y en la naturaleza.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>  99.  Ser absolutamente honrado no es bueno para los negocios. </td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>100.  Me gusta tener cada cosa en su sitio, de forma que sepa exactamente dónde está.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>101.  A veces he sentido una sensación profunda de culpa o pecado.</td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>102.  En reuniones, por lo general prefiero que hablen otros.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>103.  Rara vez pongo mucha atención en mis sentimientos del momento.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>104.  Por lo general trato de pensar en los demás y ser considerado.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>105.  A veces hago trampas cuando me entretengo con juegos solitarios. </td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>106.  No me avergüenzo mucho si la gente se ríe de mí y me toma el pelo.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>107.  A menudo siento como si estuviera explotando de energía. </td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>108.  Con frecuencia pruebo comidas nuevas o de otros países. </td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>109.  Si alguien no me cae simpático, se lo digo.</td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>110.  Trabajo mucho para conseguir mis metas.</td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>111.  Cuando como las comidas que más me gustan, tiendo a comer demasiado. </td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>112.  Tiendo a evitar las películas demasiado violentas o terroríficas.</td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>113.  A veces pierdo el interés cuando la gente habla de cuestiones muy abstractas y teóricas.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>114.  Trato de ser humilde. </td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>115.  Me cuesta forzarme a hacer lo que tengo que hacer. </td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>116.  En situaciones de emergencia mantengo la cabeza fría. </td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>117.  A veces reboso felicidad.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>118. En mi opinión, las distintas ideas sobre lo que está bien y lo que está mal que tienen otras sociedades pueden ser válidas para ellas.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>119.  Los mendigos no me inspiran simpatía.</td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>120.  Antes de emprender una acción, siempre considero sus consecuencias.</td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="4"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 30px">			
                                        <div class="col-3"></div>
                                        <div class="col-6" style="text-align:center" >
                                            <button style="width: 100%; color: white" type="submit"  class="btn btn-success">Siguiente</button>
                                        </div>
                                        <div class="col-3"></div>	
                                    </div>
                            </form>
                            <?php } ?>
                            <?php 
                                if($fila[41] != "" && $fila[82] != "" && $fila[123] != "" && $fila[164] == "" && $fila[205] == "" && $fila[246] == "" ) {
                            ?>
                            <form action="../../php/guardar_respuestas.php?paso=paso_4&correo=<?php echo $correo ?>" method="post" id="paso_4">
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="tab_menu">
                                                <div class="container">
                                                    <table id="customers">
                                                        <thead>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>121.  Rara vez me inquieta el futuro. </td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>122.	Disfruto mucho hablando con la gente. </td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>123. Me gusta concentrarme en un ensueño o fantasía y, dejándolo crecer y desarrollarse, explorar todas sus posibilidades.</td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>124.  Cuando alguien es agradable conmigo, me entran recelos.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>125.  Estoy orgulloso de mi sensatez.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>126.  Con frecuencia acabo sintiéndome a disgusto con las personas con las que tengo que tratar.    </td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>127.  Prefiero los trabajos que me permiten trabajar solo, sin que me molesten los demás.    </td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>128.  La poesía tiene poco o ningún efecto sobre mí.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>129.  Detestaría que alguien pensara de mí que soy un hipócrita.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>130.  Parece que nunca soy capaz de organizarme.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>131.  Cuando algo va mal, tiendo a culpabilizarme.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>132.  Con frecuencia, los demás cuentan conmigo para tomar decisiones..</td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>133.  Experimento una gran variedad de emociones o sentimientos.</td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>134.  No se me conoce por mi generosidad.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>135.  Cuando me comprometo a algo, siempre se puede contar conmigo para llevarlo a término.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>136.  A menudo me siento inferior a los demás.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>137.  No soy tan vivo ni tan animado como otras personas.    </td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>138.  Prefiero pasar el tiempo en ambientes conocidos.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>139.  Cuando me han ofendido, lo que intento es perdonar y olvidar </td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>140.  No me siento impulsado a conseguir el éxito.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>141.  Rara vez cedo a mis impulsos momentáneos. </td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>142.  Me gusta estar donde está la acción. </td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>143.  Me gusta hacer rompecabezas de los que te cuesta bastante resolverlos.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>144.  Tengo una opinión muy alta de mí mismo.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>145.  Cuando empiezo un proyecto, casi siempre lo termino.</td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>146.  Con frecuencia me resulta difícil decidirme.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>147.  No me considero especialmente alegre. </td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>148. Considero que la fidelidad a los propios ideales y principios es más importante que tener una mentalidad abierta.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>149.  Las necesidades humanas deberían estar siempre por delante de consideraciones económicas.</td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>150.  A menudo hago cosas siguiendo el impulso del momento. </td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>151.  Me preocupo con frecuencia por cosas que podrían salir mal.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>152.  Me resulta fácil sonreír y ser abierto con desconocidos. </td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>153.  Si noto que mi mente comienza a divagar y a soñar, generalmente me ocupo en algo y empiezo a concentrarme en una tarea o actividad alternativa.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>154.  Mi primera reacción es confiar en la gente. </td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>155.  No parece que haya tenido éxito completo en algo.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>156.  Es difícil que yo pierda los estribos. </td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>157. Preferiría pasar las vacaciones en una playa muy frecuentada que en una cabaña aislada en el bosque.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>158.  Ciertos tipos de música me producen una fascinación sin límites.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>159.  A veces consigo con artimañas que la gente haga lo que yo quiero. </td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>160.  Tiendo a ser algo quisquilloso en el orden. </td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="4"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 30px">			
                                        <div class="col-3"></div>
                                        <div class="col-6" style="text-align:center" >
                                            <button style="width: 100%; color: white" type="submit"  class="btn btn-success">Siguiente</button>
                                        </div>
                                        <div class="col-3"></div>	
                                    </div>
                            </form>
                            <?php } ?>
                            <?php 
                                if($fila[41] != "" && $fila[82] != "" && $fila[123] != "" && $fila[164] != "" && $fila[205] == "" && $fila[246] == "" ) {
                            ?>
                            <form action="../../php/guardar_respuestas.php?paso=paso_5&correo=<?php echo $correo ?>" method="post" id="paso_5">
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="tab_menu">
                                                <div class="container">
                                                    <table id="customers">
                                                        <thead>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>161.  Tengo una baja opinión de mí mismo. </td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>162.  Preferiría ir a mi aire a ser el líder de otros.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>163.  Rara vez me doy cuenta del humor o de las emociones que existen en cada ambiente. </td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>164.  A la mayoría de las personas que conozco les caigo simpático.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>165.  Me atengo de forma estricta a mis principios éticos.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>166.	Me siento a gusto en presencia de mis jefes u otras figuras de autoridad.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>167.  Habitualmente me parece tener prisa.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>168.  A veces hago cambios en la casa sólo para probar algo diferente.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>169.  Si alguien empieza a pelearse conmigo, yo también estoy dispuesto a pelear.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>170.  Me esfuerzo por conseguir aquello para lo que estoy capacitado.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>171.  A veces como tanto que me pongo malo </td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>172.  Adoro la excitación de las montañas rusas en los parques de atracciones. </td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>173.  Tengo poco interés en andar pensando sobre la naturaleza del universo o de la condición humana.</td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>174.  Pienso que no soy mejor que los demás, independientemente de cuál sea su condición.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>175.  Cuando un proyecto se pone demasiado difícil, me siento inclinado a empezar uno nuevo.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>176.  Puedo comportarme bastante bien en una crisis.    </td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>177.  Soy una persona alegre y animosa.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>178.  Me considero de mentalidad abierta y tolerante con los estilos de los demás.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>179.  Creo que todos los seres humanos merecen respeto. </td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>180.  Casi nunca tomo decisiones precipitadas.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>181.  Tengo menos miedos que la mayoría de la gente.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>182.  Tengo unos fuertes lazos emocionales con mis amigos.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>183.  De niño rara vez me divertía jugando a ser otra persona (policía, padre, profesor, etc.).  </td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>184.  Tiendo a pensar lo mejor de la gente.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>185.  Soy una persona muy competente.</td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>186.  A veces me he sentido amargado y resentido.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>187.  Las reuniones sociales normalmente me resultan aburridas.</td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>188. A veces, cuando leo poesía o contemplo una obra de arte, siento una profunda emoción o excitación. </td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>189.  A veces intimido o adulo a la gente para que haga lo que yo quiero.</td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>190.  No soy compulsivo sobre la limpieza. </td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>191.  A veces las cosas me parecen demasiado sombrías y sin esperanza. </td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>192.  En las conversaciones tiendo a ser el que más habla.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>193.  Me parece fácil simpatizar, sentir yo lo que sienten los demás.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>194.  Me considero una persona caritativa. </td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>195.  Trato de hacer mis tareas con cuidado, para que no haya que hacerlas otra vez. </td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>196.  Si he dicho o hecho algo mal a una persona, me cuesta mucho poder enfrentarme a ella de nuevo. </td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>197.  Mi vida lleva un ritmo rápido. </td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>198.  En vacaciones prefiero volver a un sitio conocido y fiable </td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>199.  Soy cabezota y testarudo.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>200.  Me esfuerzo por llegar a la perfección en todo lo que hago. </td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="4"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 30px">			
                                        <div class="col-3"></div>
                                        <div class="col-6" style="text-align:center" >
                                            <button style="width: 100%; color: white" type="submit"  class="btn btn-success">Siguiente</button>
                                        </div>
                                        <div class="col-3"></div>	
                                    </div>
                            </form>
                            <?php } ?>
                            <?php 
                                if($fila[41] != "" && $fila[82] != "" && $fila[123] != "" && $fila[164] != "" && $fila[205] != "" && $fila[246] == "" ) {
                            ?>
                            <form action="../../php/guardar_respuestas.php?paso=paso_6&correo=<?php echo $correo ?>" method="post" id="paso_6">
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="tab_menu">
                                                <div class="container">
                                                    <table id="customers">
                                                        <thead>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>201.  A veces hago las cosas impulsivamente y luego me arrepiento. </td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_1" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>202.  Me atraen los colores llamativos y los estilos ostentosos.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_2" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>203.  Tengo mucha curiosidad por los temas intelectuales. </td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_3" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>204.  Preferiría elogiar a otros que ser elogiado.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_4" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>205.  Hay tantas pequeñas cosas que hacer que a veces lo que hago es no atender a ninguna.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_5" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>206.  Cuando parece que todo va mal, todavía puedo tomar buenas decisiones.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_6" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>207.  Rara vez uso palabras como fantástico o sensacional para describir mis experiencias.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_7" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>208.  Creo que si una persona no tiene claras sus creencias a los 25 años, algo no le va bien.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_8" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>209.  Me inspiran simpatía los que son menos afortunados que yo.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_9" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>210.  Cuando voy de viaje, lo planifico cuidadosamente con antelación  </td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_10" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>211.  A veces me vienen a la mente pensamientos aterradores. </td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_11" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>212.  Me tomo un interés personal por la gente con la que trabajo. </td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_12" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>213.  Tendría dificultad para dejar que mi pensamiento vagara sin control o dirección. </td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_13" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>214.  Tengo mucha fe en la naturaleza humana. </td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_14" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>215.  Soy eficiente y eficaz en mi trabajo. </td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_15" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>216.  Hasta las mínimas molestias me pueden resultar frustrantes.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_16" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>217.  Disfruto en las fiestas en las que hay mucha gente.    </td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_17" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>218. Disfruto leyendo poesías que se centran más en sentimientos e imágenes que en acontecimientos.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_18" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>219.  Estoy orgulloso de mi astucia para tratar con la gente.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_19" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>220.  Gasto un montón de tiempo buscando cosas que he perdido.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_20" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>221.  Con demasiada frecuencia cuando las cosas van mal me siento desanimado y a punto de tirar la toalla.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_21" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>222.  No me parece fácil asumir el control de una situación. </td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_22" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>223.  Cosas raras o singulares (como ciertos olores o los nombres de lugares lejanos) pueden evocarme fuertes estados de ánimo. </td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_23" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>224.  Me aparto de mi camino por ayudar a los demás, si puedo.    </td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_24" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>225.  Tendría que estar realmente enfermo para perder un día de trabajo. </td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_25" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>226.  Cuando alguien que conozco hace tonterías, siento vergüenza ajena.    </td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_26" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>227.  Soy una persona muy activa.</td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_27" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>228.  Cuando voy a alguna parte sigo siempre el mismo camino. </td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_28" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>229.  Con frecuencia me enzarzo en discusiones con mi familia y mis compañeros.</td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_29" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>230.  Soy un poco adicto al trabajo.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_30" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Pregunta</th>
                                                                <th>Total desacuerdo</th>
                                                                <th>Desacuerdo</th>
                                                                <th>Neutral</th>
                                                                <th>De acuerdo</th>
                                                                <th>Totalmente de acuerdo</th>
                                                            </tr>
                                                            <tr>
                                                                <td>231.  Siempre soy capaz de mantener mis sentimientos bajo control.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_31" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>232.  Me gusta ser parte del público en los acontecimientos deportivos.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_32" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>233.  Tengo una gran variedad de intereses intelectuales.   </td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_33" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>234.  Soy una persona superior.</td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_34" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>235.  Tengo mucha auto-disciplina. </td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_35" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>236.  Soy bastante estable emocionalmente.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_36" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>237.  Me río con facilidad. </td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_37" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>238. Considero que la nueva moralidad sobre lo que está permitido no es de ninguna manera una moralidad.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_38" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>239.  Antes prefería ser conocido como una persona misericordiosa que como una persona recta.  </td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_39" value="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>240.  Antes de contestar una pregunta, me lo pienso dos veces. </td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="0"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="1"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="2"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="3"></td>
                                                                <td class="cen"><input type="radio" required name="preg_40" value="4"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 30px">			
                                        <div class="col-3"></div>
                                        <div class="col-6" style="text-align:center" >
                                            <button style="width: 100%; color: white" type="submit"  class="btn btn-success">Siguiente</button>
                                        </div>
                                        <div class="col-3"></div>	
                                    </div>
                                </form>
                                <?php } ?>
                                <?php 
                                    if($fila[41] != "" && $fila[82] != "" && $fila[123] != "" && $fila[164] != "" && $fila[205] != "" && $fila[246] != ""  && $fila[247] == "" ) {
                                ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tab_menu">
                                            <div class="container">
                                            <div class="alert alert-success" role="alert">
                                                <div class="row">
                                                    <div class="col-lg-9" style="padding: 15px 10px; text-align: justify">
                                                        <h1 style="font-size: 25px;font-weight: bold;color: #487449;">Agradecemos su colaboración y recuerde que los resultados de esta prueba servirán para su crecimiento y desarrollo profesional.</h1>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <button onclick="calificar('<?php echo $correo ?>')" class="btn btn-success" style="width: 100%;height: 100%; font-size: 28px; font-weight: bold;">Finalizar <br> Intento</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                                <?php 
                                    if($fila[41] != "" && $fila[82] != "" && $fila[123] != "" && $fila[164] != "" && $fila[205] != "" && $fila[246] != ""  && $fila[247] != "" ) {
                                ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tab_menu">
                                            <div class="container">
                                            <div class="alert alert-success" role="alert">
                                                <div class="row">
                                                    <div class="col-lg-9" style="padding: 15px 10px;">
                                                        <h1 style="font-size: 25px;font-weight: bold;color: #487449;">Ya usted ha finalizado  este cuestionario.</h1>
                                                    </div>
                                                    <div class="col-lg-3" style="text-align: right">
                                                        <img style="width: 30%;" src="../../images/check.png" alt="ok">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                                <div class="row" style="text-align: center;">
                                                    <div class="col-12">
                                                        <a style="width: 40%;" href="admin_student.php" class="btn btn-danger" type="button"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- end section -->
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
    <script src="../../js/pasos.js"></script>
	<script>
		window.onload = function() {
    		$('html, body').animate({scrollTop:400}, 1500);    
        };
    </script>
  </body>
</html>
<?php
}else{  
  header('Location: ../index.php');
  exit();
}
?>