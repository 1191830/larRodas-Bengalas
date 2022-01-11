<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/header.php'; ?>
<script type="text/javascript" src="/lar-dsos/script/users/lista_users.js"></script>
<section id="container">
  <section id="main-content">
    <section class="wrapper site-min-height">
      <h3><i class="fa fa-angle-right"></i> Utentes</h3>
      <!-- row -->
      <div class="row mt">
        <div class="col-md-12">
          <div class="content-panel">
            <table class="table table-striped table-advance table-hover tabela-users">
              <h4><i class="fa fa-angle-right"></i> Tabela de utentes</h4>
              <hr>
              <thead>
                <tr>
                  <th><i class="fa fa-id-card"></i> ID</th>
                  <th><i class="fa fa-user"></i> Nome Utente</th>
                  <th><i class="fa fa-user"></i> Username</th>
                  <th><i class="fa fa-bookmark"></i> NIF</th>
                  <th><i class="fa fa-bookmark"></i> NSS</th>
                  <th><i class=" fa fa-info"></i> Estado</th>
                  <th><i class=" fa fa-info"></i> Nome Lar</th>
                  <th><i class=" fa fa-info"></i> Função</th>
                  <th><i class=" fa fa-edit"></i> Editar | Apagar</th>
                </tr>
              </thead>
              <tbody>
                <!--  <tr>
                <td>01</td>
                <td>Paulo</td>
                <td>123</td>
                <td>1234</td>
                <td><span class="label label-success label-mini">Ativo</span></td>
                <td>
                  <a href="/lar-dsos/views/users/criar_user.php" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </td>
              </tr>
              <tr>
                <td>02</td>
                <td>Rui</td>
                <td>123</td>
                <td>1234</td>
                <td><span class="label label-success label-mini">Ativo</span></td>
                <td>
                <a href="/lar-dsos/views/users/criar_user.php" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </td>
              </tr>
              <tr>
                <td>03</td>
                <td>Nelson</td>
                <td>123</td>
                <td>1234</td>
                <td><span class="label label-success label-mini">Ativo</span></td>
                <td>
                  <a href="/lar-dsos/views/users/criar_user.php" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </td>
              </tr>
              <tr>
                <td>04</td>
                <td>Bruno</td>
                <td>123</td>
                <td>1234</td>
                <td><span class="label label-success label-mini">Ativo</span></td>
                <td>
                  <a href="/lar-dsos/views/users/criar_user.php" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </td>
              </tr> -->
              </tbody>
            </table>
            <div class="buttons-form">
              <a class="btn btn-primary btn-lg btn-form mr-10" href="/lar-dsos/views/users/criar_user.php">Criar</a>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
    </section>
  </section>
</section>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/footer.php'; ?>
<!-- /MAIN CONTENT -->