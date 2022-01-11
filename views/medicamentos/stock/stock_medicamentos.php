<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/views/medicamentos/stock/stock_medicamento_modal.php';
?>
<section id="content">
  <section id="main-content">
    <section class="wrapper site-min-height">
      <h3><i class="fa fa-angle-right"></i> Utentes</h3>
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
                  <th>Medicamento</th>
                  <th>Dose</th>
                  <th>Quantidade</th>
                  <th>Ver stock</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>Ben-u-ron</td>
                  <td>500ml</td>
                  <td>30 unidades</td>
                  <td>
                    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>02</td>
                  <td>Bruffen</td>
                  <td>500ml</td>
                  <td>60 unidades</td>
                  <td>
                    <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye"></i></button>
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