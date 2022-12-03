<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        <img src="../../images/logo.png" width="100%">
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <hr>
    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item" id="li_de">
        <a href="admin.php" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>
      <?php 
        if($_SESSION['semestre'] == "IX" || $_SESSION['semestre'] == "X"){
      ?>
        <li class="menu-item" id="sub_practica">
          <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div data-i18n="Layouts">Practicas</div>
          </a>

          <ul class="menu-sub">
            
            <li class="menu-item" id="li_rp">
              <a href="registro_practica.php" class="menu-link">
                <div data-i18n="Without menu">Registro</div>
              </a>
            </li>
            <li class="menu-item" id="li_ep">
              <a href="estado_practicas.php" class="menu-link">
                <div data-i18n="Without menu">Ver Estado</div>
              </a>
            </li>
          </ul>
        </li>
      <?php 
          }
      ?>
      <li class="menu-item" id="sub_test">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class='bx bx-list-check'></i>
          <div data-i18n="Layouts">Test</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item" id="li_carac">
            <a href="registro_socio.php" class="menu-link">
              <div data-i18n="Without menu">Caracterización</div>
            </a>
          </li>
          <li class="menu-item">
            <a data-bs-toggle="modal" data-bs-target="#modal_test" href="#" class="menu-link">
              <div data-i18n="Without menu">Test Anterior</div>
            </a>
          </li>
        </ul>
      </li>
    </ul>
</aside>

<!-- Modal -->
<div class="modal fade" id="modal_test" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCenterTitle">Realizar Test</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body p-2">
        <form action="../../php/verificar_paso_test.php" id="form_init_test" method="post">
          <div class="row" style="padding-left: 40px; padding-right: 40px;">
              <div class="col-lg-6" style="padding-top: 15px;">
                <label for="">Correo: </label>
                <input name="correo" value="<?php echo $_SESSION["correo"] ?>" id="correo" type="email" class="form-control" placeholder="Correo Electronico" required>
              </div>
              <div class="col-lg-6" style="padding-top: 15px;">
                <label for="">Nombre Completo: </label>
                <input name="nombre" value="<?php echo $_SESSION["usuario"] ?>" id="nombre" type="text" class="form-control" placeholder="Nombre Completo" required>
              </div>
              <div class="col-lg-6" style="padding-top: 15px;">
                <label for="">Sede: </label>
                <select style="height: 34px;" name="sede" id="sede" class="form-control" required>
                  <option value="">Seleccione...</option>
                  <option value="Santa Marta">Santa Marta</option>
                  <option value="Barranquilla">Barranquilla</option>
                  <option value="Bogotá">Bogotá</option>
                </select>
              </div>
              <div class="col-lg-6" style="padding-top: 15px;">
                <label for="">Programa: </label>
                <select style="height: 34px;" name="programa" id="programa" class="form-control">
                  <option value="">Seleccione...</option>
                  <option value="Administración de empresas">Administración de empresas</option>
                  <option value="Comunicación social y periodismo">Comunicación social y periodismo</option>
                  <option value="Contaduría publica ">Contaduría publica </option>
                  <option value="Derecho">Derecho</option>
                  <option value="Diseño digital">Diseño digital</option>
                  <option value="Finanzas y comercio exterior">Finanzas y comercio exterior</option>
                  <option value="Ingeniería industrial">Ingeniería industrial</option>
                  <option value="Marketing y negocios internacionales">Marketing y negocios internacionales</option>
                  <option value="Psicología Psicología ">Psicología </option>
                </select>
              </div>
              <div class="col-lg-6" style="padding-top: 15px;">
                <label for="">Semestre cursado:</label>
                <select  style="height: 34px;" name="semestre" id="semestre" class="form-control">
                  <option value="">Seleccione...</option>
                  <option value="I" <?php if ($_SESSION["semestre"]=='I') echo 'selected="selected"'; ?>>I - Semestre</option>
                  <option value="II" <?php if ($_SESSION["semestre"]=='II') echo 'selected="selected"'; ?>>II - Semestre</option>
                  <option value="III" <?php if ($_SESSION["semestre"]=='III') echo 'selected="selected"'; ?>>III - Semestre</option>
                  <option value="IV" <?php if ($_SESSION["semestre"]=='IV') echo 'selected="selected"'; ?>>IV - Semestre</option>
                  <option value="V" <?php if ($_SESSION["semestre"]=='V') echo 'selected="selected"'; ?>>V - Semestre</option>
                  <option value="VI" <?php if ($_SESSION["semestre"]=='VI') echo 'selected="selected"'; ?>>VI - Semestre</option>
                  <option value="VII" <?php if ($_SESSION["semestre"]=='VII') echo 'selected="selected"'; ?>>VII - Semestre</option>
                  <option value="VIII" <?php if ($_SESSION["semestre"]=='VIII') echo 'selected="selected"'; ?>>VIII - Semestre</option>
                  <option value="IX" <?php if ($_SESSION["semestre"]=='IX') echo 'selected="selected"'; ?>>IX - Semestre</option>
                  <option value="X" <?php if ($_SESSION["semestre"]=='X') echo 'selected="selected"'; ?>>X - Semestre</option>
                </select>
              </div>
              <div class="col-lg-6" style="padding-top: 15px;">
                <label for="">Sexo:</label>
                <select  style="height: 34px;" name="sexo" id="sexo" class="form-control">
                    <option value="">Seleccione...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
              </div>
              <div class="col-lg-6" style="padding-top: 15px;">
                  <label for="">Fecha de nacimiento:</label>
                  <input type="hidden" id="id_estudiante" name="id_estudiante" value="<?php echo $_SESSION["id"] ?>">
                  <input id="f_nacimiento" name="f_nacimiento" type="date" required class="form-control" placeholder="Fecha de nacimiento">
              </div>
              <div class="col-lg-6"  style="padding-top: 30px; position: relative" id="budiv">
                <div style="position: absolute; bottom: 0px; width: 89%">
                  <button style="cursor: pointer; width: 100%" class="btn btn-primary" type="submit" >Comenzar Test</button>
                </div>
              </div>       
          </div>
        </form>
        <br>
      </div>
    </div>
  </div>
</div>