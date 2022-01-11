<?php include_once $_SERVER['DOCUMENT_ROOT'].'/lar-dsos/includes/header.php';?>
<section id="main-content">
  <section class="wrapper site-min-height">
    <!-- row -->
    <div class="row mt">
      <div class="col-md-12">
        <div class="form-panel">
          <table class="table table-striped table-advance table-hover" id="listaGeral">
            <h4> Terapeutica</h4>
            <hr>
            <thead>
              <tr>
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
              </tr>
            </thead>
            <tbody>
              <tr>
              </tr>
            </tbody>
          </table>
          <!-- /content-panel -->
        </div>
        <!-- /col-md-12 -->
      </div>
    </div>
    <!-- /row -->
  </section>
</section>
<script type="text/javascript" src="../../script/terapeuticas/lista_terapeuticaGeralDiaria.js"></script>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/lar-dsos/includes/footer.php';?>