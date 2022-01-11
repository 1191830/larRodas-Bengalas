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
                <th>Terapeutica</th>
                <th>Utente</th>
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
          <!-- /content-panel -->
        </div>
      </div>
      <!-- /row -->
    </section>
  </section>
</section>
<script type="text/javascript" src="../../script/terapeuticas/lista_terapeuticasGeral.js">
</script>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/lar-dsos/includes/footer.php';?>
