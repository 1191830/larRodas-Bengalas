<!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="/lar-dsos/assets/img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $user->getNome(); ?></h5>
          <li class="mt">
            <a href="#">
              <i class="fa fa-dashboard"></i>
              <span>Estatísticas</span>
              </a>
          </li>
          <?php if($user->getFuncao() == $adminGeral) : ?>
          <li class="sub-menu">
            <a >
              <i class="fa fa-home"></i>
              <span>Lares</span>
              </a>
            <ul class="sub">
              <li><a href="/lar-dsos/views/lares/criar_lar.php">Inserir lar</a></li>
              <li><a href="/lar-dsos/views/lares/lista_lares.php">Ver lares</a></li>
              <li><a href="/lar-dsos/views/lares/lista_lares.php">Ver estatísticas</a></li>
            </ul>
          </li>
          <?php endif; ?>
          <li class="sub-menu">
            <a>
              <i class="fa fa-users"></i>
              <span>Users</span>
              </a>
            <ul class="sub">
              <li><a href="/lar-dsos/views/users/criar_user.php">Inserir user</a></li>
              <li><a href="/lar-dsos/views/users/lista_users.php">Ver users</a></li>
              <li><a href="/lar-dsos/views/users/stock/stock_users.php">Ver stock users</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a  >
              <i class="fa fa-plus-square"></i>
              <span>Medicamentos</span>
              </a>
            <ul class="sub">
              <li><a href="/lar-dsos/views/medicamentos/criar_medicamento.php">Inserir medicamento</a></li>
              <li><a href="/lar-dsos/views/medicamentos/lista_medicamentos.php">Ver medicamentos</a></li>
              <li><a href="/lar-dsos/views/medicamentos/import_medicamentos/file_upload.php">Importar medicamentos csv</a></li>
              <li><a href="/lar-dsos/views/medicamentos/stock/stock_medicamentos.php">Ver stock medicamentos</a></li>
              <?php if($user->getFuncao() == $adminGeral || $user->getFuncao() == $adminLar) : ?>
              <li><a href="/lar-dsos/views/medicamentos/compra_medicamentos/lista_compra_medicamentos.php">Comprar medicamentos</a></li>
              <?php endif; ?>
            </ul>
          </li>
          <li class="sub-menu">
            <a >
              <i class="fa fa-stethoscope"></i>
              <span>Terapêuticas</span>
              </a>
            <ul class="sub">
            <?php if($user->getFuncao() == $enfermeiro) : ?>
              <li><a href="/lar-dsos/views/terapeuticas/criar_terapeutica.php">Criar terapêutica</a></li>
              <li><a href="/lar-dsos/views/terapeuticas/terapeuticaListaGeral.php">Administrar terapêuticas</a></li>
              <?php endif; ?>
              <li><a href="/lar-dsos/views/terapeuticas/terapeuticaLista.php">Ver terapêutcias</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <script type="text/javascript" src="/lar-dsos/script/menu.js"></script>