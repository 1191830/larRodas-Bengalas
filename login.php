  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Dashio - Bootstrap Admin Template</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
  </head>

  <body>
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <div id="login-page">
      <div class="container">
        <form class="form-login" action="index.html">
          <h2 class="form-login-heading">Entrar</h2>
          <div class="login-wrap">
            <input type="text" class="form-control" id="utilizador" name="utilizador" placeholder="Utilizador" autofocus>
            <br>
            <input type="password" class="form-control" id="password" name="password" placeholder="Palavra-passe">
            <button class="btn btn-theme btn-block mt-15" href="index.html" id="entrar" name="entrar" type="submit"><i class="fa fa-lock"></i> Entrar</button>
          </div>
        </form>
      </div>
    </div>

    <script>
      $.backstretch("img/login-bg.jpg", {
        speed: 500
      });
    </script>
  </body>

  </html>