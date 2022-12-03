<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
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
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
       h2{
        font-size: 40px;
        font-weight: 600;
        padding: 0;
        line-height: 45px !important;
        text-align: center;
        color: #fff;
       }
    </style>
  </head>

  <body style="background-image:url(../images/banner_img.png);">
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Layout container -->
        <div class="layout-page" style="padding-left: 0px !important">
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                      <div class="nav-item d-flex align-items-center">
                          <img src="../images/logo.png" width="23%">
                      </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                    
                      <li class="nav-item lh-1 me-3">
                        <button style="width: 200px;" class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#myModal2" ><i class="fa fa-wrench" aria-hidden="true"></i> Recuperar contraseña</button>
                      </li>

                      <li class="nav-item lh-1 me-3">
                        <button style="width: 200px;" class="btn btn-info"   data-bs-toggle="modal" data-bs-target="#myModal" ><i class="fa fa-user" aria-hidden="true"></i> Iniciar sesión</button>
                      </li>
                    </ul>
                </div>
            </nav>

            <div class="col-lg-12 text-center" style="padding-left: 20%; padding-right: 20%">
                <h2>Universidad Sergio Arboelda - Sede Santa Marta</h2>
                <br>
                <h2 style="color: #d4a81e;">Escuela de Comunicación, Periodismo y Psicología <br> Programa de Psicología</h2>
                <div class="card">
                  <div class="d-flex align-items-end p-5">
                    <form action="../php/verificar.php" id="form_init" method="post">
                      <div class="row" style="width: 100%; text-align: left; padding-left: 40px; padding-right: 40px;">
                            <div class="col-lg-12">
                              <h3 style="font-weight: bold; color: #2C4A73;">Cordial saludo,</h3>  
                              <h3 style="font-weight: bold; text-align: justify;">Registro de nuevo estudiante.</h3>
                            </div>
                        </div>
                        <div class="row" style="padding-left: 40px; padding-right: 40px;">
                            <div class="col-lg-6" style="padding-top: 15px;"><input name="cedula" id="cedula" type="number" class="form-control" placeholder="Cédula" required></div>
                            <div class="col-lg-6" style="padding-top: 15px;"><input name="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre Completo" required></div>
                            <div class="col-lg-6" style="padding-top: 15px;"><input name="correo" id="correo" type="email" class="form-control" placeholder="Correo Electronico" required></div>
                            <div class="col-lg-6" style="padding-top: 15px;"><input name="celular" id="celular" type="text" class="form-control" placeholder="Número de Celular" required></div>
                            <div class="col-lg-6" style="padding-top: 15px;">
                                <select  style="height: 34px;" name="semestre" id="semestre" class="form-control">
                                    <option value="">Semestre cursado</option>
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
                            <div class="col-lg-6" style="padding-top: 15px;">
                                <select  style="height: 34px;" name="periodo" id="periodo" class="form-control">
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
                        <hr>
                        <div class="row">
                          <div class="col-4"></div>
                          <div class="col-4" id="budiv"><button style="cursor: pointer;" class="btn btn-warning" type="submit" >Guardar Datos</button></div>       
                          <div class="col-4"></div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            <!-- / Content -->
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="text-center">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">Universidad Sergio Arboleda</a>
                </div>
              </div>
            </footer>
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
    <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCenterTitle">Iniciar sesión</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form class="mb-3" action="../php/login.php" method="post" id="isesion">
              <div class="mb-3">
                <label for="email" class="form-label">Email o Usuario</label>
                <input
                  type="email"
                  class="form-control"
                  id="usuario"
                  name="usuario"
                  placeholder="Email o Usuario"
                  required
                />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Contraseña</label>
                </div>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="pass"
                    class="form-control"
                    name="pass"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password"
                    required
                  />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Tipo de Usuario</label>
                <select required class="form-control" name="tipo_usuario" id="tipo_usuario">
                  <option value="">Seleccione...</option>
                  <option value="estudiante">Estudiante</option>
                  <option value="usuario">Admin</option>
                </select>
              </div>
              <div class="mb-3">
                <button class="btn btn-warning d-grid w-100" type="submit">Ingresar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal2" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalCenterTitle">Recuperar Contraseña</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
              <h4 class="mb-2">Has olvidado tu contraseña? 🔒</h4>
              <p class="mb-4">Ingrese su correo electrónico y le enviaremos instrucciones para restablecer su contraseña.</p>
              <form class="mb-3" action="../php/recuperar_contrasenia.php" method="post" id="form_cambio_pass">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="correo"
                    name="correo"
                    placeholder="Ingrese su correo electrónico"
                    autofocus
                  />
                </div>
                <button class="btn btn-warning d-grid w-100">Enviar enlace de reinicio</button>
              </form>
          </div>
        </div>
      </div>
    </div>

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/dashboards-analytics.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="../js/login.js"></script>
    <script src="../js/verificar.js"></script>
    <script src="../js/cambiar_pass.js"></script>
  </body>
</html>