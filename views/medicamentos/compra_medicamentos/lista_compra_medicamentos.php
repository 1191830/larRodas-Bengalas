<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/views/medicamentos/compra_medicamentos/compra_medicamento_modal.php';
?>
<section id="content">
  <section id="main-content">
    <section class="wrapper site-min-height">
      <h3><i class="fa fa-angle-right"></i> Compra Medicamentos</h3>
      <!-- row -->
      <div class="row mt">
        <div class="col-md-12">
          <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
              <h4><i class="fa fa-angle-right"></i> Tabela de utentes</h4>
              <hr>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Utente</th>
                  <th>Comprar Medicamento</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>Joaquim</td>
                  <td>
                    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-eur"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>Mark</td>
                  <td>
                    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-eur"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>03</td>
                  <td>Emma</td>
                  <td>
                    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-eur"></i></button>
                  </td>
                </tr>

              </tbody>
            </table>
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
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/footer.php'; ?>