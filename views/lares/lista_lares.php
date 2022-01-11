<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/header.php';


if (!($user->getFuncao() == $adminGeral)) :
  echo '<script>window.location="../../logout.php"</script>';
endif;
?>
<section id="content">
  <section id="main-content">
    <section class="wrapper site-min-height">
      <h3><i class="fa fa-angle-right"></i> Lares</h3>
      <!-- row -->
      <div class="row mt">
        <div class="col-md-12">
          <div class="content-panel">
            <table class="table table-striped table-advance table-hover tabela-lares" id ="tabela_lares">
              <h4><i class="fa fa-angle-right"></i> Tabela de lares</h4>
              <hr>
              <thead>
                <tr>
                  <th><i class="fa fa-id-card"></i> ID</th>
                  <th><i class="fa fa-user"></i> Nome Lar</th>
                  <th><i class="fa fa-bookmark"></i> Morada</th>
                  <th><i class="fa fa-bookmark"></i> NIF</th>
                  <th><i class=" fa fa-edit"></i> Editar | Apagar</th>
                </tr>
              </thead>
              <tbody>
              </tbody> 
          </table>
          <div class="buttons-form">
            <a class="btn btn-primary btn-lg btn-form mr-10" href="/lar-dsos/views/lares/criar_lar.php" >Criar</a>
          </div>
          <!-- /content-panel -->
        </div>
        <!-- /col-md-12 -->
      </div>
      <!-- /row -->
    </section>
  </section>
</section>
<script type="text/javascript" src="/lar-dsos/script/lares/lista_lares.js"></script>
<script type="text/javascript" src="/lar-dsos/script/lares/eliminar_lares.js"></script>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/footer.php'; ?>

<!-- /MAIN CONTENT -->