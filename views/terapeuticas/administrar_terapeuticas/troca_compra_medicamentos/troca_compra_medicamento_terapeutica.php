<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/views/terapeuticas/administrar_terapeuticas/troca_compra_medicamentos/compra_medicamento_modal.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/views/terapeuticas/administrar_terapeuticas/troca_compra_medicamentos/troca_medicamento_modal.php';
?>
<section id="content">
  <section id="main-content">
    <section class="wrapper site-min-height">
      <h3><i class="fa fa-angle-right"></i> Compra ou Troca medicamentos</h3>
      <!-- row -->
      <div class="row mt">
        <div class="col-md-12">
          <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
              <h4><i class="fa fa-angle-right"></i> Nome utente</h4>
              <hr>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Medicamento</th>
                  <th><?= (1 == 1) ? "compra" : "troca"; ?> Medicamento</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>Ben-u-ron</td>
                  <td>
                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#compraModal"><i class="fa fa-eur"></i></button>
                    <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#trocaModal"><i class="fa fa-exchange"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>Bruffen</td>
                  <td>
                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#compraModal"><i class="fa fa-eur"></i></button>
                    <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#trocaModal"><i class="fa fa-exchange"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="buttons-form">
              <a class="btn btn-default mr-15" href="/lar-dsos/views/terapeuticas/administrar_terapeuticas/admin_terapeuticas.php">Voltar</a>
            </div>
          </div>
          <!-- /content-panel -->
        </div>

        <!-- /col-md-12 -->
      </div>
      <!-- /row -->
    </section>
  </section>
</section>
<!-- /MAIN CONTENT -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/footer.php'; ?>