<?php include_once $_SERVER['DOCUMENT_ROOT'].'/lar-dsos/includes/head.php'; ?>

<body>
  <div id="mensagem"></div>
  <div class="container">
    <form class="form-login" id="formulariologin">
      <h2 class="form-login-heading">Entrar</h2>
      <div class="login-wrap">
        <input type="text" class="form-control" id="username" placeholder="User ID" name="username" autofocus>
        <br>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <button class="btn btn-theme btn-block mt-15" id="btnEntrar" type="submit" name="acao"><i class="fa fa-lock"></i> SIGN IN</button>
      </div>
    </form>
  </div>
</body>
<script type="text/javascript" src="script/acessos/acesso.js"></script>

</html>