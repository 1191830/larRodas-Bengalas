<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/views/terapeuticas/terapeutica_medicamento_modal.php'; ?>
<section id="content">
  <section id="main-content">
    <section class="wrapper site-min-height">
      <div class="row">
        <div class="form-panel">
          <!--Utente-->
          <h4 class="mb"><i class="fa fa-angle-right"></i> Selecionar Utente</h4>
              <select class="form-control">
                  <option>Bruno</option>
                  <option>Rui</option>
                  <option>Paulo</option>
                  <option>Nelson</option>
                </select>
                 <!--/Utente-->
                 <!-- Medicamentos -->
              <h4 class="mb mt"><i class="fa fa-angle-right"></i> Selecionar Medicamentos</h4>
              <select multiple="" class="form-control">
                  <option>Dramim</option>
                  <option>Bruffen</option>
                  <option>Ben-u-ron</option>
                </select>
                <button type="button" class="btn btn-theme mt">Adicionar medicamentos</button>
              <!--/Medicamentos-->
              <!-- Listagem Medicamentos -->
            <div class="panel-heading mt">
              <h4><i class="fa fa-angle-right"></i> Listagem de medicamentos</h4><hr>
              <div class="panel-body">
              <table class="table table-striped table-advance table-hover " id="lista">
              <thead>
              <tr>
                <th>Terapeutica</th>
                <th>Utente</th>
                <th>Medicamento</th>
                <th>Quantidade</th>
                <th>Horario</th>
                <th>Data Inicio</th>
                <th>Data Fim</th>
                <th>SOS</th>
                <?php if(!($user->getFuncao() == $enfermeiro)) : ?>
                  <th> Técnico</th>
                  <?php if($user->getFuncao() == $adminGeral) : ?>
                    <th> Lar</th>
                    <?php endif; ?>
                <?php endif; ?>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
              </tr>
            </tbody>
          </table>
              </div>

            </div>
          </div>
          <!-- /Listagem Medicamentos -->
          <div class="buttons-form">
            <a class="btn btn-default btn-lg btn-form" href="/lar-dsos/views/terapeuticas/terapeuticaLista.php">Cancelar</a>
            <a class="btn btn-primary btn-lg btn-form" href="#">Guardar</a>
          </div>

        </div>     
      </section>
      <!-- /wrapper -->
    </section>
    <script type="text/javascript" src="../../script/terapeuticas/lista_terapeuticas.js">
    </script>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/lar-dsos/includes/footer.php';?>