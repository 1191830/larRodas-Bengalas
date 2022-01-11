  <?php
  include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/header.php';
  ?>
  <section id="container">
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Multiple Files Uploader</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <!-- Mensagemm de erro -->
            <div id="message"></div>
            <!-- The file upload form used as target for the file upload widget -->
            <form id="upload" method="POST" enctype="multipart/form-data" class="form-horizontal">
              <div class="row fileupload-buttonbar">
                <div class="col-lg-8">
                  <!-- The fileinput-button span is used to style the file input field as button -->
                  <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Inserir Ficheiro</span>
                    <input type="file" name="file" id="file">
                  </span>
                  <span id="fileName">Nenhum ficheiro escolhido</span>
                  <!-- Validar pedidos Ajax -->
                  <input type="hidden" name="hidden" value="1">
                  <!-- Botao para adicionar ou cancelar escolha -->
                  <button type="submit" class="btn btn-theme start" name="importar" id="importar" value="importar">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Importar</span>
                  </button>
                  <button type="reset" class="btn btn-theme02 cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel upload</span>
                  </button>
                  <div class="table-responsive" id="resultados">
                    <!-- /col-lg-5 -->
                  </div>
                  <!-- /row -->
            </form>
            <div>
              <div class="content-panel">
                <div class="panel-body">
                  <h4><b>Atenção</b></h4>
                  <ul>
                    <li>Insira apenas ficheiros do tipo CSV delimitado por ;</li>
                    <li>Devera ter o formato (nome, dose, Principio, marca, toma)</li>
                  </ul>
                </div>
              </div>
              <!-- /panel -->
            </div>
            <!-- The table listing the files available for upload/download -->
      </section>
      <!-- /wrapper -->
    </section>
  </section>
  <!-- /MAIN CONTENT -->
  <!--main content end-->
  <script type="text/javascript" src="../../../script/medicamentos/upload.js"></script>
  <!--footer start-->
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/footer.php'; ?>
  <!--footer end-->