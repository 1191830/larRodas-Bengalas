<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/header.php';
?>

<!-- <script type="module">
  import * as toma from '/lar-dsos/script/medicamentos/toma_medicamento.js';

  window.onload = function() {
    console.log(toma.buscarTipoToma().value);
  }
</script> -->

<section id="container">
  <section id="main-content">
    <section class="wrapper site-min-height">
      <h3><i class="fa fa-angle-right"></i> Medicamentos</h3>
      <!-- row -->
      <div class="row mt">
        <div class="col-md-12">
          <div class="content-panel">
            <table class="table table-striped table-advance table-hover tabela-medicamentos">
              <h4><i class="fa fa-angle-right"></i> Listagem Medicamentos</h4>
              <div class="alert" style="display:none;"></div>
              <hr>

              <thead>
                <tr>
                  <th>ID</th>
                  <th>Medicamento</th>
                  <th>Princípio Ativo</th>
                  <th>Marca</th>
                  <th>Dose</th>
                  <th>Tipo toma</th>
                  <th>Editar | Apagar</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
            <div class="buttons-form">
              <button id="criar_medicamento" class="btn btn-theme02 btn-form" type="button">Criar medicamento</button>
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
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/footer.php'; ?>
<script type="module">
  import {listaMedicamentos} from '/lar-dsos/script/medicamentos/lista_medicamentos.js';
  import {deletarMedicamento} from '/lar-dsos/script/medicamentos/deletar_medicamento.js';

  window.onload = function() {
    new listaMedicamentos();
    new deletarMedicamento();
  }
</script>