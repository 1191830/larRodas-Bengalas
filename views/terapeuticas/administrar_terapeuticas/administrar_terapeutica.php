<?php include_once $_SERVER['DOCUMENT_ROOT'].'/lar-dsos/includes/header.php';?>
<section id="main-content">
  <section class="wrapper site-min-height">
    <!-- row -->
    <div class="row mt">
      <div class="col-md-12">
                <!-- Mensagemm de administracao -->
                <div id="message"></div>
        <div class="form-panel">
          <table class="table table-striped table-advance table-hover" id="listaTerapeutica">
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
                <th>Administrar</th>
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
        <div class="form-panel">
          <table class="table table-striped table-advance table-hover" id="listaStock">
            <h4> Stocks</h4>
            <hr>
            <thead>
              <tr>
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
<script type="text/javascript" src="../../../script/terapeuticas/administrarTerapeutica.js"></script>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/lar-dsos/includes/footer.php';?>